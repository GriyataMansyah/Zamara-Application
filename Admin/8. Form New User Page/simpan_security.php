<?php
session_start(); // Mulai session jika belum dimulai

include 'koneksi.php';

// Fungsi untuk membersihkan input dari potensi serangan SQL injection
function cleanInput($data) {
    global $koneksi;
    return mysqli_real_escape_string($koneksi, htmlspecialchars(strip_tags($data)));
}

// Fungsi untuk memeriksa apakah suatu string kosong atau tidak
function isNotEmpty($value) {
    return !empty(trim($value));
}

// Periksa apakah user sudah login atau belum
if (isset($_SESSION['user'])) {
    // Clean and validate all input
    $username = cleanInput($_POST['username']);
    $password = cleanInput($_POST['password']);
    $role = cleanInput($_POST['role']);
    $akun_id = cleanInput($_POST['nik']);
    $warga_negara = cleanInput($_POST['warga_negara']);
    $nama = cleanInput($_POST['nama']);
    $no_hp = cleanInput($_POST['no_hp']);
    $alamat = cleanInput($_POST['alamat']);
    $tgl_lahir = cleanInput($_POST['tgl_lahir']);

    // Memeriksa apakah semua input tidak kosong
    if (isNotEmpty($username) && isNotEmpty($password) && isNotEmpty($role) && isNotEmpty($akun_id) && isNotEmpty($warga_negara) && 
        isNotEmpty($nama) && isNotEmpty($no_hp) && isNotEmpty($alamat) && isNotEmpty($tgl_lahir)) {

        // Mencari akun_id berdasarkan username dari tb_akun
        $query_get_akun_id = "SELECT akun_id FROM tb_akun WHERE username = ?";
        $stmt_get_akun_id = mysqli_prepare($koneksi, $query_get_akun_id);
        mysqli_stmt_bind_param($stmt_get_akun_id, "s", $_SESSION['user']);
        mysqli_stmt_execute($stmt_get_akun_id);
        mysqli_stmt_store_result($stmt_get_akun_id);

        if (mysqli_stmt_num_rows($stmt_get_akun_id) > 0) {
            mysqli_stmt_bind_result($stmt_get_akun_id, $akun_id_from_tb_akun);
            mysqli_stmt_fetch($stmt_get_akun_id);

            // Insert ke tb_akun dengan foreign key admin_id
            $query_insert_akun = "INSERT INTO tb_akun (akun_id, username, password, role, warga_negara, admin_id) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt_insert_akun = mysqli_prepare($koneksi, $query_insert_akun);
            mysqli_stmt_bind_param($stmt_insert_akun, "ssssss", $akun_id, $username, $password, $role, $warga_negara, $akun_id_from_tb_akun);
            $input_akun = mysqli_stmt_execute($stmt_insert_akun);

            // Insert ke tb_admin
            $query_insert_admin = "INSERT INTO tb_security (security_id , nama, no_hp, alamat, tgl_lahir) VALUES (?,?, ?, ?, ?)";
            $stmt_insert_admin = mysqli_prepare($koneksi, $query_insert_admin);
            mysqli_stmt_bind_param($stmt_insert_admin, "sssss", $akun_id, $nama, $no_hp, $alamat, $tgl_lahir);
            $input_admin = mysqli_stmt_execute($stmt_insert_admin);

            if ($input_akun && $input_admin) {
                header("Location: berhasil.php");
            } else {
                echo "Gagal Menyimpan Data Akun atau Admin: " . mysqli_error($koneksi);
            }

            // Tutup prepared statements
            mysqli_stmt_close($stmt_get_akun_id);
            mysqli_stmt_close($stmt_insert_akun);
            mysqli_stmt_close($stmt_insert_admin);
        } else {
            echo "Username tidak ditemukan di tb_akun";
        }
    } else {
        header("Location: Form User Baru2.php");
    }
} else {
    echo "Session user tidak ditemukan. Harap login terlebih dahulu.";
}
?>

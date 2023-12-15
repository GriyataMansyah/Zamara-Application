<?php
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

$judul = cleanInput($_POST['judul']);
$deskripsi = cleanInput($_POST['deskripsi']);
$latitude = cleanInput($_POST['latitude']);
$longitude = cleanInput($_POST['longitude']);
$jenis = cleanInput($_POST['jenis']);
$username = cleanInput($_POST['username']);
$status = cleanInput($_POST['status']);

// Membuat variabel untuk menyimpan pesan kesalahan
$error_message = "";

// Memeriksa apakah semua input tidak kosong
if (isNotEmpty($judul) && isNotEmpty($deskripsi) && isNotEmpty($latitude) && isNotEmpty($longitude) && isNotEmpty($jenis) && isNotEmpty($username) && isNotEmpty($status)) {

    // Fetch the akun_id from tb_akun based on the provided username
    $security_query = "SELECT akun_id FROM tb_akun WHERE username = '$username'";
    $security_result = mysqli_query($koneksi, $security_query);

    if (!$security_result) {
        die("Error fetching akun_id: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($security_result) > 0) {
        $akun_row = mysqli_fetch_assoc($security_result);
        $akun_id = $akun_row['akun_id'];

        // Use $akun_id in your INSERT query
        $query = "INSERT INTO tb_laporan (judul, deskripsi, latitude, longitude, jenis, username, akun_id, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "ssssssss", $judul, $deskripsi, $latitude, $longitude, $jenis, $username, $akun_id, $status);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if (!$stmt) {
            $error_message = "Gagal Disimpan: " . mysqli_error($koneksi);
        } else {
            header("location:../6. Form Laporan Page/berhasil.php");
            exit(); // Penting untuk menghentikan eksekusi script setelah redirect
        }
    } else {
        $error_message = "Username not found in tb_akun";
    }

    mysqli_free_result($security_result);
    mysqli_close($koneksi);
} else {
    $error_message = "Semua input harus diisi.";
}

// Menggunakan JavaScript untuk menampilkan alert jika terdapat pesan kesalahan
if (!empty($error_message)) {
    echo "<script>alert('$error_message');</script>";
}
?>

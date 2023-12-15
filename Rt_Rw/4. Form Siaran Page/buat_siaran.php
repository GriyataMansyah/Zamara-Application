<?php
include 'koneksi.php';

// Pastikan sesi sudah dimulai
session_start();

// Ambil username dari sesi (gantilah 'username' dengan nama sesi yang sesuai dengan aplikasi Anda)
$username = isset($_SESSION['user']) ? $_SESSION['user'] : null;

// Periksa apakah username sudah ada dalam sesi
if (!$username) {
    die("Error: Username tidak ditemukan dalam sesi");
}

// Query untuk mengambil akun_id dari tabel tb_akun berdasarkan username
$query_get_akun_id = "SELECT akun_id FROM tb_akun WHERE username = '$username'";
$result_get_akun_id = mysqli_query($koneksi, $query_get_akun_id);

if (!$result_get_akun_id) {
    die("Error: " . mysqli_error($koneksi));
}

// Periksa apakah username ditemukan di tabel tb_akun
if (mysqli_num_rows($result_get_akun_id) > 0) {
    $row = mysqli_fetch_assoc($result_get_akun_id);
    $akun_id = $row['akun_id'];

    // Ambil data dari formulir
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    // Query untuk menyimpan data ke dalam tabel tb_siaran
    $query = "INSERT INTO tb_siaran (judul, deskripsi, tanggal,tw_id, status) VALUES ('$judul', '$deskripsi', '$tanggal', '$akun_id', '$status')";

    // Eksekusi query
    $input = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    // Periksa apakah penyimpanan data berhasil
    if ($input) {
        header("Location: ../3. Siaran Page/Daftar Siaran.php");
    } else {
        echo "Gagal Menyimpan Data Masyarakat";
    }
} else {
    echo "Username tidak ditemukan di tabel tb_akun";
}

// Tutup koneksi
mysqli_free_result($result_get_akun_id);
mysqli_close($koneksi);
?>

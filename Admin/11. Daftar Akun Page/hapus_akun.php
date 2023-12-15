<?php
// include database connection file
include 'koneksi.php';

// ... (membaca table akun dan mengambil role)

$akun_id = $_GET['akun_id'];

// Ambil role dari tabel akun
$result_akun = mysqli_query($koneksi, "SELECT role FROM tb_akun WHERE akun_id='$akun_id'");
$row_akun = mysqli_fetch_assoc($result_akun);
$role = $row_akun['role'];

// Hapus data dari tabel akun berdasarkan akun_id
$result_delete_akun = mysqli_query($koneksi, "DELETE FROM tb_akun WHERE akun_id='$akun_id'");

if ($result_delete_akun) {
    // Jika peran adalah admin, hapus juga dari tabel tb_admin
    if ($role == 'admin') {
        $result_delete_admin = mysqli_query($koneksi, "DELETE FROM tb_admin WHERE admin_id='$akun_id'");
        
        if (!$result_delete_admin) {
            // Handle kesalahan jika gagal menghapus admin_id dari tb_admin
            echo "Gagal menghapus data admin dari tb_admin. Silakan coba lagi.";
        }
    } elseif ($role == 'masyarakat') {
        // Jika peran adalah masyarakat, hapus nik dari tabel tb_masyarakat
        $result_delete_masyarakat = mysqli_query($koneksi, "DELETE FROM tb_masyarakat WHERE nik='$akun_id'");
        
        if (!$result_delete_masyarakat) {
            // Handle kesalahan jika gagal menghapus nik dari tb_masyarakat
            echo "Gagal menghapus data masyarakat dari tb_masyarakat. Silakan coba lagi.";
        }
    } elseif ($role == 'rt_rw') {
        // Jika peran adalah rt_rw, hapus tw_id dari tabel rt_rw
        $result_delete_rt_rw = mysqli_query($koneksi, "DELETE FROM rt_rw WHERE tw_id='$akun_id'");
        
        if (!$result_delete_rt_rw) {
            // Handle kesalahan jika gagal menghapus tw_id dari rt_rw
            echo "Gagal menghapus data rt_rw dari tabel rt_rw. Silakan coba lagi.";
        }
    } elseif ($role == 'security') {
        // Jika peran adalah security, hapus security_id dari tabel tb_security
        $result_delete_security = mysqli_query($koneksi, "DELETE FROM tb_security WHERE security_id='$akun_id'");
        
        if (!$result_delete_security) {
            // Handle kesalahan jika gagal menghapus security_id dari tb_security
            echo "Gagal menghapus data security dari tb_security. Silakan coba lagi.";
        }
    }

    // Arahkan kembali ke halaman Daftar Akun setelah menghapus data
    header("Location:berhasil.php");
} else {
    // Handle kesalahan jika gagal menghapus data dari tb_akun
    echo "Gagal menghapus akun. Silakan coba lagi.";
}
?>

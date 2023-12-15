<?php
session_start();

include 'koneksi.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan prepared statement untuk mencegah SQL injection
$query = "SELECT * FROM tb_akun WHERE username=? AND password=?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
mysqli_stmt_execute($stmt);

// Dapatkan hasil query
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    $_SESSION['user'] = $row['username'];
    $_SESSION['pass'] = $row['password'];

    $role = $row['role'];
    switch ($role) {
        case 'admin':
            header("location: ../Admin/9. Profile Page/Profile Page.php");
            break;
        case 'masyarakat':
            header("location:../Masyarakat/9. Profile Page/Profile Page.php");
            break;
        case 'rt_rw':
            header("location:../Rt_Rw/9. Profile Page/Profile Page.php");
            break;
        case 'security':
            header("location:../Security/9. Profile Page/Profile Page.php");
            break;
        default:
            echo "Unknown role";
            break;
    }
} else {
    header("location: Login V2 gagal.html");
}

// Tutup statement dan koneksi database
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>

<?php
// include database connection file
include 'koneksi.php';
$siaran_id = $_POST['siaran_id'];
$status = $_POST['status'];
$result = mysqli_query($koneksi, "UPDATE tb_siaran SET status = '$status' WHERE siaran_id = $siaran_id");
header("Location:Belum.php");
?>
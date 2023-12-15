<?php
// include database connection file
include 'koneksi.php';
$siaran_id = $_GET['siaran_id'];
$result = mysqli_query($koneksi, "DELETE FROM tb_siaran WHERE siaran_id='$siaran_id'");
header("Location:Daftar Siaran.php");
?>
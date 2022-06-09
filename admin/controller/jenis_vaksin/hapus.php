<?php
session_start();
include '../../../config/config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM jenis_vaksin WHERE id_jenis_vaksin=$id");
$_SESSION["hapus"] = 'Data Berhasil Dihapus';
 
header("location:../../input-jenis-vaksin.php?delete=success");
?>
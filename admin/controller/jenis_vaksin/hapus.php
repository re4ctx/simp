<?php 
include '../../../config/config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM jenis_vaksin WHERE id_jenis_vaksin=$id");
 
header("location:../../input-jenis-vaksin.php");
?>
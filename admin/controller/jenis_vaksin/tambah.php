<?php 
include '../../../config/config.php';

$jenis = $_POST['jenis'];

mysqli_query($koneksi,"INSERT INTO jenis_vaksin VALUES('','$jenis')");

header("location:../../input-jenis-vaksin.php?add=success");

?>
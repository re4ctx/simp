<?php 
session_start();
include '../../../config/config.php';

$jenis = $_POST['jenis'];

mysqli_query($koneksi,"INSERT INTO jenis_vaksin VALUES('','$jenis')");
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

header("location:../../input-jenis-vaksin.php?add=success");

?>
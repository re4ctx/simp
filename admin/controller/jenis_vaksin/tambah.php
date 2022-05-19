<?php 
include '../../../config/config.php';

$id = $_POST['id'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi,"INSERT INTO jenis_vaksin VALUES('$id','$jenis')");

header("location:../../input-jenis-vaksin.php");

?>
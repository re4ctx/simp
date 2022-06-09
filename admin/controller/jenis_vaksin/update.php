<?php
include '../../../config/config.php';

$id = $_POST['id'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi, "UPDATE jenis_vaksin SET jenis_vaksin='$jenis' WHERE id_jenis_vaksin='$id'");

header("location:../../input-jenis-vaksin.php?update=success");

?>
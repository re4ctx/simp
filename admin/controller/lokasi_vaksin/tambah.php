<?php
session_start();
include '../../../config/config.php';

$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$start = $_POST['start'];
$end = $_POST['end'];
$keterangan = $_POST['keterangan'];

$waktu = $start . ' s.d.' . $end;

mysqli_query($koneksi,"insert into info_vaksinasi values('','$tempat','$tanggal','$waktu', '$keterangan')");
$_SESSION["sukses"] = 'Data Berhasil Disimpan';

header("location:../../input-lokasi-vaksin.php?add=success");

?>
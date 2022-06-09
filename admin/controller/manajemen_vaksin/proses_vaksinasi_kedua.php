<?php 
include '../../../config/config.php';

$nik = $_POST['nik2'];
$status = $_POST['status2'];
$tanggal = $_POST['tanggal2'];

mysqli_query($koneksi,"UPDATE status_vaksinasi set vaksinasi_kedua='$status', tanggal_vaksinasi_kedua='$tanggal' where nik='$nik'");

header("location:halaman_proses_vaksinasi.php?nik=$nik");

?>
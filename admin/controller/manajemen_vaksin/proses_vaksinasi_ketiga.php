<?php 
include '../../../config/config.php';

$nik = $_POST['nik3'];
$status = $_POST['status3'];
$tanggal = $_POST['tanggal3'];

mysqli_query($koneksi,"UPDATE status_vaksinasi set vaksinasi_ketiga='$status', tanggal_vaksinasi_ketiga='$tanggal' where nik='$nik'");

header("location:halaman_proses_vaksinasi.php?nik=$nik");

?>
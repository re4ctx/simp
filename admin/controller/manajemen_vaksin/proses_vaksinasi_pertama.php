<?php 
include '../../../config/config.php';

$nik = $_POST['nik'];
$status = $_POST['status'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi,"UPDATE status_vaksinasi set vaksinasi_pertama='$status', tanggal_vaksinasi_pertama='$tanggal', id_jenis_vaksin='$jenis' where nik='$nik'");

header("location:halaman_proses_vaksinasi.php?nik=$nik");

?>
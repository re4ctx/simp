<?php
include '../../../config/config.php';

$id = $_POST['id'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$start = $_POST['start'];
$end = $_POST['end'];
$keterangan = $_POST['keterangan'];

$waktu = $start . ' s.d.' . $end;

if (empty($_POST['start']) && empty($_POST['end'])) {
    mysqli_query($koneksi, "UPDATE info_vaksinasi SET tempat='$tempat', tanggal='$tanggal', keterangan='$keterangan' WHERE id_vaksinasi='$id'");
}else{
    mysqli_query($koneksi, "UPDATE info_vaksinasi SET tempat='$tempat', tanggal='$tanggal', waktu='$waktu', keterangan='$keterangan' WHERE id_vaksinasi='$id'");
}

header("location:../../input-lokasi-vaksin.php?update=success");

?>
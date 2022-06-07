<?php 
include '../../../config/config.php';
 
$id = $_GET['id'];
$tempat = $_POST['tempat'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];


mysqli_query($koneksi,"update info_faskes set tempat='$tempat', alamat='$alamat', no_hp='$no_hp' where id_faskes='$id'");


 
// mengalihkan halaman kembali ke index.php
header("location:../../input-lokasi-faskes.php");
 
?>
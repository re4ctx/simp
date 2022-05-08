<?php 
include '../../../config/config.php';
 
$id = $_GET['id'];
 
 
mysqli_query($koneksi,"delete from info_faskes where id_faskes='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../input-lokasi-faskes.php");
 
?>
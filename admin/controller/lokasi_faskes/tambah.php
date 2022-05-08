<?php 
include '../../../config/config.php';

$tempat = $_POST['tempat'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];


mysqli_query($koneksi,"insert into info_faskes values('','$tempat','$alamat','$nohp')");

header("location:../../input-lokasi-faskes.php");

?>
<?php 
include '../../../config/config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM info_vaksinasi WHERE id_vaksinasi=$id");
 
header("location:../../input-lokasi-vaksin.php?delete=success");
?>
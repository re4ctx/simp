<?php
session_start();

include '../../../config/config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM info_vaksinasi WHERE id_vaksinasi=$id");
$_SESSION["hapus"] = 'Data Berhasil Dihapus';

header("location:../../input-lokasi-vaksin.php?delete=success");
?>
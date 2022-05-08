<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../../../config/config.php';

// menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from akun where nip='$nip' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nip'] = $nip;
	$_SESSION['status'] = "login";
	header("location:../../dashboard.php");
}else{
	header("location:../../sign-in.php?pesan=gagal");
}
?>
<?php
    include '../../../config/config.php';


    $id_artikel=$_GET["id_artikel"];
    $judul=$_GET["judul"];
    $gambar=$_GET["gambar"];
    $konten=$_GET["konten"];
    $sql="delete from artikel where id_artikel='$id_artikel'";
    $hapus_gbr=mysqli_query($koneksi,$sql);

    //Menghapus file gambar
    unlink("gambar/".$gambar);

    if ($hapus_gbr) {
        header("Location:../../input-artikel.php?hapus=berhasil");
    }
    else {
        header("Location:../../input-artikel.php?hapus=gagal");

    }
?>
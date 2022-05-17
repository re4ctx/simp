<?php

    if (isset($_POST['btn_tambah'])) {
        //Include file koneksi, untuk koneksikan ke database
        include '../../../config/config.php';
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $judul = $_POST['judul'];
            
            $ekstensi_diperbolehkan	= array('png','jpg');
            $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar']['tmp_name'];
            
            $konten = $_POST['konten'];

            if (!empty($gambar)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload gambar
                    move_uploaded_file($file_tmp, 'gambar/'.$gambar);

                    $sql="insert into artikel (judul, gambar, konten) values ('$judul' ,'$gambar' ,'$konten')";

                    $simpan_gbr=mysqli_query($koneksi,$sql);

                    if ($simpan_gbr) {
                        header("Location:../../input-artikel.php?add=berhasil");
                    }
                    else {
                        header("Location:../../input-artikel.php?add=gagal");
                    }
                    
                }
            }else {
                echo "Please Isi betul betul";
            }
        }

    }
?>
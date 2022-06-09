<?php
 

    if (isset($_POST['btn_tambah'])) {
        //Include file koneksi, untuk koneksikan ke database
        include '../../../config/config.php';
        //Cek apakah ada kiriman form dari method post
        
       //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();

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
                        //set session sukses
                        $_SESSION["sukses"] = 'Data Berhasil Disimpan';
                        header("Location:../../input-artikel.php");
                        
                    }
                    else {
                        $_SESSION["gagal"] = 'Data Gagal Disimpan';
                        header("Location:../../input-artikel.php");
                    }
                    
                }
            }else {
                echo "Please Isi betul betul";
            }
        }

    }
?>
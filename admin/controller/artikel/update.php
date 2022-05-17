<?php 
if (isset($_POST['btn_edit'])) {
    //Include file koneksi, untuk koneksikan ke database
    include '../../../config/config.php';
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_artikel=$_POST["id_artikel"];
        $judul = $_POST['judul'];
        
        $ekstensi_diperbolehkan	= array('png','jpg');
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        
        $konten = $_POST['konten'];

                // Cek apakah user ingin mengubah fotonya atau tidak

        if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :

            // Ambil data foto yang dipilih dari form

            $gambar = $_FILES['gambar']['name'];

            $file_tmp = $_FILES['gambar']['tmp_name'];

            

            // Rename nama fotonya dengan menambahkan tanggal dan jam upload

            $fotobaru = date('dmYHis').$gambar;

            

            // Set path folder tempat menyimpan fotonya

            $path = "gambar/".$fotobaru;



            if(move_uploaded_file($file_tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

                // Query untuk menampilkan data user berdasarkan id_user yang dikirim

                $query = "SELECT * FROM artikel WHERE id_artikel='".$id_artikel."'";

                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

                $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql



                // Cek apakah file gambar sebelumnya ada di folder foto

                if(is_file("gambar/".$data['gambar'])) // Jika gambar ada

                    unlink("gambar/".$data['gambar']); // Hapus file gambar sebelumnya yang ada di folder images

                

                // Proses ubah data ke Database

                $query = "update artikel set judul='$judul', gambar='$fotobaru', konten='$konten' where id_artikel='$id_artikel' ";

                $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query



                if($sql){ // Cek jika proses simpan ke database sukses atau tidak

                    // Jika Sukses, Lakukan :

                    header("location:../../input-artikel.php"); // Redirect ke halaman index.php

                }else{

                    // Jika Gagal, Lakukan :

                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

                    echo "<br><a href='input-artikel.php'>Kembali Ke Form</a>";

                }

            }else{

                // Jika gambar gagal diupload, Lakukan :

                echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 

                        location = '../../input-artikel.php'; 

                        </script>";

            }

        }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :

            // Proses ubah data ke Database

            $query = "update user set judul='$judul' konten='$konten' where id_artikel='$id_artikel' ";

            $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query



            if($sql){ // Cek jika proses simpan ke database sukses atau tidak

                // Jika Sukses, Lakukan :

                header("location:../../input-artikel.php"); // Redirect ke halaman index.php

            }else{

                // Jika Gagal, Lakukan :

                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

                echo "<br><a href='../../edit-artikel.php'>Kembali Ke Form</a>";

            }

                /*if (!empty($gambar)){
                    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                        //Mengupload gambar
                        move_uploaded_file($file_tmp, 'gambar/'.$gambar);

                        $sql="update artikel set judul='$judul', gambar='$gambar', konten='$konten' where id_artikel='$id_artikel'";

                        $edit_gbr=mysqli_query($koneksi,$sql);

                        if ($edit_gbr) {
                            header("Location:../../input-artikel.php?add=berhasil");
                        }
                        else {
                            header("Location:../../input-artikel.php?add=gagal");
                        }
                        
                    }
                }else {
                    $gambar="bank_default.png";
                }*/
            }

        }
}
?>

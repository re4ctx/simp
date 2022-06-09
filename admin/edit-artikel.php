<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
            
<?php session_start(); ?>

<!-- include summernote css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    
<?php
include 'template/header.php';
?>

        <?php
        //Validasi untuk menampilkan pesan pemberitahuan
        if (isset($_GET['add'])) {
      
            if ($_GET['add']=='berhasil'){
                echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah diupload!</div>";
            }else if ($_GET['add']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal diupload!</div>";
            }    
        }

        if (isset($_GET['hapus'])) {
    
            if ($_GET['hapus']=='berhasil'){
                echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah dihapus!</div>";
            }else if ($_GET['hapus']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal dihapus!</div>";
            }    
        }
        ?>

        <?php
            include '../config/config.php';
            $id_artikel = $_GET['id_artikel'];
            $data = mysqli_query($koneksi,"select * from artikel where id_artikel='$id_artikel'");
            while($d = mysqli_fetch_array($data)){
		?>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-6">
                    <h4>Edit Artikel</h4>
                    <form method="post" action="controller/artikel/update.php" enctype="multipart/form-data">
                        <input type="hidden" name="id_artikel" class="form-control" value="<?php echo $d['id_artikel']; ?>" required>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Judul</label>
                            <input type="text" name="judul" class="form-control" value="<?php echo $d['judul']; ?>" placeholder="-">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Upload Gambar</label>
                            <img src="controller/artikel/gambar/<?php echo $d['gambar']; ?>" id="preview" class="img-thumbnail">
                            <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Konten</label>
                            <textarea class="form-control" name="konten" id="makeMeSummernote" rows="4" value="<?php echo $d['konten']; ?>"><?php echo $d['konten']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn_edit" class="btn btn-primary">Edit</button>
                            <a href="input-artikel.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>

        <?php 
        }
        ?>
<?php
include 'template/footer.php';
?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Script -->
    <script type="text/javascript">
            $('#makeMeSummernote').summernote({
                placeholder: 'Type here',
            tabsize: 2,
            height: 120,
            toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<!-- sweet alert sukses  -->
    <?php if(@$_SESSION['sukses']){ ?>
        <script>
            swal("Berhasil!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
    <?php unset($_SESSION['sukses']); } ?>

<!-- gagal -->
    <?php if(@$_SESSION['gagal']){ ?>
        <script>
            swal("Gagal!", "<?php echo $_SESSION['gagal']; ?>", "gagal");
        </script>
    <?php unset($_SESSION['gagal']); } ?>

<script>
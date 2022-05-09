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

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Input Artikel</h4>
            <form method="post" action="controller/artikel/tambah.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" placeholder="-">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Upload Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="exampleFormControlInput1">
                </div>
                <img src="" id="preview" class="img-thumbnail">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Konten</label>
                    <textarea class="form-control" name="konten" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_tambah" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>

        <div class="col-6">
            <div class="card mb-4 mt-4">
                <div class="card-header pb-0">
                    <h6>Data Artikel</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gambar</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Konten</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                include '../config/config.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"select * from artikel");
                                while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3">
                                            <div class="my-auto">
                                                <p class="text-sm font-weight-bold mb-0"><?php echo $d['judul']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img class="text-sm font-weight-bold mb-0" src="controller/artikel/gambar/><?php echo $d['gambar']; ?>">
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?php echo $d['konten']; ?></p>
                                    </td>
                                    <!-- <td>
                                        Dosis Vaksin 1 : 100 (Sinovac)
                                        Dosis Vaksin 2 : 50 (AstraZenaca)
                                    </td> -->
                                    <td class="align-middle">
                                        <a href="" class="btn btn-icon btn-1 btn-info" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                        </a>
                                        <a href="controller/artikel/hapus.php?id=<?php echo $d['id_artikel']; ?>" class="btn btn-icon btn-1 btn-danger" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include 'template/footer.php';
?>
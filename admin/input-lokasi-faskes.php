<?php
include 'template/header.php';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Input Lokasi Faskes</h4>
            <form method="post" action="controller/lokasi_faskes/tambah.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="exampleFormControlInput1" placeholder="Silakan masukkan nama tempat" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required>Silakan masukkan alamat</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">No HP</label>
                    <input type="tel" name="nohp" class="form-control" pattern="[0-9]+" id="exampleFormControlInput1" placeholder="Silakan tambahkan nomor handphone" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>

        <div class="col-6">
            <div class="card mb-4 mt-4">
                <div class="card-header pb-0">
                    <h6>Data Lokasi Faskes</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No HP</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                include '../config/config.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"select * from info_faskes");
                                while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3">
                                            <div class="my-auto">
                                                <p class="text-sm font-weight-bold mb-0"><?php echo $d['tempat']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?php echo $d['alamat']; ?></p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?php echo $d['no_hp']; ?></p>
                                    </td>
                                    <!-- <td>
                                        Dosis Vaksin 1 : 100 (Sinovac)
                                        Dosis Vaksin 2 : 50 (AstraZenaca)
                                    </td> -->
                                    <td class="align-middle">
                                        <a href="" class="btn btn-icon btn-1 btn-info" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                        </a>
                                        <a href="controller/lokasi_faskes/hapus.php?id=<?php echo $d['id_faskes']; ?>" class="btn btn-icon btn-1 btn-danger" type="button">
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
<?php
include 'template/header.php';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Input Lokasi Vaksinasi</h4>
            <form method="post" action="controller/lokasi_vaksin/tambah.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="exampleFormControlInput1" placeholder="Silakan Masukkan Nama Tempat" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input class="form-control datepicker" placeholder="Silakan Pilih Tanggal" type="text" name="tanggal" onfocus="focused(this)" onfocusout="defocused(this)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Waktu Mulai</label>
                    <input class="form-control time" placeholder="Silakan Pilih Waktu Mulai" type="text" name="start" onfocus="focused(this)" onfocusout="defocused(this)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Waktu Selesai</label>
                    <input class="form-control time" placeholder="Silakan Pilih Waktu Selesai" type="text" name="end" onfocus="focused(this)" onfocusout="defocused(this)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>

        <div class="col-6">
            <div class="card mb-4 mt-4">
                <div class="card-header pb-0">
                    <h6>Lokasi Vaksinasi</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Waktu</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Keterangan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../config/config.php';
                                $data = mysqli_query($koneksi, "SELECT * FROM info_vaksinasi");
                                while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <p class="text-sm font-weight-bold mb-0">
                                                        <?php echo $d['tempat']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">
                                                <?php echo $d['tanggal']; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">
                                                <?php echo $d['waktu']; ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">
                                                <?php echo $d['keterangan']; ?>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-icon btn-1 btn-info" type="button">
                                                <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                            </a>
                                            <a href="controller/lokasi_vaksin/hapus.php?id=<?php echo $d['id_vaksinasi']; ?>" class="btn btn-icon btn-1 btn-danger" type="button">
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
<?php
include 'template/header.php';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Input Jenis Vaksin</h4>
            <form method="post" action="controller/jenis_vaksin/tambah.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Vaksin</label>
                    <input type="text" name="jenis" class="form-control" id="exampleFormControlInput1" placeholder="Silakan Masukkan Nama Vaksin" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>

        <div class="col-6">
            <div class="card mb-4 mt-4">
                <div class="card-header pb-0">
                    <h6>Data Jenis Vaksin</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Vaksin</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Vaksin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../config/config.php';
                                $data = mysqli_query($koneksi, "SELECT * FROM jenis_vaksin");
                                while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <div class="my-auto">
                                                    <p class="text-sm font-weight-bold mb-0">
                                                        <?php echo $d['id_jenis_vaksin']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">
                                                <?php echo $d['jenis_vaksin']; ?>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="" class="btn btn-icon btn-1 btn-info" type="button">
                                                <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                            </a>
                                            <a href="controller/jenis_vaksin/hapus.php?id=<?php echo $d['id_jenis_vaksin']; ?>" class="btn btn-icon btn-1 btn-danger" type="button">
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
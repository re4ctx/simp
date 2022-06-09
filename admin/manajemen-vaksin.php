<?php
include 'template/header.php';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="container">
                    <div class="card-header pb-0">
                        <h6>Data Masyarakat</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="example" class="table align-items-center justify-content-center mb-0 container">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Gol Darah</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    include '../config/config.php';
                                    $data = mysqli_query($koneksi, "select * from masyarakat");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $d['nik']; ?></a></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['jenis_kelamin']; ?></td>
                                            <td><?php echo $d['golongan_darah']; ?></td>
                                            <td><?php echo $d['tanggal_lahir']; ?></td>
                                            <td><?php echo $d['alamat']; ?></td>
                                            <td><?php echo $d['no_hp']; ?></td>
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
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>
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
                                            <td><a href="controller/manajemen_vaksin/halaman_proses_vaksinasi.php?nik=<?php echo $d['nik']; ?>"><?php echo $d['nik']; ?></a></td>
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
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>
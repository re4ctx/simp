<?php session_start(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"></link>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<?php
include 'template/header.php';
?>

<!-- Alert Tambah Data -->
<?php if(@$_SESSION['sukses']){?>
    <script>
        swal("Berhasil!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
<?php unset($_SESSION['sukses']);}?>

<!-- Alert Edit Data -->
<?php if(@$_SESSION['sukses']){?>
    <script>
        swal("Berhasil!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
<?php unset($_SESSION['sukses']);}?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Input Lokasi Vaksinasi</h4>
            <form method="post" action="controller/lokasi_vaksin/tambah.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama tempat" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input class="form-control datepicker" placeholder="Tentukan tanggal" type="text" name="tanggal" onfocus="focused(this)" onfocusout="defocused(this)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Waktu Mulai</label>
                    <input class="form-control time" placeholder="Tentukan waktu mulai" type="text" name="start" onfocus="focused(this)" onfocusout="defocused(this)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Waktu Selesai</label>
                    <input class="form-control time" placeholder="Tentukan waktu selesai" type="text" name="end" onfocus="focused(this)" onfocusout="defocused(this)" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="makeMeSummernote" rows="3" required></textarea>
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
                                            <a href="edit-lokasi-vaksin.php?id=<?php echo $d['id_vaksinasi']; ?>" class="btn btn-icon btn-1 btn-info" type="button">
                                                <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                            </a>
                                            <a href="controller/lokasi_vaksin/hapus.php?id=<?php echo $d['id_vaksinasi']; ?>" class="btn btn-icon btn-1 btn-danger alert_notif" type="button">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
    $('#makeMeSummernote').summernote({
        placeholder: 'Tambahkan keterangan',
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

<!-- Alert Hapus Data -->
<?php if(@$_SESSION['hapus']){?>
    <script>
        Swal.fire({            
            icon: 'success',                   
            title: 'Berhasil!',    
            text: 'Data Berhasil Dihapus',                        
            timer: 3000,                                
            showConfirmButton: false
        })
    </script>
<?php unset($_SESSION['hapus']);}?>

<!-- Alert Konfirmasi Hapus Data -->
<script>
    $('.alert_notif').on('click',function(){
        var getLink = $(this).prop('href');
        Swal.fire({
            title: "Apakah Anda Yakin Ingin Menghapus Data?",            
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#EA0606',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#17C1E8',
            cancelButtonText: "Batal"
        
        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if(result.isConfirmed){
                window.location.href = getLink
            }
        })
        return false;
    });
</script>

<?php
include 'template/footer.php';
?>
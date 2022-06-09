<?php session_start(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css"></link>
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
            <h4>Input Jenis Vaksin</h4>
            <form method="post" action="controller/jenis_vaksin/tambah.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Vaksin</label>
                    <input type="text" name="jenis" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama vaksin" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="" class="btn btn-primary">Tambah</button>
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
                                            <a href="edit-jenis-vaksin.php?id=<?php echo $d['id_jenis_vaksin']; ?>" class="btn btn-icon btn-1 btn-info" type="button">
                                                <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                            </a>
                                            <a href="controller/jenis_vaksin/hapus.php?id=<?php echo $d['id_jenis_vaksin']; ?>" class="btn btn-icon btn-1 btn-danger alert_notif" type="button">
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

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
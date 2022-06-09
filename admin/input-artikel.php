<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
 
<!-- include summernote css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    

<?php session_start(); ?>

<?php
include 'template/header.php';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Input Artikel</h4>
            <form id="postForm" method="post" action="controller/artikel/tambah.php" enctype="multipart/form-data" onsubmit="return postForm()">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" placeholder="-" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Upload Gambar</label>
                    <input type="file" class="form-control" id="uploadImage1"  onchange="PreviewImage(1)" name='gambar' required>
                    <br>
                    <img  class="img-thumbnail" id="uploadPreview1"  width="585" height="330">
                </div>    
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Konten</label>
                    <textarea class="form-control" name="konten" id="makeMeSummernote" rows="4" required></textarea>
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
                                        <img  class="text-sm font-weight-bold mb-0" src="controller/artikel/gambar/<?php echo $d['gambar']; ?>" width="58.5" height="33">
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?php echo $d['konten']; ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="edit-artikel.php?id_artikel=<?php echo $d['id_artikel']; ?>" class="btn btn-icon btn-1 btn-info" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                        </a>
                                        <a href="controller/artikel/hapus.php?id_artikel=<?php echo $d['id_artikel']; ?>" class="btn btn-icon btn-1 btn-danger alert_notif">
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
            ['view', ['codeview', 'help']]
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
            swal("Gagal!", "<?php echo $_SESSION['gagal']; ?>", "error");
        </script>
    <?php unset($_SESSION['gagal']); } ?>

<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

<!-- hapus  -->
        <?php if(@$_SESSION['hapus']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Hapus',    
                    text: 'data berhasil dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <?php unset($_SESSION['hapus']); } ?>
    
    
<!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Apakah anda yakin ingin menghapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
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

<script>

    $(document).on("click", "#pilih_gambar", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
    });

    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });


    //upload gambar dengan preview 
    function PreviewImage(no) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
        };
    }

</script>



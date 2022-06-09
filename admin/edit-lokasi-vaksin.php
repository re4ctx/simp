<?php
include 'template/header.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-6">
            <h4>Edit Data Lokasi Vaksinasi</h4>
            <?php
            include '../config/config.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM info_vaksinasi WHERE id_vaksinasi='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="controller/lokasi_vaksin/update.php">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $d['id_vaksinasi']; ?>" required>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tempat</label>
                        <input type="text" name="tempat" class="form-control" id="exampleFormControlInput1" value="<?php echo $d['tempat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal</label>
                        <input class="form-control datepicker" value="<?php echo $d['tanggal']; ?>" type="text" name="tanggal" onfocus="focused(this)" onfocusout="defocused(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Waktu Mulai</label>
                        <input class="form-control time" placeholder="Kosongkan waktu mulai dan waktu selesai jika tidak ingin mengubah waktu vaksinasi" type="text" name="start" onfocus="focused(this)" onfocusout="defocused(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Waktu Selesai</label>
                        <input class="form-control time" placeholder="Kosongkan waktu mulai dan waktu selesai jika tidak ingin mengubah waktu vaksinasi" type="text" name="end" onfocus="focused(this)" onfocusout="defocused(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="makeMeSummernote" rows="3"><?php echo $d['keterangan']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn_edit" class="btn btn-primary">Edit</button>
                        <a href="input-lokasi-vaksin.php" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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

<?php
include 'template/footer.php';
?>
<?php
include 'template/header.php';
?>

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
                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"><?php echo $d['keterangan']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin semua data sudah benar?')">Edit</button>
                    </div>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>
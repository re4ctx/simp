<?php
include 'template/header.php';
?>

<?php
include '../config/config.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM jenis_vaksin WHERE id_jenis_vaksin='$id'");
while($d = mysqli_fetch_array($data)){
    ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-6">
                <h4>Edit Data Jenis Vaksin</h4>
                    <form method="post" action="controller/jenis_vaksin/update.php">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $d['id_jenis_vaksin']; ?>" required>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Vaksin</label>
                            <input type="text" name="jenis" class="form-control" id="exampleFormControlInput1" value="<?php echo $d['jenis_vaksin']; ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn_edit" class="btn btn-primary">Edit</button>
                            <a href="input-jenis-vaksin.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
include 'template/footer.php';
?>
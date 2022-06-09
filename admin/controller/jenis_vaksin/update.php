<?php
// Edit akan dilakukan hanya jika user memilih btn_edit
if (isset($_POST['btn_edit'])) {
    session_start();
    include '../../../config/config.php';

    $id = $_POST['id'];
    $jenis = $_POST['jenis'];

    mysqli_query($koneksi, "UPDATE jenis_vaksin SET jenis_vaksin='$jenis' WHERE id_jenis_vaksin='$id'");
    $_SESSION["sukses"] = 'Data Berhasil Diedit';

    header("location:../../input-jenis-vaksin.php?update=success");
}
?>
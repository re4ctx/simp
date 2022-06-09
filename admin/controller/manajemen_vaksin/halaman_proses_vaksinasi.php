<?php
include '../../template/header.php';
?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-12">
      <?php
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "berhasil") {
          echo "<div class='alert alert-success d-flex align-items-center' role='alert'>
          <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
          <div>
            Berhasil memproses vaksinasi pertama!
          </div>
        </div>";
        }
      }
      ?>
    </div>
    <div class="col-lg-6">
      <div class="accordion-1">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="accordion" id="accordionRental">
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingOne">
                  <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Vaksinasi Pertama
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  </button>
                </h5>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                  <div class="accordion-body text-sm opacity-8">
                    <?php
                    include '../../../config/config.php';
                    $nik = $_GET['nik'];
                    $result = mysqli_query($koneksi, "SELECT id_vaksinasi FROM status_vaksinasi WHERE vaksinasi_pertama = 'Sudah' AND nik = $nik");
                    if (mysqli_num_rows($result) == 0) {
                    ?>
                      <form action="proses_vaksinasi_pertama.php" method="post">
                        <input type="hidden" value="<?php echo $_GET['nik']; ?>" name="nik">
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Status Vaksinasi</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sudah" name="status" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Sudah
                            </label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Tanggal Vaksinasi</label>
                          <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal" onfocus="focused(this)" onfocusout="defocused(this)" required>
                        </div>
                        <div class="mb-3">
                          <label for="jenisVaksin" class="form-label">Jenis Vaksin</label>
                          <select class="form-select" name="jenis" aria-label="jenisVaksin">
                            <option>Pilih Jenis Vaksin</option>
                            <?php
                            include '../../../config/config.php';
                            $data = mysqli_query($koneksi, "select * from jenis_vaksin");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                              <option value="<?php echo $d['id_jenis_vaksin']; ?>"><?php echo $d['jenis_vaksin']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </div>
                      </form>
                    <?php
                    } else {
                    ?>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Status Vaksinasi</label>
                        <div class="form-check">
                          <?php
                          include '../../../config/config.php';
                          $nik = $_GET['nik'];
                          $getdata = mysqli_query($koneksi, "select status_vaksinasi.vaksinasi_pertama, status_vaksinasi.tanggal_vaksinasi_pertama, status_vaksinasi.id_jenis_vaksin, jenis_vaksin.jenis_vaksin as nama_jenis_vaksin  from status_vaksinasi INNER JOIN jenis_vaksin ON status_vaksinasi.id_jenis_vaksin = jenis_vaksin.id_jenis_vaksin where nik=$nik");
                          while ($g = mysqli_fetch_array($getdata)) {
                            if ($g['vaksinasi_pertama'] == "Sudah") {
                              $checked = "checked disabled";
                            } else if (is_null($g['vaksinasi_pertama'])) {
                              $checked = "";
                            }
                            echo "<input class='form-check-input' type='checkbox' value='Sudah' name='status' id='flexCheckDefault' $checked>";
                          ?>
                            <label class="form-check-label" for="flexCheckDefault">
                              Sudah
                            </label>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal Vaksinasi</label>
                        <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal" value="<?php echo $g['tanggal_vaksinasi_pertama']; ?>" onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="jenisVaksin" class="form-label">Jenis Vaksin</label>
                        <input class="form-control" type="text" value="<?php echo $g['nama_jenis_vaksin']; ?>" disabled>
                      <?php
                          }
                      ?>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingTwo">
                  <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Vaksinasi Kedua
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  </button>
                </h5>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental" style="">
                  <div class="accordion-body text-sm opacity-8">
                    <?php
                    include '../../../config/config.php';
                    $nik = $_GET['nik'];
                    $result = mysqli_query($koneksi, "SELECT id_vaksinasi FROM status_vaksinasi WHERE vaksinasi_kedua = 'Sudah' AND nik = $nik");
                    if (mysqli_num_rows($result) == 0) {
                    ?>
                      <form action="proses_vaksinasi_kedua.php" method="post">
                        <input type="hidden" value="<?php echo $_GET['nik']; ?>" name="nik2">
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Status Vaksinasi</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sudah" name="status2" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Sudah
                            </label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Tanggal Vaksinasi</label>
                          <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal2" onfocus="focused(this)" onfocusout="defocused(this)" required>
                        </div>
                        <div class="mb-3">
                          <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </div>
                      </form>
                    <?php
                    } else {
                    ?>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Status Vaksinasi</label>
                        <div class="form-check">
                          <?php
                          include '../../../config/config.php';
                          $nik = $_GET['nik'];
                          $getdata = mysqli_query($koneksi, "select status_vaksinasi.vaksinasi_kedua, status_vaksinasi.tanggal_vaksinasi_kedua, status_vaksinasi.id_jenis_vaksin, jenis_vaksin.jenis_vaksin as nama_jenis_vaksin  from status_vaksinasi INNER JOIN jenis_vaksin ON status_vaksinasi.id_jenis_vaksin = jenis_vaksin.id_jenis_vaksin where nik=$nik");
                          while ($g = mysqli_fetch_array($getdata)) {
                            if ($g['vaksinasi_kedua'] == "Sudah") {
                              $checked = "checked disabled";
                            } else if (is_null($g['vaksinasi_kedua'])) {
                              $checked = "";
                            }
                            echo "<input class='form-check-input' type='checkbox' value='Sudah' name='status' id='flexCheckDefault' $checked>";
                          ?>
                            <label class="form-check-label" for="flexCheckDefault">
                              Sudah
                            </label>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal Vaksinasi</label>
                        <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal" value="<?php echo $g['tanggal_vaksinasi_kedua']; ?>" onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="jenisVaksin" class="form-label">Jenis Vaksin</label>
                        <input class="form-control" type="text" value="<?php echo $g['nama_jenis_vaksin']; ?>" disabled>
                      <?php
                          }
                      ?>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="headingThree">
                  <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Vaksinasi Ketiga
                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                  </button>
                </h5>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental" style="">
                  <div class="accordion-body text-sm opacity-8">
                    <?php
                    include '../../../config/config.php';
                    $nik = $_GET['nik'];
                    $result = mysqli_query($koneksi, "SELECT id_vaksinasi FROM status_vaksinasi WHERE vaksinasi_ketiga = 'Sudah' AND nik = $nik");
                    if (mysqli_num_rows($result) == 0) {
                    ?>
                      <form action="proses_vaksinasi_ketiga.php" method="post">
                        <input type="hidden" value="<?php echo $_GET['nik']; ?>" name="nik3">
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Status Vaksinasi</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sudah" name="status3" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Sudah
                            </label>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Tanggal Vaksinasi</label>
                          <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal3" onfocus="focused(this)" onfocusout="defocused(this)" required>
                        </div>
                        <div class="mb-3">
                          <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </div>
                      </form>
                    <?php
                    } else {
                    ?>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Status Vaksinasi</label>
                        <div class="form-check">
                          <?php
                          include '../../../config/config.php';
                          $nik = $_GET['nik'];
                          $getdata = mysqli_query($koneksi, "select status_vaksinasi.vaksinasi_ketiga, status_vaksinasi.tanggal_vaksinasi_ketiga, status_vaksinasi.id_jenis_vaksin, jenis_vaksin.jenis_vaksin as nama_jenis_vaksin  from status_vaksinasi INNER JOIN jenis_vaksin ON status_vaksinasi.id_jenis_vaksin = jenis_vaksin.id_jenis_vaksin where nik=$nik");
                          while ($g = mysqli_fetch_array($getdata)) {
                            if ($g['vaksinasi_ketiga'] == "Sudah") {
                              $checked = "checked disabled";
                            } else if (is_null($g['vaksinasi_ketiga'])) {
                              $checked = "";
                            }
                            echo "<input class='form-check-input' type='checkbox' value='Sudah' name='status' id='flexCheckDefault' $checked>";
                          ?>
                            <label class="form-check-label" for="flexCheckDefault">
                              Sudah
                            </label>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tanggal Vaksinasi</label>
                        <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal" value="<?php echo $g['tanggal_vaksinasi_ketiga']; ?>" onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                      </div>
                      <div class="mb-3">
                        <label for="jenisVaksin" class="form-label">Jenis Vaksin</label>
                        <input class="form-control" type="text" value="<?php echo $g['nama_jenis_vaksin']; ?>" disabled>
                      <?php
                          }
                      ?>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <ul class="list-group">
        <?php
        include '../../../config/config.php';
        $nik = $_GET['nik'];
        $data = mysqli_query($koneksi, "select * from masyarakat where nik=$nik");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <li class="list-group-item"><i class="fa fa-address-card-o me-3 text-cemter" aria-hidden="true"></i><?php echo $d['nik']; ?></li>
          <li class="list-group-item"><i class="fa fa-user-o me-3 text-cemter" aria-hidden="true">&nbsp;</i><?php echo $d['nama']; ?></li>
          <li class="list-group-item"><i class="fa fa-map-marker me-3 text-cemter" aria-hidden="true">&nbsp;&nbsp;</i><?php echo $d['alamat']; ?></li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>

  <?php
  include '../../template/footer.php';
  ?>
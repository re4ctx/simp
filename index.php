<?php
include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vaccinely - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/splide.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Vaccinely.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#counts">Data Vaksinasi</a></li>
          <li><a class="nav-link scrollto" href="#splide1">Info Vaksinasi</a></li>
          <li><a class="nav-link scrollto" href="#features">Info Faskes</a></li>
          <li><a class="nav-link scrollto" href="#details">Artikel</a></li>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Sukseskan Program Vaksinasi COVID-19 di Kota Banjar dengan <span>Vaccinely.</span></h1>
            <h2>Lebih baik mencegah daripada mengobati, lebih baik divaksin daripada isolasi mandiri.</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Cek Status Vaksinasi</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/doctor-standing-with-cross-armed-4267686-3543703.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-12">
          <h1 class="text-center" data-aos="fade-up">DATA VAKSINASI PER KECAMATAN</h1>
        </div>
      </div>
      <div class="row" data-aos="fade-up">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-geo-alt"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <b>Banjar</b> <br> <br>
            <p>
              Total Vaksinasi 1 : 200 <br>
              Total Vaksinasi 2 : 200 <br>
              Total Vaksinasi 3 : 200 <br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-geo-alt"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <b>Pataruman</b> <br> <br>
            <p>
              Total Vaksinasi 1 : 200 <br>
              Total Vaksinasi 2 : 200 <br>
              Total Vaksinasi 3 : 200 <br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-geo-alt"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <b>Purwaharja</b> <br> <br>
            <p>
              Total Vaksinasi 1 : 200 <br>
              Total Vaksinasi 2 : 200 <br>
              Total Vaksinasi 3 : 200 <br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-geo-alt"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <b>Langensari</b> <br> <br>
            <p>
              Total Vaksinasi 1 : 200 <br>
              Total Vaksinasi 2 : 200 <br>
              Total Vaksinasi 3 : 200 <br>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <section class="splide" id="splide1" data-aos="fade-up" aria-label="Splide Basic HTML Example">
    <div class="section-title container" data-aos="fade-up">
      <h2>Info</h2>
      <p>Vaksinasi Sedang Berlangsung</p>
    </div>
    <div class="splide__track">
      <ul class="splide__list">
        <?php
        $data = mysqli_query($koneksi, "select * from info_vaksinasi");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <li class="splide__slide px-3">
            <div class="card card-margin">
              <br>
              <div class="card-body pt-0">
                <div class="widget-49 mx-3">
                  <div class="widget-49-title-wrapper">
                    <div class="widget-49-date-primary">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="widget-49-meeting-info">
                      <span class="widget-49-pro-title"><?php echo $d['tempat']; ?></span>
                      <span class="widget-49-meeting-time"><?php echo $d['waktu']; ?><br><?php echo $d['tanggal']; ?></span>
                    </div>
                  </div>
                  <p><?php echo $d['keterangan']; ?></p>
                </div>
              </div>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </section>

  <main id="main">


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>INFO</h2>
          <p>Lokasi Fasilitas Kesehatan</p>
        </div>
        <div id="groupCollapse">
          <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-4">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <i class="ri-map-pin-line" style="color: #ffbb2c;"></i>
                <h3><a data-bs-toggle="collapse" href="#collapseBanjar" role="button" aria-expanded="false" aria-controls="collapseExample">Banjar</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                <i class="ri-map-pin-line" style="color: #5578ff;"></i>
                <h3><a data-bs-toggle="collapse" href="#collapsePataruman" role="button" aria-expanded="false" aria-controls="collapseExample2">Pataruman</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                <i class="ri-map-pin-line" style="color: #e80368;"></i>
                <h3><a data-bs-toggle="collapse" href="#collapsePurwaharja" role="button" aria-expanded="false" aria-controls="collapseExample">Purwaharja</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                <i class="ri-map-pin-line" style="color: #e361ff;"></i>
                <h3><a data-bs-toggle="collapse" href="#collapseLangensari" role="button" aria-expanded="false" aria-controls="collapseExample">Langensari</a></h3>
              </div>
            </div>
          </div>



          <div class="collapse px-3 mt-3" data-bs-parent="#groupCollapse" id="collapseBanjar">
            <div class="row">
              <div class="col-lg-12">
                <section class="splide" id="splide2" aria-label="Splide Basic HTML Example">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.4779317568587!2d108.50592405109442!3d-7.371296333247664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f61ec18e0f7a5%3A0x7f047d2a6a0cce59!2sPuskesmas%20Banjar%201!5e0!3m2!1sid!2sid!4v1654754297526!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7113628601105!2d108.48965101432202!3d-7.386206974758024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f61d8c759c64f%3A0xc387fc39cebb2cc!2sPuskesmas%20Banjar%202!5e0!3m2!1sid!2sid!4v1654754352545!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7898864857493!2d108.53481561432193!3d-7.377430274658645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f626503d81227%3A0x795e7a3511f9c91f!2sBLUD%20UPTD%20Puskesmas%20Banjar%203!5e0!3m2!1sid!2sid!4v1654754385146!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>

          <div class="collapse px-3 mt-3" data-bs-parent="#groupCollapse" id="collapsePataruman">
            <div class="row">
              <div class="col-lg-12">
                <section class="splide" id="splide3" aria-label="Splide Basic HTML Example">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.718381844756!2d108.53446761432194!3d-7.385422874749143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6208261c03e1%3A0xeb30e8e08b3a7376!2sPuskesmas%20Pataruman%201!5e0!3m2!1sid!2sid!4v1654705753246!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5192736540416!2d108.58408981432227!3d-7.407633475001178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e658846eeb2c9a7%3A0xcbe59bd98d079b20!2sPuskesmas%20Pataruman%202!5e0!3m2!1sid!2sid!4v1654708025478!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.8339991958883!2d108.55493241432191!3d-7.372495174602806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f621839b04a05%3A0x74e530248cfb46a!2sPuskesmas%20Pataruman%203!5e0!3m2!1sid!2sid!4v1654708060193!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>

          <div class="collapse px-3 mt-3" data-bs-parent="#groupCollapse" id="collapsePurwaharja">
            <div class="row">
              <div class="col-lg-12">
                <section class="splide" id="splide4" aria-label="Splide Basic HTML Example">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.950798586069!2d108.53964091432182!3d-7.359412374455012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6239367a8e37%3A0x54540bc20230b2c5!2sPuskesmas%20Purwaharja!5e0!3m2!1sid!2sid!4v1654755390329!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.959390490594!2d108.5675382143217!3d-7.358449074444117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6258ab683bd5%3A0x3cf546366260ccaf!2sPuskesmas%20Purwaharja%20II!5e0!3m2!1sid!2sid!4v1654755429932!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <div class="collapse px-3 mt-3" data-bs-parent="#groupCollapse" id="collapseLangensari">
            <div class="row">
              <div class="col-lg-12">
                <section class="splide" id="splide5" aria-label="Splide Basic HTML Example">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7529861212993!2d108.60523471432192!3d-7.381555974705327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f62a86a083185%3A0x3ac614d3e7102f3c!2sPUSKESMAS%20LANGENSARI%201!5e0!3m2!1sid!2sid!4v1654755505352!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                      <li class="splide__slide">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.964770007079!2d108.63613471432177!3d-7.35784587443735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f7d3e5633084d%3A0x84206be9fad20528!2sBLUD%20UPTD%20PUSKESMAS%20LANGENSARI%202!5e0!3m2!1sid!2sid!4v1654755536332!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <div class="section-title container" data-aos="fade-up">
              <h2>EDUKASI</h2>
              <p>Artikel</p>
            </div>
            <section class="splide" style="padding: 0 !important;" id="artikel" aria-label="Splide Basic HTML Example">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide px-3">
                    <div class="card">
                      <img src="assets/img/gallery/gallery-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Transisi Pandemi ke Endemi, COVID-19 segera berakhir?</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide px-3">
                    <div class="card">
                      <img src="assets/img/gallery/gallery-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Transisi Pandemi ke </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </section>

          </div>
        </div>

      </div>
    </section><!-- End Details Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Vaccinely</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!--Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Owl Carousel -->
  <!-- custom JS code after importing jquery and owl -->
  <script src="assets/js/splide.min.js"></script>
  <script src="assets/js/splide-extension-auto-scroll.min.js"></script>
  <script>
    var splide = new Splide('#splide1', {
      perPage: 3,
      perMove: 1,
      padding: '10%'
    });
    var splide2 = new Splide('#splide2', {
      focus: 'center',
      perPage: 2,
    });
    var splide3 = new Splide('#splide3', {
      focus: 'center',
      perPage: 2,
    });
    var splide4 = new Splide('#splide4', {
      focus: 'center',
      perPage: 2,
    });
    var splide5 = new Splide('#splide5', {
      focus: 'center',
      perPage: 2,
    });
    var artikel = new Splide('#artikel', {
      type: 'loop',
      drag: 'free',
      focus: 'center',
      perPage: 3,
      autoScroll: {
        speed: 2,
      },
    });

    splide.mount();
    splide2.mount();
    splide3.mount();
    splide4.mount();
    splide5.mount();
    artikel.mount(window.splide.Extensions);
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
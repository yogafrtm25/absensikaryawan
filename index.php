<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Absensi Karyawan</title>
  <link rel="icon" href="img/logokaryawan.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .header_area {
            background: linear-gradient(90deg, rgba(29, 151, 108, 1) 0%, rgba(0, 212, 255, 1) 100%);
        }
        .header_area .navbar-brand img {
            max-width: 100px; /* Adjust this value as needed */
            height: auto; /* Maintain aspect ratio */
        }
        .hero-banner {
            background: url('img/hero-bg.jpg') no-repeat center center/cover;
            padding: 170px 0;
            color: #fff;
        }
        .hero-banner__content h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .hero-banner__content p {
            font-size: 18px;
        }
        .card-feature {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s;
        }
        .card-feature:hover {
            transform: translateY(-10px);
        }
        .btn-warning, .btn-primary {
            font-size: 18px;
            padding: 10px 20px;
        }
        .footer-area {
            background: #343a40;
            color: #fff;
            padding: 30px 0;
        }
        .footer-area a {
            color: #00d4ff;
        }
        .footer-social a {
            font-size: 24px;
            margin: 0 10px;
        }
        /* Update to make nav links white */
        .navbar-nav .nav-link {
            color: #fff !important; /* Important to override Bootstrap's default */
        }
    </style>
</head>
<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php">
                        <img src="img/logoheader.png" alt="Logo" style="max-width: 100px; height: auto;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#login" rel="page-scroll">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </div>
    </header>
</body>
</html>

  <!--================Header Menu Area =================-->

  <!-- Konten lainnya di sini -->

</body>

  <!--================Header Menu Area =================-->

  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/logokaryawan.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Absensi Karyawan PT.CYB</h1>
              <p>Website ini berfungsi sebagai absensi karyawan PT. CYB.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    
    <!-- Login Feature Section Start -->
  <section class="section-margin login-section" id="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center zero-panel">
        <div class="zero-panel-content">
          <h1 class="login-title">Login Sebagai....</h1>
          <br>
          <ul class="list-inline" id="chart-skill">
            <li class="mb-3"><a href="login.php" target="_blank"><button class="btn btn-custom btn-warning">Login Admin</button></a></li>
            <li class="mb-3"><a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-custom btn-primary">Login Karyawan</button></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Login Feature Section End -->

    <!--================ Feature section start =================-->      
    <section class="section-margin">
  <div class="container">
    <div class="section-intro pb-85px text-center" id="kontak">
      <h2 class="section-intro__title">Kontak</h2>
      <p class="section-intro__subtitle"></p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a href="https://www.instagram.com/yogafrtmreal/" target="_blank">
            <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
              <span class="card-feature__icon"><i class="fab fa-instagram"></i></span>
              <h3 class="card-feature__title">Instagram</h3>
              <p class="card-feature__subtitle">Yoga Pratama</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="https://www.instagram.com/hidayatullah22_/" target="_blank">
            <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
              <span class="card-feature__icon"><i class="fab fa-instagram"></i></span>
              <h3 class="card-feature__title">Instagram</h3>
              <p class="card-feature__subtitle">Cahyo Hidayatullah</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="https://www.instagram.com/bayuayassy/" target="_blank">
            <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
              <span class="card-feature__icon"><i class="fab fa-instagram"></i></span>
              <h3 class="card-feature__title">Instagram</h3>
              <p class="card-feature__subtitle">Bayu Maulana Ayassy</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


    <!--================ Feature section end =================-->      


  </main>

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
      </div>
      <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
        <div style="position: absolute; left: -5000px;">
          <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
        </div>
        <div class="info"></div>
      </div>
      <div class="footer-bottom row align-items-center text-center text-lg-left">
        <div class="col-lg-12 col-md-12">
          <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Trio CYB <i class="fa fa-heart" aria-hidden="true"></i>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

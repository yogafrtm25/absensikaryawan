<?php 
error_reporting(0);
date_default_timezone_set('Asia/Jakarta'); // Set zona waktu ke Waktu Indonesia Barat (WIB)

// Array terjemahan nama hari
$nama_hari = array(
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
);

// Mengambil session id karyawan dan nama karyawan
$id = $_SESSION['idsi'];
include '../koneksi.php';
$sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'";
$query = mysqli_query($koneksi, $sql);
$r = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="id"> <!-- Mengatur bahasa HTML ke Bahasa Indonesia -->
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Beranda Karyawan">
    <meta name="author" content="Trio CYB">
    <meta name="keywords" content="Beranda Karyawan">

    <!-- Title Page-->
    <title>Beranda Karyawan</title>
    <link rel="icon" href="img/logokaryawan.png" type="image/png">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="vendor/wow/animate.css" rel="stylesheet">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="vendor/slick/slick.css" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Tambahkan ini untuk mendapatkan lokasi -->
    <script>
        function initMap() {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    document.getElementById("lokasi").value = " " + pos.lat + "," + pos.lng;
                }, function() {
                    handleLocationError(true);
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false);
            }
        }

        function handleLocationError(browserHasGeolocation) {
            document.getElementById("lokasi").value = browserHasGeolocation
                ? "lokasi error..... Silahkan hidupkan lokasi anda!!"
                : "Error: Your browser doesn't support geolocation.";
        }
    </script>
</head>

<body class="animsition" onload="initMap()"> <!-- Tambahkan onload untuk memanggil initMap saat halaman dimuat -->
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <h1>Karyawan</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h1>Karyawan</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="?m=awal">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" value="Absen Karyawan" readonly="" />
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/<?php echo $r['foto']; ?>" class="img-circle" alt="<?php echo $r['nama']; ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $r['nama']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/<?php echo $r['foto']; ?>" class="img-circle" alt="Profile Image" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $r['nama']; ?></a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="?m=karyawan&s=profil">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="logout.php">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="text-align: center;">Selamat Datang <?php echo $_SESSION['namasi']; ?>, Silahkan Absen</h2>
                                </div>
                            </div>
                        </div>

                        <!-- FORM -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <form action="dt_absen_sv.php" method="post">
                                        <table class="table table-borderless table-striped table-earning">
                                            <tbody>
                                                <tr>
                                                    <td>NIP</td>
                                                    <td>
                                                        <input type="text" readonly="" class="form-control" name="id_karyawan" autocomplete="off" size="25px" maxlength="25px" value="<?php echo $_SESSION['idsi']; ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><input type="text" class="form-control" name="nama" autocomplete="off" readonly="" value="<?php echo $_SESSION['namasi']; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Waktu</td>
                                                    <td><input type="text" class="form-control" value="<?php echo $nama_hari[date('l')].', '.date('d-m-Y H:i:s'); ?>" name="waktu" readonly=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td><input type="text" class="form-control" id="lokasi" name="lokasi" readonly=""></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="text-align: center;">
                                                        <button type="submit" name="simpan" class="btn btn-primary">Absen</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="?m=karyawan&s=title"><button class="btn btn-warning">Klik Tombol ini jika tidak hadir / absen</button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END FORM -->

                        <!-- FOOTER -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-desktop">
                                    <div class="copyright">
                                        <p>Copyright © 2020 Trio CYB <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END FOOTER -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <!-- Tambahkan ini untuk memuat Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

</body>

</html>
<!-- end document-->

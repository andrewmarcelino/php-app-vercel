<?php
//start globals
include_once('func/globals.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ibadah Raya - GBI Citra Family</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="vendors/owlcarousel-2.3.4/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/homepage.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php
    include_once("widgets/header.php");
    ?>
    <!-- Banner-->
    <header class="masthead submasthead" style="background-image: url('assets/img/header-bg.jpg')">
        <div class="container">
            <div class="masthead-heading">Jadwal Ibadah</div>
        </div>
    </header>
    <section class="container pb-3 ps-2 pe-2 ps-md-4 pe-md-4 page-section">
        <h2>Anda Bukan Orang Asing!</h2>
        <p class="text-justify mt-3">Kami mengundang Anda untuk bergabung dalam ibadah kami. Berikut adalah daftar jadwal ibadah yang bisa Anda ikuti. Mari bersama-sama merayakan iman dan membangun komunitas yang penuh kasih.</p>
        <div class="owl-carousel owl-theme owl-loaded mt-5" id="carousel-1">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/1.png" alt="..." style="object-fit: cover;" />
                    </div>
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/2.png" alt="..." style="object-fit: cover;" />
                    </div>
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/3.png" alt="..." style="object-fit: cover;" />
                    </div>
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/4.png" alt="..." style="object-fit: cover;" />
                    </div>
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/5.png" alt="..." style="object-fit: cover;" />
                    </div>
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/6.png" alt="..." style="object-fit: cover;" />
                    </div>
                    <div class="owl-item text-center bg=dark">
                        <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/7.png" alt="..." style="object-fit: cover;" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ps-2 pe-2 ps-md-4 pe-md-4 container">
        <div class="p-5 border shadow">
            <div class="row">
                <div class="col-lg-3">
                    <h3>Ibadah Umum GBI Citra 1</h3>
                </div>
                <div class="mt-3 mt-lg-0 col">
                    <h5>Setiap hari Minggu</h5>
                    <p><b>Ibadah Pagi</b> - Pukul 08.00<br>
                        <b>Ibadah Sore</b> - Pukul 17.00
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3">
                    <h3>Ibadah Komisi Pemuda & Anak Citra 1</h3>
                </div>
                <div class="mt-3 mt-lg-0 col">
                    <h5>Setiap hari Minggu</h5>
                    <p><b>Ibadah Anak (ABI)</b> - Pukul 10.00<br>
                        <b>Ibadah Tunas Remaja & Remaja</b> - Pukul 11.30<br>
                        <b>Ibadah Pemuda & Dewasa Muda</b> - Pukul 11.30
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3">
                    <h3>Ibadah Komisi Wanita</h3>
                </div>
                <div class="mt-3 mt-lg-0 col">
                    <h5>Women of Intergeneration</h5>
                    <p><b>Setiap hari Selasa</b> - Pukul 17.00</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3">
                    <h3>Ibadah Komisi Pria</h3>
                </div>
                <div class="mt-3 mt-lg-0 col">
                    <h5>Komisi Pria Ilahi (KOMPI)</h5>
                    <p><b>Setiap hari Jumat Minggu Pertama</b> - Pukul 19.30 </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3">
                    <h3>Ibadah Komisi Usia Emas</h3>
                </div>
                <div class="mt-3 mt-lg-0 col">
                    <h5>Komisi Usia Emas (UMAS)</h5>
                    <p><b>Setiap hari Sabtu Minggu Terakhir</b> - Pukul 10.00</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <?php
    include_once("widgets/footer.php");
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery-->
    <script src="vendors/jquery/jquery.min.js"></script>
    <!-- Owl Carousel-->
    <script src="vendors/owlcarousel-2.3.4/owl.carousel.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
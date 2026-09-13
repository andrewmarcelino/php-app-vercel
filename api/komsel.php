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
    <title>Komunitas Sel - GBI Citra Family</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="vendors/owlcarousel-2.3.4/owl.carousel-css.min.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- iziToast -->
    <link type="text/css" rel="stylesheet" href="vendors/iziToast/css/iziToast.min.css" />
    <link href="css/homepage.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php
    include_once("widgets/header.php");
    ?>
    <!-- Banner-->
    <header class="masthead submasthead" style="background-image: url('assets/img/header-bg.jpg')">
        <div class="container">
            <div class="masthead-heading">Komunitas Sel</div>
        </div>
    </header>
    <!-- About Komsel-->
    <section class="pt-0 pb-5 container">
        <div class="row g-0 px-2 px-md-4 page-section">
            <div class="col-xl-1 d-none d-xl-block"></div>
            <div class="col-lg-6 col-xl-5 pe-0 pe-lg-5 text-center align-self-top">
                <img class="img-fluid mt-3 pb-3" src="assets/img/ibadah/9.png" alt="..." style="max-height: 570px;aspect-ratio:4/3;object-fit: cover;" />
            </div>
            <div class="col-lg-6 col-xl-5">
                <h2>Apa Itu Komunitas Sel?</h2>
                <p class="text-justify mt-3">Kelompok sel adalah komunitas kecil dalam gereja yang berfungsi sebagai tempat bagi individu untuk berkumpul, berbagi, dan tumbuh dalam iman secara lebih intim. Dalam kelompok ini, anggota dapat berdiskusi tentang Firman Tuhan, berdoa bersama, dan saling mendukung dalam perjalanan spiritual mereka. Selain memperdalam pemahaman Alkitab, kelompok sel juga menciptakan hubungan yang lebih dekat antaranggota, mendorong rasa kebersamaan dan persahabatan yang kuat. Melalui kegiatan ini, anggota dapat saling menguatkan, serta terlibat dalam pelayanan untuk memberikan dampak positif bagi masyarakat sekitar. Bergabunglah dengan kelompok sel kami dan temukan dukungan serta inspirasi dalam iman!</p>
            </div>
            <div class="col-xl-1 d-none d-xl-block"></div>
        </div>
    </section>
    <!-- CTA-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex mx-2 mx-md-5">
                <div class="container bg-white border rounded shadow py-5 ps-2 pe-2 ps-md-4 pe-md-4 align-items-center" style="max-width: 720px;">
                    <h3 class="text-center">Ingin Bergabung?</h3>
                    <p class="text-center">Mari bergabung bersama-sama dengan saudara-saudara seiman lainnya dengan mengisi data diri anda di bawah ini:</p>
                    <div class="row gx-5">
                        <div class="col-md-6 mt-2 mb-1">
                            <label class="d-block">Nama</label>
                            <input class="w-100" id="input-nama" autocomplete="name" type="text" placeholder="Nama" required>
                        </div>
                        <div class="col-md-6 mt-2 mb-1">
                            <label class="d-block">No. Handphone</label>
                            <input class="w-100" id="input-nohp" autocomplete="tel" type="tel" placeholder="No. Handphone" required>
                        </div>
                        <div class="col-md-6 mt-2 mb-1">
                            <label class="d-block">Umur</label>
                            <input class="w-100" id="input-umur" type="number" placeholder="Umur" required>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-lg btn-dark" onclick="sendForm('Komsel')">Kirim Form</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <!-- iziToast -->
    <script src="vendors/iziToast/js/iziToast.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
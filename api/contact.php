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
    <title>Kontak - GBI Citra Family</title>
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
            <div class="masthead-heading">Kontak</div>
        </div>
    </header>
    <!-- Contact-->
    <section class="page-section" style="background-color: #f8f0de;">
        <div class="row g-0 mx-2 mx-md-4">
            <div class="col-lg-6 col-xl-5">
                <div class="container mx-0 shadow-sm">
                    <iframe src="https://maps.google.com/maps?q=GBI Citra Garden 1&output=embed" frameborder="0" style="border:0;" allowfullscreen="100"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ps-0 ps-lg-5 mt-4 mt-lg-0">
                <div class="container">
                    <h1>Hubungi Kami</h1>
                    <h5 class="contact-subheader">Punya pertanyaan seputar gereja? Jangan ragu untuk menghubungi kami.</h5>
                    <div class="border bg-light shadow mt-4 p-4">
                        <h4>GBI Citra Garden 1</h4>
                        <h5 class="contact-subheader">Perumahan Citra 1 Blok i 12 no. 16 - 17<br>
                            Kalideres, Jakarta Barat 11840</h5>
                        <div class="row mt-3">
                            <div class="col-3">
                                <p>Telp.</p>
                                <p>WhatsApp</p>
                                <p>Email</p>
                            </div>
                            <div class="col-1">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="col">
                                <p>(021) 541 5050</p>
                                <p>0897 9251 818</p>
                                <p>gbicitra@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex mt-3">
                            <a type="button" class="btn btn-success mb-3" target="_blank" href="https://wa.me/+628979251818">
                                <span class="flex">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Chat Via Whatsapp
                                </span>
                            </a>
                            <a type="button" class="btn btn-secondary mb-3" target="_blank" href="mailto:gbicitra@gmail.com">
                                <span class="flex">
                                    <i class="fa-regular fa-envelope"></i>
                                    Email
                                </span>
                            </a>
                        </div>
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
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
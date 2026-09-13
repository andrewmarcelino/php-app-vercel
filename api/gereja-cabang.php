<?php
//start globals
include_once('func/globals.php');
$cabangjson = file_get_contents("assets/cabang.json");
$cabanglist = json_decode($cabangjson);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Gereja Cabang - GBI Citra Family</title>
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
    <link href="css/homepage.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php
    include_once("widgets/header.php");
    ?>
    <!-- Banner-->
    <header class="masthead submasthead" style="background-image: url('assets/img/header-bg.jpg')">
        <div class="container">
            <div class="masthead-heading">Gereja Cabang</div>
        </div>
    </header>
    <!-- About Komsel-->
    <section class="container pb-3 ps-2 pe-2 ps-md-4 pe-md-4 page-section">
        <div>
            <h2>Anda Bukan Orang Asing!</h2>
            <p class="text-justify mt-3">Kami mengundang Anda untuk bergabung dalam ibadah kami. Berikut adalah daftar gereja cabang beserja jadwal ibadah yang bisa Anda ikuti. Mari bersama-sama merayakan iman dan membangun komunitas yang penuh kasih.</p>
        </div>
    </section>
    <div class="ps-2 pe-2 ps-md-4 pe-md-4 container">
        <div class="p-5 border shadow">
            <?php
            for ($i = 0; $i < sizeof($cabanglist); $i++) {
                echo '<div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid" src="' . $cabanglist[$i]->image . '" alt="..." style="object-fit: cover;" />
                </div>
                <div class="mt-3 mt-lg-0 col">
                    <h3>' . $cabanglist[$i]->nama . '</h3>
                    <div class="d-flex">
                        <i class="fa-solid fa-location-dot mt-1 me-2"></i>
                        <p>' . $cabanglist[$i]->alamat . '</p>
                    </div>
                    <h5 class="mt-2"><i class="fa-solid fa-calendar me-2"></i>Jadwal Ibadah</h5>
                    <p>' . $cabanglist[$i]->jadwal . '</p>
                    <h5 class="mt-2"><i class="fa-solid fa-address-book me-2"></i>Contact Person</h5>
                    <p>' . $cabanglist[$i]->contact_name . '<br>
                    <a target="blank" href="tel:' . $cabanglist[$i]->contact . '">' . $cabanglist[$i]->contact . '</a></p>
                    <div class="flex mt-3">
                            <a type="button" class="btn btn-success" target="_blank" href="https://wa.me/' . $cabanglist[$i]->contact . '">
                                <span class="flex">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Whatsapp
                                </span>
                            </a>
                            <a type="button" class="btn btn-secondary" target="_blank" href="' . $cabanglist[$i]->direction . '">
                                <span class="flex">
                                    <i class="fa-solid fa-map"></i>
                                    Get Directions
                                </span>
                            </a>
                        </div>
                    </div>
                </div>';
                if ($i + 1 != sizeof($cabanglist)) {
                    echo '<hr class="mt-4 mb-4" />';
                }
            }
            ?>
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
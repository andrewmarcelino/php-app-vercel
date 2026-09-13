<?php
//start globals
include_once('func/globals.php');
$articlejson = file_get_contents("assets/articles.json");
$articlelist = json_decode($articlejson);
//TODO:: Check list based on param, if not found redir to 404?
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $index = -1;
    for ($i = 0; $i < count($articlelist); $i++) {
        $is_index = $id == $articlelist[$i]->id;
        if ($is_index) {
            $index = $i;
        }
    }
    if ($index != -1) {
        $article = $articlelist[$index];
    } else {
        //Not found
        //redir to 404
    }
} else {
    //redir to 404
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $article->title; ?> - GBI Citra Family</title>
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
            <div class="masthead-heading"><?php echo $article->title; ?></div>
        </div>
    </header>
    <!-- Article Body-->
    <section class="pt-0 pb-5 container">
        <div class="page-section">
            <?php
            if(isset($article->image)) {
                echo '<img class="img-fluid pb-5" src="'.$article->image.'" alt="..." style="max-height:540px" />';
            }
            foreach ($article->body as $body) {
                echo '<h3>' . $body->subtitle . '</h3>
                <p class="mt-3 mb-3">' . $body->desc . '</p>';
            }
            echo '<p><i>Ditulis oleh ' . $article->author . ' pada ' . $article->date . '</i></p>';
            ?>
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
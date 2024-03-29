<?php
require_once 'database.php';
$database = new Database;

if (isset($_GET["search"])) {
    $search = $_GET["search"];
} else {
    $search = "";
}
$promenade = $database->searchBalade($search);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Promenades</title>
    <style type="text/css">
        @font-face {
            font-family: "bakery";
            src: url(/assets/font/bakery.ttf) format("truetype");
        }

        p.customfont {
            font-family: "Bakery", Verdana, Tahoma;
        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.3&appId=1542907162467456&autoLogAppEvents=1"></script>

    <?php
    include("header.php");
    ?>

    <!-- carousel -->

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <h1 class="customfont titre text-center" style="">Les plus belles Promenades</h1>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <a href="afficherPromenade.php?id=2">
                    <img class="d-block w-100 img-fluid hoverable " src="/assets/img/1.jpg" alt="First slide">
                </a></div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid hoverable" src="/assets/img/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 " src="/assets/img/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>


    <!-- Main -->
    <div class="container-fluid purple-gradient" id="liste">
        <!-- Row -->
        <div class="row ">
            <?php foreach ($promenade as $ballade) { ?>

                <div class="col-xl-3 col-lg-6 col-sm-12 view overlay zoom ">

                    <div class='view overlay z-depth-1-half mt-3 mb-3'>
                        <a href='afficherPromenade.php?id=<?php echo $ballade->getId() ?>'>
                            <img class='card-img img-fluid hoverable' src='<?php echo $ballade->getImg() ?>'>

                            <div class='card-body card-img-overlay mask flex rgba-black-strong'>
                                <h1 class='card-title '><?php echo $ballade->getTitre() ?></h1>
                                <h4 class='card-title'><?php echo $ballade->getPays() ?></h4>
                                <h4 class='card-title'><?php echo $ballade->getVille() ?></h4>
                                <h2 class='card-title'><?php echo "Auteur: " . $ballade->getNom() ?></h2>
                                <h6 class='card-title'><?php echo $ballade->getZip() ?></h6>
                                <p class='card-text text-white'><?php echo $ballade->getDescr() ?></p><br>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>
</body>

</html>
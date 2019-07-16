<?php
require_once 'database.php';
$database= new Database;

$promenade = $database->getAllprom();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Promenades</title>

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <!-- Menu -->
    <nav class="nav nav-pills nav-justified sticky-top">
        <a class="nav-item nav-link active " href="#">Liste de promenades</a>
        <a class="nav-item nav-link" href="ajouterPromenade.php">+</a>
    </nav>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <a href="afficherPromenade.php?id=2">
                    <img class="d-block w-100 " src="/assets/img/1.jpg" alt="First slide">
                </a></div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/img/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/img/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Main -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row justify-content-around">
            <?php foreach ($promenade as $ballade) {
                echo "<div class='col-lg-4 col-xs-1'>";

                echo "<div class='card mb-5 mesBallades'>
                <a href='afficherPromenade.php?id=" . $ballade->getId() . "'><img class='card-img-top' src='" . $ballade->getImg() . "'></a>
                <div class='card-body'>
                <h2 class='card-title'>" . $ballade->getTitre() . "</h2>
                <h4 class='card-title'>" . $ballade->getPays() . "</h4>
                <h5 class='card-title'>" . $ballade->getVille() . "</h5>
                <h6 class='card-title'>" . $ballade->getNom() . "</h6>
                <h6 class='card-title'>" . $ballade->getZip() . "</h6>
                <p class='card-text'>" . $ballade->getDescr() . "</p><br>
                </div>
                </div>
                </div>";
            }
            ?>
        </div>
    </div>


    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Form -->
                    <form class="form-inline">
                        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>
                    <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                        </div>
                    </form>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
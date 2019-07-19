<?php

require_once "database.php";


$database = new Database();
$id = $_GET['id'];
$promenade = $database->afficherPromenade($id);
?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/jellee-typeface" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Afficher une promenade</title>
    <style>
        
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

<body class="form-bg purple-gradient">
    <?php
    include("header.php");
    ?>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.3&appId=281666595767669&autoLogAppEvents=1"></script>




    <div class="imgBg">



        <div class="texteAfficherPromenade">

            <h1>Détail de la promenade sélectionnée</h1><br>

            <img style="width: 500px" class='img cover center' src='<?php echo $promenade->getImg() ?>'>
            <br>
            <br>
            <p>
                <?php echo "La Promenade " . $promenade->getTitre() . "  se déroule en " . $promenade->getPays() . " dans la ville de " . $promenade->getVille() . " dont le code postal est " . $promenade->getZip() . " et on sait comment c'est utile!!"; ?>
                <?php echo "<br>"; ?>
            </p>

            <p>
                <?php echo "Lieu de départ: " . $promenade->getDepart(); ?>
                <?php echo "<br>"; ?>
            </p>

            <p>
                <?php echo " Lieux d'arrivée: " . $promenade->getArrivee(); ?>
                <?php echo "<br>"; ?>
            </p>

            <p>
                <?php echo " Descriptif: " . $promenade->getDescr(); ?>
            </p>
            <br>
            <br>





            <script>
                var finished_rendering = function() {
                    console.log("finished rendering plugins");
                    var spinner = document.getElementById("spinner");
                    spinner.removeAttribute("style");
                    spinner.removeChild(spinner.childNodes[0]);
                }
                FB.Event.subscribe('xfbml.render', finished_rendering);
            </script>

            <div id="spinner justify-content-center " style="">Loading
                <div class="fb-login-button " data-max-rows="1" data-size="large" data-button-type="continue_with" data-use-continue-as="true"></div>
            </div>

            <br>
            <br>

            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>

            <button><a href="modifierPromenade.php?id=<?php echo $promenade->getId(); ?>">mettre à jour</a></button>

        </div>

    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>
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
        <title>Afficher une promenade</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>

        <h1>La promenade </h1>


        <?php
            
            echo "La Promenade ".$promenade->getTitre();
            
        ?>





    </body>
</html>
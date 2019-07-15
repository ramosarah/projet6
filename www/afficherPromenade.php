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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Afficher une promenade</title>
        <style>
            .background-image{
                image: "<?php echo ".$promenade->getImg();" ?>  
            } 
        </style>

    </head>
    <body>

        <h1>La promenade </h1>


            
            <p>
            <?php echo "La Promenade ".$promenade->getTitre()."  se déroule en ".$promenade->getPays()." dans la ville de ".$promenade->getVille()." dont le code postal est ".$promenade->getZip()." et on sait comment c'est utile!!"; ?> 
            <?php echo "<br>"; ?>
            </p>

            <p>
            <?php echo "Lieu de départ: ".$promenade->getDepart(); ?>
            <?php echo "<br>"; ?>
            </p>

            <p>
            <?php echo " Lieux d'arrivée: ".$promenade->getArrivee(); ?>
            <?php echo "<br>"; ?>
            </p>

            <p>
            <?php echo " Descriptif: ".$promenade->getDescr(); ?>
            </p>
            
        

            <a href="modifierPromenade.php?id=<?php echo $promenade->getId();?>">mettre à jour</a>



    </body>
</html>
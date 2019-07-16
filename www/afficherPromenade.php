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
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/jellee-typeface" type="text/css"/> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Afficher une promenade</title>

        <style>
            .imgBg{
                background-image: url("<?php echo $promenade->getImg()?>");
                background-size: cover;
                background-position: center;                
            }

            
        </style>
        

    </head>
    <body class="form-bg">


        <div class="imgBg">
        


            <div class="texteAfficherPromenade">
                <h1>Détail de la promenade sélectionnée</h1>



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
                    
                

                <button><a href="modifierPromenade.php?id=<?php echo $promenade->getId();?>">mettre à jour</a></button>

            </div>

        </div>



    </body>
</html>
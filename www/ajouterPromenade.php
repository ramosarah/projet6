<?php


require_once "database.php";

$database = new Database();


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">


    <title>Ajouter une promenade</title>
</head>




<body class="form-bg">

    
    



<!--ajouterPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr)-->
<!--<select class="form-control form-control-sm">-->
    <div class="container">
        <div class="row justify-content-center">
            <h1>Création d'une nouvelle promenade</h1>



            <form action="processAjouter.php" method="post" enctype="multipart/form-data">

                <div class="form-group col-sm-12">
                    <label for="nom"> Nom de l'auteur</label>
                    <input class="form-control" type="text" name="nom" id="nom" require>
                </div>

                <div class="form-group col-sm-12">
                    <label for="titre">Titre de la promenade</label>
                    <input class="form-control" type="text" name="titre" id="titre" require>
                </div>
                
                
                <div class="form-group col-sm-12">
                    <label for="img">Image:</label>
                    <input class="form-control-file" type="file" name="imgUp" id="img">
                    <p class="NB"><strong>Note:</strong> Seuls les formats .jpg, .jpeg, et les tailles ne dépassant pas 2M sont autorisés.</p>
                </div>



                <div class="form-group col-sm-12">
                    <label for="pays">Pays</label>
                    <input class="form-control" type="text" name="pays" id="pays" require>
                </div>

                <div class="form-group col-sm-12">
                    <label for="ville">Ville</label>
                    <input class="form-control" type="text" name="ville" id="ville" require>
                </div>


                <div class="form-group col-sm-12">
                    <label for="zip">Code Postal</label>
                    <input class="form-control" type="number" name="zip" id="zip" require>
                </div>

                <div class="form-group col-sm-12">
                    <label for="depart">Lieu de départ</label>
                    <input class="form-control" type="text" name="depart" id="depart" require>
                </div>

                <div class="form-group col-sm-12">
                    <label for="arrivee">Lieu d'arrivée</label>
                    <input class="form-control" type="text" name="arrivee" id="arrivee" require>
                </div>

                <div class="form-group col-sm-12"> 
                    <label for="descr">Descriptif de la ballade</label>
                    <textarea name="descr" id="descr" class="textArea"></textarea>
                </div>



                <div class="form-group col-sm-12">
                    <button type="submit" class="btn btn-primary mb-2">Envoyer nouvelle promenade</button>
                </div>
                

            </form>
        </div>

    </div>






</body>

</html>
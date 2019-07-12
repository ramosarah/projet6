<?php


require_once "database.php";

$database = new Database();


?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">


        <title>Ajouter une promenade</title>
    </head>




    <body>



        
        <h1>Création d'une nouvelle promenade</h1>




<!--ajouterPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr)-->
<!--<select class="form-control form-control-sm">-->
    <!--La seconde main c'est avant tout la réutilisation d'un objet qui sans cette action serait en fin de vie. Par ses activités orientées réemploi, les ressourceries en économie sociale sont des acteurs importants de ce marché. -->
        <div class="container">

            <div class="row">
                <form action="processAjouter.php" method="post" enctype="multipart/form-data">

                    <div>
                        <label for="nom"> Nom de l'auteur</label>
                        <input type="text" name="nom" id="nom" require>
                    </div>

                    <div>
                        <label for="titre">Titre de la promenade</label>
                        <input type="text" name="titre" id="titre" require>
                    </div>
                    
                    
                    <div>
                        <label for="img">Image:</label>
                        <input type="file" name="imgUp" id="img">
                        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, sont autorisés.</p>
                    </div>





                    <div>
                        <label for="pays">Pays</label>
                        <input type="text" name="pays" id="pays" require>
                    </div>

                    <div>
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville" require>
                    </div>


                    <div>
                        <label for="zip">Code Postal</label>
                        <input type="number" name="zip" id="zip" require>
                    </div>

                    <div>
                        <label for="depart">Lieu de départ</label>
                        <input type="text" name="depart" id="depart" require>
                    </div>


                    <div>
                        <label for="arrivee">Lieu d'arrivée</label>
                        <input type="text" name="arrivee" id="arrivee" require>
                    </div>

                    <div class="d-flex align-content-sm-start"> 
                        <label for="descr">Descriptif de la ballade</label>
                        <textarea class="form-group "  name="descr" id="descr" rows="10" cols="32"></textarea>
                    </div>




                    <div>
                        <input type="submit" value="Envoyer">
                    </div>


                </form>
        </div>








    </body>

</html>


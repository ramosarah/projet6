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


        <title>Ajouter une ballade</title>
    </head>




    <body>



        
        <h1>Création d'une novuelle ballade</h1>




        <!--ajouterPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr)-->
        <form action="processAjouter.php" method="post">

            <label for="nom"> Nom de l'auteur</label>
            <input type="text" name="nom" id="nom" require>

            <label for="titre">Titre de la promenade</label>
            <input type="text" name="titre" id="titre" require>

            <label for="img">URL de l'image</label>
            <input type="text" name="img" id="img" require>

            <label for="pays">Pays</label>
            <input type="text" name="pays" id="pays" require>

            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" require>

            <label for="zip">Code Postal</label>
            <input type="number" name="zip" id="zip" require>

            <label for="depart">Lieu de départ</label>
            <input type="text" name="depart" id="depart" require>

            <label for="arrivee">Lieu d'arrivée</label>
            <input type="text" name="arrivee" id="arrivee" require>

            <label for="descr">Descriptif de la ballade</label>
            <input type="texte" name="descr" id="descr">



            <input type="submit" value="Envoyer">



        </form>








    </body>

</html>


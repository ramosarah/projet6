<?php

$nom = $_POST["nom"];
$titre = $_POST["titre"];

$img = $_POST["imgUp"];

$pays = $_POST["pays"];
$ville = $_POST["ville"];
$zip = $_POST["zip"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$descr = $_POST["descr"];

require_once "database.php";
$database = new Database();




if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["imgUp"]) && $_FILES["imgUp"]["error"] == 0) {
        $attribution = array("jpg"=>"upload/jpg", "jpeg"=>"upload/jpeg");
        $nomFichier = $_FILES["imgUp"]["titre"];
        $typeFichier = $_FILES["imgUp"]["type"];

        $ext = pathinfo($nomFichier, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $attribution)) die("Erreur : Veuillez sélectionner un format de fichier valide.");


        if(in_array($typeFichier, $attribution)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("upload/" . $_FILES["imgUp"]["titre"])){
                echo $_FILES["imgUp"]["titre"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["imgUp"]["tmp_name"], "upload/" . $_FILES["photo"]["titre"]);
                echo "Votre fichier a été téléchargé avec succès.";
            } 
        }else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }


    }else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}


$ajout = $database->ajouterPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr);
//echo "\n N° id; ".$ajout."\n";
header('location: afficherPromenade.php?id='.$ajout);


?>




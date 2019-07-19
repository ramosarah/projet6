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
        $attribution = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg");
        $nomFichier = $_FILES["imgUp"]["name"];
        $typeFichier = $_FILES["imgUp"]["type"];
        $tailleFichier = $_FILES["imgUp"]["size"];

        $ext = pathinfo($nomFichier, PATHINFO_EXTENSION);

        if(!array_key_exists($ext, $attribution)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        $maxTaille = 2 * 1024 * 1024;
        if($tailleFichier > $maxTaille) die("Error: La taille du fichier est supérieure à la limite autorisée.");
        if(in_array($typeFichier, $attribution)){
            $img_path = "upload/" . $_FILES["imgUp"]["name"];
            move_uploaded_file($_FILES["imgUp"]["tmp_name"], $img_path);
        }    
    }else{
        die("Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.");
    }

}else{
    die("Error: " . $_FILES["imgUp"]["error"]);
}





$ajout = $database->ajouterPromenade($nom, $titre, $img_path, $pays, $ville, $zip, $depart, $arrivee, $descr);
header('location: afficherPromenade.php?id='.$ajout);

header('location: afficherPromenade.php?id='.$ajout);

?>




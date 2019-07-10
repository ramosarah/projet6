<?php

require_once "database.php";

$database = new Database();


if($database->getConnexion() == NULL){
    echo "Connexion BD échouée\n";
}else {
    echo "Connexion BD réussie\n";
}




//ajouterPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr)
//$nouvellePromenade = $database->ajouterPromenade("Sarah", "Geneva Lux", "assets/img/luxGeneve.jpg", "Suisse", "Genvève", 1200, "Eaux-vives", "Parc des Bastions", "Le festival Geneva Lux est une manifestation culturelle en milieu urbain qui a lieu chaque hiver, depuis 2001, à Genève. Elle se nommait arbres en lumières jusqu’en 2013");

$promenade = $database->afficherPromenade(2);





?>
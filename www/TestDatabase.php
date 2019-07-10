<?php

require_once "database.php";

$database = new Database();


if($database->getConnexion() == NULL){
    echo "Connexion BD échouée\n";
}else {
    echo "Connexion BD réussie\n";
}






?>
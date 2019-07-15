<?php


require_once "database.php";

$database = new Database();


echo "La Promenade ".$database->afficherPromenade($_GET = "id");


?>
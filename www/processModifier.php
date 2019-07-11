<?php
$nom = $_POST["nom"];
$titre = $_POST["titre"];
$img = $_POST["img"];
$pays = $_POST["pays"];
$ville = $_POST["ville"];
$zip = $_POST["zip"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$descr = $_POST["descr"];

require_once "database.php";
$database = new Database();




?>
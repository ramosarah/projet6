<?php
require_once "promenade.php";

class Database {


    private $connexion;
    public function getConnexion() {return $this->connexion;}


    public function __construct() {
        $PARAM_hote = 'mariadb';
        $PARAM_port = '3306';
        $PARAM_nom_bd = 'Promenades';
        $PARAM_utilisateur = 'adminProm';
        $PARAM_mot_passe = 'adminPr0m';

        try{
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe);
        }catch(Execption $e) {
            echo "Erreur: ".$e->getMessage()."<br/>";
            echo "N°: ".$e->getCode();
        }
    }









}







?>
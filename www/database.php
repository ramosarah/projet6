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



    public function ajouterPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr) {
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Promenades(nom, titre, img, pays, ville, zip, depart, arrivee, descr)
            VALUES(:paramNom, :paramTitre, :paramImg, :paramPays, :paramVille, :paramZip, :paramDepart, :paramArrivee, :paramDescr)");

        $pdoStatement->execute(array(
        "paramNom"=>$nom,
        "paramTitre"=>$titre,
        "paramImg"=>$img, 
        "paramPays"=>$pays, 
        "paramVille"=>$ville,
        "paramZip"=>$zip, 
        "paramDepart"=>$depart, 
        "paramArrivee"=>$arrivee,
        "paramDescr"=>$descr));
    
        //var_dump($pdoStatement->errorInfo());

        $id = $this->connexion->lastInsertId();
        return $id;
    }


   
    public function afficherPromenade($id) {
        $pdoStatement = $this->connexion->prepare(
            "SELECT * FROM Promenades WHERE id = :idProm"
        );
    
        
        $pdoStatement->execute(array("idProm" => $id));  
        
        $promenade = $pdoStatement->fetchObject('promenade');

        return $promenade;
    }







    public function modifierPromenade($nom, $titre, $img, $pays, $ville, $zip, $depart, $arrivee, $descr){
        $pdoStatement = $this->connexion->prepare(
            "UPDATE Promenades SET 
            nom = :nom,
            titre = :titre,
            img = :img,
            pays = :pays,
            ville = :ville,
            zip = :zip,
            depart = :depart,
            arrivee = :arrivee,
            descr = :descr,
            WHERE id = :id"
        );

        $pdoStatement->exectute(array(
            "nom"=>$nom,
            "titre"=>$titre,
            "img"=>$img,
            "pays"=>$pays,
            "ville"=>$ville,
            "zip"=>$zip,
            "depart"=>$depart,
            "arrivee"=>$arrivee,
            "descr"=>$descr)
        );

        $erreurCode = $pdoStatement->errorCode();

        
        if($erreurCode == 0) {
            return true;
        }else {
            return false;
        }
    }
}







?>
<?php


class Promenade {

    private $id;
    private $nom;
    private $titre;
    private $img;
    private $pays;
    private $ville;
    private $zip;
    private $depart;
    private $arrivee;
    private $descr;

    public function __set($name, $value) {}

    public function getId() {return $this->id;}
    public function getNom() {return $this->nom;}
    public function getTitre() {return $this->titre;}
    public function getimg() {return $this->img;}
    public function getPays() {return $this->pays;}
    public function getVille() {return $this->ville;}
    public function getZip() {return $this->zip;}
    public function getDepart() {return $this->depart;}
    public function getArrivee() {return $this->arrivee;}
    public function getDescr() {return $this->descr;}











}







?>
<?php




Class Membres {

private $nom;
private $email;
private $pass;


public function __set($name, $value) {}

public function getNom() {return $this->nom;}
public function getEmail() {return $this->email;}
public function getPass() {return $this->pass;}
}
?>
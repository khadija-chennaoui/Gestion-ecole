<?php 
class Personne extends Dbconnect{

public $Matricule;
public $Nom;
public $Genre;
public $Adresse;


public function getMatricule(){
    return $this->Matricule;
}

public function getNom(){
    return $this->Nom;
}

public function getGenre(){
    return $this->Genre;
}

public function getAdresse(){
    return $this->Adresse;
}

public function setMatricule($Matricule){
    $this->Matricule=$Matricule;
}

public function setNom($Nom){
    $this->Nom=$Nom;
}

public function setGenre($Genre){
    $this->Genre=$Genre;
}

public function setAdresse($Adresse){
    $this->Adresse=$Adresse;
}
}
?>
<?php
require('personne.php');

 class Parents  extends Personne
 {
   public $job;
   public $phone;
 
    public function Ajouter(){
      try{
        $sql=$this->GetData("insert into parents values(NULL,?,?,?,?,?)");
        return $sql->execute([$this->Nom,$this->Genre,$this->job,$this->Adresse,$this->phone]);
       }catch(PDOException $e){ return $e->getMessage();} 
    }

    public function Afficher(){
      try{
        $sql=$this->connect()->query("select * from parents");
        return $sql->fetchAll();
       }catch(PDOException $e){ return $e->getMessage();} 
    }
    public function Delete(){
      try{
        return $sql=$this->GetData("delete from parents where Matricule =?")->execute([$this->Matricule]);
       }catch(PDOException $e){ return $e->getMessage();} 
    }


}


$test = new Parents();

$test->setMatricule(1);
// $test->Delete();

// var_dump($test->Afficher());
// $test->setNom("admin");
// $test->setGenre("M");
// $test->job="not";
// $test->setAdresse("123");
// $test->phone="à___";
// $test->Ajouter();



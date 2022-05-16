<?php
include('Connection.php');
 class Professeur extends Dbconnect
 {
   public function ajouterProfesseur($nom,$genre,$matière,$phone,$class)
 {
    $query="INSERT INTO professeurs VALUES(NULL,'$nom','$genre','$matière','$phone','$class')";
    $sql=$this->connect()->query($query);
    if ($sql) {
      echo'3la slama';
    }
 }

 }

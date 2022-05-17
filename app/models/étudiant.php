<?php
include('Connection.php');

 class Etudiant extends Dbconnect
 {
   public function ajouteretudiant($nom,$genre,$nee,$email,$parent,$clas)
 {
    $query="INSERT INTO etudiants VALUES(NULL,'$nom','$genre','$nee','$email','$parent','$clas')";
    $sql=$this->connect()->query($query);
 }
 public function affichetudiant(){
  {
    $data = "";
    $query = "SELECT etudiants.Matricule,etudiants.Nom_completE,etudiants.Genre,etudiants.Date_naissance,etudiants.Email,parents.Nom_complet,parents.Adresse,classes.nom_class FROM etudiants,parents,classes WHERE etudiants.Matricule_parent=parents.Matricule and etudiants.id_class=classes.id; ";
    if ($sql = $this->connect()->query($query)) {
     
        return   $sql->fetchAll();
    } else {
      echo '<div class="text-center fs-1 "><strong>no contact!!!</strong> </div>';
    }
  }
}
public function updatetudiant($data)
{
  $query = "UPDATE etudiants SET Nom_completE ='$data[Nom_completE]',Genre='$data[Genre]' ,Date_naissance='$data[Date_naissance]',Email='$data[Email]',Matricule_parent='[Matricule_parent]',id_class='$data[id_class]' WHERE Matricule='$data[id]'";
    if ($sql = $this->connect()->query($query)) {
    return true;
  } else {
    return false;
  }
}
public function deletetudiant($id){
 $query = "DELETE FROM etudiants WHERE etudiants.Matricule='$id'";
 if ($sql = $this->connect()->query($query)) {
   return true;
 } else {
   return false;
 }
}
 }

?>
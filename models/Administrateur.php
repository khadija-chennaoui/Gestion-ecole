<?php
      include('models/personne.php');
      // include("../models/personne.php");

 class Administrateur extends Dbconnect
 {
    public function creatAdmine($nom, $prenom, $role, $password){

        $reqinsert=$this->connect()->exec("INSERT INTO administrateurs (`Matricule`, `Nom`, `Prénom`, `Rôle`, `Mot _de_Passe`) VALUES (NULL,'$nom','$prenom','$role','$password')");

        if ($reqinsert) {
            return true;
        }else{
            return false;
        }
    }
    
    public function afficheAdmin(){

     if(isset($_POST['search']))
     {
        $search=$_POST['search'];
        $query="SELECT * FROM administrateurs WHERE Matricule LIKE ? OR Nom LIKE ? OR Prénom LIKE ? OR Rôle LIKE ? " ;
        $query=$this->GetData($query);
        $query->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%']);
        return $query->fetchAll();

      }else{

        $sql="SELECT * FROM  administrateurs ";
        return $prepare=$this->connect()->query($sql)->fetchALL();

      }
 
    }
 
    public function deletadmin($iddelet){

        $ressdelet=$this->connect()->exec("DELETE FROM `administrateurs` WHERE Matricule='$iddelet' ");
    }

    public function updatAdmin($Nom,$Prenom,$Role,$password,$Updateid){

        $requpdate=" UPDATE `administrateurs` SET `Nom`='$Nom',`Prénom`='$Prenom',`Rôle`='$Role',`Mot _de_Passe`='$password' WHERE `Matricule`='$Updateid'";

        $resupdate=$this->connect()->exec($requpdate);

        if ($requpdate) {

            return true;
            
        }else{
          return false;

            }

        }
}

?>
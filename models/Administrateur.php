<?php
 class Administrateur extends Personne
 {
   public $Nom;
  public $password;

  public function getpassword(){
    return $this->password;
}

public function setpassword($password){
   $this->password=$password;
}

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

        public function login(){
          $exc=$this->connect()->query("SELECT * FROM `administrateurs` WHERE Nom ='$this->Nom' AND 'Mot_de_Passe' ='$this->password'");
          $res=$exc->fetch(PDO::FETCH_ASSOC); 
          if($exc->rowCount()!=0){       
          $_SESSION['Nom']=$res['Nom'];

        }else {
          echo'<div class="alert alert-danger" role="alert">
                 **Something went wrong!!**
                   </div>';
                       }
     

   }
  }
?>
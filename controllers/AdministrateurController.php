
<?php

class AdministrateurController{

    public function getAllParent(){
         $parent=new Parents();
         if(isset($_POST['search'])) return $parent-> search($_POST['search']);
         else return $parent->Afficher();
    }
    public function addparent(){
      if(isset($_POST['saveparent']) ){
      $p = new Parents(); 
      $p->setNom($_POST['nom']);
      $p->setGenre($_POST['genre']);
      $p->job=$_POST['Job'];
      $p->setAdresse($_POST['adres']);
      $p->phone=$_POST['Phone'];
      if($p->Ajouter()) header('location:parent');
      }
    }
    public function deleteparent(){
      if(isset($_POST['deletparent'])){
         $p = new Parents();
         $p->setMatricule($_POST['Matricule']);
         if($p->delete()) header('location:parent');
        } 
    }

    public function updateparent(){
    if(isset($_POST['bntupdate'])){
       $p = new Parents();
        $p->setMatricule($_POST['matricule']);
        $p->setNom($_POST['nom']);
        $p->setGenre($_POST['genre']);
        $p->job=$_POST['Job'];
        $p->setAdresse($_POST['adres']);
        $p->phone=$_POST['Phone'];
        if($p->Update())header('location:parent');
      }
   }
  //  ------------------------------------------------------------------------
    public function getAllstudent(){
   
    }
    public function addstudent(){
    
    }
    public function deletestudent(){
    
    }

    public function updatestudent(){

    }
      //  ------------------------------------------------------------------------


    public function getAllprofesseur(){
     
    }
    public function addprofesseur(){
    
    }
    public function deleteprofesseurt(){
    
    }

    public function updateprofesseur(){

    }
      //  ------------------------------------------------------------------------


    public function getAlladmin(){
      $admines=new Administrateur();
      return  $admines->afficheAdmin();       
     
    }
    public function addadmin(){
      if(isset($_POST['save']) ){
        $admine = new Administrateur(); 
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $role=$_POST["roleadmin"];
        $password=$_POST["pwd"];
        if($admine->creatAdmine($nom, $prenom, $role, $password)) header('location:Administrateur');
      }
    }
    
    public function deleteadmin(){
      if(isset($_POST['deletid'])){
       $admine = new Administrateur(); 
        if($admine->deletadmin($_POST['Matricule'])) header('location:Administrateur');
       } 
    }

    public function updateadmin(){
      if(isset($_POST['updatebtn'])){
    
        $admine = new Administrateur(); 
        $Nom=$_POST["Name"];
        $Prenom=$_POST["prenome"];
        $Role=$_POST["roleadmine"];
        $password=$_POST["password"];
        $Updateid=$_POST["matricule"];
         if($admine->updatAdmin($Nom,$Prenom,$Role,$password,$Updateid))header('location:Administrateur');
       }
    }
      //  ------------------------------------------------------------------------
     
      public function signin(){

      }

}
?>

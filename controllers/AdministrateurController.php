
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
      $admine=new Administrateur();
      if(isset($_POST['search'])) return $admine-> afficheAdmin($_POST['search']);
      else return $admine->afficheAdmin();
    }
    public function addadmin(){
      if(isset($_POST['save']) ){
        $admadd = new  Administrateur(); 
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $role=$_POST["roleadmin"];
        $password=$_POST["pwd"];
        if($admadd->creatAdmine($nom,$prenom,$role,$password)) header('location:Administrateur');
        }
    
    }
    public function deletadmin(){
      // if(!empty($_GET['deletid']) && is_numeric($_GET['deletid'])){
      //   $adminedel= new Administrateur();
      //   $ressdelet=$_GET['deletid'];
      //   $adminedel->deletadmin($ressdelet);
      //   if($adminedel->deletadmin($ressdelet)) header('location:Administrateur');
      //  } 
       if(isset($_POST['deletid'])){
        $admindelt = new Administrateur();
        $deletid=$_POST['Matricule'];
        if($admindelt->deletadmin($deletid)) header('location:Administrateur');
       } 
    
    }

    public function updateadmin(){

    }
      //  ------------------------------------------------------------------------
     
      public function signin(){

      }

}
?>

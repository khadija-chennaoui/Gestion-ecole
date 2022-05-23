
<?php

class AdministrateurController {

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
      $mode = new Etudiant();
      return $mode->affichetudiant();

    }
    public function getclass(){
      $mode = new Etudiant();
      
      return $mode->afficheClass();
      
    }

    public function addstudent(){
    if (isset($_POST['submit'])) {
      echo "hi";
      $mode =new Etudiant();

          $nom = $_POST['Nom_complet'];
          $genre = $_POST['Genre'];
          $nee = $_POST['Date_naissance'];
          $email = $_POST['Email'];
          $parent = $_POST['NAMEP'];
          $clas = $_POST['id_class'];
        if($mode->ajouteretudiant($nom, $genre, $nee, $email, $parent, $clas)){
          header('location:professeur');
        }
      }
    }
    public function deletestudent(){
    
    }

    public function updatestudent(){
      if(isset($_POST['updateetudinat'])){
        $mode = new Etudiant();
        $mat= $_POST['Nom_complet'];
            $name = $_POST['Nom_complet'];
            $genre = $_POST['Genre'];
            $dateN = $_POST['Date_naissance'];
            $email = $_POST['Email'];
            $matp = $_POST['NAMEP'];
            $class = $_POST['id_class'];
          if($mode-> updatetudiant($name, $dateN, $genre, $email, $class,$matp, $mat)){
            header('location:professeur');
          }
       }


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

      $admin=$admines->afficheAdmin();

      foreach($admin as $admine){
      }
     
    }
    public function addadmin(){
    
    }
    public function deleteadmin(){
    
    }

    public function updateadmin(){

    }
      //  ------------------------------------------------------------------------
     
      public function signin(){

      }

}
?>

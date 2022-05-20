
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
      if($p->Ajouter()){
      }
      }
    }
    public function deleteparent(){
      if(isset($_POST['deletparent'])){
         $p = new Parents();
         $p->setMatricule($_POST['Matricule']);
         if($p->delete()){
          header('location:parent');
         }
        } 
    }

   function updateparent(){
    if(isset($_POST['bntupdate'])){
    $p = new Parents();
    $p->setMatricule($_POST['matricule']);
        $p->setNom($_POST['nom']);
        $p->setGenre($_POST['genre']);
        $p->job=$_POST['Job'];
        $p->setAdresse($_POST['adres']);
        $p->phone=$_POST['Phone'];
        if($p->Update()){
          header('location:parent');
        }
      }
   }
    // public function getAllstudent(){
    //   include('models/étudiant.php');
    //   $student=new Etudiant();
    //   return $student->Afficher();
    // }

    // public function getAllprofesseur(){
    //   include('models/professeur.php');
    //   $professeur=new professeur();
    //   return $professeur->Afficher();
    // }

    // public function getAlladmin(){
    //   include('models/Administrateur.php');
    //   $professeur=new Administrateur();
    //   return $professeur->Afficher();
    // }
}
?>

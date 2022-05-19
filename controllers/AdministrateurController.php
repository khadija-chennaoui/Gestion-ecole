
<?php

class AdministrateurController{

    public function getAllParent(){
      $parent=new Parents();

      return $parent->Afficher();
    }
    public function addparent(){

      $p = new Parents(); 
      $p->setNom($_POST['nom']);
      $p->setGenre($_POST['genre']);
      $p->job=$_POST['Job'];
      $p->setAdresse($_POST['adres']);
      $p->phone=$_POST['Phone'];
      if($p->Ajouter()){

      }
    }
    public function deleteparent(){

      $p = new Parents();
         $p->setMatricule($_POST['Matricule']);
         $p->delete();
    }

   function updateparent(){
    $p = new Parents();
    $p->setMatricule($_POST['matricule']);
        $p->setNom($_POST['nom']);
        $p->setGenre($_POST['genre']);
        $p->job=$_POST['Job'];
        $p->setAdresse($_POST['adres']);
        $p->phone=$_POST['Phone'];
        if($p->Update()){
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

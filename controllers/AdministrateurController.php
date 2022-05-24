
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
      $p->setJob($_POST['Job']);
      $p->setAdresse($_POST['adres']);
      $p->setPhone($_POST['Phone']);
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
        $p->setJob($_POST['Job']);
        $p->setAdresse($_POST['adres']);
        $p->setPhone($_POST['Phone']);
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
    $mode =new Etudiant();
  if (isset($_POST['submit'])) {
        $nom = $_POST['Nom_complet'];
        $genre = $_POST['Genre'];
        $nee = $_POST['Date_naissance'];
        $email = $_POST['Email'];
        $parent = $_POST['parent'];
        $clas = $_POST['id_class'];
      if($mode->ajouteretudiant($nom, $genre, $nee, $email, $parent, $clas)){
        header('location:etudiants');
      }
    }
  }
  public function deletestudent(){
    $mode =new Etudiant();
    if(isset($_POST['delete'])){
      if( $mode->deletetudiant($_POST['Matricule']))header('location:etudiants');
    }
  }

  public function updatestudent(){
    if(isset($_POST['updateetudinat'])){
      $mode = new Etudiant();
      $mat= $_POST['matricul'];
          $name = $_POST['Name'];
          $genre = $_POST['gen'];
          $dateN = $_POST['daten'];
          $email = $_POST['Emai'];
          $matp = $_POST['NAMEP'];
          $class = $_POST['cla'];
        if($mode-> updatetudiant($name, $dateN, $genre, $email, $class,$matp, $mat)){
          header('location:etudiants');
        }
     }
    }
    public function GenreEtudiantF(){
      $mode = new Etudiant();  
      return $mode->GenreEtudiantF();  
    }
    public function GenreEtudiantH(){
      $mode = new Etudiant();  
      return $mode->GenreEtudiantF();  
    }
      //  ------------------------------------------------------------------------


      public function getAllprofesseur(){
     
        $professeur=new professeur();
       return $professeur->view();
       
        if (isset($_POST['find'])) {
          $data = new professeur();
          $professeur = $data->view();
          if (!$professeur) {
              return false;
          }
         
      }
      }
      public function addprofesseur(){
        if (isset($_POST['save3']))
        {
         $test = new professeur();
         $test->setNom($_POST['nom']);
         $test->setGenre($_POST['genre']);
         $test->matière = $_POST['matière'];
         $test->phone = $_POST['phone'];
         $test->class_prof = $_POST['class'];
     
     
         $test->insert();
     } 
      }
      public function deleteprofesseur(){
        if(isset($_POST['deletprof']))
        {
            $pro=$_POST['deletprof'];
            $sql="DELETE FROM professeurs WHERE Matricule=?";
            $new=new Dbconnect();
            $prepare=$new->GetData($sql);
            $prepare= $prepare->execute([$pro]);
            
            header('location:professeur');
        }
  
      
      }
  
      public function updateprofesseur(){
        if(isset($_POST['save2']))
  {
      $id=$_POST['matricule'];
      $Nom=$_POST['Name'];
      $Genre=$_POST['gnr'];
      $phone=$_POST['tele'];
      $matière=$_POST['Matier'];
      $class_prof=$_POST['cl'];
  
      $edit= new professeur();
      $edit->editProfessur($id,$Nom,$Genre,$matière,$phone,$class_prof);
  
  } 
      }
      public function GenreprofesseursF(){
        $mode = new professeur();  
        return $mode->GenreprofesseursF();  
      }
      public function GenreprofesseursH(){
        $mode = new professeur();  
        return $mode->GenreprofesseursH();  
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

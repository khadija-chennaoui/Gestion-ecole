
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

      //-----------------------------------------------------------------------
     
    
    
  

}
?>

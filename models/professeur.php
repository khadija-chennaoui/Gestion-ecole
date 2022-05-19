<?php
      include('models/personne.php');
      class professeur extends Personne
{

  public $class_prof;
  public $matière;
  public $phone;

  public function insert()
  {

    try {

      $sql = "INSERT INTO professeurs  VALUES (null,?,?,?,?,?)";
      $prepare = $this->GetData($sql);
      $prepare = $prepare->execute([$this->Nom, $this->Genre, $this->matière, $this->phone, $this->class_prof]);

      if ($prepare) {
        header('location: ../views/professeur.php');
      } else echo 'erreur!!!!';
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  public function view()
  {
    if (isset($_POST['search'])) {
      $search = $_POST['search'];
      $query = "SELECT * FROM professeurs WHERE Matricule LIKE ? OR Nom_complet LIKE ? OR Genre LIKE ? OR Matière LIKE ? OR Phone LIKE ? OR class_prof LIKE ?";
      $query = $this->GetData($query);
      $query->execute(['%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%']);
      return $query->fetchAll();
    } else {
      $sql = "SELECT * FROM  professeurs ORDER BY Matricule DESC";
      return $prepare = $this->connect()->query($sql)->fetchALL();
    }
  }

  public function findProfesseur()
  {
    if (isset($_POST['search'])) {
      $search = $_POST['search'];
      $query = "SELECT * FROM professeurs WHERE Matricule LIKE ? OR Nom_complet LIKE ? OR Genre LIKE ? OR Matière LIKE ? OR Phone LIKE ? OR class_prof LIKE ?";
      $query = $this->GetData($query);
      $query->execute(['%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%']);
      return $query->fetchAll();
    }
  }


  public function editProfessur($id,$Nom,$Genre,$matière,$phone,$class_prof)
  {
    try {
      $this->id=$id;
      $this->Nom=$Nom;
      $this->Genre=$Genre;
      $this->phone=$phone;
      $this->matière=$matière;
      $this->class_prof=$class_prof;
      $sql = "UPDATE professeurs SET Nom_complet=?, Genre=?, Matière=?,Phone=?, class_prof=? WHERE Matricule=$id";
      $prepare = $this->GetData($sql);
      $prepare = $prepare->execute([$this->Nom, $this->Genre, $this->matière, $this->phone, $this->class_prof]);

      if ($prepare) {
        header('location: ../views/professeur.php');
      } else echo 'erreur!!!!';


    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }
}
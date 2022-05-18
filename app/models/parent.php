<?php
require('personne.php');

 class Parents  extends Personne
 {
   public $job;
   public $phone;
 
    public function Ajouter(){
      try{
        $sql=$this->GetData("insert into parents values(NULL,?,?,?,?,?)");
        return $sql->execute([$this->Nom,$this->Genre,$this->job,$this->Adresse,$this->phone]);
       }catch(PDOException $e){ return $e->getMessage();} 
    }

    public function Afficher()
    {
     if(isset($_POST['search']))
     {
         $search=$_POST['search'];
        $query="SELECT * FROM parents WHERE Matricule LIKE ? OR Nom_complet LIKE ? OR Genre LIKE ? OR Job LIKE ? OR Adresse LIKE ? OR Phone LIKE ?" ;
        $query=$this->GetData($query);
        $query->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%']);
        return $query->fetchAll();
      }else{
         $sql="SELECT * FROM  parents";
         return $prepare=$this->connect()->query($sql)->fetchALL();
      }
 
    }
    public function Delete(){
      try{
        return $sql=$this->GetData("delete from parents where Matricule =?")->execute([$this->Matricule]);
       }catch(PDOException $e){ return $e->getMessage();} 
    }
    public function Update(){
      try{
        return $sql=$this->GetData("update parents set Nom_complet=?,	Genre=?,Job=?,Adresse=? ,Phone=? where Matricule =?")->execute([$this->Nom,$this->Genre,$this->job,$this->Adresse,$this->phone,$this->Matricule]);
       }catch(PDOException $e){ return $e->getMessage();} 
    }
    public function search($search){
      try{
        $result= $this->GetData("select * from parents where Nom_complet LIKE ? or Genre LIKE ?
        Job LIKE ? or Adresse LIKE ? or Phone LIKE ? ");
        $result->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%' ]);
        return $result->fetch();
       }catch(PDOException $e){ return $e->getMessage();} 
    }

 

}






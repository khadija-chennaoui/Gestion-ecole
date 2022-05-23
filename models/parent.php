<?php

 class Parents  extends Personne
 {
   public $job;
   public $phone;
 
    public function Ajouter(){
      try{
        $sql=$this->GetData("insert into parents values(NULL,?,?,?,?,?)");
        return $sql->execute([$this->Nom,$this->Genre,$this->job,$this->Adresse,$this->phone]);
        $sql->close;
       }catch(PDOException $e){ return $e->getMessage();} 
    }

    public function Afficher()
    {
      try{
    
         return $prepare=$this->connect()->query("SELECT * FROM  parents ORDER BY Matricule desc")->fetchALL();
        }catch(PDOException $e){ return $e->getMessage();} 
      }
 
    public function search($search){
      try{
         $query="SELECT * FROM parents WHERE Matricule LIKE ? OR Nom_complet LIKE ? OR Genre LIKE ? OR Job LIKE ? OR Adresse LIKE ? OR Phone LIKE ?" ;
         $query=$this->GetData($query);
         $query->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%']);
         return $query->fetchAll();
         $query->close;
        }catch(PDOException $e){ return $e->getMessage();} 

    }
    public function Delete(){
      try{ 
        return $sql=$this->GetData("delete from parents where Matricule =?")->execute([$this->Matricule]); 
      }catch(PDOException $e){ return $e->getMessage();} 
    }
    public function Update(){
      try{
    
        $sql=$this->GetData("update parents set Nom_complet=?,	Genre=?,Job=?,Adresse=? ,Phone=? where Matricule =?");
        return $sql->execute([$this->Nom,$this->Genre,$this->job,$this->Adresse,$this->phone,$this->Matricule]);
      $sql->close;
      }catch(PDOException $e){ return $e->getMessage();} 
    }
    public function setJob($job){
      $this->job=$job;
  }
  public function setPhone($Phone){
    $this->phone=$Phone;
}


 

}






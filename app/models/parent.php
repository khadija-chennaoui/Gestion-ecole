<?php
require('TESTpart.php');
 class Parents extends Personne
 {
  public $job;
  public $phone;

    // public function Ajouter(){
    //     try{
    //       $sql=$this->GetData("insert into parents values(Null,?,?,?,?,?)");
    //       return $sql->execute([$this->Nom,$this->Genre,$this->job,$this->Adresse,$this->phone]);
  
    //      }catch(PDOException $e){
    //      return $e->getMessage();
    //     } }

        public function search(){
       
        if (isset($_POST['submit'])) {
            $key=$_POST['search'];
            $sql=$this->GetData("SELECT *FROM parents where Nom_complet LIKE 'A%'");

           $sql->excute();
           while ($row=$sql->fetch()) {
               
           }
}
        }
 }

?>
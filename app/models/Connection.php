<?php
class Dbconnect
{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="gestion_de_ecole";

    public function connect(){
        $conn = new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);
        return $conn;
    }
    public function GetData($conn){
        try
        {
        return $this->connect()->prepare($conn);

        }
        catch (PDOException $ex) {echo $ex->getMessage();}
      }

}
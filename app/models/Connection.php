<?php
class Dbconnect
{
    public $host="localhost";
    public $username="root";
    public $password="";
    public $database="gestion_de_ecole";

    public function connect()
    {
        $conn = new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);
        return $conn;
    }
    public function GetData($req)
  {
    try
    {
    return $this->connect()->prepare($req);
    }catch (PDOException $ex) {echo $ex->getMessage();}
  }


}



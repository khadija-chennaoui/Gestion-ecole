<?php
class Dbconnect
{
   
    public  function connect()
    {
        $conn = new PDO("mysql:host=localhost; dbname=gestion_de_ecole" ,"root" ,"");
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
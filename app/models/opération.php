<?php
include('professeur.php');
if(isset($_GET['id_prof_D']))
{
    $pro=$_GET['id_prof_D'];
    $sql="DELETE FROM professeurs WHERE Matricule=?";
    $new=new Dbconnect();
    $prepare=$new->GetData($sql);
    $prepare= $prepare->execute([$pro]);
    
    header('location:../views/professeur.php');
}

if(isset($_GET['id_prof_E']))
{   
    $pro=$_GET['id_prof_E'];
    $sql="SELECT * FROM professeurs WHERE Matricule=$pro";
    $new=new Dbconnect();
    $prepare=$new->connect()->query($sql)->fetchAll();
    
    echo $prepare['Genre'];

}


?>
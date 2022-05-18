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
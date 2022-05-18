<?php include('../models/étudiant.php');
$model = new Etudiant();
$id = $_GET['id'];
$delet = $model->deletetudiant($id);
header("Location:etudiants.php");
if ($_GET['req']=='deletetudiant') {
    $delet = $model->deletetudiant($id);
    header("Location:etudiants.php");
}
if (isset($_POST['updateetudinat'])) {
    try{
        $mat=$_POST['matricul'];
        $cla=$_POST['cla'];
        $email=$_POST['Emai'];
        $genre=$_POST['gen'];
        $daten=$_POST['daten'];
        $name=$_POST['Name'];
        $matp=$_POST['NAMEP'];
        $model->updatetudiant($name,$daten,$genre,$email,$cla,$matp,$mat);
        // $mode->updatetudiant('hiba','2022-05-05','f','hoda@gmail.com',1,22);
        echo'hi'.$mat;
       
    
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}


<?php include('../models/étudiant.php');
$model = new Etudiant();
$id = $_GET['id'];
$delet = $model->deletetudiant($id);
header("Location:etudiants.php");
if ($_GET['req']=='deletetudiant') {
    $delet = $model->deletetudiant($id);
    header("Location:etudiants.php");
}
if ($_GET['req']=='updatetudiant') {
    $updeat = $model->updatetudiant($name,$dateN,$genre,$email,$class,$matricule);
    header("Location:etudiants.php");
}
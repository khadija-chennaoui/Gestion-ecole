<?php include('../models/étudiant.php');
$model = new Etudiant();
$id = $_GET['id'];
$delet = $model->deletetudiant($id);
header("Location:etudiants.php");

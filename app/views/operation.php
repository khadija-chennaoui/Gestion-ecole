<?php
  require_once('../models/parent.php');
 $test = new Parents();
if(isset($_POST['bntupdate'])){
    $test->setMatricule($_POST['matricule']);
    $test->setNom($_POST['nom']);
    $test->setGenre($_POST['genre']);
    $test->job=$_POST['Job'];
    $test->setAdresse($_POST['adres']);
    $test->phone=$_POST['Phone'];
    if($test->Update()){
    header('location:../views/testparent.php');
    }

}


<?php
//  $test = new Parents();
if(isset($_POST['bntupdate'])){
   
  $parentcontrol = new AdministrateurController();
  $parent=$parentcontrol->updateparent();
  header('location:parent');
}

if(isset($_POST['deletparent'])){
  $parentcontrol = new AdministrateurController();
  $parent=$parentcontrol->deleteparent();
  header('location:parent');

  
    } 
    ?>


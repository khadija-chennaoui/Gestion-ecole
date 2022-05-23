<?php


  $parentcontrol = new AdministrateurController();
  $parent=$parentcontrol->updateparent();
  $parent=$parentcontrol->deleteparent();
  $parent=$parentcontrol->addparent();
  
  $professeur=$parentcontrol->deleteprofesseur();   
$professeur= $parentcontrol->addprofesseur();
$professeur=$parentcontrol->updateprofesseur();

  
    
    ?>


<?php


  $parentcontrol = new AdministrateurController();
  $parent=$parentcontrol->updateparent();
  $parent=$parentcontrol->deleteparent();
  $parent=$parentcontrol->addparent();

  $admincontro = new Administrateur();
  $admine=$parentcontrol->updateadmin();
  $admine=$parentcontrol->deletadmin();
  $admine=$parentcontrol->addadmin();
    

  
    
    ?>


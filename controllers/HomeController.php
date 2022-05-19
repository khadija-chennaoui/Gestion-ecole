<?php

  class HomeController{
    public function index($page){
      include('views/'.$page.'.php');
   }
   public function includ($page){
    include('models/'.$page.'.php');
 }
 }

?>
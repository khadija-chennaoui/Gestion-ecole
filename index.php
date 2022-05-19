<?php
include('./views/includes/script.php');
//  require_once('views/includes/sidebar.php') ;

require_once('./autoload.php');


require_once('./controllers/HomeController.php');

$home =new HomeController();
$page=['Administrateur','etudiants','model','parent','professeur','statistique','operation'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/includes/404.php');
    }
}else{
        $home->index('signup');
    }






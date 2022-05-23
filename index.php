<?php
include('./views/includes/script.php');
if(basename($_SERVER['REQUEST_URI'])=="parent" || basename($_SERVER['REQUEST_URI'])=="professeur" || basename($_SERVER['REQUEST_URI'])=="statistique"||basename($_SERVER['REQUEST_URI'])=="Administrateur"||basename($_SERVER['REQUEST_URI'])=="etudiants"){
    include('views/includes/sidebar.php') ;
}
require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home =new HomeController();
$page=['Administrateur','etudiants','model','parent','professeur','statistique','operation'];

if (isset($_SESSION['logadmin']) && $_SESSION['logadmin']===true){
    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$page)){
            $home->index($_GET['page']);
        } else{
          include('views/includes/404.php');
        }
    }else{
            $home->index('signup');
        }
    
}else if(isset($_GET['page']) && $_GET['page']=== 'signup'){
        $home->index('signup');
    }else{
        $home->index('Administrateur');
    
}






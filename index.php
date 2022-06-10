<?php

require_once('./autoload.php');
require_once('./controllers/HomeController.php');
if(basename($_SERVER['REQUEST_URI'])=="dash"|| basename($_SERVER['REQUEST_URI'])=="Clients" || basename($_SERVER['REQUEST_URI'])=="produits"){
include_once('views/include/sidebar.php'); }
if(basename($_SERVER['REQUEST_URI'])=="about"|| basename($_SERVER['REQUEST_URI'])=="index" || basename($_SERVER['REQUEST_URI'])=="shop-left-sidebar" || basename($_SERVER['REQUEST_URI'])=="compte"){
//  include_once('views/include/links.php'); 
 include_once('views/include/navbar.php'); 
}
$home =new HomeController();
$page=['about','index','shop-left-sidebar','compte','dash','Clients','produits','Clients','operation','404'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$page)){
        $home->index($_GET['page']);
    } else{
      include('views/include/404.php');
    }
}else{
        $home->index('index');
    }
    if(basename($_SERVER['REQUEST_URI'])=="about"|| basename($_SERVER['REQUEST_URI'])=="index" || basename($_SERVER['REQUEST_URI'])=="shop-left-sidebar" || basename($_SERVER['REQUEST_URI'])=="compte"){
    include_once('views/include/footer.php');
    }


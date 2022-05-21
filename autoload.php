<?php
if( basename($_SERVER['REQUEST_URI'])=="parent" || basename($_SERVER['REQUEST_URI'])=="operation"){
require_once('models/parent.php');
}elseif(basename($_SERVER['REQUEST_URI'])=="professeur"|| basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/professeur.php');
}elseif(basename($_SERVER['REQUEST_URI'])=="etudiants"|| basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/étudiant.php');
}elseif(basename($_SERVER['REQUEST_URI'])=="Administrateur"|| basename($_SERVER['REQUEST_URI'])=="operation"){
    require_once('models/Administrateur.php');
}


spl_autoload_register('autoload');

function autoload($class){
    $array_paths =array('database/' ,'app/classes', 'models/','controllers/');
    $part=explode('\\',$class);
    $name=array_pop($part);
    foreach($array_paths as $path){
        $file=sprintf($path.'%s.php',$name);
        if(is_file($file)){
            require_once $file;

        }

    }
}
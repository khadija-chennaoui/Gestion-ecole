<?php
$url=$_SERVER['RQUEST_URI'];
http://localhost/Gestion-ecole/app/views/parent.php
/Gestion-ecole/app/views/parent.php
if($url=='/Gestion-ecole/parents'){
    $parentController=new ParentSController();
    $parentController->showParentsLIs();
}
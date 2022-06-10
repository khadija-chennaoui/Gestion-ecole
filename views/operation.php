<?php

$Controller = new ProduitController();
$Controller->addproduit();
$Controller->deletproduit();
$Controller->updateproduit();

if (isset($POST['submit'])) {
$file = $_FILES['image'];
$fileName = $_FILES['image']['name'];
// $fileExt = explode('.',$fileName);
// $fileActualExt = strtolower(end($fileExt));
// $allowed = array('jpg' ,'jpeg','png','pdf','jfif');
// if (in_array($fileActualExt,$allowed)) {
//     echo "yes";

// }


}


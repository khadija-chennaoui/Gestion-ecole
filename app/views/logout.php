<?php
include("../models/connection.php");
$_SESSION=[];
session_unset();
session_destroy();
header("location:../views/signuptest.php");

?>
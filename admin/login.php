<?php
  require_once("../system/config.php");
$ctrl='login';
if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];  
if ($ctrl=="login") {
    require_once "controllers/login.php";  $controller = new login;
}
if ($ctrl=="register") {
    require_once "controllers/register.php";  $controller = new register;
}   
 ?> 
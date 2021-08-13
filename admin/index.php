<?php
  session_start();
  require_once("../system/config.php");
if(isset($_SESSION['admin'])){
    $ctrl='home';
    if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];  
    if ($ctrl=="home") {
        require_once "controllers/home.php";  $controller = new home;
    }
    if ($ctrl=="nhasanxuat") {
        require_once "controllers/nhasanxuat.php";  $controller = new nhasanxuat;
    }
    if ($ctrl=="dienthoai") {  
        require_once "controllers/dienthoai.php";  $controller = new dienthoai;
    }
    if ($ctrl=="users") {
        require_once "controllers/users.php";  $controller = new users;
    }if ($ctrl=="donhang") {
        require_once "controllers/donhang.php";  $controller = new donhang; 
    }if ($ctrl=="binhluan") {
        require_once "controllers/binhluan.php";  $controller = new binhluan; 
    }
}     
else{  
    require_once "login.php";
}
?> 
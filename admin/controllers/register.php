<?php
require_once "models/model_register.php";
class register{
   function __construct(){
       $this->model = new model_register();
       $act = "register";    
       if(isset($_GET["act"])== true)
       $act = $_GET["act"];
       switch ($act) {    
           case "register": $this->register(); break;
       }
    }

    function register(){
        if(isset($_POST['register'])){
            $Username = $_POST['Username'];
            $password = $_POST['password'];
            $Email = $_POST['Email'];
            $HoTen = $_POST['HoTen'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $checkUser = $this->model->check($Username);
            $list = $checkUser->rowCount();
            if($list>0){
                echo '<script language="javascript">';
                    echo 'alert("Username bạn nhập đã tồn tại")';  //not showing an alert box.
                    echo '</script>';
                    header("Refresh:0; views/login/register.php");

            }else{
                $row = $this->model->register($Username, $password, $Email, $HoTen, $phone, $address);
                echo '<script language="javascript">';
                echo 'alert("Tài khoản đã được đăng kí thành công. Bấm OK để đăng nhập")';  //not showing an alert box.
                echo '</script>';
                header("Refresh:0; views/login/");
            }
           
        }
    }
}


?>
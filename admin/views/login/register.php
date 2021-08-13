<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost:81/banhang/admin/views/login/login.css">
    <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> -->
</head>
<style>
    label.error{
        color: red;
        font-weight: 600;
        display: block;
    }
</style>
<body>
    <!-- <?php
    if(isset($_POST['register'])) {
        $username = $_POST["username"];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($_POST["username"])) {
            $errors ="Hãy nhập vào username của bạn";      
        }elseif (empty($_POST["fullname"])) {
            $errors = "Hẫy nhập tên đầy đủ của bạn vào";  
        }elseif (empty($_POST["email"])){
            $errors = "Hãy nhập email của bạn vào";
        }elseif (empty($_POST["password"])){
            $errors = "Hãy nhập password của bạn vào";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors = "Định dạng email không hợp lệ";
        }elseif (!is_numeric($_POST["phone"])){
            $errors = "Số điện thoại của bạn có chứa các kí tự không hợp lệ";
        }elseif (strlen($_POST["password"])<8){
            $errors = "Password phải lớn hơn 8 kí tự";
        }elseif(($_POST["password"])!=($_POST["confirm_password"])){
            $errors = "Password bạn nhập không trùng khớp";
        }elseif(strlen($_POST["phone"])<9 || strlen($_POST["phone"])>13){
            $errors = "Số điện thoại bạn nhập không chính xác";
        }else {
            $errors = "Tài khoản của bạn đã được tạo";
        }
        }
    ?> -->


    <form class="login-form" action="../../?ctrl=register&act=register" method="POST" id="register">
        <!-- <?php
            include "./errors.php"
        ?> -->
        <input type="text" name="Username" placeholder="Username" />
        <input type="text" name="HoTen" placeholder="Fullname"/>
        <input type="text" name="Email" placeholder="Email" />
        <input type="password" id="Password" name="password" placeholder="Password" />
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" />
        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ"/>

        <p class="forgot">Nếu đã có tài khoản. Bấm <a href="./index.php">vào đây </a> đế đăng nhập</p>
        <button type="submit" name="register">Register</button>
    </form>


    <script>
    $(document).ready(function() {
    $("#register").validate({
        rules: {
            username: "required",
            fullname: "required",
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required : true,
                minlength : 9,
                maxlength : 13,
                number : true
            }
        },
        messages: {
            username: "Vui lòng nhập vào username của bạn",
            fullname: "Vui lòng nhập tên đầy đủ ",
            password: {
                required: "Vui lòng nhập vào password của bạn",
                minlength: "Password bạn nhập không đủ 8 kí tự"
            },
            confirm_password: {
                required: "Vui lòng nhập lại password của bạn của bạn",
                minlength: "Password bạn nhập không đủ 8 kí tự",
                equalTo: "Password không giống nhau"
            },
            email: {
                email: "Hãy nhập đúng định dạng của Email",
                required: "Hãy nhập vào Email của bạn"
            },
            phone: {
                required : "Hãy nhập vào số điện thoại của bạn",
                minlength : "Số điện thoại bạn nhập không chính xác",
                maxlength : "Số điện thoại bạn nhập không chính xác",
                number :"Số điện thoại bạn nhập chứa các kí tự không hợp lệ"
            }
        }
    });
});
    </script>
</body>
</html>
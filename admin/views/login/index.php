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
            font-weight: 600;
            color: red;
        }
    </style>

<body>


   <!--

    if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
	header("Location:index.php");
    }

    
    if (isset($_POST['login'])) {
        	$email = $_POST['email'];
        	$password = $_POST['password'];
        	$check = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND active = :active AND permission=:permission";
        	$count = $conn->prepare($check);
        	$count->execute(array(
        		'permission' => 1,
        		'active' => 1
        	));
        	$check_admin = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND permission= :permission AND active = :active ";
        	$cout_admin = $conn->prepare($check_admin);
        	$cout_admin->execute(array(
        		':permission' => 0,
        		':active' => 1
        	));
        	if ($cout_admin->rowCount() > 0) {
        		$_SESSION['admin'] = $email;
        		header("Location:admin/index.php");
        	} elseif ($count->rowCount() > 0) {
        		$_SESSION['user'] = $email;
        		header("location:index.php");
        	}elseif (empty($_POST["email"])){
        		$errors = "Hãy nhập email của bạn vào";
        	}elseif (empty($_POST["password"])){
        		$errors = "Hãy nhập password đăng nhập của bạn vào";
        	}elseif (strlen($_POST["password"])<8){
                $errors = "Password phải lớn hơn 8 kí tự";
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors = "Định dạng email không hợp lệ";
        	}else{
        		$errors = "Email hoặc mật khẩu chưa đúng hoặc tài khoản của bạn đã bị khóa!";
        	}
        }
    
    ?>  -->

    <form class="login-form" action="../../../admin/?ctrl=login&act=submit" method="POST" id="login">
        <!-- <?php
            include "./errors.php"
        ?> -->
        <input type="text" name="username" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <p class="forgot">Nếu bạn chưa có tài khoản. Bấm <a href="./register.php">vào đây </a> đế đăng kí</p><br>
        <a href="./quenpass.php">Quên mật khẩu</a>
        <button type="submit" name="login">Sign up</button>
    </form>

    <script>
        $(document).ready(function() {
    $("#login").validate({
        rules: {
            password: {
                required: true,
                minlength: 8
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            password: {
                required: "Vui lòng nhập vào password của bạn",
                minlength: "Password chưa đủ kí tự"
            },
            email: {
                email: "Hãy nhập đúng định dạng của Email",
                required: "Hãy nhập vào Email của bạn"
            }
        }
    });
});
    </script>

</body>

</html>
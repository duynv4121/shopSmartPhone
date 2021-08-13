<?php
 require_once "models/model_login.php";
 class login{
    function __construct(){
        $this->model = new model_login();
        $act = "index";    
        if(isset($_GET["act"])== true)
        $act = $_GET["act"];
        switch ($act) {    
            case "index": $this->index(); break;
            case "submit": $this->submit(); break;
            case "xulipass": $this->xulipass(); break;
            case "doipass": $this->doipass(); break;
            case "logout": $this->logout(); break;
            case "logoutAd": $this->logout(); break;
            case "xulyquenpass" : $this->xulyquenpass(); break;

        }

    }

    function xulyquenpass(){
        require "PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
        require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
        require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
        $email = $_POST['email'];
        $checkUser = $this->model->checkUser($email);
        $checkPassOld2 = $this->model->checkPass2($email);
        $pass = $checkPassOld2['Password'];
        if($email == '' ){
            echo "<script>alert('Vui lòng nhập email đăng nhập vào!!!')</script>";
            header("Refresh:0; views/login/quenpass.php");
        }elseif($checkUser['Email']!= $email){
            echo "<script>alert('Email này không tồn tại!!!')</script>";
            header("Refresh:0; views/login/quenpass.php");
        }else {
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
                    try {
                        $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                        $mail->isSMTP();  
                        $mail->CharSet  = "utf-8";
                        $mail->Host = 'smtp.gmail.com';  //SMTP servers
                        $mail->SMTPAuth = true; // Enable authentication
                        $nguoigui = 'duysangtao2001@gmail.com';
                        $matkhau = '01652583140';
                        $tennguoigui = 'Duy đen nè bạn ơi';
    
                        $mail->Username = $nguoigui; // SMTP username
                        $mail->Password = $matkhau;   // SMTP password
                        $mail->SMTPSecure = 'tls';  // encryption TLS/SSL 
                        $mail->Port = 587;  // port to connect to   
                        // $to = "thonhps12285@gmail.com";
                        // $to_name = "Tên người nhận";
                        
                        $mail->setFrom($nguoigui, $tennguoigui ); 
                        $mail->addAddress($_POST["email"], 'Duy'); //mail và tên người nhận  
    
                        $mail->isHTML(true);  // Set email format to HTML
                        $mail->Subject = "Mật khẩu tài khoản: $email";      
                        $noidungthu = "<b>Chào bạn!</b><br>Mật khẩu của bạn là:$pass" ;
                        $mail->Body = $noidungthu;
                        $mail->smtpConnect( array(
                            "ssl" => array(
                                "verify_peer" => false,
                                "verify_peer_name" => false,
                                "allow_self_signed" => true
                            )
                        ));
                        $mail->send();
                        echo '<script>alert ("Gửi Email thành công. Hãy vào để kiểm tra!");</script>';
                        header("Refresh:0; views/login/index.php");
                    } catch (Exception $e) {
                        echo '<script>alert ("Không gửi được Email");</script>';
    
                        // echo $pass;
                    }
            }
    }

    function index(){  
        header ("location: views/login/index.php");
    }

    function xulipass(){
        $user = $_POST['user'];
        $pass_old = $_POST['pass_old'];
        $pass_new1 = $_POST['pass_new1'];
        $pass_new2 = $_POST['pass_new2'];
        $checkPassOld = $this->model->check($user);
        // $list = $checkPassOld ->rowCount();
        if($pass_new1 != $pass_new2){
            echo '<script language="javascript">';
            echo 'alert("Bạn nhập mật khẩu chưa giống nhau")';  //not showing an alert box.
            echo '</script>';
            header("Refresh:0; views/login/doipass.php");
        }elseif(strlen($pass_new1)<8){
            echo '<script language="javascript">';
            echo 'alert("Bạn nhập mật khẩu bạn nhập quá ngắn")';  //not showing an alert box.
            echo '</script>';
            header("Refresh:0; views/login/doipass.php");
        }elseif($checkPassOld['Password']!= $pass_old){
            echo '<script language="javascript">';
            echo 'alert("Bạn nhập mật cũ của bạn chưa đúng")';  //not showing an alert box.
            echo '</script>';
            header("Refresh:0; views/login/doipass.php");
        }else {
            $doipass = $this->model->updatePass($user, $pass_new1);
            echo '<script language="javascript">';
            echo 'alert("Mật khẩu của bạn đã được đổi thành công")';  //not showing an alert box.
            echo '</script>';
            header("Refresh:0; ../site");

        }
    }
    

    function logout() {
       session_destroy();
       header("location: ../site");
    }


    function doipass(){
        $username = $_SESSION['user'];
        $checkName = $this->model->checkofname($username);
        if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
            $checkName = $this->model->checkofname($username);
            header("location: views/login/doipass.php");
            // $viewFile = "views/cat.php"; 
        }else{
            header("location: views/login/index.php");
        }
       
    }

    function submit(){
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            //echo $username, $password;
            $row = $this->model->list_id_user($username);
            
            if($row){
                if($row['Password']==$password){ 
                    if($row['VaiTro']==1){
                        $_SESSION['admin']=$row['HoTen'];
                        header("location: ?ctrl=nhasanxuat");   
                        // echo '<script>
                        // window.location="http://localhost:81/php2/LAB4/banhang/admin/?ctrl=nhasanxuat"</script>';
                    }else{
                        $_SESSION['user']=$row['HoTen'];
                        header("location: ../site");
                        exit();
                    }
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Bạn nhập mật khẩu chưa chính xác")';  //not showing an alert box.
                    echo '</script>';
                    header("Refresh:0; views/login/");
                }
            }else{
                echo '<script language="javascript">';
                echo 'alert("Bạn nhập tài khoản chưa chính xác")';  //not showing an alert box.
                echo '</script>';
                header("Refresh:0; views/login/");
            }
        
        } 

    }

    
}

?>








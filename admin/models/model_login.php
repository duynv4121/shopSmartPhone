<?php
 require_once '../system/model_system.php';
    class model_login extends model_system {
    function list_id_user($username){ 
        $sql = "SELECT * FROM users where Username = '$username' ";
        $kq = $this->queryOne($sql);
        return $kq;
    }
    function check($user){
        $sql = "SELECT Password FROM users where Username = '$user' ";
        $kq = $this->query($sql);
        return $kq->fetch(PDO::FETCH_ASSOC);
    }

    function updatePass($user,$pass_new1){
        $sql="UPDATE users SET Password = '$pass_new1' WHERE Username = '$user'";
        $kq = $this->execute($sql);
        return $kq; 
    }

    function checkUser($email){
        $sql = "SELECT Email FROM users where Email = '$email' ";
        $kq = $this->query($sql);
        return $kq->fetch(PDO::FETCH_ASSOC);
    }

    function checkPass2($email){
        $sql = "SELECT Password FROM users where Email = '$email' ";
        $kq = $this->query($sql);
        return $kq->fetch(PDO::FETCH_ASSOC);
    }

    function checkofname($username){
        $sql = "SELECT Username FROM users where HoTen = '$username' ";
        $kq = $this->query($sql);
        return $kq->fetch(PDO::FETCH_ASSOC);
    }
}
?>
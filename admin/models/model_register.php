<?php

require_once '../system/model_system.php';
class model_register extends model_system {
    function check($Username){
        $sql = "SELECT * FROM users WHERE Username = '$Username'";
        $kq = $this->query($sql);
        return $kq;
    }
    function register($Username, $password, $Email, $HoTen, $phone, $address){
        $sql = "INSERT INTO users(Username, password, Email, HoTen, diachi, soDienThoai) VALUES ('$Username', '$password', '$Email', '$HoTen','$phone','$address')";
        $kq = $this->execute($sql);
        return $kq;
    }
}
?>
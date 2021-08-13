<?php
 require_once '../system/model_system.php';
 class model_users extends model_system {
      function store($Username,$Password,$HoTen,$urlHinh,$email){ 
          $sql = "INSERT INTO users (Username, Password, HoTen, urlHinh, email) values ('$Username',md5('$Password'),'$HoTen','$urlHinh','$email')";
          $kq = $this->execute($sql);
          return $kq;
          //hàm lưu 1 record vào table
      }
      function update($id, $Username, $HoTen, $urlHinh, $email){ 
          $sql="UPDATE users SET idUser='$id', Username='$Username', HoTen='$HoTen',urlHinh='$urlHinh',email='$email' WHERE idUser =$id";
          $kq = $this->execute($sql);
          return $kq;
      }
      function update2($id, $Username, $HoTen, $email){ 
        $sql="UPDATE users SET idUser='$id', Username='$Username', HoTen='$HoTen', email='$email' WHERE idUser =$id";
        $kq = $this->execute($sql);
        return $kq;
    }
      function delete($id){ 
          $sql = "DELETE FROM users WHERE idUser = $id";
          $kq = $this->execute($sql);
          return $kq; //hàm xóa 1 record khỏi table
      }
      function listrecords(){
          $sql = "SELECT * FROM users";
          $kq= $this->query($sql);
          return $kq;
     }
      function detailrecord($id){
          $sql = "SELECT * FROM users WHERE idUser = $id";
          $kq= $this->query($sql);
          return $kq;
      }
 }//class 
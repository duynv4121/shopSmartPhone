
<?php
 require_once '../system/model_system.php';
 class model_nhasanxuat extends model_system {
      function store($TenNSX,$ThuTu,$AnHien){ 
          $sql = "INSERT INTO nhasanxuat (TenNSX, ThuTu, AnHien) values ('$TenNSX','$ThuTu','$AnHien')";
          $kq = $this->execute($sql);
          return $kq;
          //hàm lưu 1 record vào table
      }
      function update($id,$TenNSX,$ThuTu,$AnHien){ 
          $sql="UPDATE nhasanxuat SET idNSX='$id', TenNSX='$TenNSX', ThuTu='$ThuTu',AnHien='$AnHien' WHERE idNSX =$id";
          $kq = $this->execute($sql);
          return $kq;
      }
      function delete($id){ 
          $sql = "DELETE FROM nhasanxuat WHERE idNSX = $id";
          $kq = $this->execute($sql);
          return $kq; //hàm xóa 1 record khỏi table
      }
      function listrecords(){
          $sql = "SELECT * FROM nhasanxuat";
          $kq= $this->query($sql);
          return $kq;
     }
      function detailrecord($id){
          $sql = "SELECT * FROM nhasanxuat WHERE idNSX = $id";
          $kq= $this->query($sql);
          return $kq;
      }
 }//class 
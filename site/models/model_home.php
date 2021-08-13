<?php
 require_once '../system/model_system.php';
 class model_home extends model_system {
    function sanphamMoi($sosp=6){ 
        $sql = "SELECT * FROM dienthoai WHERE AnHien=0 ORDER BY ThoiDiemNhap DESC LIMIT 0, $sosp";
        $kq= $this->query($sql);
        return $kq;
     }
     function detail($id=0){   
        $sql = "SELECT * FROM dienthoai WHERE idDT=$id";
        $kq= $this->query($sql);
        if (!$kq) return FALSE;
        $row = $kq -> fetch();
        return $row;
  }
  function thuoctinhdt($id=0){   
    $sql = "SELECT * FROM thuoctinhdt WHERE idDT=$id";
    $kq= $this->query($sql);
    if (!$kq) return FALSE;
    $row = $kq -> fetch();
    return $row;
}
function NSX(){
    $sql = "SELECT * FROM nhasanxuat";
    $kq= $this->query($sql);
    return $kq;
}

function sanphamtheoNSX($idNSX=0,$from, $soTinMotTrang){ 
    $sql = "SELECT * FROM dienthoai WHERE  idNSX=$idNSX 
            ORDER BY ThoiDiemNhap DESC LIMIT $from, $soTinMotTrang";
    $kq= $this->query($sql);
    return $kq;
  }


function SPBAnChay(){
    $sql = "SELECT * FROM dienthoai ORDER BY SoLanMua DESC LIMIT 6";
    $kq= $this->query($sql);
    return $kq;
}

function SPXem(){
    $sql = "SELECT * FROM dienthoai ORDER BY SoLanXem DESC LIMIT 6";
    $kq= $this->query($sql);
    return $kq;
}

function capnhatluotxem($id){
    $sql = "UPDATE dienthoai SET SoLanXem=SoLanXem + 1 WHERE idDT=$id";
    $kq = $this->execute($sql);
    return $kq;
}

function sanphamtheoloai($idNSX){
    $sql="SELECT * FROM dienthoai WHERE idNSX=$idNSX";
    $kq = $this->query($sql);
    return $kq;
}

function list($user){
    $sql="SELECT *FROM users WHERE HoTen = '$user'";
    $kq = $this->query($sql);
    return $kq->fetch(PDO::FETCH_ASSOC);
}

 

function rowBL( $comment,$idDT,$IdUser,$date){
    $sql = "INSERT INTO binhluan(NoiDungBl,idDT,idUser,ThoiDiemBL) VALUES ('$comment','$idDT','$IdUser','$date')";
    $kq = $this->execute($sql);
    return $kq;
}

function luudonhangnhe($idDH, $hoten, $email,$address,$phone,$note,$id,$date){  
    if ($idDH==-1){
    echo  $sql = "INSERT INTO donhang SET TenNguoiNhan='{$hoten}', EmailNguoiNhan='{$email}', ThoiDiemDatHang=Now(), AnHien=1, soDienThoaiNguoiNhan='{$phone}', diaChiNguoiNhan='{$address}', GhiChuCuaKhach='{$note}', idUser='{$id}', ThoiDiemGiaoHang='{$date}'";              
      $kq= $this->query($sql);
      if (!$kq) return FASLSE;
      else return $this->conn->lastInsertId();
      
    } else {
       $sql = "UPDATE donhang SET TenNguoiNhan='{$hoten}', EmailNguoiNhan='{$email}', ThoiDiemDatHang=Now(), AnHien=1 where idDH=$idDH";              
       $kq= $this->query($sql);
       if (!$kq) return FALSE;
           else return $idDH;
       }
}//function luudonhangnh

function luugiohangnhe($idDH, $giohang){
       $sql = "DELETE FROM donhangchitiet WHERE idDH='$idDH'";
       $this->query($sql);
       foreach ($giohang as $idDT=>$dt){
            $tenDT = $dt['TenDT'];
            $gia= $dt['Gia'];
            $Amount= $dt['Amount'];
            $sql = "INSERT INTO donhangchitiet SET idDH='$idDH', idDT= '$idDT', ". "TenDT='{$tenDT}', Gia='{$gia}', SoLuong='$Amount'";
            $kq= $this->query($sql);
       }//foreach
}


function listOrder($id){
    $sql="SELECT DISTINCT donhang.TenNguoiNhan, donhang.DiachiNguoiNhan, donhang.ThoiDiemGiaoHang, donhang.soDienThoaiNguoiNhan, donhang.GhiChuCuaKhach, donhangchitiet.TenDT, donhangchitiet.SoLuong, donhangchitiet.Gia FROM donhang, donhangchitiet WHERE  donhangchitiet.idDH = donhang.idDH and idUser = $id ";
    $kq = $this->query($sql);
    return $kq;

}

 }//class 
 ?>
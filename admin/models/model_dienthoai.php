<?php
require_once '../system/model_system.php';
class model_dienthoai extends model_system{
    function listrecords(){
        $sql = "SELECT * FROM  dienthoai";
        $kq= $this->query($sql);
        return $kq;

    }
    function listrecords2(){
        $sql = "SELECT * FROM  nhasanxuat";
        $kq= $this->query($sql);
        return $kq;

    }
    function store($TenDT,$Gia,$GiaKM,$urlHinh,$ThoiDiemNhap,$idNSX,$MoTa){
        $sql = "INSERT INTO  dienthoai (TenDT,Gia,GiaKM,urlHinh,ThoiDiemNhap,idNSX,MoTa) VALUES('$TenDT','$Gia','$GiaKM','$urlHinh','$ThoiDiemNhap','$idNSX','$MoTa')";
        $kq= $this->execute($sql);
        return $kq;
    }

    function delete($id){ 
        $sql = "DELETE FROM dienthoai WHERE idDT = $id";
        $kq = $this->execute($sql);
        return $kq; //hàm xóa 1 record khỏi table


    } 

    function list($idDT){
        $sql = "SELECT dienthoai.idDT, nhasanxuat.idNSX, nhasanxuat.TenNSX, dienthoai.TenDT, dienthoai.Gia, dienthoai.GiaKM,dienthoai.MoTa,dienthoai.ThoiDiemNhap FROM nhasanxuat, dienthoai WHERE idDT = $idDT limit 1";
        $kq = $this->query($sql);
        return $kq; 

    }

    function update($idDT, $TenDT, $Gia, $GiaKM, $ThoiDiemNhap, $MoTa, $urlHinh){
        $sql="UPDATE dienthoai SET idDT='$idDT', TenDT='$TenDT',urlHinh='$urlHinh', Gia='$Gia', GiaKM='$GiaKM', ThoiDiemNhap='$ThoiDiemNhap', MoTa='$MoTa' WHERE idDT = $idDT";
        $kq = $this->execute($sql);
        return $kq; 
    }

    function update2($idDT, $TenDT, $Gia, $GiaKM, $ThoiDiemNhap, $MoTa){
        $sql="UPDATE dienthoai SET idDT='$idDT', TenDT='$TenDT', Gia='$Gia', GiaKM='$GiaKM', ThoiDiemNhap='$ThoiDiemNhap', MoTa='$MoTa' WHERE idDT = $idDT";
        $kq = $this->execute($sql);
        return $kq; 
    }

    function listDetail($id){
        $sql = "SELECT * FROM  thuoctinhdt WHERE idDT=$id";
        $kq= $this->query($sql);
        return $kq;
    }

    function updateDetails($idDT, $ManHinh, $HeDieuHanh, $CameraSau, $CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSim,$DungLuongPin){
        $sql="UPDATE thuoctinhdt SET idDT='$idDT', ManHinh='$ManHinh',HeDieuHanh='$HeDieuHanh', CameraSau='$CameraSau', CameraTruoc='$CameraTruoc', CPU='$CPU', RAM='$RAM', BoNhoTrong='$BoNhoTrong', TheNho='$TheNho', TheSim='$TheSim', DungLuongPin='$DungLuongPin' WHERE idDT = $idDT";
        $kq = $this->execute($sql);
        return $kq;
    }

    function deleteDetails($id){
        $sql = "DELETE FROM thuoctinhdt WHERE idDT = $id";
        $kq = $this->execute($sql);
        return $kq; //hàm xóa 1 record khỏi table
    }

    function insertDetails($idDT, $ManHinh, $HeDieuHanh, $CameraSau, $CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSim,$DungLuongPin){
        $sql = "INSERT INTO  thuoctinhdt (idDT, ManHinh, HeDieuHanh, CameraSau, CameraTruoc,CPU,RAM,BoNhoTrong,TheNho,TheSim,DungLuongPin) VALUES('$idDT', '$ManHinh', '$HeDieuHanh', '$CameraSau', '$CameraTruoc','$CPU','$RAM','$BoNhoTrong','$TheNho','$TheSim','$DungLuongPin')";
        $kq= $this->execute($sql);
        return $kq;
    }

    function listPro($id){
        $sql = "SELECT * FROM  dienthoai WHERE idNSX = $id";
        $kq= $this->query($sql);
        return $kq;

    }


}
    



?>
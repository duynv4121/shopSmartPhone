<?php
require_once '../system/model_system.php';
class model_binhluan extends model_system{
    function listBL(){
        $sql= "SELECT  binhluan.idBL,  binhluan.ThoiDiemBL, dienthoai.urlHinh, dienthoai.TenDT, dienthoai.TenDT FROM dienthoai, binhluan WHERE dienthoai.idDT=binhluan.idDT limit 1";
        $kq= $this->query($sql);
        return $kq;
    }


    function demSoBL($id){
        $sql= "SELECT NoiDungBl FROM binhluan WHERE idDT = $id";
        $kq= $this->query($sql);
        return $kq;
    }


    function deleteBL($id){
        $sql = "DELETE FROM binhluan WHERE idBl = $id";
        $kq = $this->execute($sql);
        return $kq; //hàm xóa 1 record khỏi table
    }
}
?>
<?php
require_once "models/model_dienthoai.php";
class dienthoai {
    function __construct(){
        $this->model = new model_dienthoai();
        $act = "index";
        if(isset($_GET["act"])== true) $act=$_GET["act"];
        switch($act){
            case "index": $this->index(); break;
            case "addnew": $this->addnew(); break;
            case "store": $this->store(); break;
            case "delete": $this->delete(); break;
            case "edit": $this->edit(); break;
            case "update": $this->update(); break;
            case "details": $this->details(); break;
            case "editDetails": $this-> editDetails(); break;
            case "updateDetails": $this-> updateDetails(); break;
            case "deleteDetails": $this->  deleteDetails(); break;
            case "addDetails": $this->  addDetails(); break;
            case "addNewDetails": $this->  addNewDetails(); break;
            case "listPro": $this->  listPro(); break;
            
        }
    }
    function index(){
        $list = $this->model->listrecords();
        require_once "layout.php";
    }

    function addnew(){ 
        $list = $this->model->listrecords2();
        $page_title = "Thêm điện thoại";
        $page_file = "views/dienthoai_addnew.php";
        require_once "layout.php";
    }
    function store(){
        if(isset($_POST['nutsave'])){
            $TenDT = $_POST['TenDT'];
            $Gia = $_POST['Gia'];
            $GiaKM = $_POST['GiaKM'];
            $urlHinh = $_POST['urlHinh'];
            $ThoiDiemNhap = $_POST['ThoiDiemNhap'];
            $idNSX = $_POST['idNSX'];
            $MoTa = $_POST['MoTa'];
            $row = $this->model->store($TenDT,$Gia,$GiaKM,$urlHinh,$ThoiDiemNhap,$idNSX,$MoTa);
            header ('location: ?ctrl=dienthoai');

        }
        // $list = $this->model->listrecords2();
        // $page_title = "Thêm điện thoại";
        // $page_file = "views/dienthoai_addnew.php";
        // require_once "layout.php";
    }

    function delete(){
        if(isset($_GET['idDT'])){
            $id = $_GET['idDT'];
            echo $id;
            $list=$this->model->delete($id);
            header ('location: ?ctrl=dienthoai');
        }
    }
    function edit(){
        if(isset($_GET['idDT'])){
            $idDT = $_GET['idDT'];
            $list = $this->model->list($idDT);
            $listNSX = $this->model->listrecords2();
            $page_title = "Chỉnh sửa điện thoại";
            $page_file = "views/dienthoai_edit.php";
           
            require_once "layout.php";
        }
    }
    function update(){
        if(isset($_POST['nutsave'])){  
            $idDT = $_POST['idDT']; 
            $TenDT = $_POST['TenDT'];
            $Gia = $_POST['Gia'];
            $GiaKM = $_POST['GiaKM'];
            $ThoiDiemNhap = $_POST['ThoiDiemNhap'];
            $MoTa = $_POST['MoTa'];
            $urlHinh = $_POST['urlHinh'];
            // echo $idDT, $TenDT,$GiaKM,$Gia,$ThoiDiemNhap,$MoTa;
            // echo $TenDT;
            if($urlHinh!=""){
              // move_uploaded_file($_FILES['urlHinh']['tmp_name'],'../..banhang/admin/views/public/img/'.$urlHinh);
              $list = $this->model->update($idDT, $TenDT, $Gia, $GiaKM, $ThoiDiemNhap, $MoTa, $urlHinh);
            }else{
              $list = $this->model->update2($idDT, $TenDT, $Gia, $GiaKM, $ThoiDiemNhap, $MoTa);
            }
            // $list = $this->model->update($idDT, $TenDT, $Gia, $GiaKM, $ThoiDiemNhap, $MoTa, $urlHinh);
            header ('location: ?ctrl=dienthoai');
        
       /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit
        2. Kiểm tra hợp lệ các giá trị nhận được
        3. Gọi hàm cập nhật vào db
        4. Tạo thông báo     
        5. Chuyển hướng đến trang cần thiết */     
     
        }
    }
    function details(){
        if(isset($_GET['idDT'])){
            $id = $_GET['idDT'];
            $listDetail = $this->model->listDetail($id);
            $page_title = "Chi tiết điện thoại";
            $page_file = "views/dienthoai_details.php";
            require_once "layout.php";
        }
    }

    function editDetails(){
        if(isset($_GET['idDT'])){
            $id = $_GET['idDT'];
            $listEditDetails = $this->model->listDetail($id);
            $page_title = "Chirnh sửa thuộc tính điện thoại";
            $page_file = "views/dienthoai_details_edit.php";
            require_once "layout.php";

        }
    }

    function updateDetails(){
        if(isset($_POST['update'])){
            $idDT = $_POST['idDT'];
            $ManHinh = $_POST['ManHinh'];
            $HeDieuHanh = $_POST['HeDieuHanh'];
            $CameraSau = $_POST['CameraSau'];
            $CameraTruoc = $_POST['CameraTruoc'];
            $CPU = $_POST['CPU'];
            $RAM = $_POST['RAM'];
            $BoNhoTrong= $_POST['BoNhoTrong'];
            $TheSim = $_POST['TheSim'];
            $TheNho = $_POST['TheNho'];
            $DungLuongPin = $_POST['DungLuongPin'];
            // echo $idDT, $ManHinh, $HeDieuHanh, $CameraSau, $CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSim,$DungLuongPin;
            $list = $this->model->updateDetails($idDT, $ManHinh, $HeDieuHanh, $CameraSau, $CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSim,$DungLuongPin);
            header ('location: ?ctrl=dienthoai');
        }
    }

    function  deleteDetails(){
        if(isset($_GET['idDT'])){
            $id = $_GET['idDT'];
            // echo $id;
            $list = $this->model->deleteDetails($id);
            header ('location: ?ctrl=dienthoai');

        }
    }

    function addNewDetails(){
        $list = $this->model->listrecords();
        $page_title = "Thêm thuộc thính điện thoại";
        $page_file = "views/dienthoai_addNewDetails.php";
        require_once "layout.php";


    }

    function addDetails(){
        if(isset($_POST['update'])){
        $idDT = $_POST['idDT'];
        $ManHinh = $_POST['ManHinh'];
        $HeDieuHanh = $_POST['HeDieuHanh'];
        $CameraSau = $_POST['CameraSau'];
        $CameraTruoc = $_POST['CameraTruoc'];
        $CPU = $_POST['CPU'];
        $RAM = $_POST['RAM'];
        $BoNhoTrong= $_POST['BoNhoTrong'];
        $TheSim = $_POST['TheSim'];
        $TheNho = $_POST['TheNho'];
        $DungLuongPin = $_POST['DungLuongPin'];
        $row = $this->model->insertDetails($idDT, $ManHinh, $HeDieuHanh, $CameraSau, $CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSim,$DungLuongPin);
        header ('location: ?ctrl=dienthoai');
        // echo $idDT, $ManHinh, $HeDieuHanh, $CameraSau, $CameraTruoc,$CPU,$RAM,$BoNhoTrong,$TheNho,$TheSim,$DungLuongPin;
    }


}
        function listPro(){
            if(isset($_GET['idNSX'])){
                $id= $_GET['idNSX'];
                $page_title = "Danh sách điện thoại";
                $page_file = "views/dienthoai_listPro.php";
                $list = $this->model->listPro($id);
                require_once "layout.php";

            }
        }
}



?>
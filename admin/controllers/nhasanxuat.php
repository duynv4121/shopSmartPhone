<?php
require_once "models/model_nhasanxuat.php"; //nạp model để có các hàm tương tác db
class nhasanxuat {
     function __construct()   {
        $this->model = new model_nhasanxuat();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {    
             case "index": $this->index(); break;
             case "addnew": $this->addnew(); break;
             case "store": $this->store(); break;
             case "edit": $this->edit(); break;
             case "update": $this->update(); break;
             case "delete": $this->delete(); break;
             case "logout": $this->logout(); break;

        }
        // $this->$act;
     }
     function index(){
      $list = $this->model->listrecords();
      $page_title = "Danh sách nhà sản xuất";
      $page_file = "views/nhasanxuat_index.php";
      require_once "layout.php";
      
     }
     function addnew(){ 
      $page_title = "Danh sách nhà sản xuất";
      $page_file = "views/nhasanxuat_addnew.php";
      require_once "layout.php";
     }
     function store(){
      if(isset($_POST['nutsave'])){
        $TenNSX = $_POST['TenNSX'];
        $ThuTu = $_POST['ThuTu'];
        $AnHien = $_POST['AnHien'];
        $row = $this->model->store($TenNSX,$ThuTu,$AnHien);
        header ('location: ?ctrl=nhasanxuat');

      }

       /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
         1. Tiếp nhận các giá trị từ form addnew
         2. Kiểm tra hợp lệ các giá trị nhận được
         3. Gọi hàm chèn vào db
         4. Tạo thông báo     
         5. Chuyển hướng đến trang cần thiết*/
      
         
     }
     function edit(){
        if(isset($_GET['idNSX'])){
          $id = $_GET['idNSX'];
          settype ($idNSX , 'int');
          $list_one=$this->model->detailrecord($id);
          $page_file = "views/nhasanxuat_edit.php";
          require_once "layout.php";
          // $sql1 = "SELECT * FROM nhasanxuat WHERE idNSX=$id";
          // // $r1 = $conn->query($sql1);
          // // $r1 = $r1->fetch();
          // $page_file = "views/nhasanxuat_edit.php";

        }
       /* Chức năng hiện form edit 1 record
         1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...)
         2. Kiểm tra hợp lệ giá trị id
         3. Gọi hàm lấy record cần chỉnh (1 record)
         4. Nạp form chỉnh, trong form hiện thông tin của record,
         5. Form này cũng phải có method là Post, action trỏ lên act update*/     
     }
     function update(){
        if (isset($_POST['nutsave'])){  
            $id = $_POST['idNSX']; 
            $TenNSX = $_POST['TenNSX'];
            $ThuTu = $_POST['ThuTu'];
            $AnHien = $_POST['AnHien'];
            $list = $this->model->update($id,$TenNSX,$ThuTu,$AnHien);
            header ('location: ?ctrl=nhasanxuat');
        
       /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit
        2. Kiểm tra hợp lệ các giá trị nhận được
        3. Gọi hàm cập nhật vào db
        4. Tạo thông báo     
        5. Chuyển hướng đến trang cần thiết */     
      
     }
    }
     function delete(){
       if(isset($_GET['idNSX'])){
         $id = $_GET['idNSX'];
         $list=$this->model->delete($id);
         header ('location: ?ctrl=nhasanxuat');
       }
       /* Chức năng xóa record
        1. Tiếp nhận biến id của record cần xóa
        2. Gọi hàm xóa
        3. Tạo thông báo
        4. Chuyển đến trang cần thiết*/
     }
     function logout(){
        session_destroy();  
        header ("location: ../site");
      }
 } //class nhasanxuat
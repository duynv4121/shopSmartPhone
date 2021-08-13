<?php
require_once "models/model_users.php"; //nạp model để có các hàm tương tác db
class users {
     function __construct()   {
        $this->model = new model_users();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {    
             case "index": $this->index(); break;
             case "addnew": $this->addnew(); break;
             case "store": $this->store(); break;
             case "edit": $this->edit(); break;
             case "update": $this->update(); break;
             case "delete": $this->delete(); break;
        }
        //$this->$act;
     }
     function index(){
      $list = $this->model->listrecords();
      $page_title = "Danh sách users";
      $page_file = "views/users_index.php";
      require_once "layout.php";
      
     }
     function addnew(){ 
      $page_title = "Thêm thành viên";
      $page_file = "views/users_addnew.php";
      require_once "layout.php";
     }
     function store(){
      if(isset($_POST['nutsave'])){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $HoTen = $_POST['HoTen'];
        $urlHinh = $_POST['urlHinh'];
        $email = $_POST['email'];
        $row = $this->model->store($Username,$Password,$HoTen,$urlHinh,$email);
        header ('location: ?ctrl=users');

      }

       /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
         1. Tiếp nhận các giá trị từ form addnew
         2. Kiểm tra hợp lệ các giá trị nhận được
         3. Gọi hàm chèn vào db
         4. Tạo thông báo     
         5. Chuyển hướng đến trang cần thiết*/
    
     }
     function edit(){
        if(isset($_GET['idUser'])){
          $id = $_GET['idUser'];
          settype ($idUser , 'int');
          $list_one=$this->model->detailrecord($id);
          $page_title = "Chỉnh sửa thành viên";
          $page_file = "views/users_edit.php";
          require_once "layout.php";
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
            $id = $_POST['idUser']; 
            $Username = $_POST['Username'];
            $HoTen = $_POST['HoTen'];
            $urlHinh = $_POST['urlHinh'];
            $email = $_POST['email'];
            if($urlHinh!=""){
              // move_uploaded_file($_FILES['urlHinh']['tmp_name'],'../..banhang/admin/views/public/img/'.$urlHinh);
              $list = $this->model->update($id, $Username, $HoTen, $urlHinh, $email);
            }else{
              $list = $this->model->update2($id, $Username, $HoTen, $email);
            }
            // $list = $this->model->update($id, $Username, $HoTen, $urlHinh, $email);
            header ('location: ?ctrl=users');
        
       /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit
        2. Kiểm tra hợp lệ các giá trị nhận được
        3. Gọi hàm cập nhật vào db
        4. Tạo thông báo     
        5. Chuyển hướng đến trang cần thiết */     
     
     }
    }
     function delete(){
       if(isset($_GET['idUser'])){
         $id = $_GET['idUser'];
         $list=$this->model->delete($id);
         header ('location: ?ctrl=users');
       }
       /* Chức năng xóa record
        1. Tiếp nhận biến id của record cần xóa
        2. Gọi hàm xóa
        3. Tạo thông báo
        4. Chuyển đến trang cần thiết*/
     
     }
 } //class nhasanxuat
<?php
require_once "models/model_home.php"; //nạp model để có các hàm tương tác db
class home {
     function __construct()   {
        $this->model = new model_home();
        $act = "home";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//chức năng user request
        switch ($act) {    
	         case "home": $this->home(); break;
             case "detail": $this->detail(); break;
             case "cat": $this->cat(); break;
             case "cartprocess": $this->cart(); break;
             case "cartview": $this->cartview(); break;    
             case "comment": $this->comment(); break;     
             case "cartview": $this->cartview(); break;     
             case "cart": $this->cart(); break;   
             case "luudonhang": $this->luudonhang(); break;   
             case "camon": $this->camon(); break;   
             case "order": $this->order(); break;  
         }
             //$this->$act;
     }
     function home(){
        $listSPMoi = $this->model->sanphamMoi();  
        $listNSX = $this->model->NSX();  
        $listSPBanChay = $this->model->SPBanChay();
        $listSPXem = $this->model->SPXem();             
        $viewFile = "views/home.php";
        $page_title2 = "Sản phẩm bán chạy";
        $page_title3 = "Sản phẩm xem nhiều nhất";
        require_once "layout.php"; 
     }
     function detail(){
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        settype($id, "int");
        $sp = $this->model->detail($id);   
        $capNhatLuotXem = $this->model->capnhatluotxem($id);   
        $thuoctinh = $this->model->thuoctinhdt($id);    
        if($sp==FALSE) {
             header("location: ". SITE_URL."/thongbao");
             exit();
        }
        $page_title = "Chi tiết sản phẩm";
        $listNSX = $this->model->NSX(); 
        $viewFile = "views/detail.php";     
        require_once "layout.php"; 
    }
     }
     function cat(){
        if(isset($_GET['id'])){
        $idNSX = $_GET['id'];
        settype($idNSX, "int");
      //   pagination
        $soTinMotTrang = 1;
        if(isset($_GET['page'])){
           $page = $_GET['page'];
           settype ($page, "int");
        }else{
           $page = 1;
        }
        $from = ($page-1)*$soTinMotTrang;
        $listSP = $this->model->sanphamtheoNSX($idNSX, $from,$soTinMotTrang);
        $sanphamtheoloai = $this->model->sanphamtheoloai($idNSX); 
        $tongSp = $sanphamtheoloai->rowCount();
        $totalPage = ceil($tongSp / $soTinMotTrang);
      //   end pagination
        $listNSX = $this->model->NSX();  
        if($listSP==FALSE) {
             header("location: ". SITE_URL."/thongbao");
             exit();
        }
        $page_title = "Sản phẩm theo nhà sản xuất";
        $viewFile = "views/cat.php";     
        require_once "layout.php";  
     }
    }

    function comment(){
      if(isset($_SESSION['user']) && isset($_POST['binhluan'])){
            $date = date("Y/m/d");
            $comment = $_POST['comment'];
            $idDT = $_POST['id'];
            $user = $_SESSION['user'];           
            $listUser = $this->model->list($user);
            $IdUser = $listUser['idUser'];            
            $row = $this->model->rowBL( $comment,$idDT,$IdUser,$date);
            $url = $_SERVER['HTTP_REFERER'];
            header("location:" .$url);
            
            

       }elseif(isset($_SESSION['admin']) && isset($_POST['binhluan'])){
         $comment = $_POST['comment'];
         $id = $_POST['id'];
         $user = $_SESSION['admin'];
         // $listUser = "admin";
         $listUser = $this->model->list($user);
         $IdUser = $listUser['idUser'];
         echo $comment,$id,$IdUser;
         
    
      }else{
      header("location: ../admin/views/login");
    }

   
           
    }

   function cartview(){
      if(isset($_SESSION['user'])){
         $user = $_SESSION['user'];
         $list= $this->model->list($user);
         $idUser = $list['idUser'];
         $hoTen = $list['HoTen'];
         $email = $list['Email'];
         $phone = $list['soDienThoai'];
         $address = $list['diaChi'];

      }
      if(isset($_SESSION['admin'])){
         $user = $_SESSION['admin'];
         $list= $this->model->list($user);
         $hoTen = $list['HoTen'];
         $email = $list['Email'];
         $phone = $list['soDienThoai'];
         $address = $list['diaChi'];


      }
      $listNSX = $this->model->NSX(); 
       $viewFile = "views/cartview.php";
       require_once "layout.php";
       
   }

   function cart(){ 
      
      if(isset($_SESSION['admin'])|| isset($_SESSION['user'])){
         //Tiếp nhậtn biến id (mã sản phẩm) và what (để biết thêm/xóa sp)
         
      $id = $_GET['id'];  settype($id, "int");        
      $what ="add"; if(isset($_GET['what'])) $what = $_GET['what']; 
      if ($what=="add"){              
           if (isset($_SESSION['giohang'])==false) $_SESSION['giohang']=[]; //tạo mảng rổng nếu chưa có
           $spFromDB = $this->model->detail($id);  //if ($spFromDB==null) ...
           $spInCart = $_SESSION['giohang'][$id]; //['TenDT'=>'A','Amount'=>2]
           if ($spInCart!=null) $soluong=$spInCart['Amount']+1;
           else $soluong = 1;
           $_SESSION['giohang'][$id]=[
               'TenDT'=>$spFromDB['TenDT'],
               'Gia'=>$spFromDB['Gia'],
               'Amount' =>$soluong
          ];
          header("location: ?act=cartview");
      }//if what=="add"  
      if ($what=="remove"){
         unset($_SESSION['giohang'][$id]);
         header("location: ?act=cartview");
      }//$what=="remove"
 
      $viewFile = "views/cartview.php";
      require_once "layout.php";  
      }else{
         // echo '<script language="javascript">';
         // echo 'alert("Bạn hãy đăng nhập vào để thực hiện thao tác mua hàng")';  //not showing an alert box.
         // echo '</script>';
         header("location: ../admin/views/login/");
      }
      
 }//function cart


 function luudonhang(){
    // bang dơn hang
   $hoten = trim(strip_tags($_POST['HoTen']));
   $email = trim(strip_tags($_POST['email']));
   $address = trim(strip_tags($_POST['address']));
   $phone = trim(strip_tags($_POST['phone']));
   $note = $_POST['noteUser'];
   $id = $_POST['idUser'];
   $date = $_POST['date'];
   // $phuongthuctt = $_POST['phuongthuctt'];
   if(isset($_SESSION['idDH'])) $idDH= $_SESSION['idDH']; else $idDH="-1";
   $idDH = $this->model->luudonhangnhe($idDH, $hoten, $email,$address,$phone,$note, $id, $date);
   // bang don hang chi tiet
   if ($idDH){
      $_SESSION['idDH'] = $idDH;
      unset($_SESSION['idDH']);
      $giohang = $_SESSION['giohang'];
      // $this->model->luugiohangnhe($idDH, $giohang);
      // header("location: ?act=camon");
   }//if ($idDH)
}//function luudonhang

function camon(){
   $viewFile ="views/camon.php";
   require_once "layout.php";
}

function order(){
   if(isset($_SESSION['user'])){
      $user = $_SESSION['user'];
      $user = $this->model->list($user);
      $id = $user['idUser'];
      echo $id;
      $listOrder = $this->model->listOrder($id);

   }
   $viewFile = "views/order.php";
   require_once "layout.php";
}
   
   


     
 } //class home
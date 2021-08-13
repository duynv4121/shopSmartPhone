<?php

require_once "models/model_binhluan.php";
class binhluan{
    function __construct(){
        $this->model = new model_binhluan();
        $act = "index";
        if(isset($_GET["act"])== true) $act=$_GET["act"];
        switch($act){
            case "index": $this->index(); break;
            case "delete": $this->delete(); break;
            
        }

    }

    function index(){
        $list = $this->model->listBL();
        // $soBL = $this->model->demSoBL($id);
        $page_title = "Danh sách bình luận";
        $page_file = "views/binhluan_index.php";
        require_once "layout.php";
    }


    function delete(){
        if(isset($_GET['idBL'])){
            $id=$_GET['idBL'];
            $list = $this->model->deleteBL($id);
            header("location: ?ctrl=binhluan");
        }
        
        
        
    }
}

?>
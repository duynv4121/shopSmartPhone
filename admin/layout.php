<!-- <?php
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/bootstrap-4.5.3/css/bootstrap.min.css">
    <script src="../public/bootstrap-4.5.3/js/jquery.js"></script>
    <!-- <link rel="stylesheet" href="./views/public/main.css"> -->
    <script src="../public/bootstrap-4.5.3/js/bootstrap.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>
</head>

<body style="background-color: #f3f3f3;">
    <ul class="nav justify-content-end pr-3">
        <li class="nav-item">
            <a class="nav-link  text-dark p-0 mr-5 mt-1 mb-1" href="../site">Về trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark  p-0 mr-5 mt-1 mb-1" href="#">Liên hệ</a>
        </li>
        
        <?php
        if(isset($_SESSION['admin'])){
            ?>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1 mr-5"><?=$_SESSION['admin'];?></a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1" href="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=logout" onclick="alert('Bạn có chắc muốn đăng xuất')">Đăng xuất</a>
        </li>
    </ul>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark ">
        <div class="container   ">
            <ul class="navbar-nav text-dark">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Chính sách</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Chăm sóc  </a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown text-dark">
                    <a class=" text-dark nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Chính sách
                    </a>
                    <div class="dropdown-menu">
                        <a class="text-dark dropdown-item" href="#">Bảo hành</a>
                        <a class="text-dark dropdown-item" href="#">Trả góp</a>
                        <a class="text-dark dropdown-item" href="#">Đổi trả</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline" action="/action_page.php  justify-content-end">
                <input class="form-control  col-sm 4" type="text" placeholder="Bạn muốn tìm gì...">
                <!-- <button class="btn btn-success" type="submit">Search</button> -->
            </form>
        </div>

    </nav>

    <div id="carouselExampleControls" class="carousel slide col-sm-12 p-0" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 " src="../site/views/img/slide1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../site/views/img/slide2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../site/views/img/slide3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script>
    $('.carousel').carousel({
        interval: 3000
    })
    </script>
    <div class="container mt-5">
        <header class="row">
        </header>
         <h1 class="h5 py-2 border-bottom text-danger ">
         <?=(isset($page_title)==true)? $page_title:"Trang Quản Trị";?> </h1>
        <div class="row">
                <aside class="col-sm-3 mt-2 ">
                    <div class="card border-primary ">
                        <div class="card-body ">
                            <h4 class="card-title ">Danh mục</h4>
                            <div id="accordianId" role="tablist" aria-multiselectable="true">
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section1HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId"
                                                href="#section1ContentId" aria-expanded="true"
                                                aria-controls="section1ContentId">
                                                Danh sách nhà sản xuất
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section1ContentId" class="collapse in" role="tabpanel"
                                        aria-labelledby="section1HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item " style="display: block;">
                                                    <a class="nav-link" href="?ctrl=nhasanxuat">Danh sách nhà sản xuất</a>                                                  
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="?ctrl=nhasanxuat&act=addnew">Thêm nhà sản xuất</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section2HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId"
                                                href="#section2ContentId" aria-expanded="true"
                                                aria-controls="section2ContentId">
                                                Quản lí điện thoại
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section2ContentId" class="collapse in" role="tabpanel"
                                        aria-labelledby="section2HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="?ctrl=dienthoai">Danh sách điện thoai</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="?ctrl=dienthoai&act=addnew">Thêm điện thoai</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section3HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId"
                                                href="#section3ContentId" aria-expanded="true"
                                                aria-controls="section3ContentId">
                                                Quản lí thành viên
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section3ContentId" class="collapse in" role="tabpanel"
                                        aria-labelledby="section3HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="?ctrl=users">Danh sách thành viên</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="?ctrl=users&act=addnew">Thêm thành viên</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section4HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId"
                                                href="#section4ContentId" aria-expanded="true"
                                                aria-controls="section4ContentId">
                                                Quản lí bình luận
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section4ContentId" class="collapse in" role="tabpanel"
                                        aria-labelledby="section4HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="?ctrl=binhluan">Danh sách bình luận</a>
                                                </li>

                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                 
            <?php
                    if (file_exists($page_file)==true) require_once "$page_file";
                ?>
        </div>
    </div>
    <footer class="row mt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 mt-3">
                    <h3 class="footer__heading">Giới thiệu</h3>
                    <ul class="footer__list list-unstyled">
                        <li class="nav-item ">
                            <a href="" class="nav-link">Chắm sóc khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Tuyển dụng</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Điều khoản</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 mt-3">
                    <h3 class="footer__heading">Theo dõi</h3>
                    <ul class="footer__list list-unstyled">
                        <li class="nav-item ">
                            <a href="" class="nav-link">Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Telegram</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 mt-3">
                    <h3 class="footer__heading">Thanh toán</h3>
                    <ul class="footer__list list-unstyled">
                        <li class="nav-item ">
                            <a href="" class="nav-link">VISA</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Master card</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Nội địa</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 mt-3">
                    <h3 class="footer__heading">Chính sách</h3>
                    <ul class="footer__list list-unstyled">
                        <li class="nav-item ">
                            <a href="" class="nav-link">Bảo hành</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Đổi trả</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Trả góp</a>
                        </li>
                    </ul>
                </div>
                <h5 class="col-sm-12 mt-3 text-center ">2021 - Thuộc về bản quyền của Văn Duy PS12207-FPT Polytechnic
                    <br>No copyright
                </h5>
            </div>

        </div>

    </footer>

</body>

</html>
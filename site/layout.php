<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thầy chùa tập code</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="../public/bootstrap-4.5.3/css/bootstrap.css">
    <script src="../public/bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script src="../public/bootstrap-4.5.3/js/jquery.js"></script>
    <script src="../public/bootstrap-4.5.3/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body style="background-color: #f3f3f3;">
    <ul class="nav justify-content-end pr-3">
        <li class="nav-item">
            <a class="nav-link  text-dark p-0 mr-5 mt-1 mb-1" href="#">Tuyển dụng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark  p-0 mr-5 mt-1 mb-1" href="#">Liên hệ</a>
        </li>
        <?php
            if(isset($_SESSION['admin'])){
        ?>
        <li class="nav-item mr-5" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1" href="../admin/?ctrl=nhasanxuat">Quản trị</a>
        </li>
        <li class="nav-item mr-5" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1 "><?=$_SESSION['admin'];?></a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1" href="../admin?ctrl=nhasanxuat&act=logout">Đổi mật khẩu</a>
        </li>

        <?php
            }elseif(isset($_SESSION['user'])){
        ?>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1" ><?=$_SESSION['user']?></a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1 ml-5" href="../admin/?ctrl=login&act=logout" onclick="alert('Bạn có chắc muốn đăng xuất')">Đăng xuất</a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1 ml-5" href="../admin/?ctrl=login&act=doipass">Đổi mật khẩu</a>
        </li>
        <?php
        }else{
        ?>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1 mr-5" href="../admin/views/login" >Đăng nhập</a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link text-dark p-0 mt-1 mb-1" href="../admin/views/login/register.php" >Đăng ký</a>
        </li>
        <?php
        }
        ?>
    </ul>



    <nav class="navbar navbar-expand-sm bg-light navbar-dark ">
        <div class="container   ">
            <ul class="navbar-nav text-dark">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../site">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Chính sách</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Chăm sóc khách hàng </a>
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
                <li class="nav-item dropdown text-dark">
                    <a class=" text-dark nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Đơn hàng
                    </a>
                    <div class="dropdown-menu">
                        <a class="text-dark dropdown-item" href="?act=cartview">Xem giỏ hàng</a>
                        <a class="text-dark dropdown-item" href="?act=order">Đơn hàng của bạn</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline" action="/action_page.php  justify-content-end">
                <input class="form-control  col-sm 4" type="text" placeholder="Bạn muốn tìm gì...">
            </form>
        </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide col-sm-12 p-0" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 " src="views/img/slide1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="views/img/slide2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="views/img/slide3.png" alt="Third slide">
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
            <h3><?=(isset($page_title)==true)?$page_title:"Sản phẩm mới nhất";?> </h3>
            <div class="row col-sm-12">
                <article class="col-sm-9">
                    <?php if (file_exists($viewFile)) require_once "$viewFile";?>
                    <!--  -->
                    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                    <script>
                        AOS.init();
                        //navbar menu
                        function myFunction() {
                            var x = document.getElementById("menu");
                            if (x.style.display === "block") {
                                x.style.display = "none";
                            } else {
                                x.style.display = "block";
                            }
                        }
                    </script>

                </article>
                <aside class="col-sm-3 mt-2 ">
                    <div class="card border-primary row">
                        <div class="card-body ">
                            <h4 class="card-title ">Danh mục</h4>
                            <div id="accordianId" role="tablist" aria-multiselectable="true">
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section2HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
                                                Nhà sản xuất
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <?php  
                                                foreach($listNSX as $row){
                                                ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="?act=cat&id=<?=$row['idNSX'];?>"><?=$row['TenNSX'];?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section1HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
                                                Chủng loại
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item " style="display: block;">
                                                    <a class="nav-link" href="#">Phiên bản xách tay </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Phiên bản nội địa </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Phiên bản giới hạn </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" role="tab" id="section3HeaderId">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId" aria-expanded="true" aria-controls="section3ContentId">
                                                Hàng đặc biệt
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Phiên bản giới hạn</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Siêu sales mừng tết</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Phiên bản đặc biệt</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <img class="mt-3 ml-3 w-100" src="views/img/banner.png" alt="Banner">
                  
                </aside>
            </div>
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
                    <br>No copyright</h5>
            </div>

        </div>

    </footer>

</body>

</html>
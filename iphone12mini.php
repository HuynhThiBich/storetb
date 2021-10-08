<?php
// hàm `session_id()` sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
// - Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
if (session_id() === '') {
    // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone, Samsung, dịch vụ cài đặt và sữa chữa tại cần thơ</title>
    <!-- Liên kết bootstrap css -->
    <link href="averdor/bootstrap-4.6.0-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!--Liên kết awesome  -->
    <link href="averdor/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css"
        rel="stylesheet" />
    <!-- liên kết css -->
    <link href="css/app.css" type="text/css" rel="stylesheet" />
    <!-- Liên kết gg font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand textnav" href="index.php">TB PHONE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link " href="index.php"> <i class="fa fa-home" aria-hidden="true"></i>
                        TRANG CHỦ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gioithieu.php"><i class="fa fa-users" aria-hidden="true"></i> GIỚI THIỆU</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        APPLE IPHONE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="iphone12pro.php">iPHONE 12 Pro Max</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphone12mini.php">iPHONE 12 Mini</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphone11.php">iPHONE 11</a>
                      
                    </div>
                </li>
              
                <li class="nav-item active">
                    <a class="nav-link" href="tintuc.php">TIN TỨC</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="lienhe.php">LIÊN HỆ</a>
                </li>
            </ul>
          
            <ul class="navbar-nav ml-auto">
                   <?php 
                        if( isset($_SESSION['kh_tendangnhap_logged'])) : 
                    ?>

                        <li class="nav-item active">
                            <a class="nav-link">Chào <?= $_SESSION['kh_tendangnhap_logged']; ?></a>
                        </li>
                  
                        <li class="nav-item active">
                            <a class="nav-link" href="/storetb/logout.php">Đăng xuất</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="/storetb/login.php">Đăng nhập</a>
                        </li>
                    <?php endif; ?>
            </ul>
        </div>

    </nav><!-- Thanh nav -->

    <div style="background: none;" class="container  homepage">
        <div class="row ">
            <div class="col-md-3 khoangcach ">
                <ul class="list-group">
                    <li class="list-group-item active text-center" aria-current="true"> XU HƯỚNG MUA SẮM </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#1</span>
                        <a href="iphone12pro.php" style="text-decoration: none;">iPhone 12 Pro Max</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#2</span>
                        <a href="iphone11.php" style="text-decoration: none;">iPhone 11 Pro
                            Max</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#3</span>
                        <a href="galaxyFold.php" style="text-decoration: none;">Galaxy Fold</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#4</span>
                        <a href="iphonSE.php" style="text-decoration: none;">iPhone SE</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#5</span>
                        <a href="galaxyS.php" style="text-decoration: none;">Galaxy S</a>
                    </li>
                </ul>
            </div><!-- slider Trái -->

            <div class="col-md-9  ">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade sua " data-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <img src="img/covesr-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/4429992_GIAM1TR.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/iphone-chung-800-300-800x300-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/AW-S6-800-300-800x300.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- thanh slider caroule  -->
        </div>

        <div class="row">
            <div class="col-md-12 bgcolorcolmd12 text-center">
                <h2 class="display-4 font-weight-bold mt-2">iPhone 12 | 12 Mini </h2>
                <p><em>Kết nối 5G tốc độ cao, thiết kế iPhone 12 hoàn toàn mới. Cấu hình mạnh mẽ. Mặt gốm siêu cứng. Cảm
                        biến LiDAR.
                        <br /> Chế độ chụp ban đêm trên tất cả các camera.</em></p>
            </div>
            <div class="row dinhdangcontro">
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l1-didongviet.jpg" data-aos="zoom-in" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 5,090,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png\" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 64GB
                                    chính hãng (VN/A)</a></h5>
                            <h5 style="color: red;">19.900.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>24.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>5.970.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l1-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 5,500,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 128GB
                                    chính hãng (VN/A)</a></h5>
                            <h5 style="color: red;">21.490.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>26.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>6.447.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l1-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 4,600,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 256GB
                                    chính hãng (VN/A)</a></h5>
                            <h5 style="color: red;">24.390.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>28.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>7.317.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row dinhdangcontro">
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l2-mini-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 5,600,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 mini 64GB
                                    chính hãng (VN/A)</a></h5>
                            <h5 style="color: red;">16.390.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>21.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>4.917.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l2-mini-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 4,600,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 mini 128GB
                                    chính hãng (VN/A)</a></h5>
                            <h5 style="color: red;">17.990.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>23.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>5.397.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-pro-128gb-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 4,000,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 mini 256GB
                                    chính hãng (VN/A)</a></h5>
                            <h5 style="color: red;">21.990.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>25.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>7.977.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row dinhdangcontro">
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l1-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 2,000,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 cũ 64GB</a>
                            </h5>
                            <h5 style="color: red;">17.590.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>19.590.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>5.277.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <img src="img/iphone-12-l2-mini-didongviet.jpg" class="card-img-top img-fluid"
                            alt="iphone-12-pro-128gb-didongviet">
                        <div class="card-body khungcardbody">
                            <span class="sales">
                                <p class="salestex">Giảm 5,000,000đ</p>
                                <img class="sticker" src="img/discount-3228141-2697227.png" />
                            </span>
                            <h5 class="card-title text-primary "><a class="doimaumose" href="#">iPhone 12 128GB
                                    chính hãng (TBH)</a></h5>
                            <h5 style="color: red;">15.990.000 <sup><ins>đ</ins></sup></h5>
                            <p><s>20.990.000</s><sup><ins>đ</ins></sup></p>
                            <div class="tratruoc">
                                <label>Trả trước</span></label><br />
                                <span>7.977.000<sup><ins>đ</ins></sup></span>
                            </div>
                            <a href="dondathang.php" class="btn btn-success ">Đặt mua</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="row bgfooter" style="margin-left: 0px; margin-right: 0px;">
        <div class="col-md-4 dinhdangcontro">
            <div style="padding-left: 20px;">
                <h5><a style="text-decoration: none;" href="trangchu.html"><span style="color: red;">TB
                            PHONE.VN</span></a></h5>
                <p class="txtfooter"> &copy;2017. Công ty TNHH TB.</p>
                <p class="txtfooter">GPDKKD: 123 do sở KH & ĐT TP.HCM cấp ngày 21/5/2021</p>
                <p class="txtfooter">Địa chỉ: Lô G chung cư hùng vương,phường 11,quận 5,TPHCM</p>
                <p class="txtfooter">Điện thoại: 028. 39505060 . Email: info@tbphone.com.vn</p>
                <ul class="social-icon">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 dinhdangcontro" style="padding-left: 110px;
        padding-right: 0px;">
            <p style="margin-top: 17px;
            font-weight: bold;
            font-size: 15px;">Chứng nhận <img src="img/da-dang-ky.jpg" /></p>
            <img src="img/dmca_protected_sml_120n.png" />
        </div>
        <div class="col-md-4 dinhdangcontro" style="margin-top: 20px;font-weight: bold; ">
            <p>Thanh toán miễn phí</p>
            <img src="img/logo-jcb.png" />
            <img src="img/logo-vnpay (1).png" />
            <img src="img/logo-visa.png" />
        </div>
    </div>




    <!-- liên kết Jquery -->
    <script src="/storetb/averdor/jquery/jquery.min.js"></script>
    <!-- Liên kết bootstrap JS -->
    <script src="/storetb/averdor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>

</html>
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
    <!-- Liên kết Js -->
    <script src="java/app.js"></script>

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
                    <a class="nav-link" href="trangchu.php"> <i class="fa fa-home" aria-hidden="true"></i> TRANG CHỦ
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gioithieu.php"><i class="fa fa-users" aria-hidden="true"></i> GIỚI
                        THIỆU</a>
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
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphonSE.php">iPHONE SE</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SAMSUNG
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="galaxyS.php">GALAXY S</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="GalaxyNote.php">GALAXY NOTE</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="galaxyFold.php">GALAXY FOLD</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tintuc.php">TIN TỨC</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="lienhe.php">LIÊN HỆ</a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link  " href="dangnhap.php" tabindex="-1" aria-disabled="true">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav><!-- Thanh nav -->

    <div style="background: none;" class="container">
        <div style="text-align:center">
            <h2>Liên Hệ</h2>
            <p>Nếu bạn có bất kỳ câu hỏi, yêu cầu về dịch vụ, hãy liên hệ với chúng tôi tại đây.<br />Chúng tôi sẽ nhanh
                chóng hồi âm tất cả các yêu cầu của bạn.<br /></p>
        </div>
        <div class="row">
            <div class="column">
                <img src="img/map.jpg" style="width:100%">
            </div>
            <div class="column">
                <form id="frmlienhe" name="frmlienhe" method="POST" action="#">
                    <label for="flname">Họ và tên<span style="color: red;">*</span></label>
                    <input type="text" id="txthoten" name="txthoten" placeholder="Điền họ và tên của bạn">
                    <label>Số điện thoại<span style="color: red;">*</span></label>
                    <input type="text" name="txtsdt" id="txtsdt" placeholder="Nhập số điện thoại">
                    <label>Địa chỉ<span style="color: red;">*</span></label>
                    <input type="text" name="txtdiachi" id="txtdiachi" placeholder="Nhập địa chỉ">
                    <label for="country">Quốc gia<span style="color: red;">*</span></label>
                    <select id="slquocgia" name="slquocgia">
                        <option value="australia">Vietnamese</option>
                        <option value="canada">Singapore</option>
                        <option value="usa">ThaiLand</option>
                    </select>
                    <label for="subject">Góp ý<span style="color: red;">*</span></label>
                    <textarea id="subject" name="subject" placeholder="Nội dung góp ý" style="height:170px"></textarea>
                  
                    <input name="btnGui" type="submit" class="Button" id="btnGui" value="Gởi góp ý" onclick="return Gui()"/>
                    
                    <input  type="reset" class="BtnNhapLai" name="btnNhapLai" id="btnNhapLai" value="Nhập lại"/>
                </form>
            </div>
        </div>
    </div>
    
    <!-- contact -->
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
    <!-- Kết thúc footer -->







    <!-- liên kết Jquery -->
    <script src="averdor/jquery/jquery.min.js"></script>
    <!-- Liên kết bootstrap JS -->
    <script src="averdor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>

</html>
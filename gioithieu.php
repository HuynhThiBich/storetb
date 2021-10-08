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
                    <a class="nav-link" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> TRANG CHỦ
                        <span class="sr-only">(current)</span></a>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center; font-weight: bold;">Giới thiệu TB PHONE</h2>
            </div>
            <div class="col-md-12">
                <h5 style="font-weight: bold;">Giới thiệu chunng</h5>
                <p>Công ty Cổ phần Xây dựng và Đầu tư thương mại TB PHONE sở hữu chuỗi cửa hàng TB PHONE - là nhà bán lẻ hàng đầu, chuyên cung cấp các sản phẩm công nghệ chính hãng tại thị trường Việt Nam. Năm 1996,TB PHONE được thành lập, từng bước trở thành địa chỉ đáng tin cậy của người tiêu dùng Việt. Với khẩu hiệu “Nếu những gì chúng tôi không có, nghĩa là bạn không cần”, chúng tôi đã, đang và sẽ tiếp tục nỗ lực đem đến các sản phẩm công nghệ chính hãng đa dạng, phong phú đi kèm mức giá tốt nhất phục vụ nhu cầu của quý khách hàng. </p>
                <p>Sau hơn 20 năm phát triển, TB PHONE đã trở thành cái tên không còn xa lạ với người tiêu dùng trong nước. Hiện nay chúng tôi đang sở hữu mạng lưới hơn 60 chi nhánh phủ tại gần 40 tỉnh thành trên cả nước, trong đó bao gồm hai trung tâm bảo hành tại Hà Nội và một trung tâm bảo hành tại thành phố Hồ Chí Minh. Đến với chuỗi cửa hàng của TB PHONE, quý khách có thể hoàn toàn yên tâm về uy tín, chất lượng sản phẩm với mức giá rẻ hơn khoảng 15-20% so với giá bán trên thị trường. Song song với đó, chúng tôi cũng luôn nỗ lực phục vụ đem đến trải nghiệm dịch vụ tốt nhất cho khách hàng. </p>
                <h5 style="font-weight: bold;">Những dấu mốc quan trọng</h5>
                <ull>
                    <li>Năm 1996: Thành lập cửa hàng TB PHONE đầu tiên tọa lạc trên con phố sầm uất của Thủ đô Hà Nội ở địa chỉ 194 Lê Duẩn.</li>
                    <li>Năm 2000: TB PHONE chính thức trở thành nhà phân phối ĐTDĐ chính hãng hợp tác với nhiều nhãn hàng lớn hàng đầu</li>
                    <li>Năm 2006: Với kinh nghiệm 10 năm trong lĩnh vực bán lẻ, TB PHONE phát triển mạnh mẽ và liên tục mở thêm nhiều chi nhánh mới.</li>
                    <li>Năm 2020: TB PHONE tự hào trở thành nhà bán lẻ ủy quyền chính thức của Apple tại Việt Nam. Các sản phẩm Apple chính hãng VN/A do Apple Việt Nam phân phối được bán tại hệ thống TB PHONE với mức giá tốt nhất thị trường cùng chế độ bảo hành uy tín. </li>
                </ul>
                <h5 style="font-weight: bold;">Tôn chỉ hoạt động</h5>
                <p>TB PHONE luôn hoạt động dựa trên tôn chỉ đặt khách hàng là trung tâm, mọi nỗ lực để đạt được mục tiêu cao nhất là làm hài lòng người dùng thông qua các sản phẩm được cung cấp và dịch vụ khách hàng. TB PHONE đang từng bước xây dựng dịch vụ khách hàng vượt trội, xứng đáng là đơn vị bán lẻ hàng đầu tại Việt Nam. Sự tin tưởng và ủng hộ nhiệt tình của quý khách hàng tại chuỗi chi nhánh đã phần nào khẳng định hiệu quả hoạt động của đội ngũ nhân viên TB PHONE. </p>
                <p>Đối với quý khách hàng, chúng tôi luôn đặt cái tâm làm gốc, làm việc với tinh thần nghiêm túc, trung thực và có trách nhiệm, để mang tới trải nghiệm dịch vụ tốt nhất. </p>
                <p>Đối với đồng nghiệp, chúng tôi đề cao văn hóa học hỏi, đoàn kết, tương trợ lẫn nhau tạo nên môi trường làm việc tôn trọng - công bằng - văn minh cho nhân viên trong công ty. </p>
                <p>Đối với các đối tác, TB PHONE luôn làm việc dựa trên nguyên tắc tôn trọng, cùng tạo ra giá trị cho cộng đồng và cùng phát triển bền vững.  </p>
                <h5 style="font-weight: bold;">Tầm nhìn và sứ mệnh</h5>
                <p>Những năm qua, chúng tôi không ngừng cải thiện dịch vụ tại các chi nhánh và hỗ trợ khách hàng qua các kênh online. TB PHONE cam kết mang đến những sản phẩm chất lượng và chế độ bảo hành uy tín, sẵn sàng hỗ trợ khách hàng trong thời gian nhanh nhất.</p>
                <p>Trong tương lai, TB PHONE sẽ tiếp tục mở rộng hệ thống chi nhánh, hướng tới mục tiêu có mặt tại 63 tỉnh thành trên toàn quốc. Đồng thời, nâng cao chất lượng dịch vụ, hạn chế những rủi ro, lắng nghe và tiếp thu góp ý của quý khách hàng nhằm đem đến trải nghiệm tốt nhất khi mua sắm tại TB PHONE. </p>
                <p>Cuối cùng, TB PHONE hy vọng sẽ trở thành nhà tiên phong đưa những sản phẩm công nghệ mới nhất đến tay người dùng sớm nhất, tạo ra cuộc sống hiện đại nơi công nghệ kết nối con người, công nghệ phục vụ con người</p>
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
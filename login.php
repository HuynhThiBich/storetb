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
    <title>Đăng nhập Backend</title>
    
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
        <a class="navbar-brand textnav" href="#">TB PHONE</a>
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
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphonSE.php">iPHONE SE</a>
                    </div>
                </li>
                <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SAMSUNG
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="galaxyS.php">GALAXY S</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="GalaxyNote.php">GALAXT NOTE</a>
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
    </nav><!--kết thúc-->

            <?php
                // nếu người dùng đã đăng nhập
                if( isset($_SESSION['kh_tendangnhap_logged']) ) {
                    echo 'Bạn đã nhập rồi';
                    die;
                } 
            ?>
                <form name="frmdangnhap" id="frmdangnhap" method="post" action="">
                    <div class="form-group">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="kh_tendangnhap" id="kh_tendangnhap" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="kh_matkhau" id="kh_matkhau" class="form-control"/>
                    </div>
                    <button name="btndangnhap" id="btndangnhap" class="btn btn-primary">Đăng nhập</button>
                </form>

                <?php
                    // người dùng bấm nút login
                 if( isset($_POST['btndangnhap']) ) {
                     $kh_tendangnhap = $_POST['kh_tendangnhap'];
                     $kh_matkhau = $_POST['kh_matkhau'];
                   
                     // 1 mở kết nối
                    include_once __DIR__ . '/dbconnect.php';
                    // 2 chuẩn bị câu lệnh
                    $sqlDangNhap = " SELECT *
                                     FROM khachhang 
                                     WHERE kh_tendangnhap = '$kh_tendangnhap' AND kh_matkhau = '$kh_matkhau';
                                    "; 
                    // 3 thực thi câu lệnh
                    $result = mysqli_query($conn, $sqlDangNhap);

                   if( mysqli_num_rows($result) > 0 ) {

                        // Lưu thông tin Tên tài khoản user đã đăng nhập
                        $_SESSION['kh_tendangnhap_logged'] = $kh_tendangnhap;

                        echo 'Đăng nhập thành công'; 
                      // Điều hướng (redirect) về trang chủ
                        echo "<script>location.href = './index.php'; </script>";
                   }else {
                       echo 'Đã đăng nhập thất bại';
                      
                   }
                 }
                ?>
</body>
</html>
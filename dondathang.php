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
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphonSE.php">iPHONE SE</a>
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
    
    <?php
        // 1 mở kết nối
        include_once __DIR__ . '/dbconnect.php';

        // 2 chuẩn bị câu lệnh truy vấn
        $sqlkhachhang = "SELECT * FROM khachhang;";

        // 3 thực thi câu lệnh
       $resultkhachhang = mysqli_query ( $conn, $sqlkhachhang);

       // 4 thưc thi câu lệnh
       $datakhachhang = [];
       while($row = mysqli_fetch_array($resultkhachhang, MYSQLI_ASSOC )) {
           $datakhachhang[] = array(
               'kh_tendangnhap' => $row['kh_tendangnhap'],
               'kh_ten'         => $row['kh_ten'],
               'kh_dienthoai'   => $row['kh_dienthoai'],
           );
       }
       //----------------------------------------------

       // chuẩn bị câu lện lấy dữ liệu hinhthucthanhtoan
       $sqlHTTT = "SELECT * FROM hinhthucthanhtoan;";
       // thực thi câu lệnh
       $resultHTTT = mysqli_query($conn, $sqlHTTT);
       // phân tách dữ liệu
       $dataHTTT = [];
       while($row = mysqli_fetch_array($resultHTTT, MYSQLI_ASSOC )) {
        $dataHTTT[] = array(
            'httt_ma'   => $row['httt_ma'],
            'httt_ten'  => $row['httt_ten'],

        );
       }
       //-------------------------------------
       // lấy dữ liệu sản phẩm
       // truy ván dữ liệu Sản Phảm
       $sqlSanPham = "	SELECT * FROM sanpham;";

       // thực thi
       $resultSanPham = mysqli_query($conn, $sqlSanPham);

       // phân tách dữ liệu
       $dataSanPham = [];
       while($row = mysqli_fetch_array($resultSanPham, MYSQLI_ASSOC )) {
           $dataSanPham[] = array(
               'sp_ma'  => $row['sp_ma'],
               'sp_ten' => $row['sp_ten'],
               'sp_gia' => $row['sp_gia'],
           );
       }
    ?>

    <form  name="frmCreate" id="frmCreate" method="post" action="" style="width: 990px">
       <h3 style="text-align: center">Thông tin đơn hàng</h3>
       <div class="form-group">
           <label>Khách Hàng</label>
           <select name="kh_tendangnhap" id="kh_tendangnhap" class="form-control"> 
            <?php foreach($datakhachhang as $kh): ?>
                <option value="<?= $kh['kh_tendangnhap'] ?>"> <?= $kh['kh_ten'] ?> (<?= $kh['kh_dienthoai'] ?>) </option>
            <?php endforeach; ?>
           </select>
       </div>
       
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Ngày lập</label>
                    <input type="text" name="dh_ngaylap" id="dh_ngaylap" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Ngày giao</label>
                    <input type="text" name="dh_ngaygiao" id="dh_ngaygiao" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nơi giao</label>
                    <input type="text" name="dh_noigiao" id="dh_noigiao" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Trạng thái thanh toán </label> <br />
                    <label><input type="radio" name="dh_trangthaithanhtoan" id="dh_trangthaithanhtoan_1" value="0">Chưa thanh toán </label>
                    <label><input type="radio" name="dh_trangthaithanhtoan" id="dh_trangthaithanhtoan_2" value="1">Đã thanh toán </label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Hình thức thanh toán</label>
                    <select name="httt_ma" id="httt_ma" class="form-control">
                        <?php foreach ($dataHTTT as $httt): ?>
                            <option value="<?= $httt['httt_ma'] ?>"> <?= $httt['httt_ten'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>      
        </div>
        
        <h3>Thông tin chi tiết đơn hàng</h3>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Sản phẩm</label>
                    <select id="luachon_sanpham"  class="form-control">
                            <?php foreach($dataSanPham as $sp): ?>
                                <option value="<?= $sp['sp_ma'] ?>" data-spten="<?= $sp['sp_ten']?>" data-spgia="<?= $sp['sp_gia'] ?>">
                                                <?= $sp['sp_ten'] ?> (<?= number_format($sp['sp_gia'], 0, '.', ',') ?> đ)
                                </option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Số lượng</label>
                    <input id="luachon_soluong" class="form-control"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Xử lý</label>
                    <br />
                   <button type="button" id="btnThemSanPham" class="btn btn-secondary">Thêm vào đơn hàng</button>
                </div>
            </div>
        </div>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="tableChiTietDonHang">
               
                <!-- Lỗi JQUERY -->
                <!-- Không thêm được đơn hàng -->
                <!-- không xóa được được đơn hàng -->

            </tbody>
        </table>







        <button name="btnLuu" id="btnLuu" class="btn btn-primary text-center">Lưu</button>
    </form>
    <?php
        if(isset($_POST['btnLuu']) ) {
            $kh_tendangnhap     = $_POST['kh_tendangnhap'];
            $dh_ngaylap         = $_POST['dh_ngaylap'];
            $dh_ngaygiao        = $_POST['dh_ngaygiao'];
            $dh_noigiao         = $_POST['dh_noigiao'];
            $dh_trangthaithanhtoan = $_POST['dh_trangthaithanhtoan'];
            $httt_ma = $_POST['httt_ma'];
          

            // chuẩn bị câu lênh INSERT đơn hàng
            $sqlDonDatHang = "INSERT INTO dondathang
            (dh_ngaylap, dh_ngaygiao, dh_noigiao, dh_trangthaithanhtoan, httt_ma, kh_tendangnhap)
            VALUES ('$dh_ngaylap', '$dh_ngaygiao', '$dh_noigiao', $dh_trangthaithanhtoan, $httt_ma, 
            '$kh_tendangnhap')";

            // thực thi câu lệnh INSERT Đơn Đặt Hàng
             mysqli_query($conn, $sqlDonDatHang);

            // lấy Id......
             $dh_ma = $conn->insert_id;
             
             // lưu thông tin chi tiết đơn hàng
             $arrChiTietDonHang_sp_ma = $_POST['chitietdonhang_sp_ma'];
             $arrChiTietDonHang_sp_dh_soluong = $_POST['chitietdonhang_sp_dh_soluong'];
             $arrChiTietDonHang_sp_dh_dongia = $_POST['chitietdonhang_sp_dh_dongia'];
                // chuan bị thog tin
             $sodongchitiet = count($arrChiTietDonHang_sp_ma);
                for($i = 0; $i < $sodongchitiet; $i++ ) {
                    $sp_ma = $arrChiTietDonHang_sp_ma[$i];
                    $sp_dh_soluong = $arrChiTietDonHang_sp_dh_soluong[$i];
                    $sp_dh_dongia = $arrChiTietDonHang_sp_dh_dongia[$i];
                // chuẩn bi câu lẹnh INSERT table sanpham_dondathang
                $sqlInsertChiTiet = "INSERT INTO sanpham_dondathang (sp_ma, dh_ma, sp_dh_soluong, sp_dh_dongia)
                                    VALUES ( $sp_ma, $dh_ma, $sp_dh_soluong,  $sp_dh_dongia);";
                // thực thi câu lệnh
                mysqli_query($conn, $sqlInsertChiTiet);
             }

             // điều hướng trang
             echo "<script>location.href = './printDonDatHang.php?dh_ma=". $dh_ma ."'; </script>";
        } 
    ?>

       



    <div class="row bgfooter" style="margin-left: 0px; margin-right: 0px;">
        <div class="col-md-4 dinhdangcontro">
            <div style="padding-left: 20px;">
                <h5><a style="text-decoration: none;" href="index.php"><span style="color: red;">TB
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
    </div> <!-- kết thúc footer -->
            

    
    
            







    <!-- liên kết Jquery -->
    <script src="/storetb/averdor/jquery/jquery.min.js"></script>
    <!-- Liên kết bootstrap JS -->
    <script src="/storetb/averdor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>

    <!-- Dành riêng cho javascipt -->
    <script>
    $(function() {
        const formattedNumber = (value, decimals = 0, locale = 'en-US') => {
            const oNumber = new Intl.NumberFormat(locale, {
                maximumFractionDigits: decimals,
                minimumFractionDigits: decimals
            });

            return oNumber.format(value);
        };

        // Đăng ký sự kiện click cho thêm nút vào đơn hàng
        $('#btnThemSanPham').on('click', function() {
            var eleSanPhamOptinSelected = $('#luachon_sanpham option:selected');

            var tensanpham = eleSanPhamOptinSelected.data('spten');

            var giasanpham = eleSanPhamOptinSelected.data('spgia');

            var soluong = $('#luachon_soluong').val();

            var thanhtien = giasanpham * soluong;
            var sanpham_ma = $('#luachon_sanpham').val();


            var htmlNewRow = '<tr>';
            // cột tên sản phẩm
                htmlNewRow += '<td>';
                htmlNewRow += tensanpham;
                htmlNewRow +=   '<input type="hidden" name="chitietdonhang_sp_ma[]" value="' + sanpham_ma +'"/>';
                htmlNewRow += '</td>';
            // cột số lượng
                htmlNewRow += '<td>';
                htmlNewRow += soluong;
                htmlNewRow += '<input type="hidden" name="chitietdonhang_sp_dh_soluong[]" value="' + soluong + '"/>';

                htmlNewRow += '</td>';
            // cột đơn giá
                htmlNewRow += '<td>';
                htmlNewRow += formattedNumber(giasanpham);
                htmlNewRow += '<input type="hidden" name="chitietdonhang_sp_dh_dongia[]" value="'+ giasanpham +'"/>';
                htmlNewRow += '</td>';
            // cột thành tiền
                htmlNewRow += '<td>';
                htmlNewRow += formattedNumber(thanhtien);
                htmlNewRow += '</td>';
            // cột hành động
                htmlNewRow += '<td>';
                htmlNewRow += '<button type="button" class="btn btn-danger bt-xoaSanPham ">Xóa</button>';
                htmlNewRow += '</td>';

                htmlNewRow += '</tr>';
                // nhờ jquery tìm tbody
                // chèn vào nội dung bên trong HTML
                $('#tableChiTietDonHang').append(htmlNewRow);
        });

        // Đăng ký nút xóa ra khỏi đơn hàng
        $('#tableChiTietDonHang').on('click','.bt-xoaSanPham', function() {
            $(this).parent().parent().remove();
        });

    });
    </script>
</body>

</html>
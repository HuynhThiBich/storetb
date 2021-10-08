<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In</title>
    <link href="/storetb/averdor/paper/paper.css" type="text/css" rel="stylesheet" />
    <style>
        @page {size : A4}
    </style>
</head>
<body class="A4">
    <?php
        // mở kết nối
        include_once __DIR__ . '/dbconnect.php';
        
        // chuẩn bị câu lệnh
        $dh_ma = $_GET['dh_ma'];
        $sql = "SELECT ddh.dh_ma, ddh.dh_ngaylap, ddh.dh_ngaygiao, ddh.dh_noigiao, ddh.dh_trangthaithanhtoan, httt.httt_ten, kh.kh_ten, kh.kh_dienthoai,
		SUM(spddh.sp_dh_soluong * spddh.sp_dh_dongia) AS TongThanhTien
        FROM dondathang ddh
        JOIN khachhang kh ON ddh.kh_tendangnhap = kh.kh_tendangnhap
        JOIN hinhthucthanhtoan httt ON ddh.httt_ma = httt.httt_ma
        JOIN sanpham_dondathang spddh ON spddh.dh_ma = ddh.dh_ma
        WHERE ddh.dh_ma = $dh_ma
        GROUP BY ddh.dh_ma, ddh.dh_ngaylap, ddh.dh_ngaygiao, ddh.dh_noigiao, ddh.dh_trangthaithanhtoan, httt.httt_ten, kh.kh_ten, kh.kh_dienthoai;
        ";
        /* var_dump ($sql);
        die; */
        // thưc thi câu lênh
        $result = mysqli_query($conn, $sql);
        $dataDonDatHang = mysqli_fetch_array($result, MYSQLI_ASSOC);

        // chuan bi cau lenh lay du lieu
        $sqlChiTietDonHang = "SELECT sp.sp_ten, 
        lsp.lsp_ten,
        nsx.nsx_ten,
        spddh.sp_dh_soluong, spddh.sp_dh_dongia
        FROM sanpham_dondathang spddh
        JOIN sanpham sp ON spddh.sp_ma = sp.sp_ma
        JOIN loaisanpham lsp ON sp.lsp_ma = lsp.lsp_ma
        JOIN nhasanxuat nsx ON sp.nsx_ma = nsx.nsx_ma
        WHERE spddh.dh_ma = $dh_ma;";

        /* var_dump($sqlChiTietDonHang);
        die; */

        // thuc thi
        $resultChiTiet = mysqli_query($conn, $sqlChiTietDonHang);
        // phân tích dữ liệu
        $dataChiTietDonHang = [];
        while($row = mysqli_fetch_array($resultChiTiet, MYSQLI_ASSOC)) {
            $dataChiTietDonHang[]= [
                'sp_ten'  => $row['sp_ten'],
                'lsp_ten' => $row['lsp_ten'],
                'nsx_ten' => $row['nsx_ten'],
                'sp_ten' => $row['sp_ten'],
                'sp_dh_soluong' => $row['sp_dh_soluong'],
                'sp_dh_dongia' => $row['sp_dh_dongia'],
            ];
        }
    ?>
    <section class="sheet padding-20mm">
    <table border="1" style="width: 100%;">
        <tr>
            <td>
                <img src="/storetb/img/logodt.jpg" style="width: 100px; height: 100px;" >
            </td>
            <td>
                <h1>Chuỗi cửa hàng TB PHONE</h1>

            </td>
        </tr>
    </table>

    <h4 style="font-style: italic; text-decoration: underline;">Thông tin đơn hàng</h4>
    <table border="1" style="width: 100%; ">
        <tr>
            <td style="width:  150px;">Khách hàng:</td>
            <td>
               <b><?= $dataDonDatHang['kh_ten'] ?></b>
               (<?= $dataDonDatHang['kh_dienthoai'] ?>)
            </td>
        </tr>
        <tr>
            <td>Ngày lập:</td>
            <td>
                <?= date('d-m-Y H:i:s', strtotime($dataDonDatHang['dh_ngaylap'])) ?>
            </td>
        </tr>
        <tr>
            <td>Hình thức thanh toán:</td>
            <td>
                <?= $dataDonDatHang['httt_ten'] ?>
            </td>
        </tr>
        <tr>
            <td>Tổng thành tiền:</td>
            <td> <b><?= number_format($dataDonDatHang['TongThanhTien'], 0, '.', ',') ?></b> </td>
        </tr>
        
    </table>


    <h4 style="font-style: italic; text-decoration: underline;">Chi tiết đơn hàng</h4>
    <table border="1" style="width: 100%; ">
        <tr>
            <td>STT</td>
            <td>Sản Phẩm</td>
            <td>Số Lượng</td>
            <td>Đơn Giá</td>
            <td>Thành Tiền</td>
        </tr>
        <?php $stt = 1; 
            $TongThanhTien = 0;
        ?>
        <?php foreach($dataChiTietDonHang as $ct): ?>
            <tr>
                <td>
                    <?= $stt; ?>
                </td>
                <td>
                    <b><?= $ct['sp_ten'] ?></b><br />
                </td>
                <td>
                    <i><?= $ct['sp_dh_soluong'] ?></i>
                </td>
                <td>
                    <?= number_format( $ct['sp_dh_dongia'], 0, '.', '.' )?>
                </td>
                <td>
                    <?php 
                        $thanhtien = $ct['sp_dh_soluong'] * $ct['sp_dh_dongia']; 
                        $TongThanhTien += $thanhtien;
                    ?>
                    <?= number_format( $thanhtien, 0, '.', ',' )?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" style="text-algin: right;">
                Tổng thành tiền
            </td>
            <td>
                <?= number_format( $TongThanhTien, 0, '.', ',' )?> 
            </td>
        </tr>
    </table>
    </section>
</body>
</html>
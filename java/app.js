// kiểm tra
function Gui() {

    var hoten = document.getElementById("txthoten").value;
    var dienthoai = document.getElementById("txtsdt").value;
    var KiemTraDt = isNaN(dienthoai);
    var diachi = document.getElementById("txtdiachi").value;
    var gopy = document.getElementById("subject").value;

    // khai báo biến lưu lỗi
    var loi = "";
    // kiểm tra dữ liệu để thu thập lỗi
    if (hoten == "") {
        loi = loi + "Vui lòng nhập họ tên\n";
    }else if (hoten == "admin" ) {
        loi += "Vui lòng nhập họ tên khác";
    }else if (hoten.length < 10) {
        loi += "Vui lòng nhập họ tên từ 10 ký tự"
    }

    if (dienthoai == "") {
        loi = loi + "Vui lòng nhập số điện thoại\n";
    }else if (KiemTraDt == true) {
        loi += "Vui lòng nhập định dạng số\n";
    }else if (dienthoai.length > 10) {
        loi += "Vui lòng nhập số điện thoại từ 10 số\n"
    }

    if ( diachi =="") {
        loi = loi + "Vui lòng nhập địa chỉ\n"
    }else if (diachi.length < 10) {
        loi += "Vui lòng nhập địa chỉ từ 10 ký tự"
    }
    
    if (gopy =="") {
        loi = loi + "Vui lòng nhập nội dung\n"
    }else if (gopy.length < 20) {
        loi += "Vui lòng nhập nội dung từ 20 ký tự"
    }
    
    // nếu có lỗi xảy ra
    if (loi != "") {
        alert (loi)
        return false;
    }
    // ngược lại
     else {
         alert ("Cảm ơn bạn đã gửi góp ý")
         return true;
     }
}


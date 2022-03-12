$(document).ready(function() {

$.validator.addMethod("email", function(value, element) {
    return this.optional(element) || /^[^ ]+@[^ ]+\.[a-z]{2,3}$/.test(value);
}, 'Địa chỉ email chưa hợp lệ');

$("#form").validate({
    submitHandler: function(){
            $maHoSo = $('#inputMaHoSo').val();
            $maSinhVien = $('#inputMaSinhVien').val();
            $hoDem = $('#inputHoDem').val();
            $ten = $('#inputTen').val();
            $gioiTinh = $('#inputGioiTinh').val();
            $ngaySinh = $('#inputNgaySinh').val();
            $noiSinh = $('#inputNoiSinh').val();
            $danToc = $('#inputDanToc').val();
            $tonGiao = $('#inputTonGiao').val();
            $cmnd = $('#inputCmnd').val();
            $ngayCap = $('#inputNgayCap').val();
            $noiCap = $('#inputNoiCap').val();
            $sdt = $('#inputSDT').val();
            $email = $('#inputEmail').val();
            $diaChi = $('#inputDiaChi').val();
            $ghiChu = $('#inputGhiChu').val();
            $trangThai = $('#inputTrangThai').val();

            $.ajax({
                url: 'http://localhost/qlsv1/api/add_student.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    maHoSo: $maHoSo,
                    maSinhVien: $maSinhVien,
                    hoDem: $hoDem,
                    ten: $ten,
                    gioiTinh: $gioiTinh,
                    ngaySinh: $ngaySinh,
                    noiSinh: $noiSinh,
                    danToc: $danToc,
                    tonGiao: $tonGiao,
                    cmnd: $cmnd,
                    ngayCap: $ngayCap,
                    noiCap: $noiCap,
                    sdt: $sdt,
                    email: $email,
                    diaChi: $diaChi,
                    ghiChu: $ghiChu,
                    trangThai: $trangThai,
                },
                beforeSend: function(request) {
                    request.setRequestHeader("Authorization", "Bearer " + localStorage.getItem('result'));
                    console.log(localStorage.getItem('result'));
                },
                success: function(data) {
                    window.open('http://localhost/qlsv1/api/list_student.php');
                },
                error: function () {
                    window.open('http://localhost/qlsv1/api/list_student.php');
                }
            });
        },

        rules: {
            'maHoSo': {
                required: true,
                maxlength: 12,
                minlength: 6
            },
            'maSinhVien': {
                required: true,
                maxlength: 12,
                minlength: 6
            },
            'hoDem': {
                required: true,
            },
            'ten': {
                required: true,
            },
            'ngaySinh': {
                required: true,
            },
            'noiSinh': {
                required: true,
            },
            'sdt': {
                required: true,
                digits: true 
            },
            'email': {
                required: true,
                email: true
            },
            'diaChi': {
                required: true,
            },
        },
        messages: {
            'maHoSo': {
                required: "Hãy nhập mã hồ sơ",
                maxlength: "Bạn không được nhập quá 12 kí tự",
                minlength: "Bạn không được nhập dưới 6 kí tự"
            },
            'maSinhVien': {
                required: "Hãy nhập mã sinh viên",
                maxlength: "Bạn không được nhập quá 12 kí tự",
                minlength: "Bạn không được nhập dưới 6 kí tự"
            },
            'hoDem': {
                required: "Hãy nhập họ của bạn",
            },
            'ten': {
                required: "Hãy nhập tên của bạn",
            },
            'ngaySinh': {
                required: "Hãy nhập ngày sinh của bạn",
            },
            'noiSinh': {
                required: "Hãy nhập nơi sinh của bạn",
            },
            'sdt': {
                required: "Hãy nhập số điện thoại của bạn",
                digits: "Số điện thoại chưa hợp lệ"
            },
            'email': {
                required: "Hãy nhập email của bạn",
                email: "Địa chỉ email chưa hợp lệ"
            },
            'diaChi': {
                required: "Hãy nhập địa chỉ của bạn",
            },
        }
    })
});
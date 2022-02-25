let maHaSo = document.querySelector('#inputMaHoSo');
let maSinhVien = document.querySelector('#inputMaSinhVien');
let hoDem = document.querySelector('#inputHoDem');
let ten = document.querySelector('#inputTen');
let gioiTinh = document.querySelector('#inputGioiTinh');
let ngaySinh = document.querySelector('#inputNgaySinh');
let noiSinh = document.querySelector('#inputNoiSinh');

let dienThoai = document.querySelector('#inputSDT'); 
let error_dienThoai = document.querySelector('#errorDienThoai');

let email = document.querySelector('#inputEmail') ; 
let error_email = document.querySelector('#errorEmail');

let regex = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
let arrInput;

function check() {

    // check SDT
    if (dienThoai.value.length > 10) {
        error_dienThoai.style.display = "block";
        dienThoai.style.borderColor = "red";
    } else {
        error_dienThoai.style.display = "none";
        dienThoai.style.border = "1px solid lightgrey";
    }

    if (dienThoai.value == "") {
        dienThoai.style.borderColor = "lightgrey";
    }

    // check email 
    if (email.value.match(regex)) {
        email.style.border = "1px solid lightgrey";
        error_email.style.display = "none";
    } else {
        email.style.border = "1px solid red";
        error_email.style.display = "block";
    }

    if (email.value == "") {
        email.style.borderColor = "lightgrey";
        error_email.style.display = "none";
    }
}

function addStudent() {
    arrInput = [
        {'Mã hồ sơ': maHaSo.value}, 
        {'Mã sinh viên': maSinhVien.value},
        {'Họ đệm': hoDem.value},
        {'Tên': ten.value},
        {'Giới tính': gioiTinh.value},
        {'Ngày sinh': ngaySinh.value},
        {'Nơi sinh': noiSinh.value},
        {'Dân tộc': document.querySelector('#inputDanToc').value},
        {'Tôn giáo': document.querySelector('#inputTonGiao').value},
        {'CMND': document.querySelector('#inputCmnd').value},
        {'Ngày Cấp': document.querySelector('#inputNgayCap').value},
        {'Nơi cấp': document.querySelector('#inputNoiCap').value},
        {'Số điện thoại': dienThoai.value},
        {'Email': email.value},
        {'Địa chỉ': document.querySelector('#inputDiaChi').value},
        {'Ghi chú': document.querySelector('#inputGhiChu').value},
        {'Trạng thái': document.querySelector('#inputTrangThai').value}
    ]

    if (maHaSo.value == "" || maSinhVien.value == "" ||
        hoDem.value == "" || ten.value == "" ||
        gioiTinh.value == "" || ngaySinh.value == "" ||
        noiSinh.value == "" || email.value == "") {
        swal({
            icon: 'error',
            text: 'Hãy nhập đủ thông tin bắt buộc!',
            footer: '<a href="">Why do I have this issue?</a>'
            })
        }
    else {
        swal({
            title: "Chúc mừng",
            text: "Đã thêm sinh viên thành công!",
            icon: "success",
          }).then(ok => {
            if(ok) {
                window.location.reload();
            }
          })
        for (let i = 0; i < arrInput.length; i++) {
            console.log(arrInput[i]);
        }
    }
}
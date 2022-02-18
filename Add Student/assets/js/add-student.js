var arrInput = document.getElementsByTagName('input');
for (var i = 0; i < arrInput.length; ++i) {
  // ...
}

let maHoSo = arrInput[0].value;

let maSinhVien = arrInput[1].value;

let hoDem = arrInput[2].value;

let ten = arrInput[3].value;

let gioiTinh = document.querySelector('#inputGioiTinh');

let ngaySinh = arrInput[4].value;

let noiSinh = arrInput[5].value;

let danToc = arrInput[6].value;

let tonGiao = arrInput[7].value;

let soCmnd = arrInput[8].value;
let error_cmnd = document.querySelector('#errorCmnd');

let ngayCap = arrInput[9].value;

let noiCap = arrInput[10].value;

let dienThoai = arrInput[11].value;
let error_dienThoai = document.querySelector('#errorDienThoai');

let email = arrInput[12].value;
let error_email = document.querySelector('#errorEmail');

let diaChi = arrInput[13].value;

let ghiChu = arrInput[14].value;

let trangThai = document.querySelector('#inputTrangThai');
    
// var inputs, index;

// inputs = document.getElementsByTagName('input');
// for (index = 0; index < inputs.length; ++index) {
    
// }

let regex = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

function check() {
    // check CMND
    if(soCmnd.value.length > 12) {
        error_cmnd.style.display = "block";
        soCmnd.style.borderColor = "red";
    } else {
        error_cmnd.style.display = "none";
        soCmnd.style.border = "1px solid lightgrey";
    }

    if(soCmnd.value == "") {
        soCmnd.style.borderColor = "lightgrey";
    }

    // check SDT
    if(dienThoai.value.length > 10) {
        error_dienThoai.style.display = "block";
        dienThoai.style.borderColor = "red";
    } else {
        error_dienThoai.style.display = "none";
        dienThoai.style.border = "1px solid lightgrey";
    }

    if(dienThoai.value == "") {
        dienThoai.style.borderColor = "lightgrey";
    }

    // check email 
    if(email.value.match(regex)) {
        email.style.border = "1px solid lightgrey";
        error_email.style.display = "none";
    } else {
        email.style.border = "1px solid red";
        error_email.style.display = "block";
    } 

    if(email.value == "") {
        email.style.borderColor = "lightgrey";
        error_email.style.display = "none";
    }
}

function addStudent() {  
    console.log(arrInput.value);
    if(maHoSo.value == "" || maSinhVien.value == "" || hoDem.value == "" || 
        ten.value == "" || gioiTinh.value == "" || ngaySinh.value == "" || 
        noiSinh.value == "" || email.value == "") {
            swal ( "Oops" ,  "Bạn chưa nhập đủ những ô bắt buộc" );
    } 

    // var inputs = document.getElementsByTagName('input');
    // var i = [];
    //     for (var i = 0; i < inputs.length; ++i) {
    //         console.log(i);
    //     }

    // console.log(maHoSo.value);
    // console.log(maSinhVien.value);
    // console.log(hoDem.value);
    // console.log(ten.value);
    // console.log(gioiTinh.value);
    // console.log(ngaySinh.value);
    // console.log(noiSinh.value);
    // console.log(danToc.value);
    // console.log(tonGiao.value);
    // console.log(soCmnd.value);
    // console.log(ngayCap.value);
    // console.log(noiCap.value);
    // console.log(dienThoai.value);
    // console.log(email.value);
    // console.log(diaChi.value);
    // console.log(ghiChu.value);
    // console.log(trangThai.value);
    // console.log(inputs.value);
        // swal ({
        //     title: "Congrats",
        //     text: "You are logged in!",
        //     icon: "success",
        //     button: "Ok",
        //   });        
    }
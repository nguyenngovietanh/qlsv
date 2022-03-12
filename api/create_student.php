<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/add_student.css">
        <script src="https://kit.fontawesome.com/8303a6dc74.js" crossorigin="anonymous"></script>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Them sinh vien</title>
    </head>
    <body>
        <h3 class="mx-2 mt-2">Thêm mới sinh viên</h3>
        <form class="row g-6 mx-5" id="form" method="post">
            <div class="col-5 my-3"> 
              <label for="inputMaHoSo" class="form-label"><span>*</span> Mã hồ sơ</label>
              <input type="text" class="form-control" id="inputMaHoSo" name="maHoSo">
              <!-- <div id="errorMaHoSo">Không được để trống ô này</div> -->
            </div>
            <div class="col-5 my-3">
              <label for="inputMaSinhVien" class="form-label"><span>*</span> Mã sinh viên</label>
              <input type="text" class="form-control" id="inputMaSinhVien" name="maSinhVien">
              <!-- <div id="errorMaSinhVien">Không được để trống ô này</div> -->
            </div>
            <div class="col-5 my-3"> 
                <label for="inputHoDem" class="form-label"><span>*</span> Họ đệm</label>
                <input type="text" class="form-control" id="inputHoDem" name="hoDem">
                <!-- <div id="errorHoDem">Không được để trống ô này</div> -->
            </div>
            <div class="col-5 my-3">
                <label for="inputTen" class="form-label"><span>*</span> Tên</label>
                <input type="text" class="form-control" id="inputTen" name="ten">
                <!-- <div id="errorTen">Không được để trống ô này</div> -->
            </div>
            <div class="col-4 my-3">
                <label for="inputGioiTinh" class="form-label"><span>*</span> Giới tính</label>
                <select id="inputGioiTinh" class="form-select" name="gioiTinh">
                  <option>Nam</option>
                  <option>Nữ</option>
                  <option>Khác</option>
                </select>
            </div>
            <div class="col-4 my-3">
                <label for="inputNgaySinh" class="form-label"><span>*</span> Ngày sinh</label>
                <input type="date" class="form-control" id="inputNgaySinh" name="ngaySinh">
                <!-- <div id="errorNgaySinh">Không được để trống ô này</div> -->
            </div>
            <div class="col-4 my-3">
                <label for="inputNoiSinh" class="form-label"><span>*</span> Nơi sinh</label>
                <input type="text" class="form-control" id="inputNoiSinh" name="noiSinh">
                <!-- <div id="errorNoiSinh">Không được để trống ô này</div> -->
            </div>
            <div class="col-5 my-3">
                <label for="inputDanToc" class="form-label"> Dân tộc</label>
                <input type="text" class="form-control" id="inputDanToc" name="danToc">
            </div>
            <div class="col-5 my-3"> 
                <label for="inputTonGiao" class="form-label"> Tôn giáo</label>
                <input type="text" class="form-control" id="inputTonGiao" name="tonGiao">
            </div>
            <div class="col-4 my-3">
                <label for="inputCmnd" class="form-label"> Số CMND/CCCD</label>
                <input onkeyup="check()" type="number" class="form-control" id="inputCmnd" name="c">
                <!-- <div id="errorCmnd">Bạn đã nhập quá 12 số</div> -->
            </div>
            <div class="col-4 my-3">
                <label for="inputNgayCap" class="form-label"> Ngày cấp</label>
                <input type="date" class="form-control" id="inputNgayCap" name="ngayCap">
            </div>
            <div class="col-4 my-3">
                <label for="inputNoiCap" class="form-label"> Nơi cấp</label>
                <input type="text" class="form-control" id="inputNoiCap" name="noiCap">
            </div>
            <div class="col-4 my-3">
                <label for="inputSDT" class="form-label"><span>*</span> Điện thoại</label>
                <input type="number" class="form-control" id="inputSDT" name="sdt">
            </div>
            <div class="col-4 my-3">
                <label for="inputEmail" class="form-label"><span>*</span> Email cá nhân</label>
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
            <div class="col-10 my-3">
                <label for="inputDiaChi" class="form-label"><span>*</span> Địa chỉ liên hệ</label>
                <input type="text" class="form-control" id="inputDiaChi" name="diaChi">
                <!-- <div id="errorDiaChi">Không được để trống ô này</div> -->
            </div>
            <div class="col-10 mb-3">
                <label for="inputGhiChu" class="form-label"> Ghi chú</label>
                <input type="text" class="form-control" id="inputGhiChu" name="ghiChu">
            </div>
            <div class="col-2 mb-3">
                <label for="inputTrangThai" class="form-label"> Trạng thái sinh viên</label>
                <select id="inputTrangThai" class="form-select" name="trangThai">
                    <option>Đang đi học</option>
                    <option>Đã tốt nghiệp</option>
                    <option>Khác</option>
                </select>
            </div>
            <div class="col-6 px-5 mb-4 d-flex">
              <button type="submit" class="btn btn-primary" id="send-form">Thêm mới</button>
            </div>
            <div class="col-6 px-5 mb-4 d-flex justify-content-end">
                <button type="button" class="btn btn-danger border-white" id="submit" onclick="history.back()">Hủy</button>
              </div>
          </form>
    </body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript "></script>
    <script src="../assets/js/add_student.js"></script>
</html>

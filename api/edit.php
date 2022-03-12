<?php 
    include "../config/db.php";
    $ma_sinh_vien = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM `list_student` where ma_sinh_vien = '$ma_sinh_vien'");
    $row = mysqli_fetch_array($query);
?>

<div class="container-fluid"> 
        <h3 class="mx-2 mt-2">Sửa thông tin sinh viên</h3>
        <form class="row g-6 mx-5" method="POST" action="update.php?id=<?php echo $ma_sinh_vien; ?>">
            <div class="col-5 my-3"> 
              <label for="inputMaHoSo" class="form-label"><span>*</span> Mã hồ sơ</label>
              <input name="ma_ho_so" value="<?php echo $row['ma_ho_so']; ?>" onkeyup="check()" type="text" class="form-control" id="inputMaHoSo" required>
            </div>
            <div class="col-5 my-3">
              <label for="inputMaSinhVien" class="form-label"><span>*</span> Mã sinh viên</label>
              <input name="ma_sinh_vien" value="<?php echo $row['ma_sinh_vien']; ?>" type="text" class="form-control" id="inputMaSinhVien" required>
            </div>
            <div class="col-5 my-3"> 
                <label for="inputHoDem" class="form-label"><span>*</span> Họ đệm</label>
                <input name="ho_dem" value="<?php echo $row['ho']; ?>"  type="text" class="form-control" id="inputHoDem" required>
            </div>
            <div class="col-5 my-3">
                <label for="inputTen" class="form-label"><span>*</span> Tên</label>
                <input name="ten" value="<?php echo $row['ten']; ?>" type="text" class="form-control" id="inputTen" required>
            </div>
            <div class="col-4 my-3">
                <label for="inputGioiTinh" class="form-label"><span>*</span> Giới tính</label>
                <select name="gioi_tinh" value="<?php echo $row['gioi_tinh']; ?>" id="inputGioiTinh" class="form-select" required>
                  <option>Nam</option>
                  <option>Nữ</option>
                  <option>Khác</option>
                </select>
            </div>
            <div class="col-4 my-3">
                <label for="inputNgaySinh" class="form-label"><span>*</span> Ngày sinh</label>
                <input name="ngay_sinh" value="<?php echo $row['ngay_sinh']; ?>" type="date" class="form-control" id="inputNgaySinh" required>
            </div>
            <div class="col-4 my-3">
                <label for="inputNoiSinh" class="form-label"><span>*</span> Nơi sinh</label>
                <input name="noi_sinh" value="<?php echo $row['noi_sinh']; ?>" type="text" class="form-control" id="inputNoiSinh" required>
            </div>
            <div class="col-5 my-3">
                <label for="inputDanToc" class="form-label"> Dân tộc</label>
                <input type="text" class="form-control" id="inputDanToc">
            </div>
            <div class="col-5 my-3"> 
                <label for="inputTonGiao" class="form-label"> Tôn giáo</label>
                <input type="text" class="form-control" id="inputTonGiao">
            </div>
            <div class="col-4 my-3">
                <label for="inputCmnd" class="form-label"> Số CMND/CCCD</label>
                <input name="cmnd_cccd" value="<?php echo $row['cmnd_cccd']; ?>" type="number" class="form-control" id="inputCmnd">

            </div>
            <div class="col-4 my-3">
                <label for="inputNgayCap" class="form-label"> Ngày cấp</label>
                <input type="date" class="form-control" id="inputNgayCap">
            </div>
            <div class="col-4 my-3">
                <label for="inputNoiCap" class="form-label"> Nơi cấp</label>
                <input type="text" class="form-control" id="inputNoiCap">
            </div>
            <div class="col-4 my-3">
                <label for="inputSDT" class="form-label"><span>*</span> Điện thoại</label>
                <input name="sdt" value="<?php echo $row['SDT']; ?>" onkeyup="check()" type="number" class="form-control" id="inputSDT">
            </div>
            <div class="col-4 my-3">
                <label for="inputEmail" class="form-label"><span>*</span> Email cá nhân</label>
                <input name="email" value="<?php echo $row['Email']; ?>" onkeyup="check()" type="email" class="form-control" id="inputEmail" required>
            </div>
            <div class="col-10 my-3">
                <label for="inputDiaChi" class="form-label"> Địa chỉ liên hệ</label>
                <input name="dia_chi" value="<?php echo $row['dia_chi']; ?>" type="text" class="form-control" id="inputDiaChi">
            </div>
            <div class="col-10 mb-3">
                <label for="inputGhiChu" class="form-label"> Ghi chú</label>
                <input type="text" class="form-control" id="inputGhiChu">
            </div>
            <div class="col-2 mb-3">
                <label for="inputTrangThai" class="form-label"> Trạng thái sinh viên</label>
                <select id="inputTrangThai" class="form-select">
                    <option>Đang đi học</option>
                    <option>Đã tốt nghiệp</option>
                    <option>Khác</option>
                </select>
            </div>
            <div class="col-6 px-5 mb-4 d-flex">
              <button name="submit_form" type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
            <div class="col-6 px-5 mb-4 d-flex justify-content-end">
                <button type="button" class="btn btn-danger border-white" id="submit" onclick="history.back()">Quay lại</button>
              </div>
          </form>
          <script src="../assets/js/add_student.js"></script>
          <script src="../assets/js/jquery-3.6.0.min.js"></script>
          <link rel="stylesheet" href="../assets/css/add_student.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/list_student.css">
    <script src="https://kit.fontawesome.com/8303a6dc74.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/list_student.js"></script>
    <script src="../assets/js/api.js"></script>
    <title>Danh sách sinh viên</title>
</head>

<?php
    require_once './list_process.php';
?>

<div class="container-fluid">
        <header class="header d-flex justify-content-around align-items-center">
            <h2 class="m-3 fs-5">Danh sách sinh viên</h2>
            <a class="add-btn rounded-pill m-4 py-2 px-3" href="./create_student.php" style="text-decoration: none;"> &plus; Thêm mới sinh viên</a>
        </header>
        <div class="row mb-3">
            <div class="col-sm-9 d-flex g-6">
                <form action="">
                    <div class="row">
                        <label for="colFormLabel" class="col-sm col-form-label d-flex justify-content-end">Họ và tên</label>
                        <div class="col-sm-2 gx-6">
                            <input type="text" class="form-control" id="colFormLabel">
                        </div>
                        <label for="colFormLabel" class="col-sm col-form-label d-flex justify-content-end">Mã hồ sơ</label>
                        <div class="col-sm-2 gx-6">
                            <input type="text" class="form-control" id="colFormabel">
                        </div>
                        <label for="colFormLabel" class="col-sm col-form-label d-flex justify-content-end">Mã sinh viên</label>
                        <div class="col-sm-2 gx-6">
                            <input type="text" class="form-control" id="colFormLabel">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
                <div class="d-flex flex-row gx-6">
                    <button class="search-btn rounded mx-2"><i class="fa-solid fa-magnifying-glass px-2"></i></button>
                    <input type="search" class="form-control rounded-pill" id="colFormLabel" placeholder="Tìm kiếm theo từ khóa bất kì">
                </div>
            </div>        
        </div>
        
        <table class="table mt-5 text-center border border-collapse table-bordered" style="font-size: 15px;">
            <thead class="border border-secondary">
              <tr class="bg-gradient" style="background-color: #171263;">
                <th>STT</th>
                <th>Mã hồ sơ</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Nơi sinh</th>
                <th>CMND/CCCD</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    while($row = mysqli_fetch_array($query)){ 
                ?>
                    <tr class="bg-light" id="info_student">
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['ma_ho_so']; ?></td>
                        <td><?php echo $row['ma_sinh_vien']; ?></td>
                        <td><?php echo $row['ho']. " "; ?><?php echo $row['ten']; ?></td>
                        <td><?php echo $row['gioi_tinh']; ?></td>
                        <td><?php echo $row['ngay_sinh']; ?></td>
                        <td><?php echo $row['SDT']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['noi_sinh']; ?></td>
                        <td><?php echo $row['cmnd_cccd']; ?></td>
                        <td><?php echo $row['dia_chi']; ?></td> 
                        <td>
                            <a href="./edit.php?id=<?php echo $row['ma_sinh_vien']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="./delete.php?id=<?php echo $row['ma_sinh_vien']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>

            <div class="record d-flex justify-content-end">
                <div class="select m-auto">
                    <button class="bg-white border-0"><a href="list_student.php?page=<?php echo isset($_GET['page']) ? ( $_GET['page'] > 1 ? $_GET['page'] - 1 : 1) : 1 ?>"><i class="fa-solid fa-angle-left"></i></a></button>
                    <?php for($i = 1; $i <= $total_page; $i++) { ?>
                    <button class="px-2 rounded-circle border-0" style="background-color: #171263; color: #ffffff;"><a href="list_student.php?page=<?php echo $i ?>"><?php echo $i ?></a></button>
                    <?php } ?>
                    <button class="bg-white border-0"><a href="list_student.php?page=<?php echo isset($_GET['page']) ? ( $_GET['page'] > $total_page - 1 ? $total_page : $_GET['page'] + 1) : 2 ?>"><i class="fa-solid fa-angle-right"></i></a></button>
                </div>
                <div class="record-number d-flex position-absolute">
                    <label for="inputSoBanGhi" class="record-label"> Số bản ghi mỗi trang: </label>
                    <input type="number" class="record-form mr-1" id="inputSoBanGhi" style="height: 100%;">
                </div>
            </div>
    </div>
</html>
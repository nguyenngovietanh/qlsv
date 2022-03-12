<?php
    include('../config/db.php');
        $ma_ho_so = $_POST['ma_ho_so'];
        $ma_sinh_vien = $_POST['ma_sinh_vien'];
        $ho = $_POST['ho_dem'];
        $ten = $_POST['ten'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $noi_sinh = $_POST['noi_sinh'];
        $cmnd_cccd = $_POST['cmnd_cccd'];
        $dia_chi = $_POST['dia_chi'];
        $id = $_GET['id'];

        $query = "update list_student set ma_ho_so = '$ma_ho_so', ma_sinh_vien = '$ma_sinh_vien', ho = '$ho', ten = '$ten', gioi_tinh = '$gioi_tinh',
         ngay_sinh = '$ngay_sinh', sdt = '$sdt', email = '$email', noi_sinh = '$noi_sinh', cmnd_cccd = '$cmnd_cccd',
         dia_chi = '$dia_chi' where ma_sinh_vien = '$id'";
        $result = mysqli_query($connect, $query);
        header('location:list_student.php');
?>
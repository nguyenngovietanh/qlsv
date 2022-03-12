<?php
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST");
        header('Content-Type:application/json; charset=UTF-8');
        include('../config/db.php');
            $ma_ho_so = $_POST['maHoSo'];
            $ma_sinh_vien = $_POST['maSinhVien'];
            $ho = $_POST['hoDem'];
            $ten = $_POST['ten'];
            $gioi_tinh = $_POST['gioiTinh'];
            $ngay_sinh = $_POST['ngaySinh'];
            $SDT = $_POST['sdt'];
            $Email = $_POST['email'];
            $noi_sinh = $_POST['noiSinh'];
            $cmnd_cccd = $_POST['cmnd'];
            $dia_chi = $_POST['diaChi'];
            $query = "INSERT INTO list_student 
            (ma_ho_so, ma_sinh_vien, ho, ten, gioi_tinh, ngay_sinh, SDT, Email, noi_sinh, cmnd_cccd, dia_chi)
            VALUES ('$ma_ho_so', '$ma_sinh_vien', '$ho', '$ten', '$gioi_tinh', '$ngay_sinh', '$SDT', '$Email', '$noi_sinh', '$cmnd_cccd', '$dia_chi')";

            $result = mysqli_query($connect, $query);
            // $query = mysqli_query($connect, $sql);
            if($result){
                return $array =[
                    'msg'=>'Thành công',
                    'status'=>200
                ];
            } else {
                return $array =[
                    'msg'=>'Thất bại',
                    'status'=>404
                ];
            }
    ?>
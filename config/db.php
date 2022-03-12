<?php 
    $connect = mysqli_connect("localhost", "root", "", "qlsv");

    if (mysqli_connect_errno()) {
        echo "Kết nối không thành công: " .mysqli_connect_errno();
    }
?>


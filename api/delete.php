<?php
    include('../config/db.php');
        $id = $_GET['id'];

        $query = "delete from list_student where ma_sinh_vien = '$id'";
        $result = mysqli_query($connect, $query);
        header('location:list_student.php');
?>
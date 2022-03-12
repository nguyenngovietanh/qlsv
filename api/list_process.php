<?php
    require_once '../config/db.php';
    $limit = 4;
    $page = 1;
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    $offset = ($page - 1) * $limit;
    $query = mysqli_query($connect, "select * from `list_student` limit $limit offset $offset");
    $query_count = mysqli_query($connect, "select count(*) from `list_student`");
    $row_count = mysqli_fetch_array($query_count);
    $count = $row_count['count(*)'];
    $total_page = ceil($count/$limit);
?>
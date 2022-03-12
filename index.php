<?php
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/list_student.css">
    <script src="https://kit.fontawesome.com/8303a6dc74.js" crossorigin="anonymous"></script>        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <?php 
        if(isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'list':
                    header('location:api/list_student.php');
                    break;
                case 'add':
                    header('location:api/create_student.php');
                    break;
                default:
                    header('location:api/login.php');
                    break;
            }   
        } else {
            header('location:api/login.php');
        }
    ?>
</body>
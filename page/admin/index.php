<?php 
    session_start();
    require_once "./layout/Logout/logout.php";
    require_once "./unitity/handel.php";
    require_once "./connect/views.php";
    if(!isset($_SESSION['FullName'])) {
        header("location: ./layout/Login/");
        exit;
    }

    if(isset($_GET['status'])) {
        $status = getGet('status');
    } else {
        $status = 'Desk_Manager';
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="icon" href="https://lauwang.vn/wp-content/uploads/2020/07/cropped-gg-192x192.png" sizes="192x192">
    <link rel="stylesheet" href="./css/globle.css">
    <link rel="stylesheet" href="./css/order.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/news.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Quản trị website</title>
</head>
<body>
    <!-- phần header -->
    <?php require "./includes/header.php"?>
    <!-- // phần header -->

    <!-- Nột dung trang web -->
    <div class="margin-top-150"></div>
    <div class="container" style="padding-bottom: 50px;">
    <?php 
        switch($status):
            case "Menu_management":
                require_once "./layout/Menu_management/index.php";
                break;
            case "News_management":
                require_once "./layout/News_management/index.php";
                break;
            case "profile":
                require_once "./layout/profile/index.php";
                break;
            case "employee_manager":
                require_once "./layout/employee_manager/index.php";
                break;
            default:
                require_once "./layout/desk_manager/index.php";
        endswitch;
    ?>
    </div>
    <?php require_once "./includes/script.php"?>
</body>
</html>

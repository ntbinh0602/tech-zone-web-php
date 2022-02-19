<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="../assets/css/admin_stylesheet.css" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../assets/css/admin_stylesheet.css" rel="stylesheet" type="text/css" />
    <!-- Table -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    </script>
    <title>Admin Page</title>
</head>
<body>
    <?php
    include 'connect.php'; 
    ?>
    <div id="header">

        <div class="header-logo">
            <a href="overview.php">
                <img src="../assets/img/logoo.png" alt=""/>
            </a>
        </div>
        <div class="header-nav nav-left">
            <ul>
                <li><a href="../index.php"><i class="fas fa-reply header-icon"></i>Đến trang web</a></li>
                <li><a href="#"><i class="fas fa-star-half-alt header-icon"></i>Đánh giá sản phẩm</a></li>
                <li>
                    <a href="orders.php"><i class="fas fa-shopping-bag header-icon"></i>Đơn hàng</a>
                </li>
            </ul>
        </div>

        <div class="header-nav nav-right">
            <ul>
                <li><a href="#"><i class="fas fa-bell header-icon"></i>
                    <span class="notification-bell">4</span>
                </a></li>
                <li><a href="#"><i class="fas fa-user-circle header-icon"></i>admin1</a></li>
            </ul>
        </div>

   </div>

   <div id="main">
       <div class="main-nav">
            <ul class="main-nav-list">
                <div class="admin-inf">
                    <img src="../assets/img/user1.png" alt=""/>
                    <div class="admin-sub-inf">
                        <h4>Nguyễn Trọng Bình</h4>
                        <h5>Administrator</h5>
                    </div>
                </div>
                <li><a href="overview.php"><i class="fas fa-chart-line nav-list-icon"></i>Tổng quan</a></li>
                <li class="button-table"><a class="button-table-drop" href="#">
                    <i class="fas fa-table nav-list-icon"></i>Quản lý<i class="drop-menu-icon fas fa-chevron-right"></i></a>
                    <ul class="sub-nav-list-table">
                        <li><a href="category.php">Danh mục</a></li>
                        <li><a href="products.php">Sản phẩm</a></li>
                        <li><a href="accounts.php">Thành viên</a></li>
                        <li><a href="supplier.php">Nhà cung cấp</a></li>
                        <li><a href="banner.php">Banner</a></li>
                        <li><a href="promotion.php">Khuyến mãi</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-book nav-list-icon"></i>Thống kê</a></li>
            </ul>
       </div>
       <div class="main-content">



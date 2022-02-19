<?php 
    session_start();  
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../assets/css/admin_stylesheet.css" rel="stylesheet" type="text/css" />
    <!-- Table -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <!-- Chart --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<?php
    include 'connect.php'; 
    ?>
    <div id="header">
        <div class="header-logo">
            <a href="overview.php">
                <img src="../assets/img/loogoo.png" alt=""/>
            </a>
        </div>
        <div class="header-nav">
            <ul class="nav-item">
                <li><a href="#"><i class="fas fa-bell header-icon"></i>
                    <span class="notification-bell">4</span>
                </a></li>
                <li><a href="#" class="box-user"><i class="fas fa-user-circle header-icon"></i><?php echo $_SESSION['username']?></a>
                    <ul class="sub-list-account">
                        <li><a href="#"><i class="fas fa-id-badge icon-list-account"></i>Tài khoản</a></li>
                        <li><a href="#"><i class="fas fa-cog icon-list-account"></i>Cài đặt</a></li>
                        <li><a href="#"><i class="fas fa-shield-alt icon-list-account"></i>Khóa màn hình</a></li>
                        <li><a href="../logout.php" onClick="return confirm('Bạn có muốn đăng xuất tài khoản không?')"><i class="fas fa-sign-out-alt icon-list-account"></i>Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>

   </div>

   <div id="main">
       <div class="main-nav">
            
                <div class="admin-inf">
                    <div class="img"><img src="../assets/img/user1.png" alt=""/></div>
                    <?php $user_id = $_SESSION['username'];
                        $sql = "SELECT * FROM accounts WHERE UserName = '$user_id'";
                        $result = mysqli_query($connect, $sql); 
                                foreach ($result as $key => $value) {?>
                    <div class="admin-sub-inf">
                        <h4><?php echo $value['FullName']?></h4>
                        <h5>Administrator</h5>
                    </div>
                    <?php } ?>
                </div>
                <ul class="main-nav-list">
                    <li><a href="overview.php"><i class="fas fa-chart-line nav-list-icon"></i>Tổng quan</a></li>
                    <li class="button-table"><a class="button-table-drop" href="#">
                        <i class="fas fa-table nav-list-icon"></i>Quản lý<i class="drop-menu-icon fas fa-chevron-right"></i></a>
                        <ul class="sub-nav-list-table">
                            <li><a href="category.php">+ Danh mục</a></li>
                            <li><a href="products.php">+ Sản phẩm</a></li>
                            <li><a href="accounts.php">+ Thành viên</a></li>
                            <li><a href="supplier.php">+ Nhà cung cấp</a></li>
                            <li><a href="banner.php">+ Banner</a></li>
                            <li><a href="promotion.php">+ Khuyến mãi</a></li>
                            <li><a href="orders.php">+ Đơn hàng</a></li>
                        </ul>
                    </li>
                    <li><a href="statistical.php"><i class="fas fa-book nav-list-icon"></i>Thống kê</a></li>
                </ul>
       </div>
       <div class="main-content">
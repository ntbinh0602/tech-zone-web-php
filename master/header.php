<?php
    session_start();
    include './admincode/connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/66f79e327f.js" crossorigin="anonymous"></script>
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js" integrity="sha512-0nVWK03Ud0k6o8wDkri8jxX9zQIn00ZHVud3iqBTwd2bGFwJDQShGVb3+vX1adCRxQckKQrIQMFmIA3tfWe+Mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/master.css">
    <link rel="stylesheet" href="./assets/css/slide.css">
    <link rel="stylesheet" href="./assets/css/signIn.css">
    <link rel="stylesheet" href="./assets/css/signUp.css">
    <link rel="stylesheet" href="./assets/css/responvise.css">
    <link rel="stylesheet" href="./assets/css/quickOrder.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/Product-detail.css">
    <link rel="stylesheet" href="./assets/css/slide-product.css">
    <link rel="stylesheet" href="./assets/css/search.css">
    <title>Document</title>
</head>

<body>
    <div class="whole">
        <div class="header">
            <div class="header-mobile-search">
                <div class="mobile-menu">
                    <div id="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="header-top">
                        <ul class="header-top header-top__nav">
                            <li><a href="">Giới thiệu</a><i class="fas fa-chevron-right"></i></li>
                            <li id="func1" class="btn-signin hide1">
                                <img src="./assets/img/no-avatar.png" alt="">
                                <div class="user-name">
                                    <a href="signin.php">Đăng nhập</a>
                                    <span>Đăng nhập để nhận nhiều ưu đãi</span>
                                </div>
                                <div class="close-mobile-menu">
                                    <i class="fas fa-times"></i>
                                </div>
                            </li>
                            <li id="func2" class="btn-signin hide2">
                                <img src="./assets/img/no-avatar.png" alt="">
                                <div class="user-name">
                                    <a href="accountManagement.php"><?php echo $_SESSION['username'] ?></a>
                                    <span>Đăng nhập để nhận nhiều ưu đãi</span>
                                </div>
                                <div class="close-mobile-menu">
                                    <i class="fas fa-times"></i>
                                </div>
                        <?php 
                        if(isset($_SESSION['username'])){
                            echo '<script>var element1 = document.getElementById("func2");
                            element1.classList.remove("hide2");</script>';
                        }else{
                            echo '<script>var element1 = document.getElementById("func1");
                            element1.classList.remove("hide1");</script>';
                        }
                        ?>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header header__with-search-box">
                    <div class="header__search-box mg20">
                        <a href="index.php">
                            <img src="./assets/img/nlogoo.png" alt="" class="header__search__logo">
                        </a>
                        <form action="search.php" method="get">
                            <div class="header-with__search-box">
                                <input type="text" id="search-bar" name="search" class="js-search" placeholder="Hôm nay bạn cần tìm gì?" name="" id="">
                                <button type="submit" name="ok" value="search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div class="header__order">
                            <a href="<?php if(isset($_SESSION['username'])){echo 'OrderMana.php';}else{Echo 'signin.php';} ?>" class="header__order-andCart header__order--buy">
                                <i class="fas fa-shipping-fast"></i>
                                <span>Lịch sử mua <br> hàng</span>
                            </a>
                        </div>
                        <div class="header__cart--shopping">
                            <a href="cart.php" class="">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <label><?php
                                    if (isset($_SESSION['cart'])) {
                                        $item = $_SESSION['cart'];
                                        echo count($item);
                                    } else {
                                        echo '0';
                                    } ?></label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-list">
            <div class="header__menu">
                <ul class="header__menu--items">
                    <?php
                        $sql_getdata = "SELECT *  FROM category ";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row1 = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <li><a class="header__menu--items header__menu--item" href="Category.php?&id_category=<?php echo $row1['Id_category']; ?>">
                            <?php echo $row1['CategoryIcon'] ?>
                            <span><?php echo $row1['CategoryName'] ?></span>
                        </a>
                    </li>
                    <?php }}?>
                </ul>
            </div>
        </div>
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
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/master.css">
    <link rel="stylesheet" href="./assets/css/slide.css">
    <link rel="stylesheet" href="./assets/css/signIn.css">
    <link rel="stylesheet" href="./assets/css/signUp.css">
    <link rel="stylesheet" href="./assets/css/responvise.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/quickOrder.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <title>Document</title>
</head>

<body>
    <?php include 'connect.php' ?>
    <div class="whole">
        <div class="header">
            <div class="header-mobile-search">
                <div class="mobile-menu">
                    <div id="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="header-top">
                        <ul class="header-top header-top__nav">
                            <li><a href="">Bản mobile</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="">Giới thiệu</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="">Sản phẩm đã xem</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="">Trung tâm bảo hành</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="">Hệ thống 75 siêu thị</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="">Tuyển dụng</a><i class="fas fa-chevron-right"></i></li>
                            <li><a href="">Tra cứu đơn hàng</a><i class="fas fa-chevron-right"></i></li>
                            <li class="btn-signin">
                                <img src="./assets/img/no-avatar.png" alt="">
                                <div class="user-name">
                                    Đăng nhập
                                    <span>Đăng nhập để nhận nhiều ưu đãi</span>
                                </div>
                                <div class="close-mobile-menu">
                                    <i class="fas fa-times"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header header__with-search-box">
                    <div class="header__search-box mg20">
                        <a href="index.html">
                            <img src="./assets/img/logo.png" alt="" class="header__search__logo">
                        </a>
                        <div class="header-with__search-box">
                            <input type="text" id="search-bar" class="js-search" placeholder="Hôm nay bạn cần tìm gì?"
                                name="" id="">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <div class="header__order">
                            <a href="" class="header__order-andCart header__order--buy">
                                <i class="fas fa-shipping-fast"></i>
                                <span>Kiểm tra đơn <br> hàng</span>
                            </a>
                        </div>
                        <div class="header__cart--shopping">
                            <a href="" class="">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            <label>0</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-list">
            <div class="header__menu">
                <ul class="header__menu--items">
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Điện thoại</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">H&#227;ng sản xuất</a></h4>
                                    <ul class="display-column col-3">
                                        <li><a href="">iPhone</a></li>
                                        <li><a href="">Samsung</a></li>
                                        <li><a href="">Xiaomi</a></li>
                                        <li><a href="">Vsmart</a></li>
                                        <li><a href="">realme</a></li>
                                        <li><a href="">Nokia</a></li>
                                        <li><a href="">OPPO</a></li>
                                        <li><a href="">Blackberry</a></li>
                                        <li><a href="">Energizer</a></li>
                                        <li><a href="">Masstel</a></li>
                                        <li><a href="">Huawei</a></li>
                                        <li><a href="">Philips</a></li>
                                        <li><a href="">Vivo</a></li>
                                        <li><a href="">Itel</a></li>
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Mức gi&#225;</a></h4>
                                    <ul class="display-row">
                                        <li><a href="">Dưới
                                                1 triệu</a></li>
                                        <li><a href="">Từ
                                                2 đến 3 triệu</a></li>
                                        <li><a href="">Từ
                                                3 đến 4 triệu</a></li>
                                        <li><a href="">Từ
                                                6 đến 8 triệu</a></li>
                                        <li><a href="">Từ
                                                15 đến 20 triệu</a></li>
                                        <li><a href="">Tr&#234;n
                                                20 triệu</a></li>
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a>Quan tâm nhất</a></h4>
                                    <ul class="display-row">
                                        <li><a href="">H&#244;m
                                                nay</a></li>
                                        <li><a href="">Tuần
                                                n&#224;y</a></li>
                                        <li><a href="">Th&#225;ng
                                                n&#224;y</a></li>
                                        <li><a href="">Năm
                                                nay</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="far fa-clock"></i>
                            <span>đồng hồ</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a>Đồng hồ</a></h4>
                                    <ul class="display-column col-4">
                                        <li><a href="">Apple Watch</a></li>
                                        <li><a href="">Samsung</a></li>
                                        <li><a href="">Garmin</a></li>
                                        <li><a href="">Tic Watch</a></li>
                                        <li><a href="">Amazfit</a></li>
                                        <li><a href="">Đồng hồ trẻ em</a></li>
                                        <li><a href="">Huawei </a></li>
                                        <li><a href="">Masstel</a></li>
                                        <li><a href="">OPPO</a></li>
                                        <li><a href="">realme</a></li>
                                        <li><a href="">Xiaomi</a></li>
                                        <li><a href="">Fitbit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-laptop"></i>
                            <span>Máy tính</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">iMac 2021</a></h4>
                                    <ul class="display-column col-0">
                                    </ul>
                                    <h4><a href="">MacBook</a></h4>
                                    <ul class="display-column col-0">
                                    </ul>
                                    <h4><a href="">Microsoft</a></h4>
                                    <ul class="display-column col-0">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-tablet-alt"></i>
                            <span>tablet</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">iPad</a></h4>
                                    <ul class="display-column col-0">
                                    </ul>
                                    <h4><a href="">Samsung</a></h4>
                                    <ul class="display-column col-0">
                                    </ul>
                                    <h4><a href="">Xiaomi</a></h4>
                                    <ul class="display-column col-0">
                                    </ul>
                                    <h4><a href="">Huawei</a></h4>
                                    <ul class="display-column col_0">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-headphones-alt"></i>
                            <span>head phone</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">Loa</a></h4>
                                    <ul class="display-column col-2">
                                        <li><a href="">Energizer</a></li>
                                        <li><a href="">Huawei</a></li>
                                        <li><a href="">LG</a></li>
                                        <li><a href="">Marshall</a></li>
                                        <li><a href="">Tekin</a></li>
                                        <li><a href="">JBL</a></li>
                                        <li><a href="">Harman Kardon</a></li>
                                        <li><a href="">Sony</a></li>
                                        <li><a href="">Samsung</a></li>
                                        <li><a href="">Apple</a></li>
                                        <li><a href="">Divoom</a></li>
                                        <li><a href="">Anker</a></li>
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Tai nghe</a></h4>
                                    <ul class="display-column col-3">
                                        <li><a href="">Sony</a></li>
                                        <li><a href="">JBL</a></li>
                                        <li><a href="">Soundpeats</a></li>
                                        <li><a href="">AKG</a></li>
                                        <li><a href="">Apple AirPods</a></li>
                                        <li><a href="">Energizer</a></li>
                                        <li><a href="">Huawei</a></li>
                                        <li><a href="">iWalk</a></li>
                                        <li><a href="">LG</a></li>
                                        <li><a href="">Motorola</a></li>
                                        <li><a href="">Nokia</a></li>
                                        <li><a href="">OPPO</a></li>
                                        <li><a href="">Pisen</a></li>
                                        <li><a href="">Plantronics</a></li>
                                        <li><a href="">realme</a></li>
                                        <li><a href="">Samsung</a></li>
                                        <li><a href="">Sennheiser</a></li>
                                        <li><a href="">Xiaomi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="far fa-keyboard"></i>
                            <span>phụ kiện</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">Xả tồn phụ kiện - GI&#193; SỐC</a>
                                    </h4>
                                    <ul class="display-column col-1">
                                    </ul>
                                    <h4><a href="">Phụ kiện Apple</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Sạc dự ph&#242;ng</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Củ sạc, d&#226;y c&#225;p</a></h4>
                                    <ul class="display-column1 col_2">
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Robot h&#250;t bụi</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">M&#225;y lọc kh&#244;ng kh&#237;</a>
                                    </h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Tay cầm chống rung</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Camera h&#224;nh tr&#236;nh</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">D&#226;y đeo đồng hồ</a></h4>
                                    <ul class="display-column col-1">
                                    </ul>
                                    <h4><a href="">Miếng d&#225;n m&#224;n h&#236;nh</a>
                                    </h4>
                                    <ul class="display-column col-1">
                                    </ul>
                                    <h4><a href="">Camera an ninh</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Bộ ph&#225;t wifi</a></h4>
                                    <ul class="display-column col-1">
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Thẻ nhớ - USB</a></h4>
                                    <ul class="display-column col-1">
                                    </ul>
                                    <h4><a href="">Bao da - Ốp lưng</a></h4>
                                    <ul class="display-column col-2">
                                    </ul>
                                    <h4><a href="">Thay Pin, M&#224;n h&#236;nh ch&#237;nh
                                            h&#227;ng</a></h4>
                                    <ul class="display-column col-1">
                                        <li><a href="">M&#224;n h&#236;nh
                                                iPhone</a></li>
                                        <li><a href="">Pin iPhone</a></li>
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Loa</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">B&#250;t cảm ứng</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Tai nghe</a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-gamepad"></i>
                            <span>game</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a>Đồ chơi c&#244;ng nghệ</a></h4>
                                    <ul class="display-row col-1">
                                        <li><a href="">Quạt để b&#224;n</a></li>
                                        <li><a href="">Tay cầm chống rung</a></li>
                                        <li><a href="">Camera h&#224;nh tr&#236;nh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-home"></i>
                            <span>smart home</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">Gia dụng th&#244;ng minh</a></h4>
                                    <ul class="display-row col-2">
                                        <li><a href="">M&#225;y lọc kh&#244;ng
                                                kh&#237;</a></li>
                                        <li><a href="">Robot h&#250;t bụi</a></li>
                                        <li><a href="">Phụ kiện gia dụng</a></li>
                                        <li><a href="">FPT Play box</a></li>
                                        <li><a href="">C&#226;n th&#244;ng minh</a></li>
                                        <li><a href="">Ổ Cắm điện</a></li>
                                        <li><a href="">Thiết bị định vị
                                                th&#244;ng minh</a></li>
                                        <li><a href="">Camera an ninh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-mobile"></i>
                            <span>máy cũ</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a>H&#224;ng cũ gi&#225; rẻ</a></h4>
                                    <ul class="display-column col-3">
                                        <li><a href="">Điện
                                                thoại di động</a></li>
                                        <li><a href="">Đồng hồ
                                                th&#244;ng minh</a></li>
                                        <li><a href="">M&#225;y
                                                t&#237;nh bảng</a></li>
                                        <li><a href="">Laptop</a>
                                        </li>
                                        <li><a href="">Loa</a>
                                        </li>
                                        <li><a href="">Tai
                                                nghe</a></li>
                                        <li><a href="">Camera</a>
                                        </li>
                                        <li><a href="">Củ
                                                sạc</a></li>
                                        <li><a href="">D&#226;y
                                                c&#225;p</a></li>
                                        <li><a href="">M&#225;y
                                                lọc kh&#244;ng kh&#237;</a></li>
                                        <li><a href="">Phụ
                                                kiện</a></li>
                                        <li><a href="">Sạc
                                                dự ph&#242;ng</a></li>
                                        <li><a href="">Tay
                                                cầm chống rung</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fas fa-tools"></i>
                            <span>sữa chữa</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">Android</a></h4>
                                    <ul class="display-column col-2">
                                        <li><a href="">Pin</a></li>
                                        <li><a href="">Camera</a></li>
                                        <li><a href="">M&#224;n h&#236;nh</a></li>
                                        <li><a href="">Lỗi tr&#234;n main</a>
                                        </li>
                                        <li><a href="">Vỏ v&#224; mặt lưng</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Apple iPhone</a></h4>
                                    <ul class="display-column col-2">
                                        <li><a href="">Vỏ k&#237;nh</a></li>
                                        <li><a href="">Camera</a></li>
                                        <li><a href="">C&#225;c loại
                                                c&#225;p</a></li>
                                        <li><a href="">Lỗi tr&#234;n
                                                main</a></li>
                                    </ul>
                                </div>
                                <div class="menu-col">
                                    <h4><a href="">Apple iPad</a></h4>
                                    <ul class="display-row col-3">
                                        <li><a href="">Pin</a></li>
                                        <li><a href="">Cảm ứng</a></li>
                                        <li><a href="">M&#224;n h&#236;nh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-sd-card"></i>
                            <span>sim thẻ</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a>Sản phẩm HOT</a></h4>
                                    <ul class="display-row col-5">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="far fa-newspaper"></i>
                            <span>tin tức</span>
                        </a></li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-bolt"></i>
                            <span>flash sale</span>
                        </a>
                        <div class="sub-menu">
                            <div class="menu-container">
                                <div class="menu-col">
                                    <h4><a href="">Flashs Sale </a></h4>
                                    <ul class="display-row col-1">
                                    </ul>
                                    <h4><a href="">Ưu đ&#227;i Hot</a></h4>
                                    <ul class="display-row col-1">
                                        <li><a href="">Khuyến
                                                m&#227;i JBL, Harman Kardon</a></li>
                                        <li><a href="">Khuyến mại LG</a></li>
                                        <li><a href="">Khuyến mại Sony</a></li>
                                        <li><a href="">Lễ hội mua sắm
                                                Xiaomi</a></li>
                                        <li><a href="">Sản phẩm độc quyền</a></li>
                                        <li><a href="">Top 5 tai nghe
                                                Bluetooth</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="header__menu--items header__menu--item" href="">
                            <i class="fas fa-fire-alt"></i>
                            <span>khuyến mãi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-banner">
            <script type="text/javascript" src="./assets/js/slide.js"></script>
            <div id="jssor_1">
                <div data-u="slides"
                    style="border-radius: 15px;cursor:default;width:1200px;height:380px;overflow:hidden;">
                    <div style="background-color:#000000;">
                        <img data-u="image" src="./assets/img/banner.png" />
                    </div>
                    <div>
                        <img data-u="image" src="./assets/img/banner2.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="./assets/img/banner3.png" />
                    </div>
                    <div>
                        <img data-u="image" src="./assets/img/banner4.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="./assets/img/banner5.jpg" />
                    </div>
                    <div>
                        <img data-u="image" src="./assets/img/banner6.jpg" />
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;"
                    data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:13px;height:13px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"
                    data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
                    data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>

            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
        </div>
        <div class="sub-banner">
            <img src="./assets/img/subbanner1.png" alt="">
            <img src="./assets/img/subbanner2.png" alt="">
            <img src="./assets/img/subbanner3.png" alt="">
            <img src="./assets/img/subbanner4.png" alt="">
        </div>
        <div class="container">
            <div class="cooldown-date">
                <h2>F<i class="fas fa-bolt"></i>ASH SALE ONLINE</h2>
                <div id="cooldown-timer"></div>
            </div>
        </div>
        <div class="product-slider">
            <div class="slider" id="slider">
                <div class="slide" id="slide">
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-containers">
                            <div class="product">
                                <div class="product product__img">
                                    <a href="">
                                        <img src="./assets/img/iphone-13.png" alt="">
                                    </a>
                                </div>
                                <div class="product product__brand">
                                    <img src="./assets/img/apple.png" alt="">
                                    <img src="./assets/img/gia-soc.png" alt="">
                                </div>
                                <div class="product product-sales">
                                    <i class="fas fa-bolt"></i>
                                    <span>Giảm 6,500,000</span>
                                </div>
                                <div class="product product-title">
                                    <div class="product-name">
                                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                    </div>
                                    <div class="product-prises">
                                        <span class="origin-prise">13,490,000 ₫</span>
                                        <span class="sale-prise">19,990,000 ₫</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="ctrl-btn pro-prev">
                    <i class="fa fas fa-chevron-left"></i>
                </button>
                <button class="ctrl-btn pro-next">
                    <i class="fa fas fa-chevron-right"></i>
                </button>
            </div>
            <script type="text/javascript" src="./assets/js/slide.js"></script>
        </div>
        <div class="content-center">
            <div class="content-product">
                <img src="./assets/img/bannercenter1.jpg" alt="">
                <div class="products iphone-products">
                    <h4>
                        <a href="">Apple authorised Reseller</a>
                    </h4>
                </div>
                <div class="products-list">
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.html">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="">
                                    <img src="./assets/img/iphone-13.png" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-sales">
                                <i class="fas fa-bolt"></i>
                                <span>Giảm 6,500,000</span>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise">13,490,000 ₫</span>
                                    <span class="sale-prise">19,990,000 ₫</span>
                                </div>
                            </div>
                            <div class="buy-product">
                                <button class="snip1457">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_image">
                <img class="footer__img" src="./assets/img/footer.png" alt="">
            </div>
            <div class="footer__with-email">
                <img class="footer__img1" src="./assets/img/footer2.png" alt="">
                <span>Đăng ký nhận tin khuyến mãi</span>
                <div class="footer__with-email--box">
                    <input type="email" placeholder="Nhập E-mail của bạn" name="" id="">
                    <button type="submit" value="">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
            <div class="footer__inforr">
                <div class="col-contentt">
                    <div class="col-content--block">
                        <h4><a>Hỗ Trợ - Dịch Vụ</a></h4>
                        <ul>
                            <li><a href="/mua-hang-tra-gop">Mua hàng trả góp</a></li>
                            <li><a href="/huong-dan-dat-hang">Hướng dẫn đặt hàng và thanh toán</a>
                            </li>
                            <li><a href="/chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
                            <li><a href="/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></li>
                            <li><a href="/order/check">Tra cứu đơn hàng</a></li>
                            <li><a href="/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                            <li><a href="/chinh-sach-huy-giao-dich-doi-tra">Chính sách hủy giao dịch, đổi
                                    trả</a></li>
                            <li><a href="/chinh-sach-giai-quyet-khieu-nai">Chính sách giải quyết khiếu
                                    nại</a></li>
                            <li><a href="/dieu-khoan-mua-ban-hang-hoa">Điều khoản mua bán hàng hóa</a></li>
                            <li><a href="/dat-hang/bao-hanh-mo-rong">Phạm vi, điều khoản gói bảo hành mở
                                    rộng</a></li>
                        </ul>
                    </div>
                    <div class="col-content--block">
                        <h4><a>Thông Tin Liên Hệ</a></h4>
                        <ul>
                            <li><a href="/mua-hang-online">Bán hàng Online</a></li>
                            <li><a>Chăm sóc khách hàng</a></li>
                            <li><a>Hỗ Trợ Kỹ thuật</a></li>
                            <li><a>Hỗ trợ Bảo hiểm & Sửa chữa</a></li>
                            <li><a>Liên hệ khối văn phònng</a></li>
                        </ul>
                    </div>

                    <div class="tel-phone">
                        <h4>Tổng đài</h4>
                        <a class="hotline" href="tel:0347981234">1900.2091</a>
                    </div>

                    <div class="other-image">
                        <h4>Thanh toán miễn phí</h4>
                        <ul class="list-logo">
                            <li>
                                <img src="./assets/img/logo-visa.png">
                                <img src="/assets/img/logo-master.png">
                            </li>
                            <li>
                                <img src="/assets/img/logo-jcb.png">
                                <img src="/assets/img/logo-samsungpay.png">
                            </li>
                            <li>
                                <img src="/assets/img/logo-atm.png">
                                <img src="/assets/img/logo-vnpay.png">
                            </li>
                        </ul>
                    </div>

                    <div class="other-image">
                        <h4>Hình thức vận chuyển</h4>
                        <ul class="list-logo">
                            <li>
                                <img src="/assets/img/nhattin.jpg">
                                <img src="/assets/img/vnpost.jpg">
                            </li>
                        </ul>
                        <div class="mg-top20">
                            <a href="http://online.gov.vn/Home/WebDetails/28738" target="_blank"><img
                                    src="/assets/img/logo-bct.png"></a>
                        </div>
                    </div>
                </div>

                <div class="info-content">
                    <p>© 2020. CÔNG TY CỔ PHẦN XÂY DỰNG VÀ ĐẦU TƯ THƯƠNG MẠI HOÀNG HÀ. MST: 0106713191. (Đăng ký
                        lần
                        đầu: Ngày 15 tháng 12 năm 2014, Đăng ký thay đổi ngày 29/12/2020)</p>
                    <p><strong>GP số 426/GP-TTĐT do sở TTTT Hà Nội cấp ngày 22/01/2021</strong></p>
                    <p>Địa chỉ: 26 Phù Đổng Thiên Vương, P.Phạm Đình Hổ, Q. Hai Bà Trưng, Hà Nội. Điện thoại:
                        1900.2091. Chịu trách nhiệm nội dung: <strong>Hoàng Ngọc
                            Chiến</strong>. </p>
                    <p>Designed by: <strong>Kent Lee</strong> @kentlee.design</p>
                </div>
            </div>
        </div>
        <div class="banner-bot">
            <img src="./assets/img/bannerbot.jpg" alt="">
        </div>
    </div>
    </div>
    <div class="nav-social">
        <div class="social-list">
            <ul class="nav-social social-list--links">
                <li class="social-list--links__fb"><i class="fab fa-facebook-f"></i></li>
                <li class="social-list--links__youtube"><i class="fab fa-youtube"></i></li>
                <li class="social-list--links__insta"><i class="fab fa-instagram"></i></li>
                <li class="social-list--links__tiktok"><i class="fab fa-tiktok"></i></li>
            </ul>
        </div>
    </div>
    <div class="modal-search">
        <div class="modal__overlay">
        </div>
    </div>
    <div class="modal-sign-in">
        <div class="sign-in-container">
            <div class="model-close js-modal-close">
                <i class="fas fa-times"></i>
            </div>
            <img src="./assets/img/signin.png" alt="">
            <div class="sign-in-area">
                <div class="sign-in-form">
                    <h2>Đăng nhập</h2>
                    <p class="signup--success"></p>
                    <div class="sign-in__links">
                        <button type="submit">
                            <img src="./assets/img/login-facebook.png" alt="">
                            <span>Tiếp tục với Facebook</span>
                        </button>
                        <button type="submit">
                            <img src="./assets/img/login-google.png" alt="">
                            <span>Đăng nhập với Google</span>
                        </button>
                    </div>
                    <div class="sign-in__or">
                        <p>Hoặc</p>
                    </div>
                    <div class="sign-in__login">
                        <label for="">Tài khoản</label>
                        <input type="text" placeholder="Nhập tên tài khoản" name="" id="">
                        <label for="">Mật khẩu</label>
                        <input type="password" placeholder="Nhập mật khẩu" name="" id="txt_password">
                        <div class="sign-in__login__captcha">
                            <div class="captcha-area">
                                <input type="text" name="" placeholder="Nhập captcha" id="captcha-input">
                                <div class="check">
                                    <i class="far fa-check-circle check-captcha"></i>
                                </div>
                            </div>

                            <div class="capcha-img">
                                <p class="captcha-code">
                                    12345
                                </p>
                            </div>
                            <div class="captcha-icons">
                                <span class="re-text" title="Renew Captcha">
                                    <i class="fas fa-sync-alt"></i>
                                </span>
                                <span class="captcha-read" title="Read Captcha">
                                    <i class="fas fa-headphones-alt"></i>
                                </span>
                            </div>
                        </div>
                        <span class="captcha-alert"></span>
                        <div class="sign-in__login__remember">
                            <input type="checkbox" name="" id="">
                            <span>Nhớ đăng nhập</span>
                        </div>
                    </div>

                    <div class="sign-in__btn">
                        <button type="submit" id="login-btn">Đăng Nhập</button>
                        <a class="js-show-sign-up" href="signup.php">Đăng Ký</a>
                    </div>
                    <div class="sign-in__missing">
                        <a href="">Quên mật khẩu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="signup.php" method="POST">
    <div class="modal-signup">
        <div class="signup-container">
            <div class="model-close js-modal-close-sign-up">
                <i class="fas fa-times"></i>
            </div>
            <img src="./assets/img/signin.png" alt="">
            <div class="signup-area">
                <div class="signup-form">
                    <span>Đăng ký tài khoản</span>
                    <span>Chú ý các nội dung có dấu * bạn cần phải nhập</span>
                    <span id="notok1" class="signup-notif notif1">Tài khoản đã tồn tại. Vui lòng nhập tài khoản khác</span>
                    <span id="notok2" class="signup-notif notif2">Email đã được dùng. Vui lòng nhập email khác</span>
                    <span id="notok3" class="signup-notif notif3">Số điện thoại đã được dùng. Vui lòng số điện thoại khác</span>
                    <span id="notok4" class="signup-notif notif4">Không được để trống các trường có dấu *</span>
                    <span id="notok5" class="signup-notif notif5">Mật khẩu nhập lại không đúng</span>
                    <div class="signup-content">
                        <div class="signup-row">
                            <label for="">Tài khoản:</label>
                            <input type="text" placeholder="Tài khoản*" name="txt_user-id" id="txt_user-id"
                                title="Tên tài khoản > 5 ký tự">
                            <div class="check">
                                <i class="far fa-check-circle check-id"></i>
                            </div>
                        </div>
                        <div class="signup-row">
                            <label for="">Họ Tên:</label>
                            <input type="text" placeholder="Họ tên*" name="txt_name" id="txt_name">
                            <div class="check">
                                <i class="far fa-check-circle check-id"></i>
                            </div>
                            <div class="check">
                                <i class="far fa-check-circle check-name"></i>
                            </div>
                        </div>
                        <div class="signup-row">
                            <label for="">Mật khẩu:</label>
                            <div class="show-password">
                                <input type="password" placeholder="Mật khẩu*" name="signup_password" id="signup_password">
                                <div class="btn-showpass">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="signup-row">
                            <label for="">Nhập lại mật khẩu:</label>
                            <div class="show-repassword">
                                <input type="password" placeholder="Nhập lại mật khẩu*" name="signup_repassword" id="signup_repassword">
                                <div class="btn-showrepass">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="signup-row">
                            <label for="">Email:</label>
                            <input type="email" placeholder="Email" name="email" id="txt_email">
                            <div class="check">
                                <i class="far fa-check-circle check-email"></i>
                            </div>
                        </div>
                        <div class="signup-row">
                            <label for="">Ngày tháng năm sinh:</label>
                            <input type="date" placeholder="Ngày tháng năm sinh" name="txt_birthday" id="">
                        </div>
                        <div class="signup-row">
                            <label class="abe" for="">Điện thoại:</label>
                            <input type="" placeholder="Điện thoại*" name="txt_phone" id="txt_phone">
                            <div class="check">
                                <i class="far fa-check-circle check-phone"></i>
                            </div>
                        </div>
                        <div class="signup-row">
                            <label for="">Tỉnh/Thành phố:</label>
                            <select class="city_input" name="calc_shipping_provinces" required="">
                                <option value="">Tỉnh / Thành phố</option>
                            </select>
                            <input class="billing_address_1" name="" type="hidden" value="">
                        </div>
                        <div class="signup-row">
                            <label for="">Quận/Huyện:</label>
                            <select class="dictric_input" name="calc_shipping_district" required="">
                                <option value="">Quận / Huyện</option>
                            </select>
                            <input class="billing_address_2" name="" type="hidden" value="">
                        </div>
                        <div class="signup-row">
                            <label for="">Địa chỉ:</label>
                            <input type="text" placeholder="Địa chỉ*" name="txt_address" id="txt_address">
                            <div class="check">
                                <i class="far fa-check-circle check-address"></i>
                            </div>
                        </div>
                        <div class="signup-row">
                            <button id="btn_signup" name="btn_signup" type="submit">Đăng ký tài khoản</butdton>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
<!------------------------------------------------------------------------------- backend-signup -------------------------------------------------------------------------->
    <?php  
    include './admincode/connect.php';
    $username = filter_input(INPUT_POST,'txt_user-id');
    $fullname = filter_input(INPUT_POST,'txt_name');
    $password = filter_input(INPUT_POST,'signup_password');
    $repassword = filter_input(INPUT_POST,'signup_repassword');
    $email = filter_input(INPUT_POST,'email');
    $birthday = filter_input(INPUT_POST,'txt_birthday');
    $phone_number = filter_input(INPUT_POST,'txt_phone');
    $address1= filter_input(INPUT_POST,'txt_address');
    $address2= filter_input(INPUT_POST,'calc_shipping_district');
    $address3= filter_input(INPUT_POST,'calc_shipping_provinces');
    $address= $address1." - ".$address2." - ".$address3;
    $btn_signup = filter_input(INPUT_POST,'btn_signup');
    if(isset($btn_signup)){
        $query1 = mysqli_query($connect,"SELECT UserName FROM accounts WHERE UserName = '$username'");
        $query2 = mysqli_query($connect,"SELECT Email FROM accounts WHERE Email = '$email'");
        $query3 = mysqli_query($connect,"SELECT PhoneNumber FROM accounts WHERE PhoneNumber = '$phone_number'");
        $sql_insert = "INSERT INTO accounts(Id_role,UserName,Password,FullName,PhoneNumber,Email,BirthDay,Address,Status) VALUES ('2','$username','$repassword','$fullname','$phone_number','$email','$birthday','$address','1')";
        
        if($username==""||$fullname==""||$password==""||$repassword==""||$phone_number==""||$address1==""||$address2==""||$address3==""){
            echo '<script>var element = document.getElementById("notok4");
            element.classList.remove("notif4");</script>';
        }else if(mysqli_num_rows($query1)){
            echo '<script>var element = document.getElementById("notok1");
            element.classList.remove("notif1");</script>';
        }
        else if(mysqli_num_rows($query2)){
            echo '<script>var element = document.getElementById("notok2");
            element.classList.remove("notif2");</script>';
        }       
        else if(mysqli_num_rows($query3)){
            echo '<script>var element = document.getElementById("notok3");
            element.classList.remove("notif3");</script>';    
        }else if($repassword != $password){
            echo '<script>var element = document.getElementById("notok5");
            element.classList.remove("notif5");</script>';
        }else{
            $result_insert = mysqli_query($connect,$sql_insert);
            if($result_insert){
                echo '<script>alert("Đăng ký thành công")</script>';
            }else{
                echo '<script>alert("Đăng ký thất bại")</script>';
            }
        }
    }
?>
<!------------------------------------------------------------------------------------- END ------------------------------------------------------------------------------->
    <div class="modal-products">
        <div class="product-container">
            <div class="model-close js-close-product">
                <i class="fas fa-times"></i>
            </div>
            <div class="quick-order">
                <div class="form-quick-order">
                    <div class="quick-order__left">
                        <img src="./assets/img/iphone-11.png" alt="">
                        <div class="product product-title">
                            <div class="product-name">
                                <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                            </div>
                            <div class="product-prises">
                                <span class="origin-prises" data-value="2500000">2500000</span>
                                <span class="sale-prise">19,990,000</span>
                            </div>
                        </div>
                        <div class="hot-line">
                            <a href="tel:0347981234">
                                <i class="fas fa-headset"></i>
                                <strong>1900.2091</strong>
                            </a>
                            <p>Phím 1 - Hotline bán hàng online</p>
                        </div>
                    </div>
                    <div class="quick-order__right">
                        <h3>Đặt hàng sản phẩm</h3>
                        <div class="quick-order__right--row">
                            <label for="">Số lượng</label>
                            <div class="control">
                                <button type="button" id="btnMinus">-</button>
                                <input type="text" value="1" id="txt_quantity">
                                <button type="button" id="btnPlus">+</button>
                            </div>
                        </div>

                        <div class="quick-order__right--row">
                            <div class="row-input">
                                <label for="">Họ Tên</label>
                                <input type="text" placeholder="Họ và tên*">
                            </div>

                        </div>
                        <div class="quick-order__right--row">
                            <div class="order__right--row">
                                <div class="row-input">
                                    <label for="">Tỉnh/Thành phố:</label>
                                    <select class="order-city-input" name="calc_shipping_provinces" required="">
                                        <option value="">Tỉnh / Thành phố</option>
                                    </select>
                                    <input class="billing_address_1" name="" type="hidden" value="">
                                </div>
                                <div class="row-input">
                                    <label for="">Quận/Huyện:</label>
                                    <select class="order-city-input" name="calc_shipping_district" required="">
                                        <option value="">Quận / Huyện</option>
                                    </select>
                                    <input class="billing_address_2" name="" type="hidden" value="">
                                </div>
                            </div>
                            <div class="row-input">
                                <input type="text" placeholder="Địa chỉ*" name="" id="">
                            </div>

                        </div>
                        <div class="quick-order__right--row">
                            <div class="order__right--row">
                                <div class="row-input">
                                    <label for="">Điện thoại</label>
                                    <input type="text" placeholder="Số điện thoại*" value="">
                                </div>
                                <div class="row-input">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Email" value="">
                                </div>
                            </div>
                            <div class="row-input">
                                <textarea name="" id="" placeholder="Ghi chú" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row-submit">
                            <input type="text " placeholder="Mã giảm giá nếu có">
                            <p>Bằng cách đặt hàng bạn đã đồng ý với điều khoản sử dụng và chính sách đổi trả</p>
                            <button type="submit">
                                Tiến hành đặt hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js"></script>
    <script type="text/javascript" src="./assets/js/filter.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/cool-down.js"></script>
    <script src="./assets/js/indexx.js"></script>
    <script src="./assets/js/sign.js"></script>
</body>
</html>
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
                        <img src="./assets/img/logo.png" alt="" class="header__search__logo">
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
        <div class="back">
            <a href="">
                <strong>Quay lại</strong>
            </a>
        </div>
        <div class="logout">
            <a href="logout.php">đăng xuất</a>
        </div>
        <div class="cart-container">
            <div class="cart-info">
                <div class="cart-info-container">
                    <div class="model-close">
                        <i class="fas fa-minus"></i>
                    </div>
                    <img src="./assets/img/iphon12.png" alt="">
                    <div class="product-name">
                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                    </div>
                    <div class="control">
                        <button type="button" id="btnMinus">-</button>
                        <input type="text" value="1" id="txt_quantity_card">
                        <button type="button" id="btnPlus">+</button>
                    </div>
                    <div class="product-prises">
                        <span class="origin-prise" data-value="2500000">2500000</span>
                    </div>
                </div>
                <div class="cart-info-container">
                    <div class="model-close">
                        <i class="fas fa-minus"></i>
                    </div>
                    <img src="./assets/img/iphon12.png" alt="">
                    <div class="product-name">
                        <span>Apple iPhone 13 Pro Max - 128GB - Chính hãng VN/A</span>
                    </div>
                    <div class="control">
                        <button type="button" id="btnMinus">-</button>
                        <input type="text" value="1" id="txt_quantity_card">
                        <button type="button" id="btnPlus">+</button>
                    </div>
                    <div class="product-prises">
                        <span class="origin-prise" data-value="2500000">2500000</span>
                    </div>
                </div>
            </div>
            <div class="cart-form">
                <div class="sum-cost">
                    <div class="sum-cost-row">
                        <label for="">Tổng giá trị</label>
                        <span>000000000</span>
                    </div>
                    <div class="sum-cost-row">
                        <label for="">Tổng giá trị</label>
                        <span>000000000</span>
                    </div>
                    <div class="sum-cost-row">
                        <label for="">Tổng giá trị</label>
                        <span>000000000</span>
                    </div>
                    <span></span>
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
                                    <span class="prices" class="origin-prise" data-value="2500000">2500000</span>
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
        <script src="./assets/js/cart.js"></script>
</body>

</html>
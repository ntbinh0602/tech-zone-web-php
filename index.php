<?php include './master/header.php' ?>

<!---------------------------------------------------------------------------- START CONTENT --------------------------------------------------------------------->

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
                        <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*15/100)) as GiaKM,products.* FROM products ORDER BY rand() limit 15";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                        ?>
                        <div class="item">
                            <div class="products-containers">
                                <div class="product">
                                    <div class="product product__img">
                                        <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                            <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product product-sales">
                                        <i class="fas fa-bolt"></i>
                                        <span>Giảm <?=number_format($row['Price']-$row['GiaKM'],0,',','.')?> đ</span>
                                    </div>
                                    <div class="product product-title">
                                        <div class="product-name">
                                            <span>
                                                <?php echo $row['ProductName']; ?>
                                            </span>
                                        </div>
                                        <div class="product-prises">
                                            <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                            <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
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
                        <a href="#">Apple authorised Reseller</a>
                    </h4>
                </div>
                <div class="products-list">
                    <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*20/100)) as GiaKM,products.* FROM products WHERE Id_supplier ='5' limit 10";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                    <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                                <img src="./assets/img/gia-soc.png" alt="">
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span><?php echo $row['ProductName']; ?></span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                    <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>                
                </div>
            </div>
        </div>
        <div class="content-center">
            <div class="content-product">
                <div class="products iphone-products">
                    <h4>
                        <a href="#">Có thể bạn sẽ thích</a>
                    </h4>
                </div>
                <div class="products-list">
                    <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*15/100)) as GiaKM,products.* FROM products ORDER BY rand() limit 5";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                    <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                </a>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span><?php echo $row['ProductName']; ?></span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                    <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>                
                </div>               
            </div>
        </div>
        <div class="content-center">
            <div class="content-product">
                <div class="products iphone-products">
                    <h4>
                        <a href="#">Điện thoại nổi bật</a>
                    </h4>
                </div>
                <div class="products-list">
                    <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*20/100)) as GiaKM,products.* FROM products WHERE Id_category ='1' limit 10";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                    <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                </a>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span><?php echo $row['ProductName']; ?></span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                    <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>                
                </div>               
            </div>
        </div>    
        <div class="content-center">
            <div class="content-product">
                <div class="products iphone-products">
                    <h4>
                        <a href="#">Đồng hồ thông minh</a>
                    </h4>
                </div>
                <div class="products-list">
                    <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*20/100)) as GiaKM,products.* FROM products WHERE Id_category ='2' limit 5";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                    <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                </a>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span><?php echo $row['ProductName']; ?></span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                    <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>                
                </div>               
            </div>
        </div>
        <div class="content-center">
            <div class="content-product">
                <div class="products iphone-products">
                    <h4>
                        <a href="#">Tablet</a>
                    </h4>
                </div>
                <div class="products-list">
                    <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*20/100)) as GiaKM,products.* FROM products WHERE Id_category ='4' limit 5";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                    <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                </a>
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span><?php echo $row['ProductName']; ?></span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                    <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>                
                </div>               
            </div>
        </div>
        <div class="content-center">
            <div class="content-product">
                <div class="products iphone-products">
                    <h4>
                        <a href="#">Laptop</a>
                    </h4>
                </div>
                <div class="products-list">
                    <?php
                        $id = filter_input(INPUT_GET, 'id');
                        $sql_getdata = "SELECT (Price-(Price*20/100)) as GiaKM,products.* FROM products WHERE Id_category ='3' limit 5";
                        $result_getdata = mysqli_query($connect, $sql_getdata);
                        if ($result_getdata) {
                            while ($row = mysqli_fetch_array($result_getdata)) {
                    ?>
                    <div class="products-container">
                        <div class="product">
                            <div class="product product__img">
                                <a href="ProductDetail.php?id=<?php echo $row['Id_product']; ?>&id_category=<?php echo $row['Id_category']; ?>">
                                    <img src="./admincode/uploads/<?php echo $row['ProductImage']?>" alt="">
                                </a>
                            </div>
                            <div class="product product__brand">
                                <img src="./assets/img/apple.png" alt="">
                            </div>
                            <div class="product product-title">
                                <div class="product-name">
                                    <span><?php echo $row['ProductName']; ?></span>
                                </div>
                                <div class="product-prises">
                                    <span class="origin-prise"><?=number_format($row['GiaKM'],0,',','.')?> ₫</span>
                                    <span class="sale-prise"><?=number_format($row['Price'],0,',','.')?> ₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>                
                </div>               
            </div>
        </div>

<!-------------------------------------------------------------------------------- END CONTENT ---------------------------------------------------------------------------->
        
<?php include'./master/footer.php' ?>
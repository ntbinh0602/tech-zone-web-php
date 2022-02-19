<?php include 'master/master.php'  ?>

<div class="tab">
    <button class="tab-links btn-xyz active">Đơn hàng mới</button>
    <button class="tab-links btn-xyz">Đơn hàng đang giao</button>
    <button class="tab-links btn-xyz">Đơn hàng đã thanh toán</button>
    <button class="tab-links btn-xyz">Đơn hàng đã hủy</button>
</div>


<div class="search-order">
    <i class="fas fa-search"></i>
    <input type="text" placeholder="Tìm kiếm theo ID đơn hàng, tên sản phẩm...">
</div>


<form action="" method="POST">
    <div id="Đơn hàng mới" class="tab-content">
                <?php
                    $sql1 = "SELECT Id_orders,orders.* FROM orders WHERE Status = '1' ORDER BY Id_orders DESC ";
                            $result1= mysqli_query($connect, $sql1);
                    if($result1){
                        While($row1 = mysqli_fetch_array($result1)){ 
                ?>
        <div class="tab-content-c1">        
            <div class="header-order">
                <div>
                    <h4>ID đơn hàng: <?php echo $row1['CodeOrder'] ?></h4>
                </div>
                    <div class="header-order-status wait"><i class="fas fa-clock icon-status"></i>
                    <span class="status-name">Chờ duyệt</span>
                </div>
            </div>

            <?php 
                
                $id_order = $row1['Id_orders'];
                $sql2 = "SELECT ProductImage,ProductName,orders_detail.Price as nPrice, orders_detail.Quantity as nQuantity FROM orders_detail,products WHERE orders_detail.Id_product = products.Id_product AND Id_orders = '$id_order'";
                $result2= mysqli_query($connect, $sql2);
                    if($result2){
                        While($row2 = mysqli_fetch_array($result2)){
            ?>
            <div class="content-order">
                <div class="content-order-item">
                    <div class="content-order-l">
                        <div class="content-order-l-c">
                            <div class="content-order-img"><img src="uploads/<?php echo $row2['ProductImage'] ?>" alt="No Image"></div>
                            <div class="content-order-inf">
                                <h4 class="content-order-inf-name"><?php echo $row2['ProductName'] ?></h4>
                                <p class="content-order-inf-name">Số lượng: <?php echo $row2['nQuantity'] ?></p>
                                <p class="content-order-inf-name">Giá: <?=number_format($row2['nPrice'],0,',','.')?>đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-order-r">
                        <p class="price">Thành tiền: <?=number_format($row2['nPrice']*$row2['nQuantity'],0,',','.')?> đ</p>
                    </div>
                </div>
            </div>
            <?php }}?>
            
            <?php 
            $sql3 = "SELECT SUM(Price*Quantity) as totalPrice FROM orders_detail WHERE Id_orders = '$id_order'";
            $result3= mysqli_query($connect, $sql3);
                if($result3){
                    While($row3 = mysqli_fetch_array($result3)){
            ?>
            
            <div class="footer-order">
                <div class="footer-order-money">
                    <div>Tổng số tiền: <?=number_format($row3['totalPrice'],0,',','.')?>  VNĐ</div>
                </div>                      
            </div> 
            <?php }} ?>        
            <div class="footer-order-function">
                <a href="view_detail_order.php?id=<?php echo $id_order ?>" class="detail">Xem chi tiết</a>
                <a href="update_order_status.php?id=<?php echo $id_order ?>&status=4" onClick="return confirm('Bạn có muốn hủy đơn hàng này không?')" class="cancel">Hủy đơn hàng</a>
            </div>  
        </div>
        <?php }}?>
    </div>
</form>

<form action="" method="POST">
    <div id="Đơn hàng đang giao" class="tab-content">
    <?php
                    $sql1 = "SELECT * FROM orders WHERE Status = '2'";
                            $result1= mysqli_query($connect, $sql1);
                    if($result1){
                        While($row1 = mysqli_fetch_array($result1)){ 
                ?>
        <div class="tab-content-c1">        
            <div class="header-order">
                <div>
                    <h4>ID đơn hàng: <?php echo $row1['CodeOrder'] ?></h4>
                </div>
                <div class="header-order-status doing"><i class="fas fa-truck icon-status"></i><span class="status-name">Đang giao</span></div>
            </div>

            <?php 
                
                $id_order = $row1['Id_orders'];
                $sql2 = "SELECT ProductImage,ProductName,orders_detail.Price as nPrice, orders_detail.Quantity as nQuantity FROM orders_detail,products WHERE orders_detail.Id_product = products.Id_product AND Id_orders = '$id_order'";
                $result2= mysqli_query($connect, $sql2);
                    if($result2){
                        While($row2 = mysqli_fetch_array($result2)){
            ?>
            <div class="content-order">
                <div class="content-order-item">
                    <div class="content-order-l">
                        <div class="content-order-l-c">
                            <div class="content-order-img"><img src="uploads/<?php echo $row2['ProductImage'] ?>" alt=""></div>
                            <div class="content-order-inf">
                                <h4 class="content-order-inf-name"><?php echo $row2['ProductName'] ?></h4>
                                <p class="content-order-inf-name">Số lượng: <?php echo $row2['nQuantity'] ?></p>
                                <p class="content-order-inf-name">Giá: <?=number_format($row2['nPrice'],0,',','.')?>đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-order-r">
                    <p class="price">Thành tiền: <?=number_format($row2['nPrice']*$row2['nQuantity'],0,',','.')?> đ</p>
                    </div>
                </div>
            </div>
            <?php }}?>
            
            <?php 
            $sql3 = "SELECT SUM(Price*Quantity) as totalPrice FROM orders_detail WHERE Id_orders = '$id_order'";
            $result3= mysqli_query($connect, $sql3);
                if($result3){
                    While($row3 = mysqli_fetch_array($result3)){
            ?>
            
            <div class="footer-order">
                <div class="footer-order-money">
                    <div>Tổng số tiền: <?=number_format($row3['totalPrice'],0,',','.')?>  VNĐ</div>
                </div>                      
            </div> 
            <?php }} ?>        
            <div class="footer-order-function">
                <a href="update_order_status.php?id=<?php echo $id_order ?>&status=1" class="detail" title="Trả về đơn hàng mới"><i class="fas fa-reply"></i></a>
                <a href="update_order_status.php?id=<?php echo $id_order ?>&status=3" onClick="return confirm('Bạn có muốn xác nhận đơn hàng này đã thanh toán?')" class="cancel">Đã thanh toán</a>
            </div>  
        </div>
        <?php }}?>
    </div>
</form>

<form action="" method="POST">
    <div id="Đơn hàng đã thanh toán" class="tab-content">
    <?php
                    $sql1 = "SELECT * FROM orders WHERE Status = '3'";
                            $result1= mysqli_query($connect, $sql1);
                    if($result1){
                        While($row1 = mysqli_fetch_array($result1)){ 
                ?>
        <div class="tab-content-c1">        
            <div class="header-order">
                <div>
                    <h4>ID đơn hàng: <?php echo $row1['CodeOrder'] ?></h4>
                </div>
                <div class="header-order-status ok"><i class="fas fa-clipboard-check icon-status"></i><span class="status-name">Đã giao</span></div>
            </div>

            <?php 
                
                $id_order = $row1['Id_orders'];
                $sql2 = "SELECT ProductImage,ProductName,orders_detail.Price as nPrice, orders_detail.Quantity as nQuantity FROM orders_detail,products WHERE orders_detail.Id_product = products.Id_product AND Id_orders = '$id_order'";
                $result2= mysqli_query($connect, $sql2);
                    if($result2){
                        While($row2 = mysqli_fetch_array($result2)){
            ?>
            <div class="content-order">
                <div class="content-order-item">
                    <div class="content-order-l">
                        <div class="content-order-l-c">
                            <div class="content-order-img"><img src="uploads/<?php echo $row2['ProductImage'] ?>" alt=""></div>
                            <div class="content-order-inf">
                                <h4 class="content-order-inf-name"><?php echo $row2['ProductName'] ?></h4>
                                <p class="content-order-inf-name">Số lượng: <?php echo $row2['nQuantity'] ?></p>
                                <p class="content-order-inf-name">Giá: <?=number_format($row2['nPrice'],0,',','.')?>đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-order-r">
                        <p class="price">Thành tiền: <?=number_format($row2['nPrice']*$row2['nQuantity'],0,',','.')?> đ</p>
                    </div>
                </div>
            </div>
            <?php }}?>
            
            <?php 
            $sql3 = "SELECT SUM(Price*Quantity) as totalPrice FROM orders_detail WHERE Id_orders = '$id_order'";
            $result3= mysqli_query($connect, $sql3);
                if($result3){
                    While($row3 = mysqli_fetch_array($result3)){
            ?>
            
            <div class="footer-order">
                <div class="footer-order-money">
                    <div>Tổng số tiền: <?=number_format($row3['totalPrice'],0,',','.')?>  VNĐ</div>
                </div>                      
            </div> 
            <?php }} ?> 
            <div class="footer-order-function">
                <a href="update_order_status.php?id=<?php echo $id_order ?>&status=2" class="detail" title="Trả về đơn hàng đang giao"><i class="fas fa-reply"></i></a>
            </div>         
        </div>
        <?php }}?>
    </div>
</form>
<form action="" method="POST">
    <div id="Đơn hàng đã hủy" class="tab-content">
    <?php
                    $sql1 = "SELECT * FROM orders WHERE Status = '4'";
                            $result1= mysqli_query($connect, $sql1);
                    if($result1){
                        While($row1 = mysqli_fetch_array($result1)){ 
                ?>
        <div class="tab-content-c1">        
            <div class="header-order">
                <div>
                    <h4>ID đơn hàng: <?php echo $row1['CodeOrder'] ?></h4>
                </div>
                <div class="header-order-status cancel"><i class="fas fa-window-close icon-status"></i><span class="status-name">Đã hủy</span></div>
            </div>

            <?php 
                
                $id_order = $row1['Id_orders'];
                $sql2 = "SELECT ProductImage,ProductName,orders_detail.Price as nPrice, orders_detail.Quantity as nQuantity FROM orders_detail,products WHERE orders_detail.Id_product = products.Id_product AND Id_orders = '$id_order'";
                $result2= mysqli_query($connect, $sql2);
                    if($result2){
                        While($row2 = mysqli_fetch_array($result2)){
            ?>
            <div class="content-order">
                <div class="content-order-item">
                    <div class="content-order-l">
                        <div class="content-order-l-c">
                            <div class="content-order-img"><img src="uploads/<?php echo $row2['ProductImage'] ?>" alt="No Image"></div>
                            <div class="content-order-inf">
                                <h4 class="content-order-inf-name"><?php echo $row2['ProductName'] ?></h4>
                                <p class="content-order-inf-name">Số lượng: <?php echo $row2['nQuantity'] ?></p>
                                <p class="content-order-inf-name">Giá: <?=number_format($row2['nPrice'],0,',','.')?>đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-order-r">
                    <p class="price">Thành tiền: <?=number_format($row2['nPrice']*$row2['nQuantity'],0,',','.')?> đ</p>
                    </div>
                </div>
            </div>
            <?php }}?>
            
            <?php 
            $sql3 = "SELECT SUM(Price*Quantity) as totalPrice FROM orders_detail WHERE Id_orders = '$id_order'";
            $result3= mysqli_query($connect, $sql3);
                if($result3){
                    While($row3 = mysqli_fetch_array($result3)){
            ?>
            
            <div class="footer-order">
                <div class="footer-order-money">
                    <div>Tổng số tiền: <?=number_format($row3['totalPrice'],0,',','.')?> VNĐ</div>
                </div>                      
            </div> 
            <?php }} ?>  
            <div class="footer-order-function">
                <a href="update_order_status.php?id=<?php echo $id_order ?>&status=1" class="detail" title="Trả về đơn hàng chờ duyệt"><i class="fas fa-reply"></i></a>
            </div>       
        </div>
        <?php }}?>
    </div>
</form>
<script type="text/javascript">
    var buttons = document.getElementsByClassName('tab-links');
    var contents = document.getElementsByClassName('tab-content');

    function showContent(id) {
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function() {
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Đơn hàng mới');
</script>
<?php include 'master/footer.php'  ?>
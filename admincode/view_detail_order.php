<?php include 'master/master.php'; ?>

<form action="">
<div class="header-order-name">
    <div class="form-content-detail">
        <div class="header-order name">
            <div>
                <h2>Chi tiết đơn hàng</h2>
            </div>
        </div>

        <?php
            $id = filter_input(INPUT_GET,'id');
            $sql = "SELECT * FROM orders,accounts WHERE orders.Id_account = accounts.Id_account AND Id_orders = '$id'";
            $result= mysqli_query($connect, $sql);
            if($result){
                While($row = mysqli_fetch_array($result)){
        ?>

        <div class="header-order">
            <div>
                <h4 class="first-h4">Mã đơn hàng:</h4><h4><?php echo $row['CodeOrder'] ?></h4>
            </div>
            <div class="header-order-status wait"><i class="fas fa-clock"></i><span>Chờ duyệt</span></div>
        </div>
        <div class="row-detail f1">
            <h5>Tên khách hàng: </h5><p><?php echo $row['FullName'] ?></p>
        </div>
        <div class="row-detail">
            <h5>Địa chỉ:</h5><p><?php echo $row['Address'] ?></p>
        </div>
        <div class="row-detail f3">
            <h5>SĐT:</h5><p><?php echo $row['PhoneNumber'] ?></p>
        </div>
        <div class="row-detail f1">
            <h5>Ngày đặt hàng: </h5><p><?php echo $row['OrderDate'] ?></p>
        </div>
        <div class="row-detail">
            <h5>Ghi chú của khách hàng:</h5><p><?php echo $row['Note'] ?></p>
        </div>
        <div class="row-detail f3">
            <h5>Số lượng sản phẩm:</h5><p><?php echo $row['Quantity'] ?></p>
        </div>
        <div class="header-table">
            <div class="header-prod">Sản Phẩm</div>
            <div class="header-price">Đơn giá</div>
            <div class="header-quantity">Số lượng</div>
            <div class="header-money">Số tiền</div>
        </div>
        <?php 
            $id_order = $row['Id_orders'];
            $sql1 = "SELECT ProductImage,ProductName,products.Price as nPriceProduct,orders_detail.Price as nPrice,orders_detail.Quantity as nQuantity FROM orders_detail,products WHERE orders_detail.Id_product = products.Id_product AND Id_orders = '$id_order'";
            $result1= mysqli_query($connect, $sql1);
            if($result1){
                While($row1 = mysqli_fetch_array($result1)){
        ?>            
        <div class="header-table">
            <div class="header-prod detail">
                <div><img src="uploads/<?php echo $row1['ProductImage'] ?>" alt=""></div>
                <div><h5><?php echo $row1['ProductName'] ?></h5></div>
            </div>
            <div class="header-price inf-detail"><?=number_format($row1['nPriceProduct'],0,',','.')?> VNĐ</div>
            <div class="header-quantity inf-detail"><?php echo $row1['nQuantity'] ?></div>
            <div class="header-money inf-detail"><?=number_format($row1['nPrice'],0,',','.')?> VNĐ</div>
        </div>
        <?php }}?>
        <?php 
            $sql2 = "SELECT SUM(Price) as totalPrice FROM orders_detail WHERE Id_orders = '$id_order'";
            $result2= mysqli_query($connect, $sql2);
                if($result2){
                    While($row2 = mysqli_fetch_array($result2)){
        ?>
        <div class="total-price">
            <h3>Tổng tiền: <?=number_format($row2['totalPrice'],0,',','.')?> VNĐ</h3>
        </div>
        <?php }}?>
        <div class="footer-order-function">
            <a href="update_order_status.php?id=<?php echo $id_order ?>&status=2" class="detail">Duyệt đơn</a>
            <a href="update_order_status.php?id=<?php echo $id_order ?>&status=4" onClick="return confirm('Bạn có muốn hủy đơn hàng này không?')" class="cancel">Hủy đơn hàng</a>
        </div> 
        <?php }} ?>
    </div>
</form>


<?php include 'master/footer.php'; ?>
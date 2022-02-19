<?php include 'master/master.php'; ?>
        <div class="statistical-container">
            <form action="statistical.php" method="POST">
            <div class="statistical-header">
                <div class="line-header"> 
                </div>
                <div class="header-line">
                    <div>
                        <h3><i class="fas fa-swatchbook"></i>Thống kê</h3>
                    </div>
                </div>
                <div class="header-inf">
                    <div class="header-inf-item">
                        <label for="">Loại thống kê</label>
                        <select name="statistical" id="statistical" onchange="changeStatistical(this)">
                            <option value="0">--Chọn thống kê--</option>
                            <option value="1">Thống kê sản phẩm bán chạy</option>
                            <option value="2">Thống kê tất cả doanh thu</option>
                            <option value="3">Thống kê doanh thu theo ngày</option>
                            <option value="4">Thống kê doanh thu theo tháng</option>
                            <option value="5">Thống kê doanh thu theo năm</option>
                            <option value="6">Thống kê doanh thu theo đợt</option>
                        </select>        
                    </div>
                </div>
            </div>
            <div class="container" style="width: 100%; padding: 15px 0">
                <div class="row">
                    <div class="col-md-2" style="display: flex;">
                        <div class="panel panel-info" style="display: flex;   justify-content: center;">
                            <div class="panel-body">
                                <button type="submit" class="btn btn-info" name="btn-statistical">Thống kê</button>
                            </div>
                        </div>
                        <div id="input-qty" class="panel panel-info" style="display: none;   justify-content: center; margin-left: 30px">
                            <div class="panel-body">
                                <input name="txt_qty" type="number" style="height:35px; width:300px; padding-left:10px; border-radius: 5px; border: 1px solid #ccc" placeholder="Nhập số lượng quy định bán chạy...">
                            </div>
                        </div>
                        <div id="input-date" class="panel panel-info" style="display: none;   justify-content: center; margin-left: 30px">
                            <div class="panel-body">
                                <input name="txt_date" type="date" style="height:35px; width:250px; padding-left:10px; border-radius: 5px; border: 1px solid #ccc" >
                            </div>
                        </div>
                        <div id="input-date1" class="panel panel-info" style="display: none;   justify-content: center; margin-left: 30px">
                            <div class="panel-body">
                                <input name="txt_date1" type="date" style="height:35px; width:250px; padding-left:10px; border-radius: 5px; border: 1px solid #ccc" >
                            </div>
                        </div>
                    </div>
                    <?php 
                        $date = filter_input(INPUT_POST,'txt_date');
                        $qty = filter_input(INPUT_POST,'txt_qty');
                        $statistical = filter_input(INPUT_POST,'statistical');
                        $sql = "SELECT orders_detail.Id_product as id,ProductName,products.Price as pr, SUM(orders_detail.Quantity) as sum,orders.Status 
                        FROM orders_detail,products,orders 
                        WHERE orders_detail.Id_product = products.Id_product 
                        AND orders_detail.Id_orders = orders.Id_orders 
                        AND orders.Status = 3 
                        GROUP By orders_detail.Id_product 
                        HAVING SUM(orders_detail.Quantity) >= $qty;";
                        if(isset($_POST['btn-statistical'])){
                            if($statistical == 1){
                                $result = mysqli_query($connect,$sql);

                    ?>

                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Thống kê sản phẩm bán chạy - Quy định bán chạy: <span style="color:red; font-size: 12pt">Số lượng bán ra >= <?php echo $qty ?></span></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng bán ra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result) {
                                             while ($row = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['ProductName'] ?></td>
                                            <td><?php echo $row['pr'] ?></td>   
                                            <td><?php echo $row['sum'] ?></td>
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php }elseif($statistical == 2 && $date==""){
                        $sql1 = "SELECT count(Id_orders) as total_orders FROM orders WHERE Status = 3";
                        $sql2 = "SELECT SUM(orders_detail.Quantity*Price) as total FROM orders,orders_detail 
                        WHERE orders.Id_orders = orders_detail.Id_orders 
                        AND Status = 3";
                        $result1 = mysqli_query($connect,$sql1);
                        $result2 = mysqli_query($connect,$sql2);
                    ?>
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Thống kê tất cả doanh thu</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Tổng số đơn hàng</th>
                                            <th>Tổng doanh thu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if ($result1) {
                                             while ($row1 = mysqli_fetch_array($result1)) { ?>
                                        <tr>
                                            <td><?php echo $row1['total_orders'] ?></td>
        
                                        <?php }}?>
                                        <?php
                                        if ($result2) {
                                             while ($row2 = mysqli_fetch_array($result2)) { ?>
                                            <td><?=number_format($row2['total'],0,',','.')?>đ</td>
                                        </tr>
                                        <?php }}?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                
                <?php }elseif($statistical == 3 && $date  != ""){
                        $sql3 = "SELECT count(Id_orders) as total_orders FROM orders WHERE Status = 3 AND date(OrderDate) = '$date'";
                        $sql4 = "SELECT SUM(orders_detail.Quantity*Price) as total FROM orders,orders_detail 
                        WHERE orders.Id_orders = orders_detail.Id_orders 
                        AND Status = 3
                        AND date(OrderDate) = '$date'";
                        $result3 = mysqli_query($connect,$sql3);
                        $result4 = mysqli_query($connect,$sql4);
                    ?>
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Thống kê doanh thu theo ngày: <span style="color:red; font-size: 12pt"><?php echo $date ?></span> </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Tổng số đơn hàng</th>
                                            <th>Tổng doanh thu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if ($result3) {
                                             while ($row3 = mysqli_fetch_array($result3)) { ?>
                                        <tr>
                                            <td><?php echo $row3['total_orders'] ?></td>
        
                                        <?php }}?>
                                        <?php
                                        if ($result4) {
                                             while ($row4 = mysqli_fetch_array($result4)) { ?>
                                            <td><?=number_format($row4['total'],0,',','.')?>đ</td>
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php }else if($statistical == 4 && $date  != ""){
                        $sql5 = "SELECT count(Id_orders) as total_orders FROM orders WHERE Status = 3 AND month(OrderDate) = month('$date')";
                        $sql6 = "SELECT SUM(orders_detail.Quantity*Price) as total FROM orders,orders_detail 
                        WHERE orders.Id_orders = orders_detail.Id_orders 
                        AND Status = 3
                        AND month(OrderDate) = month('$date')";
                        $result5 = mysqli_query($connect,$sql5);
                        $result6 = mysqli_query($connect,$sql6);
                    ?>
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Thống kê doanh thu theo tháng: <span style="color:red; font-size: 12pt"><?php echo $date ?></span> </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Tổng số đơn hàng</th>
                                            <th>Tổng doanh thu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if ($result5) {
                                             while ($row5 = mysqli_fetch_array($result5)) { ?>
                                        <tr>
                                            <td><?php echo $row5['total_orders'] ?></td>
        
                                        <?php }}?>
                                        <?php
                                        if ($result6) {
                                             while ($row6 = mysqli_fetch_array($result6)) { ?>
                                            <td><?=number_format($row6['total'],0,',','.')?>đ</td>
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php }else if($statistical == 5 && $date  != ""){
                        $sql7 = "SELECT count(Id_orders) as total_orders FROM orders WHERE Status = 3 AND Year(OrderDate) = Year('$date')";
                        $sql8 = "SELECT SUM(orders_detail.Quantity*Price) as total FROM orders,orders_detail 
                        WHERE orders.Id_orders = orders_detail.Id_orders 
                        AND Status = 3
                        AND Year(OrderDate) = Year('$date')";
                        $result7 = mysqli_query($connect,$sql7);
                        $result8 = mysqli_query($connect,$sql8);
                    ?>
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Thống kê doanh thu theo tháng: <span style="color:red; font-size: 12pt"><?php echo $date ?></span> </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Tổng số đơn hàng</th>
                                            <th>Tổng doanh thu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if ($result7) {
                                             while ($row7 = mysqli_fetch_array($result7)) { ?>
                                        <tr>
                                            <td><?php echo $row7['total_orders'] ?></td>
        
                                        <?php }}?>
                                        <?php
                                        if ($result8) {
                                             while ($row8 = mysqli_fetch_array($result8)) { ?>
                                            <td><?=number_format($row8['total'],0,',','.')?>đ</td>
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php }}?>                        
            </div>
            </form>
        </div>
        </div>
        </div>
    </div>

    <script>
        $(document).ready(function (){
            $('.main-nav-list .button-table a.button-table-drop').click(function () {
                $(this).parent('li').children('.sub-nav-list-table').slideToggle();
                $('.drop-menu-icon').toggleClass('fa-chevron-right fa-chevron-down');
            });
        });
    </script>
    <script>
        function changeStatistical(obj){
            var value = obj.value;
            if (value === '1'){
                document.getElementById("input-date").style.display = 'none';
                document.getElementById("input-qty").style.display = 'flex';
                document.getElementById("input-date1").style.display = 'none';
            }else if(value === '3' || value === '4' || value === '5' ){
                document.getElementById("input-qty").style.display = 'none';
                document.getElementById("input-date").style.display = 'flex';
                document.getElementById("input-date1").style.display = 'none';
            }
            else if(value === '6'){
                document.getElementById("input-date").style.display = 'flex';
                document.getElementById("input-date1").style.display = 'flex';
                document.getElementById("input-qty").style.display = 'none'; 
            }else{
                document.getElementById("input-date").style.display = 'none';
                document.getElementById("input-qty").style.display = 'none'; 
                document.getElementById("input-date1").style.display = 'none';
            }
        } 
    </script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>
</html>
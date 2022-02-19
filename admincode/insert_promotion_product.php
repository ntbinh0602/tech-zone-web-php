<?php include "master/master.php" ?>

<form name="frminsert" action="" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <?php 
                        $id_promotion = filter_input(INPUT_GET, 'id');
                        $rs = mysqli_query($connect,"SELECT * FROM promotion WHERE Id_promotion = '$id_promotion'");
                        if($rs){
                            While($row1 = mysqli_fetch_array($rs)){
                    ?>
                    <div class="panel-heading ver-2">
                        <h3 class="panel-title">Thêm sản phẩm khuyến mãi</h3>
                        <h3 class="panel-title">Đợt khuyến mãi: <?php echo $row1['PromotionName']; ?></h3>
                    </div>
                    <?php }} ?>
                    <div class="panel-head ver-3">
                        <h3 class="panel-title v1">Tỉ lệ khuyến mãi:    </h3>
                        <input class="txt-input" name="txt_ratio" required type="number" min="0" max="100" value="">
                        <input class="btn btn-primary" type="submit" name="btn_insert" value="Thêm mới"/>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover" id="table_id">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Chọn sản phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sql_view = "SELECT * FROM products WHERE NOT EXISTS (SELECT * FROM promotion_detail WHERE promotion_detail.Id_product = products.Id_product AND Id_promotion = $id_promotion)";
                                    $result_view = mysqli_query($connect, $sql_view);
                                    foreach ($result_view as $key => $value) {?>
                                <tr>
                                    <td><?php echo $key +1?></td>
                                    <td><img src="uploads/<?php echo $value['ProductImage']; ?>" alt="NoImage" width="50"></td>
                                    <td><?php echo $value['ProductName']?></td>
                                    <td><input type="checkbox" id="product" name="product[]" value="<?php echo $value['Id_product']?>"></td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
    $id_promotion = filter_input(INPUT_GET, 'id');
    $btn_insert = filter_input(INPUT_POST, 'btn_insert');
    $ratio = filter_input(INPUT_POST, 'txt_ratio');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['product']) && isset($_POST['btn_insert'])){
            foreach($_POST['product'] as $id_product){ 
                mysqli_query($connect,"INSERT INTO promotion_detail (Id_Promotion_detail,Id_product,Id_promotion,Ratio) 
                SELECT * FROM (SELECT '' AS Id_pd, '$id_product' AS id_prod,'$id_promotion' AS id_prom, '$ratio' AS rat) AS temp 
                WHERE NOT EXISTS ( SELECT Id_product,Id_promotion FROM promotion_detail WHERE Id_product = id_prod and Id_promotion = id_prom) LIMIT 1;");
            }
            echo '<script> location.replace("insert_promotion_product.php?id='."".$id_promotion."".'"); </script>';
        }
    }

    ?>

<?php include "master/footer.php" ?>
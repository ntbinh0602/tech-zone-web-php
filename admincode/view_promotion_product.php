<?php include 'master/master.php'; ?>

<?php 
        $id = filter_input(INPUT_GET, 'id');
        $sql_getdata = "SELECT * FROM promotion WHERE Id_promotion=$id";
        $result_getdata = mysqli_query($connect, $sql_getdata);  
        $sql_view = "SELECT CONCAT(Ratio,' %') as nRatio ,Price, (Price-(Price*Ratio/100)) as GiaKM,Id_Promotion_detail,promotion_detail.Id_promotion,promotion_detail.Id_product,PromotionName ,ProductName
                        FROM promotion,promotion_detail,products 
                        WHERE promotion.Id_promotion = promotion_detail.Id_promotion 
                            and promotion_detail.Id_product = products.Id_product
                            and promotion_detail.Id_promotion = $id
                        GROUP BY promotion_detail.Id_promotion,promotion_detail.Id_product;";
        $result_view = mysqli_query($connect, $sql_view);              
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
            <?php 
                foreach ($result_getdata as $getkey => $getvalue) {?>
                <div class="panel-heading ver-2">
                    <h3 class="panel-title">Danh sách sản phẩm khuyến mãi</h3>
                    <h3 class="panel-title">Đợt khuyến mãi: <?php echo $getvalue['PromotionName'] ?></h3>
                    <?php } ?>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá gốc</th>
                                <th>Giảm giá</th>
                                <th>Giá khuyến mãi</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($result_view as $key => $value) {?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $value['ProductName']?></td>
                                <td><?=number_format($value['Price'],0,',','.')?> VNĐ</td>
                                <td><?php echo $value['nRatio']?></td>
                                <td><?=number_format($value['GiaKM'],0,',','.')?> VNĐ</td>
                                <td>
                                    <a href="edit_promotion_product.php?id=<?php echo $value['Id_Promotion_detail']?>&id_page=<?php echo $id ?>"
                                        class="btn btn-info" title="sửa"><span
                                            class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="delete_promotion_product.php?id=<?php echo $value['Id_Promotion_detail']?>&save_page=<?php echo $id ?>"
                                        class="btn btn-danger" title="xóa" onClick="return confirm('Bạn có muốn xóa không?')"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'master/footer.php'; ?>
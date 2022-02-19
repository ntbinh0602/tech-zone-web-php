<?php include 'master/master.php'; ?>

        <?php  
            $id_get_page = filter_input(INPUT_GET, 'id_page');    
            $id = filter_input(INPUT_GET, 'id');
            $sql_getdata = "SELECT * FROM promotion_detail,promotion,products 
                            WHERE promotion.Id_promotion = promotion_detail.Id_promotion 
                                and promotion_detail.Id_product = products.Id_product
                                and Id_Promotion_detail=$id";
            $result_getdata = mysqli_query($connect, $sql_getdata);  
            if ($result_getdata) {
                while ($row = mysqli_fetch_array($result_getdata)) {
        ?>

<div class="container form">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Sửa sản phẩm khuyến mãi</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Tên khuyến mãi</label>
                            <span style='color:red'></span>
                            <input class="txt-input" type="hidden" name="id_promotion_detail" value="<?php echo $row['Id_Promotion_detail'];?>">
                            <input class="txt-input" type="hidden" name="id_page" value="<?php echo $id_get_page;?>">
                            <input type="text" disabled="disabled" name="txt_promotion_name" class="form-control" required
                                placeholder="Nhập tên khuyến mãi" value="<?php echo $row['PromotionName']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <span style='color:red'></span>
                            <input type="text" disabled="disabled" name="txt_product_name" class="form-control" required
                                 value="<?php echo $row['ProductName']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <span style='color:red'>(*)</span>
                            <input type="number" name="txt_ratio" min="0" max="100" class="form-control" required
                                 value="<?php echo $row['Ratio']?>">
                        </div>
                        <button type="submit" name="btn_save" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php             
        }                 
    }
?>

        <?php                
            $btn_save = filter_input(INPUT_POST, 'btn_save');
            $id_update = filter_input(INPUT_POST, 'id_promotion_detail');
            $id_get = filter_input(INPUT_POST, 'id_page');
            $ratio= filter_input(INPUT_POST, 'txt_ratio');
            $sql_update = "UPDATE promotion_detail SET Ratio = '$ratio' WHERE Id_Promotion_detail= $id_update";
            if(isset($btn_save)&& $id_get == $id_get_page ){
                $result_edit = mysqli_query($connect, $sql_update);
                if($result_edit){
                    echo '<script> location.replace("view_promotion_product.php?id='."".$id_get."".'"); </script>';
                }
            }
        ?>


<?php include 'master/footer.php'; ?>
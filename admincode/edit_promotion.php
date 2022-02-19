<?php include 'master/master.php'; ?>
        <?php
            $id = filter_input(INPUT_GET, 'id');
            $sql_getdata = "SELECT * FROM promotion WHERE Id_promotion=$id";
            $result_getdata = mysqli_query($connect, $sql_getdata);
            if ($result_getdata) {
                while ($row = mysqli_fetch_array($result_getdata)) {
        ?>

<div class="container form">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Sửa tài khoản người dùng</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Tên khuyến mãi</label>
                            <span style='color:red'>(*)</span>
                            <input class="txt-input" type="hidden" name="id_promotion" value="<?php echo $row['Id_promotion'];?>">
                            <input type="text" name="txt_promotion_name" class="form-control" required
                                placeholder="Nhập tên khuyến mãi" value="<?php echo $row['PromotionName']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Ngày bắt đầu</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_start_date" class="form-control" required
                                 value="<?php echo $row['StartDate']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Ngày kết thúc</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_end_date" class="form-control" required
                                 value="<?php echo $row['EndDate']?>">
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
            $id_promotion = filter_input(INPUT_POST, 'id_promotion');
            $promotion_name = filter_input(INPUT_POST, 'txt_promotion_name');
            $start_date = filter_input(INPUT_POST, 'txt_start_date');
            $end_date = filter_input(INPUT_POST, 'txt_end_date');

            $sql_update = "UPDATE promotion SET PromotionName = '$promotion_name',StartDate = '$start_date',EndDate = '$end_date' WHERE Id_promotion = $id_promotion";
            if(isset($btn_save)){
                $result_edit = mysqli_query($connect, $sql_update);
                if($result_edit){
                    echo '<script> location.replace("promotion.php"); </script>';
                }
            }
        ?>



<?php include 'master/footer.php'; ?>
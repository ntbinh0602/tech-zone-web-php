<?php include 'master/master.php'; 
?>

<div class="container form">
    <div class="row">

        <div class="col-md-11">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Thêm mới Khuyến mãi</h3>
                </div>
                <div class="panel-body">
                    <form action="insert_promotion.php" method="POST" role="form">


                        <div class="form-group">
                            <label for="">Tên khuyến mãi</label><span style='color:red'>(*)</span>
                            <input type="text" name="txt_promotion_name" class="form-control" placeholder="Nhập tên khuyến mãi" required="required">
                        </div>

                        <div class="form-group">
                            <label for="">Ngày bắt đầu</label><span style='color:red'>(*)</span>
                            <input type="date" name="txt_start_date" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                            <label for="">Ngày kết thúc</label><span style='color:red'>(*)</span>
                            <input type="date" name="txt_end_date" class="form-control" required="required">
                        </div>
                        <button type="submit" name="btn_insert" class="btn btn-primary">Thêm mới</button>
                        <span id = "notok1" class="setup-notif notification1" style="color:red">khuyến mãi đã tồn tại</span>
                        <span id = "notok2" class="setup-notif notification1" style="color:Blue">Thêm khuyến mãi thành công</span>

                        <?php 
                            $btn_insert = filter_input(INPUT_POST, 'btn_insert');
                            $promotion_name = filter_input(INPUT_POST, 'txt_promotion_name');
                            $start_date = filter_input(INPUT_POST, 'txt_start_date');
                            $end_date = filter_input(INPUT_POST, 'txt_end_date');
                            $query = mysqli_query($connect,"SELECT PromotionName FROM promotion WHERE PromotionName='$promotion_name'");
                            if(isset($btn_insert)){
                                if(mysqli_num_rows($query)){
                                    echo '<script>var element = document.getElementById("notok1");
                                    element.classList.remove("notification1");</script>';
                                }else{
                                    $sql_insert = "INSERT INTO promotion(PromotionName,StartDate,EndDate) VALUES ('$promotion_name','$start_date','$end_date')";
                                    $result_insert = mysqli_query($connect, $sql_insert);
                                    echo '<script>var element = document.getElementById("notok2");
                                    element.classList.remove("notification1");</script>';
                                    include  'update_promotion_status.php';

                                }   
                            }
                            ?>

                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách đợt khuyến mãi</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên khuyến mãi</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql_view = "SELECT * FROM promotion ORDER BY Id_promotion DESC";
                                $result_view = mysqli_query($connect, $sql_view);         
                                foreach ($result_view as $key => $value) {?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $value['PromotionName']?></td>
                                <td><?php echo $value['StartDate']?></td>
                                <td><?php echo $value['EndDate']?></td>
                                <td><?php if($value['Status'] == 1){echo "Chưa bắt đầu";}else if ($value['Status'] == 2){echo "Đang diễn ra";} else{echo "Đã kết thúc";}?></td>
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
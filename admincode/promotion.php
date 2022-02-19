<?php include "master/master.php";
include  'update_promotion_status.php' ; 
            $sql_view = "SELECT * FROM promotion ORDER BY Status ASC";
            $result_view = mysqli_query($connect, $sql_view);
?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Khuyến mãi</h3>
                </div>
                <div class="panel-body">
                    <a href="insert_promotion.php" title="" class="btn btn-info">Thêm mới</a>
                </div>
            </div>
        </div>
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
                                <th>Thao tác</th>
                                <th>SP khuyến mãi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($result_view as $key => $value) {?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $value['PromotionName']?></td>
                                <td><?php echo $value['StartDate']?></td>
                                <td><?php echo $value['EndDate']?></td>
                                <td><?php if($value['Status'] == 1){echo "<span style='color:orange; font-fize:25px; font-weight:800';> Chưa diễn ra</span>";}
                                else if ($value['Status'] == 2){echo "<span style='color:green; font-fize:25px; font-weight:800';> Đang diễn ra</span>";} 
                                else{echo "<span style='color:red; font-fize:25px; font-weight:800';> Đã kết thúc</span>";}?></td>
                                <td>
                                    <a href="edit_promotion.php?id=<?php echo $value['Id_promotion']?>"
                                        class="btn btn-info" title="sửa"><span
                                            class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="delete_promotion.php?id=<?php echo $value['Id_promotion']?>"
                                        class="btn btn-danger" title="xóa" onClick="return confirm('Bạn có muốn xóa không?')"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </td>
                                <td>
                                    <a href="insert_promotion_product.php?id=<?php echo $value['Id_promotion']; ?>" ><span class="btn btn-info">Thêm</span></a>
                                    <a href="view_promotion_product.php?id=<?php echo $value['Id_promotion']; ?>" ><span class="btn btn-info">Xem</span></a>
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


<?php include "master/footer.php" ?>
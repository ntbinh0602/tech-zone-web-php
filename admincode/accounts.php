<?php include "master/master.php"; 

    $sqlview_user = "SELECT * FROM accounts,role WHERE accounts.Id_role = role.Id_role";
    $result_view_user = mysqli_query($connect, $sqlview_user);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách người dùng</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Tên người dùng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Quyền hạn</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                                <th>Khóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($result_view_user as $key => $value) {?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $value['UserName']?></td>
                                <td><?php echo $value['Email']?></td>
                                <td><?php echo $value['FullName']?></td>
                                <td><?php echo $value['PhoneNumber']?></td>
                                <td><?php echo $value['Address']?></td>
                                <td><?php echo $value['RoleName']?></td>
                                <td><?php if($value['Status']==1){ echo "<span style='color:green; font-fize:25px; font-weight:800';> Mở</span>";}else{echo "<span style='color:red; font-fize:25px; font-weight:800';>Khóa</span>";}?></td>
                                <td>
                                    <a href="edit_accounts.php?id=<?php echo $value['Id_account']?>"
                                        class="btn btn-info" title="sửa"><span
                                            class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="delete_account.php?id=<?php echo $value['Id_account']?>"
                                        class="btn btn-danger" title="xóa" onClick="return confirm('Bạn có muốn xóa không?')"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </td>
                                <td><a href="lock_unlock_account.php?id=<?php echo $value['Id_account']?>&status=<?php echo $value['Status'];?>"
                                        class="btn btn-info" title="Khóa" onClick="return confirm('Bạn có muốn thao tác này không')"><span
                                            class="fas fa-key"></span></a>
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
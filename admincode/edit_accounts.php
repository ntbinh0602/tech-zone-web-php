<?php include 'master/master.php';?>


        <?php
            include 'connect.php';

            $id = filter_input(INPUT_GET, 'id');
            $sql_getdata = "SELECT * FROM accounts WHERE Id_account=$id";
            $result_getdata = mysqli_query($connect, $sql_getdata);
            if ($result_getdata) {
                while ($row = mysqli_fetch_array($result_getdata)) {
        ?>

<!-- Phần đầu trang -->
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
                            <label for="">Tên tài khoản</label>
                            <input class="txt-input" type="hidden" name="id_account" value="<?php echo $row['Id_account'];?>">
                            <input type="text" name="txt_username" class="form-control" required
                                placeholder="Nhập tên danh mục" value="<?php echo $row['UserName']?>" disabled="disabled">
                        </div>

                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_password" class="form-control" required
                                placeholder="Nhập tên danh mục" value="<?php echo $row['Password']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Tên người dùng</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_full_name" class="form-control" required
                                placeholder="Nhập tên danh mục" value="<?php echo $row['FullName']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_phone_number" class="form-control" required
                                placeholder="Nhập tên danh mục" value="<?php echo $row['PhoneNumber']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_email" class="form-control" required
                                placeholder="Nhập tên danh mục" value="<?php echo $row['Email']?>">
                        </div>

                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <span style='color:red'>(*)</span>
                            <input type="text" name="txt_address" class="form-control" required
                                placeholder="Nhập tên danh mục" value="<?php echo $row['Address']?>">
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
            $id_acc_update = filter_input(INPUT_POST, 'id_account');
            $password = filter_input(INPUT_POST, 'txt_password');
            $full_name = filter_input(INPUT_POST, 'txt_full_name');
            $phone_number = filter_input(INPUT_POST, 'txt_phone_number');
            $email = filter_input(INPUT_POST, 'txt_email');
            $address = filter_input(INPUT_POST, 'txt_address');
            $sql_update = "UPDATE accounts SET PassWord = '$password',FullName = '$full_name',PhoneNumber = '$phone_number',Email = '$email',Address = '$address' WHERE Id_account = $id_acc_update";
            if(isset($btn_save)){
                $result_edit = mysqli_query($connect, $sql_update);
                if($result_edit){
                    echo '<script> location.replace("accounts.php"); </script>';
                }
            }
        ?>

<!-- Phan cuoi tran -->
<?php include 'master/footer.php'; ?>
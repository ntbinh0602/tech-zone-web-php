<?php include 'master/master.php'; ?>

    <div class="name-cate"><h3>Chỉnh sửa thông tin người dùng</h3></div>

        <?php
            include 'connect.php';

            $id = filter_input(INPUT_GET, 'id');
            $sql_getdata = "SELECT * FROM accounts WHERE Id_account=$id";
            $result_getdata = mysqli_query($connect, $sql_getdata);
            if ($result_getdata) {
                while ($row = mysqli_fetch_array($result_getdata)) {
        ?>

    <form class="form-insert" action="edit_account.php" method="POST">
        <table cellpading="0" border="0" align="center">
            <tr>
                <th class="header-detail-account">ID:</th> 
                <td><input class="txt-input" type="hidden" name="id_account" value="<?php echo $row['Id_account'];?>"><?php echo $row['Id_account'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Quyền hạn:</th> 
                <td><input class="txt-input" type="hidden" name="id_role" value="<?php echo $row['Id_role'];?>"><?php if($row['Id_role'] == 1){echo "Admin";}else{echo "Thành viên";} ?></td>           
            </tr>
            <tr>
                <th class="header-detail-account">Tên tài khoản:</th> 
                <td><input class="txt-input" required type="text" required value="<?php echo $row['UserName'];?>" name="txt_username"/></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Mật khẩu:</th> 
                <td><input class="txt-input" required type="password" required value="<?php echo $row['Password'];?>" name="txt_password"/></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Tên đầy đủ:</th> 
                <td><input class="txt-input" required type="text" required value="<?php echo $row['FullName'];?>" name="txt_full_name"/></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Số điện thoại:</th> 
                <td><input class="txt-input" required type="number" required value="<?php echo $row['PhoneNumber'];?>" name="txt_phone_number"/></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Email:</th> 
                <td><input class="txt-input" required type="email" required value="<?php echo $row['Email'];?>" name="txt_email"/></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Địa Chỉ:</th>
                <td><input class="txt-input" required type="text" required value="<?php echo $row['Address'];?>" name="txt_address"/></td> 
            </tr>
            <tr>
                <td class ="btn-td" colspan="2" align="center" ><input class="btn-form" type="submit" name="btn_save" id="bt_save" value="Lưu"/></td>
            </tr>
        </table>  
        <?php             
            }                 
        }
        ?>
    </form>
<?php include 'master/footer.php'; ?>
<?php include 'master/master.php'; ?>

    <div class="name-cate"><h3>Thông tin chi tiết</h3></div>

        <?php
            include 'connect.php';

            $id = filter_input(INPUT_GET, 'id');
            $sql_getdata = "SELECT * FROM accounts WHERE Id_account=$id";
            $result_getdata = mysqli_query($connect, $sql_getdata);  
            if ($result_getdata) {
                while ($row = mysqli_fetch_array($result_getdata)) {
        ?>

    <form class="form-insert" action="edit_category.php" method="POST">
        <table cellpading="0" border="0" align="center">
            <tr>
                <th class="header-detail-account">ID:</th> 
                <td><?php echo $row['Id_account'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Quyền hạn:</th> 
                <td><?php if($row['Id_role'] == 1){echo "Admin";}else{echo "Thành viên";} ?></td>           
            </tr>
            <tr>
                <th class="header-detail-account">Tên tài khoản:</th> 
                <td><?php echo $row['UserName'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Mật khẩu:</th> 
                <td><?php echo $row['Password'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Tên đầy đủ:</th> 
                <td><?php echo $row['FullName'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Số điện thoại:</th> 
                <td><?php echo $row['PhoneNumber'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Email:</th> 
                <td><?php echo $row['Email'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Địa Chỉ:</th>
                <td><?php echo $row['Address'];?></td>       
            </tr>
            <tr>
                <th class="header-detail-account">Ngày tạo:</th>
                <td><?php echo $row['CreatedDate'];?></td>       
            </tr>
        </table>  
    </form>
        <?php             
            }                 
        }
        ?>


<?php include 'master/footer.php'; ?>
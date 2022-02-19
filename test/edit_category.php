<?php include 'master/master.php'; ?>

    <div class="name-cate"><h3>Sửa danh mục</h3></div>

        <?php

            $id = filter_input(INPUT_GET, 'id');
            $sql_getdata = "SELECT * FROM category WHERE Id_category=$id";
            $result_getdata = mysqli_query($connect, $sql_getdata);  
            if ($result_getdata) {
                while ($row = mysqli_fetch_array($result_getdata)) {
        ?>

    <form class="form-insert" action="edit_category.php" method="POST">
        <table cellpading="0" border="0" align="center">
            <tr>
                <th class="header-detail-account">ID:</th> 
                <td><input class="txt-input" type="hidden" name="id_category" value="<?php echo $row['Id_category'];?>"><?php echo $row['Id_category'];?></td> 
            </tr>
            <tr>
                <th class="header-detail-account">Tên danh mục:</th> 
                <td><input class="txt-input" required type="text" required value="<?php echo $row['CategoryName'];?>" name="txtcategory_name"/></td> 
            </tr>
            <tr>
                <td class ="btn-td" colspan="2" align="center" ><input class="btn-form" type="submit" name="btn_save" id="bt_save" value="Lưu"/></td>
            </tr>
        </table>  
    </form>
        <?php             
            }                 
        }
        ?>

        <?php
            $btn_save = filter_input(INPUT_POST, 'btn_save');
            $id_update = filter_input(INPUT_POST, 'id_category');
            $category_name = filter_input(INPUT_POST, 'txtcategory_name');
            $sql_update = "UPDATE category SET CategoryName = '$category_name' WHERE Id_category = $id_update";
            if(isset($btn_save)&& $category_name !=''){
                $result_edit = mysqli_query($connect, $sql_update);
                if($result_edit){
                    header('Location:category.php');
                }else{                 
                    echo 'Sửa không thành công';
                }
            }
        ?>
    

<?php include 'master/footer.php'; ?>
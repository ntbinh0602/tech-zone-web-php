<?php include 'master/master.php'; 
?>

<div class="container form">
    <div class="row">

        <div class="col-md-11">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Thêm mới danh mục</h3>
                </div>
                <div class="panel-body">
                    <form action="add_category.php" method="POST" role="form">


                        <div class="form-group">
                            <label for="">Tên danh mục</label><span style='color:red'>(*)</span>
                            <input type="text" name="txt_category_name" class="form-control" placeholder="Nhập tên danh mục" required="required">
                        </div>
                        <button type="submit" name="btn_insert" class="btn btn-primary">Thêm mới</button>
                        <span id = "notok1" class="setup-notif notification1" style="color:red">Danh mục đã tồn tại</span>
                        <span id = "notok2" class="setup-notif notification1" style="color:Blue">Thêm danh mục thành công</span>

                        <?php 
                            $btn_insert = filter_input(INPUT_POST, 'btn_insert');
                            $category_name = filter_input(INPUT_POST, 'txt_category_name');
                            $query = mysqli_query($connect,"SELECT CategoryName FROM category WHERE CategoryName='$category_name'");
                            if(isset($btn_insert)){
                                if(mysqli_num_rows($query)){
                                    echo '<script>var element = document.getElementById("notok1");
                                    element.classList.remove("notification1");</script>';
                                }else{
                                    $sql_insert = "INSERT INTO category(CategoryName) VALUES ('$category_name')";
                                    $result_insert = mysqli_query($connect, $sql_insert);
                                    echo '<script>var element = document.getElementById("notok2");
                                    element.classList.remove("notification1");</script>';
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
                    <h3 class="panel-title">Danh sách danh mục</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên danh mục</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql_view = "SELECT * FROM category ORDER BY Id_category DESC";
                                $result_view = mysqli_query($connect, $sql_view);         
                                foreach ($result_view as $key => $value) {?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $value['CategoryName']?></td>
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
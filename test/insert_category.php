<?php include 'master/master.php'; ?>

<div class="template">
    <div class="form-insert">
    <div class="w3-container f-blue">
        <h2>Thêm danh mục</h2>
    </div>
    <form class="w3-container" action="insert_category.php" method="POST">
        <p>      
            <label class="f-text-blue"><b>Tên danh mục</b></label>
            <input class="f-input f-green" required type="text" name="txt_category-name">
        </p>
        <p class="btn-submit">
            <input class="f-btn f-blue" type="submit" name="btn_insert" value="Thêm mới"/>
        </p>
        <?php 

        $btn_insert = filter_input(INPUT_POST, 'btn_insert');
        $category_name = filter_input(INPUT_POST, 'txt_category-name');
        $sql_insert = "INSERT INTO category (Id_category,CategoryName) 
        SELECT * FROM (SELECT '' AS Id, '$category_name' AS cname) AS temp 
        WHERE NOT EXISTS ( SELECT CategoryName FROM category WHERE CategoryName = cname) LIMIT 1;";
        if(isset($btn_insert)){
            $result_insert = mysqli_query($connect, $sql_insert);
        }
        ?>
    </form>
    </div>
</div>
   

<table class="table-category">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
    </tr>
    
    <?php
        $sqlviewcate = "SELECT * FROM category ORDER BY Id_category DESC";
        $resultview = mysqli_query($connect, $sqlviewcate);
        
        if($resultview){
            While($row = mysqli_fetch_array($resultview)){              
    ?>  
    <tr>
        <td><?php echo $row['Id_category']; ?></td>
        <td><?php echo $row['CategoryName']; ?></td>
    </tr>
    <?php
            }
        }
    ?>
</table>
<?php include 'master/footer.php'; ?>
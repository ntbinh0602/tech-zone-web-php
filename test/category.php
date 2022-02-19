<?php include 'master/master.php'; ?>

<?php include 'connect.php'; ?>
<div class="name-cate"><h3>Danh mục</h3></div>
<div class="func-table">
    <div class="search-table">
        <p>Tìm kiếm</p>
        <input type="text">
    </div>
    <a href="insert_category.php">Thêm mới</a>
</div>

<table class="table-category">
    <tr class="table-header">
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $sqlviewcate = "SELECT * FROM category";
        $resultview = mysqli_query($connect, $sqlviewcate);
        
        if($resultview){
            While($row = mysqli_fetch_array($resultview)){              
    ?> 
    <tr>
        <td><?php echo $row['Id_category']; ?></td>
        <td><?php echo $row['CategoryName']; ?></td>
        <td>
            <a href="edit_category.php?id=<?php echo $row['Id_category']?>" ><i class="fas fa-edit"></i></a>
            <a href="delete_category.php?id=<?php echo $row['Id_category']?>" onClick="return confirm('Bạn có muốn xóa không?')"><i class="table-btn-delete fas fa-trash-alt"></i></a></td>
    </tr>
    <?php
            }
        }
    ?>
</table>

<?php include 'master/footer.php'; ?>
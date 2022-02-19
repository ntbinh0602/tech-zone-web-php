<?php include 'master/master.php';




    $products = mysqli_query($connect,"SELECT category.*,supplier.*,products.Description as pDescription,products.* FROM products,category,supplier WHERE category.Id_category = products.Id_category AND supplier.Id_supplier = products.Id_supplier");
    
    
?>


<!-- Phần đầu trang -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <a href="add_products.php" title="" class="btn btn-info">Thêm mới</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hãng sản xuất</th>
                                <th>Loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($products as $key => $value) :?>
                            <tr>
                                <td><?php echo $key +1?></td>
                                <td><?php echo $value['Supplier_Name']?></td>
                                <td><?php echo $value['CategoryName']?></td>
                                <td><?php echo $value['ProductName']?></td>
                                <td><?php echo $value['pDescription']?></td>
                                <td> <?=number_format($value['Price'],0,',','.')?> VNĐ </td>
                                <td><img src="uploads/<?php echo $value['ProductImage']?>" width="50"></td>
                                <?php if($value['Status'] == 1) { ?>
                                <td>Hiện</td>
                                <?php } else{ ?>
                                <td>Ẩn</td>
                                <?php }?>
                                <td>
                                    <a href="edit_products.php?Id_product=<?php echo $value['Id_product']?>"
                                        class="btn btn-info" title="sửa"><span
                                            class="glyphicon glyphicon-pencil"></span></a>
                                    <a onclick="if (!confirm('Bạn có chắc chắn muốn xóa?')) { return false }"
                                        href="delete_products.php?Id_product=<?php echo $value['Id_product']?>"
                                        class="btn btn-danger" title="xóa"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Phan cuoi tran -->
<?php include 'master/footer.php'; ?>
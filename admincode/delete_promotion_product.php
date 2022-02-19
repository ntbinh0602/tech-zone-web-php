<?php
    include 'connect.php';
    $id_del = filter_input(INPUT_GET, 'id');
    $savepage = filter_input(INPUT_GET, 'save_page');
    $sql_delete = "DELETE FROM promotion_detail WHERE Id_Promotion_detail = $id_del";
    $result_delete = mysqli_query($connect,$sql_delete);
    if($result_delete){
        header('Location: view_promotion_product.php?id='."".$savepage);
    }else{
        echo 'Xóa không thành công';
    }
?>
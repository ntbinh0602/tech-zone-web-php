<?php
    include 'connect.php';
    $id_del = filter_input(INPUT_GET, 'id');
    $sql_delete = "DELETE FROM promotion WHERE Id_promotion = $id_del";
    $result_delete = mysqli_query($connect,$sql_delete);
    if($result_delete){
        header('Location: promotion.php');
    }else{
        echo 'Xóa không thành công';
    }
?>
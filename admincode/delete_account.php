<?php
    include 'connect.php';
    $id_del = filter_input(INPUT_GET, 'id');
    $sql_delete = "DELETE FROM accounts WHERE Id_account = $id_del";
    $result_delete = mysqli_query($connect,$sql_delete);
    echo $result_delete;
    if($result_delete){
        header('Location: accounts.php');
    }else{
        echo 'Xóa không thành công';
    }
?>
<?php
    include 'connect.php';
    $id_del = filter_input(INPUT_GET, 'id');
    $sql_delete = "DELETE FROM category WHERE Id_category = $id_del";
    $result_delete = mysqli_query($connect,$sql_delete);
    if($result_delete){
        header('Location: category.php');
    }

?>
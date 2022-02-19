<?php 
    include "connect.php";
    $id_product = filter_input(INPUT_GET, 'id1');
    $id_promotion = filter_input(INPUT_GET, 'id2');
    $sql_insert = "INSERT INTO promotion_detail(Id_product,Id_promotion) VALUES ('$id_product','$id_promotion')";
    $result_insert = mysqli_query($connect, $sql_insert);
    if($result_insert){
        header('Location: insert_promotion_product.php?id='."".$id_promotion."".'&check=1');
    } else {
        header('Location: insert_promotion_product.php?id='."".$id_promotion."".'&check=1');
    }
?>
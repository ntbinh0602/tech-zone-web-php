<?php
            include 'connect.php';

            $id = filter_input(INPUT_GET, 'id');
            $status = filter_input(INPUT_GET, 'status');
            $sql_lock = "UPDATE accounts SET Status = 0 WHERE Id_account = $id";
            $sql_unlock = "UPDATE accounts SET Status = 1 WHERE Id_account = $id";
            if($status == 1) {
                mysqli_query($connect,$sql_lock);
                header('Location: accounts.php');
            }else {
                mysqli_query($connect,$sql_unlock); 
                header('Location: accounts.php'); 
            }
        ?>

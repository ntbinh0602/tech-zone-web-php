

<?php 
    include "connect.php";
    $sql1 = "UPDATE promotion SET Status = 1 WHERE StartDate > CURRENT_DATE";
    $sql2 =  "UPDATE promotion SET Status = 2 WHERE StartDate <= CURRENT_DATE and EndDate > CURRENT_DATE";
    $sql3 = "UPDATE promotion SET Status = 3 WHERE EndDate <= CURRENT_DATE";
    $kq1 = mysqli_query($connect, $sql1);
    $kq2 = mysqli_query($connect, $sql2);
    $kq3 = mysqli_query($connect, $sql3);
?>
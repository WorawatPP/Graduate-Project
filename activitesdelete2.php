<?php
    require 'connect1.php';
    
    $Queue_ID = $_GET['Queue_ID'];
    
    $q = "DELETE FROM queue WHERE Queue_ID='$Queue_ID'";
    
    $result = mysqli_query($link, $q);
    
    if ($result) {
        header("Location:forEmployee4.php");
        exit();
    }
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>

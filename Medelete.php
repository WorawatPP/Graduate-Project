<?php
    require 'connect1.php';
    
    $Medicine_ID = $_GET['Medicine_ID'];
    
    $q = "DELETE FROM medicine WHERE Medicine_ID='$Medicine_ID'";
    
    $result = mysqli_query($link, $q);
    
    if ($result) {
        header("Location:TableAdmin3PM.php");
        exit();
    }
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>
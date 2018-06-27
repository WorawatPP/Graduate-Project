<?php
    require 'connect1.php';
    
    $Pd_ID = $_GET['Pd_ID'];
    
    $q = "DELETE FROM product WHERE Pd_ID='$Pd_ID'";
    
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
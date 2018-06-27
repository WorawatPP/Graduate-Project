<?php
    require 'connect1.php';
 
    $ID_PD = $_GET['ID_PD'];
   
    $q = "DELETE FROM requisitionpd WHERE ID_PD='$ID_PD'";
    
    $result = mysqli_query($link, $q);
 
    if ($result) {
        header("Location:product.php");
        exit();
    }
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>

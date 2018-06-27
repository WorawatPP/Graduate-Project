<?php
    require 'connect1.php';
    
    
    
    
    
    $ID = $_GET['ID'];
   
    $q = "DELETE FROM requisition WHERE ID='$ID'";
    
    $result = mysqli_query($link, $q);
    

    
    if ($result) {
        header("Location:Medicine.php");
        exit();
    }
    
  
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>


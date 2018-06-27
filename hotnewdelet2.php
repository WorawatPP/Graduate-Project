<?php
    require 'connect1.php';
    
    $hotnew_ID = $_GET['hotnew_ID'];
    
    $q = "DELETE FROM hotnew WHERE hotnew_ID='$hotnew_ID'";
    
    $result = mysqli_query($link, $q);
    
    if ($result) {
        header("Location:hotnewshow2.php");
        exit();
    }
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>

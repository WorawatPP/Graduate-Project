<?php
    require 'connect1.php';
    
    $Op_ID = $_GET['Op_ID'];
    
    $q = "DELETE oldpeople,queueoldpeople FROM queueoldpeople INNER JOIN oldpeople on oldpeople.Op_ID = queueoldpeople.Op_ID ";
    $q1 = "DELETE FROM oldpeople WHERE Op_ID='$Op_ID'";
 
    $result = mysqli_query($link, $q);
     $result = mysqli_query($link, $q1);
    
    if ($result) {
        header("Location:TableforAdminOld.php");
        exit();
    }
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>
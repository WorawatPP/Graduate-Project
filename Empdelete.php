<?php
    require 'connect1.php';
    
    $Emp_ID = $_GET['Emp_ID'];
    
     $q = "DELETE FROM employee WHERE Emp_ID= $Emp_ID";
    $result = mysqli_query($link, $q);
    
    if ($result) {
        header("Location:EmpforAdminTable.php");
        exit();
    }
    
    
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    
    mysqli_close($link);
    
   ?>
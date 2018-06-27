<?php

    require 'connect1.php';
    
     $Queue_Op =$_POST['Queue_Op'];
     $Queue_Opdate =$_POST['Queue_Opdate'];
     $Queue_Opstatus =$_POST['Queue_Opstatus'];
     $Queue_Doctor=$_POST['Queue_Doctor'];
     $Queue_Hospital=$_POST['Queue_Hospital'];
     $Op_ID=$_POST['Op_ID'];
     
     $q = "INSERT INTO queueoldpeople (Queue_Op,Queue_Opdate,Op_ID,Queue_Opstatus,Queue_Doctor,Queue_Hospital) VALUES (NULL,'$Queue_Opdate','$Op_ID','N','$Queue_Doctor','$Queue_Hospital')";    
     $result = mysqli_query($link,$q);
     
     if ($result) {
    header("Location:TableforAdminOld.php");
             exit();

    exit();
} else {
    echo "Wrong". mysqli_error($link);
}
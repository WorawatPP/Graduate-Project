<?php
    require 'connect1.php';
    
   
        
     $Queue_ID =$_POST['Queue_ID'];
     $Queue_Name =$_POST['Queue_Name'];
     $Queue_Tel =$_POST['Queue_Tel'];
     $Queue_Date =$_POST['Queue_Date'];
     $Queue_Email =$_POST['Queue_Email'];
     $Queue_Status =$_POST['Queue_Status'];
     $strtime=$_POST['strtime'];
     $endtime=$_POST['endtime'];
     $Queue_Type=$_POST['Queue_Type'];
     $Queue_Enddate=$_POST['Queue_Enddate'];
        
        $q = "UPDATE queue SET Queue_Name='$Queue_Name',Queue_Tel='$Queue_Tel',Queue_Date='$Queue_Date',Queue_Email='$Queue_Email',Queue_Status='$Queue_Status',"
                ."strtime='$strtime',endtime='$endtime',Queue_Type='$Queue_Type',Queue_Enddate='$Queue_Enddate' WHERE Queue_ID='$Queue_ID'";
                
                
        $result = mysqli_query($link,$q); 
        
        
   if($result){
            
             header("Location:forAdmin4.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>
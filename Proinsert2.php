<?php
    require 'connect1.php';
    
   
        
       $Pd_ID =$_POST['Pd_ID'];
       $Pd_Name =$_POST['Pd_Name'];
       $Pd_Type =$_POST['Pd_Type'];
       $Pd_Sumtotal=$_POST['Pd_Sumtotal'];
        
       
     
       
       
        $q = "INSERT INTO product (Pd_ID,Pd_Name,Pd_Type,Pd_Sumtotal) VALUES ('$Pd_ID','$Pd_Name','$Pd_Type','$Pd_Sumtotal')";
                
                
        $result = mysqli_query($link,$q); 
        
        
   if($result){
            
             header("Location:TableEmployee3PM.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>

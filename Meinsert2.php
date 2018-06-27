<?php
    require 'connect1.php';
    
   
        
     $Medicine_ID =$_POST['Medicine_ID'];
     $Medicine_Name =$_POST['Medicine_Name'];
     $Medicine_Detail =$_POST['Medicine_Detail'];
     $Medicine_Usage =$_POST['Medicine_Usage'];
     $Medicine_Type =$_POST['Medicine_Type']; 
     $Medicine_Sumtotal=$_POST['Medicine_Sumtotal'];
     
     
     
     
     
     
     
        $q = "INSERT INTO medicine (Medicine_ID,Medicine_Name,Medicine_Detail,Medicine_Usage,Medicine_Type,Medicine_Sumtotal) VALUES ('$Medicine_ID','$Medicine_Name','$Medicine_Detail','$Medicine_Usage','$Medicine_Type','$Medicine_Sumtotal')";
                
                
        $result = mysqli_query($link,$q); 
        
        
   if($result){
            
             header("Location:TableEmployee3M.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>

<?php
    require 'connect1.php';
    
   
        
     $Medicine_ID =$_POST['Medicine_ID'];
     $Medicine_Name =$_POST['Medicine_Name'];
     $Medicine_Detail =$_POST['Medicine_Detail'];
     $Medicine_Usage =$_POST['Medicine_Usage'];
     $Medicine_Type =$_POST['Medicine_Type'];
    
     $Medicine_Addtotal=$_POST['Medicine_Addtotal'];
     $Medicine_Sumtotal=$_POST['Medicine_Sumtotal'];
     $Active=$_POST['Active'];
     
     
     
        $Medicine_Sumtotal=$Medicine_Sumtotal+$Medicine_Addtotal;
        $q = "UPDATE medicine SET Active='$Active',Medicine_Addtotal='$Medicine_Addtotal',Medicine_Sumtotal='$Medicine_Sumtotal', Medicine_Name='$Medicine_Name',Medicine_Detail='$Medicine_Detail',Medicine_Usage='$Medicine_Usage',Medicine_Type='$Medicine_Type' WHERE Medicine_ID='$Medicine_ID'";
                
                
        $result = mysqli_query($link,$q); 
        
        
   if($result){
            
             header("Location:TableAdmin3M.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>
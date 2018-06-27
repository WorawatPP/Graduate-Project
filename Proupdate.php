<?php
    require 'connect1.php';
    
   
        
       $Pd_ID =$_POST['Pd_ID'];
       $Pd_Name =$_POST['Pd_Name'];
       $Pd_Type =$_POST['Pd_Type'];
       
 
       $Pd_Addtotal=$_POST['Pd_Addtotal'];
       $Pd_Sumtotal=$_POST['Pd_Sumtotal'];
       $ActivePd=$_POST['ActivePd'];
        
       
       
        $Pd_Sumtotal=$Pd_Sumtotal+$Pd_Addtotal;
        $q = "UPDATE product SET ActivePd='$ActivePd',Pd_Sumtotal='$Pd_Sumtotal',Pd_Addtotal='$Pd_Addtotal',Pd_Name='$Pd_Name',Pd_Type='$Pd_Type' WHERE Pd_ID='$Pd_ID'" ;
                
                
        $result = mysqli_query($link,$q); 
        
        
   if($result){
            
             header("Location:TableAdmin3PM.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>
    
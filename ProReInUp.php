<?php
    require 'connect1.php';
    
   
        
     $ID_PD =$_POST['ID_PD'];
     $Date_PD =$_POST['Date_PD'];
     $Total_PD=$_POST['Total_PD'];
     $Pd_ID =$_POST['Pd_ID'];
     $Pd_Sumtotal=$_POST['Pd_Sumtotal'];
     
     $Emp_ID=$_POST['Emp_ID'];
     
     if($Pd_Sumtotal < $Total_PD){
        echo '<script type="text/javascript">'; 
        echo 'alert("คุณกรอกเกินจำนวน");'; 
        echo 'window.location.href = "ProRe.php?Pd_ID='.$Pd_ID.'";';
        echo '</script>';
        
     }else{
         
     $q = "INSERT INTO requisitionpd (ID_PD,Date_PD,Total_PD,Pd_ID,Emp_ID) VALUES ('$ID_PD','$Date_PD','$Total_PD','$Pd_ID','$Emp_ID')";//เบิก     
     $result = mysqli_query($link,$q); 
     
     
     
     
     
     $Pd_Sumtotal=$Pd_Sumtotal-$Total_PD;//ลดจำนวนยา
     $q1 = "UPDATE product SET Pd_Sumtotal=$Pd_Sumtotal WHERE Pd_ID='$Pd_ID'"; 
     $result1 = mysqli_query($link,$q1); 
     
    if($result){
         header("Location:Reproduct.php");
         exit();
    }
    elseif ($result1) {
           header("Location:Reproduct.php");
              exit();
    }
   
    else {
        echo "Wrong". mysqli_errno($link);
    }
     
     }
        
    ?>
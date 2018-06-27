<?php
    require 'connect1.php';
    
   
        
     $ID =$_POST['ID'];
     $Date =$_POST['Date'];
     $Total=$_POST['Total'];
     $Medicine_ID =$_POST['Medicine_ID'];
     $Medicine_Sumtotal=$_POST['Medicine_Sumtotal'];
     $Emp_ID=$_POST['Emp_ID'];
     
     if($Medicine_Sumtotal < $Total){
        echo '<script type="text/javascript">'; 
        echo 'alert("คุณกรอกเกินจำนวน");'; 
        echo 'window.location.href = "MedicineRe.php?Medicine_ID='.$Medicine_ID.'";';
        echo '</script>';
        
     }else{
         
     $q = "INSERT INTO requisition (ID,Date,Total,Medicine_ID,Emp_ID) VALUES ('$ID','$Date','$Total','$Medicine_ID','$Emp_ID')";//เบิก     
     $result = mysqli_query($link,$q); 
     
     
     
     
     
     $Medicine_Sumtotal=$Medicine_Sumtotal-$Total;//ลดจำนวนยา
     $q1 = "UPDATE medicine SET Medicine_Sumtotal=$Medicine_Sumtotal WHERE Medicine_ID='$Medicine_ID'"; 
     $result1 = mysqli_query($link,$q1); 
     
    if($result){
         header("Location:Remedicine.php");
         exit();
    }
    elseif ($result1) {
           header("Location:Remedicine.php");
              exit();
    }
   
    else {
        echo "Wrong". mysqli_errno($link);
    }
     }
     
        
    ?>


<?php
    require 'connect1.php';//เรียกใช้งาน code ของ connect1
    
   
        
        $hotnew_ID = $_POST['hotnew_ID'];
        $hotnew = $_POST['hotnew'];
        $hotnew_Headline=$_POST['hotnew_Headline'];
     
        
        
         $q = "UPDATE hotnew SET hotnew='$hotnew',hotnew_Headline='$hotnew_Headline' WHERE hotnew_ID='$hotnew_ID'";
         
         
         $result = mysqli_query($link, $q);
        
        if ($result) {
             
             header("Location:hotnewshow2.php");
             exit();
             
             
             
        } else {
            echo "เกิดข้อผิดพลาด". mysqli_errno($link);
        }

        mysqli_close($link);
        
        
        
        
        ?>
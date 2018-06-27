<?php
    
    


       require 'connect1.php';
       $Emp_ID = $_POST['Emp_ID'];
       $Emp_Name = $_POST['Emp_Name'];
       $Emp_Surname = $_POST['Emp_Surname'];
       $Emp_Sex = $_POST['Emp_Sex'];
       $Emp_Age = $_POST['Emp_Age'];
       $Emp_IDnum = $_POST['Emp_IDnum'];
       $Emp_BD = $_POST['Emp_BD'];
       $Emp_Address = $_POST['Emp_Address'];
       $Emp_CTAdress = $_POST['Emp_CTAdress'];
       $Emp_Mobile = $_POST['Emp_Mobile'];
       $Emp_User = $_POST['Emp_User'];
       $Emp_Password = $_POST['Emp_Password'];
       $Emp_Status1=$_POST['Emp_Status1'];
        
       
        $q1= "SELECT employee.Emp_IDnum FROM employee WHERE  Emp_IDnum = '$Emp_IDnum' AND Emp_ID != $Emp_ID";
        $objQuery1 = mysqli_query($link,$q1) or die (mysqli_error());
	$objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
        if($objResult1)
	{
	
                        echo '<script type="text/javascript">'; 
                        echo 'alert("ข้อมูลซํ้า");'; 
                        echo 'window.location.href = "Empedit.php?Emp_ID='.$Emp_ID.'";';
                        echo '</script>';
			exit();       
	}
        else {
              $q1 = "UPDATE employee SET Emp_IDnum='$Emp_IDnum'WHERE Emp_ID='$Emp_ID'";

                  $result1 = mysqli_query($link, $q1);
     
                     }


        $q2= "SELECT employee.Emp_User FROM employee WHERE  Emp_User = '$Emp_User' AND Emp_ID !=$Emp_ID";
        $objQuery2 = mysqli_query($link,$q2) or die (mysqli_error());
	$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
        if($objResult2)
	{
	
                        echo '<script type="text/javascript">'; 
                        echo 'alert("ข้อมูลซํ้า");'; 
                        echo 'window.location.href = "Empedit.php?Emp_ID='.$Emp_ID.'";';
                        echo '</script>';
			exit();       
	}
        else {
              $q2 = "UPDATE employee SET Emp_User='$Emp_User'WHERE Emp_ID='$Emp_ID'";

                  $result2 = mysqli_query($link, $q2);
     
                     }
        

         $q = "UPDATE employee SET Emp_Name='$Emp_Name',Emp_Surname='$Emp_Surname',"
                 ."Emp_Sex='$Emp_Sex',Emp_Age='$Emp_Age',Emp_BD='$Emp_BD',Emp_Address='$Emp_Address',Emp_CTAdress='$Emp_CTAdress',"
                 ."Emp_Mobile='$Emp_Mobile',Emp_Password='$Emp_Password',Emp_Status1='$Emp_Status1' WHERE Emp_ID='$Emp_ID'";
         
         
         $result = mysqli_query($link, $q);
 
        if ($result) {
             
             header("Location:EmpforAdminTable.php");
             exit();
             
             
             
        } else {
            echo "เกิดข้อผิดพลาด". mysqli_errno($link);
        }

        mysqli_close($link);

        
        ?>

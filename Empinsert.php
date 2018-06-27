<?php
    require 'connect1.php';//เรียกใช้งานหน้าของ connect1
      
   
        
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
        
        $q1= "SELECT employee.Emp_IDnum FROM employee WHERE  Emp_IDnum = '$Emp_IDnum'";
        
        $objQuery = mysqli_query($link,$q1) or die (mysqli_error());
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        if($objResult)
	{
	
                        echo '<script type="text/javascript">'; 
                        echo 'alert("หมายเลขบัตรประชาชนซํ้า");'; 
                        echo 'window.location.href = "forAdmin1.php"';
                        echo '</script>';
			exit();       
	}
        
        $q2= "SELECT employee.Emp_User FROM employee WHERE  Emp_User = '$Emp_User'";
        
        $objQuery2 = mysqli_query($link,$q2) or die (mysqli_error());
	$objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
        if($objResult2)
	{
	
                        echo '<script type="text/javascript">'; 
                        echo 'alert("User ซํ้า");'; 
                        echo 'window.location.href = "forAdmin1.php"';
                        echo '</script>';
			exit();       
	}
        
        
        //uploadimg
        $ext = pathinfo(basename($_FILES['Emp_Photo']['name']),PATHINFO_EXTENSION);//หารายละเอียดของชื่อไฟล์รูปภาพ
        $new_image_name = 'img_'.uniqid().".".$ext;//uniqid สร้าง id ของรูปไม่ซํ้ากัน
        $image_path = "img/";/*กำหนด path ปลายทาง*/
        $upload_path = $image_path.$new_image_name;/*เตรียมตัว upload*/
        //uploading
        move_uploaded_file($_FILES['Emp_Photo']['tmp_name'],$upload_path);//ย้ายไฟล์ที่อับโหลดขึ้น server ผ่านทาง form upload ไปเก็บในโฟล์เดอร์ใหม่
        
        
        
        $Emp_Photo = $new_image_name;   
        

       
        
        
        $q = "INSERT INTO employee (Emp_ID,Emp_Name,Emp_Surname,Emp_Sex,Emp_Age,Emp_IDnum,Emp_BD,Emp_Address,Emp_CTAdress,Emp_Mobile,Emp_User,Emp_Password,Emp_Photo) VALUES ('$Emp_ID','$Emp_Name','$Emp_Surname','$Emp_Sex',"
                ."'$Emp_Age','$Emp_IDnum','$Emp_BD','$Emp_Address','$Emp_CTAdress','$Emp_Mobile','$Emp_User','$Emp_Password','$Emp_Photo')";
                

        $result = mysqli_query($link,$q); 

        if($result){
            
             header("Location:EmpforAdminTable.php");
             exit();

        }
        
        
         else {
             echo "Wrong". mysqli_errno($link);
        }
        
        
       
       
	
        
        
        
        
        
        
         
    ?>
    
 
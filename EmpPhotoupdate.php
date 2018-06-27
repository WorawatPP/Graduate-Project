<?php
       


       require 'connect1.php';
       
               
       $Emp_ID = $_POST['Emp_ID'];
       $Emp_Name = $_POST['Emp_Name'];
       $Emp_Surname = $_POST['Emp_Surname'];
       $Emp_Status = $_POST['Emp_Status'];
       $Emp_Sex = $_POST['Emp_Sex'];
       $Emp_Age = $_POST['Emp_Age'];
       $Emp_IDnum = $_POST['Emp_IDnum'];
       $Emp_BD = $_POST['Emp_BD'];
       $Emp_Address = $_POST['Emp_Address'];
       $Emp_CTAdress = $_POST['Emp_CTAdress'];
       $Emp_Mobile = $_POST['Emp_Mobile'];
       $Emp_User = $_POST['Emp_User'];
       $Emp_Password = $_POST['Emp_Password'];
     
        
     //uploadimg
        $ext = pathinfo(basename($_FILES['Emp_Photo']['name']),PATHINFO_EXTENSION);//หารายละเอียดของชื่อไฟล์รูปภาพ
        $new_image_name = 'img_'.uniqid().".".$ext;//uniqid สร้าง id ของรูปไม่ซํ้ากัน
        $image_path = "img/";
        $upload_path = $image_path.$new_image_name;
        
        
        //uploading
        move_uploaded_file($_FILES['Emp_Photo']['tmp_name'],$upload_path);//ย้ายไฟล์ที่อับโหลดขึ้น server ผ่านทาง form upload ไปเก็บในโฟล์เดอร์ใหม่
        
        $Emp_Photo = $new_image_name; 
         
         
         $q = "UPDATE employee SET Emp_Name='$Emp_Name',Emp_Surname='$Emp_Surname',Emp_Status='$Emp_Status',"
                 ."Emp_Sex='$Emp_Sex',Emp_Age='$Emp_Age',Emp_IDnum='$Emp_IDnum',Emp_BD='$Emp_BD',Emp_Address='$Emp_Address',Emp_CTAdress='$Emp_CTAdress',"
                 ."Emp_Mobile='$Emp_Mobile',Emp_User='$Emp_User',Emp_Password='$Emp_Password',Emp_Photo='$Emp_Photo' WHERE Emp_ID='$Emp_ID'";
         
         
         $result = mysqli_query($link, $q);
        
        if ($result) {
             
             header("Location:EmpforAdminTable.php");
             exit();
             
             
             
        } else {
            echo "เกิดข้อผิดพลาด". mysqli_errno($link);
        }

        mysqli_close($link);
        
        
        
        
        ?>
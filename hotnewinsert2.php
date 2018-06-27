<?php
    require 'connect1.php';//เรียกใช้งาน code ของ connect1
    
   
        
        $hotnew_ID = $_POST['hotnew_ID'];
        $hotnew = $_POST['hotnew'];
        $hotnew_Headline=$_POST['hotnew_Headline'];
     
        
        //uploadimg
        $ext = pathinfo(basename($_FILES['hotnew_Photo']['name']),PATHINFO_EXTENSION);//หารายละเอียดของชื่อไฟล์รูปภาพ
        $new_image_name = 'img_'.uniqid().".".$ext;//uniqid สร้าง id ของรูปไม่ซํ้ากัน
        $image_path = "img/";/*กำหนด path ปลายทาง*/
        $upload_path = $image_path.$new_image_name;/*เตรียมตัว upload*/
        //uploading
        move_uploaded_file($_FILES['hotnew_Photo']['tmp_name'],$upload_path);//ย้ายไฟล์ที่อับโหลดขึ้น server ผ่านทาง form upload ไปเก็บในโฟล์เดอร์ใหม่
        $hotnew_Photo = $new_image_name;
        
           //uploadimg
        $ext2 = pathinfo(basename($_FILES['hotnew_Photo2']['name']),PATHINFO_EXTENSION);//หารายละเอียดของชื่อไฟล์รูปภาพ
        $new_image_name2 = 'img_'.uniqid().".".$ext2;//uniqid สร้าง id ของรูปไม่ซํ้ากัน
        $image_path2 = "img/";/*กำหนด path ปลายทาง*/
        $upload_path2 = $image_path2.$new_image_name2;/*เตรียมตัว upload*/
        //uploading
        move_uploaded_file($_FILES['hotnew_Photo2']['tmp_name'],$upload_path2);//ย้ายไฟล์ที่อับโหลดขึ้น server ผ่านทาง form upload ไปเก็บในโฟล์เดอร์ใหม่
        $hotnew_Photo2 = $new_image_name2;
        
           //uploadimg
        $ext3 = pathinfo(basename($_FILES['hotnew_Photo3']['name']),PATHINFO_EXTENSION);//หารายละเอียดของชื่อไฟล์รูปภาพ
        $new_image_name3 = 'img_'.uniqid().".".$ext3;//uniqid สร้าง id ของรูปไม่ซํ้ากัน
        $image_path3 = "img/";/*กำหนด path ปลายทาง*/
        $upload_path3 = $image_path3.$new_image_name3;/*เตรียมตัว upload*/
        //uploading
        move_uploaded_file($_FILES['hotnew_Photo3']['tmp_name'],$upload_path3);//ย้ายไฟล์ที่อับโหลดขึ้น server ผ่านทาง form upload ไปเก็บในโฟล์เดอร์ใหม่
        $hotnew_Photo3 = $new_image_name3;
        
        
        $q = "INSERT INTO hotnew (hotnew_ID,hotnew,hotnew_Photo,hotnew_Photo2,hotnew_Photo3,hotnew_Headline) VALUES ('$hotnew_ID','$hotnew','$hotnew_Photo','$hotnew_Photo2','$hotnew_Photo3','$hotnew_Headline')";
             
                
        

        
        
        
        
   $result = mysqli_query($link,$q); 
        
        
        
        
        
   if($result){
            
             header("Location:hotnewshow2.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>
    
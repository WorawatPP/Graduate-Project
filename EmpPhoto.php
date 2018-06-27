<?php
    require 'connect1.php';
    
    $Emp_ID = $_GET['Emp_ID'];
    $qemp = "SELECT * FROM employee WHERE Emp_ID='$Emp_ID'";
    $resemp = mysqli_query($link, $qemp);
    $rowemp = mysqli_fetch_array($resemp, MYSQLI_ASSOC);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title>
    </head>
    
    <style>
        legend{font-weight: bold;
               font-size: 30px;
               color: black;
              
        }
        
              .detail{
        
    
      border: 25px solid navy;
      margin: 25px;
       left: 50%;
        transform: translate(-50%); 
        border: #999 3px solid;
        padding: 35px 10px 10px 10px;
        width: 1260px;
        height: auto;
        position: absolute;
        word-spacing: 5px; /*ระยะห่างข้อความ*/
        background-color: whitesmoke;
        color:black;
        -webkit-border-radius: 15px;/*ส่วนโค้ง*/
        -moz-border-radius: 15px;/*ส่วนโค้ง*/
        border-radius: 15px;/*ส่วนโค้ง*/
        border-color: black;
        
        
    }
        
        input[type=button], input[type=submit], input[type=reset] {
             background-color: #003366;
       border: none;
       color: white;
       font-size: 20px;
       padding: 15px 25px;
        text-decoration: none;
        margin: 4px 2px;
       cursor: pointer;
       -webkit-border-radius: 15px;/*ส่วนโค้ง*/
        -moz-border-radius: 15px;/*ส่วนโค้ง*/
        border-radius: 15px;/*ส่วนโค้ง*/
       
        border: #000000 3px solid;
}
        
    </style>
     
     <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        
        
        
        
         <form method="post" action="EmpPhotoupdate.php" enctype="multipart/form-data" id="form1">
            
            
             <fieldset style="border:3px solid black" class="detail"><legend>เปลี่ยนรูปภาพ</legend>
                
                
                
                
            <table style="font-size: 16px;color: black" align="center">
                
                
                 <tr>   
                <td><img src ="img/<?php echo $rowemp['Emp_Photo']; ?>" width ="160px" height="160px" border="3">
                        </td> 
                  
                </tr>
                
            
            <td>รูปภาพ:</td><td><input type="file" name="Emp_Photo" id="Emp_Photo">
                 
                        </td>
            
               <input type="hidden" name="Emp_Name"  size="30" value="<?php echo $rowemp['Emp_Name']; ?>">
               
          
               <input type="hidden" name="Emp_Surname" size="30" value="<?php echo $rowemp['Emp_Surname']; ?>">
                
                <input type="hidden" name="Emp_User"  size="10" value="<?php echo $rowemp['Emp_User'];?>">
                
                <input type="hidden" name="Emp_Status" size="10" value="<?php echo $rowemp['Emp_Status'];?>">
                                
                
                
            
            
            <input type="hidden" name="Emp_Sex" size="5" value="<?php echo $rowemp['Emp_Sex'];?>">
                
                   <input type="hidden" name="Emp_Password" size="10" value="<?php echo $rowemp['Emp_Password'];?>">
              
          
            
          
            
            <input type="hidden" name="Emp_Age"  size="3" value="<?php echo $rowemp['Emp_Age'];?>">
               
            
            
            
              
                  <input type="hidden" name="Emp_IDnum"  size="13" value="<?php echo $rowemp['Emp_IDnum'];?>">
               
            
            
            
              
                  <input type="hidden" name="Emp_BD"  size="15" value="<?php echo $rowemp['Emp_BD'];?>">
               
            
            
            
            
            
            
                <input type="hidden" name="Emp_Address"   size="60" value="<?php echo $rowemp['Emp_Address'];?>">
            
            
            
             
                 <input type="hidden" name="Emp_CTAdress"  size="60" value="<?php echo $rowemp['Emp_CTAdress'];?>">
            
            
            
            
            
            
                
                
               <input type="hidden" name="Emp_Mobile"  size="10" value="<?php echo $rowemp['Emp_Mobile'];?>">
            
            
           <input type="hidden" name="Emp_ID" value="<?php echo $rowemp['Emp_ID']; ?>">
            
            
            
            
            <tr>
                <td></td>
                <td><br>
                    
                 
                <input name="submit" type="submit" id="submit" value="แก้ไขรูปภาพ" >
                <a href="EmpforAdminTable.php"><input name="button" type="button" value="ย้อนกลับ"></a>
                    
                </td>
                
                
            </tr>
 
        </table>
            </fieldset>
        </form>
    </body>
</html>

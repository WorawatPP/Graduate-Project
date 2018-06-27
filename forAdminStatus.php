
      <?php

       require 'connect1.php';
       $q = "SELECT * FROM employee WHERE Emp_Status1='N' ";
       $result = mysqli_query($link,$q);
       
       ?>
      

<html>
    
    
    
    <head>
        <meta charset="UTF-8">
        <title>ตารางข้อมูลพนักงานที่ลาออก</title>
        <style>
            th,td {
                border: 1px solid black;
                border-collapse: collapse;
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
       padding: 25px 36px;
        text-decoration: none;
        margin: 4px 2px;
       cursor: pointer;
       -webkit-border-radius: 15px;/*ส่วนโค้ง*/
        -moz-border-radius: 15px;/*ส่วนโค้ง*/
        border-radius: 15px;/*ส่วนโค้ง*/
       
        border: #000000 3px solid;
}    
        </style>
        

        
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="get" class="detail"> 
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลพนักงานที่ลาออก</h2>
        
<center>
    
    
    <a href="EmpforAdminTable.php"> <input type="button" value="กลับไปหน้าหลัก" > </a><br></br>
   
 
     
    
  <table style="font-size: 16px;width: 90%;border:3px solid black" align="center" border="2">
          
               <tr>
               
               <th width="300">ชื่อ</th>
               
               
                <th width="300">นามสกุล</th>
                <th width="80">ตำแหน่ง</th>
                <th width="160">รายละเอียด</th>
                <th width="90">แก้ไข</th>
                
            </tr>
            
            
               <tr>
            <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
                    
                   
                    
            ?>
               
                   <td><div style="text-align: center"><?php echo $row['Emp_Name'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Emp_Surname'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Emp_Status'];?></div></td>
                
               
                <td><div align="center"><a href="Empshow.php?Emp_ID=<?php echo $row['Emp_ID']; ?>">ดูรายละเอียด</a></div></td>
                <td><div align="center"><a href="Empedit.php?Emp_ID=<?php echo $row['Emp_ID']; ?>">แก้ไข</a></div></td>
               
                
            </tr>
                <?php }?>  
        </table>
    </<>
</center>
        </form>
    </body>
 </html>
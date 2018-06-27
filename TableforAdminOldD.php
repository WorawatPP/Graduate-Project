
      <?php

       require 'connect1.php';
       $q = "SELECT * FROM oldpeople WHERE Op_Status1 = 'เสียชีวิต' order by Op_ID DESC";
       $result = mysqli_query($link,$q);
       
       ?>
      

<html>
    
    
    
    <head>
        <meta charset="UTF-8">
        <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
        <style>
             legend{font-weight: bold;
               font-size: 30px;
               color: black;
              
        }
        .detail{
        
     
      
      border: 25px solid navy;
       margin: 10px;
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
        input[type=text] {
          border: 2px solid red;
          border-radius: 4px;
         padding: 10px 12px;
         margin: 8px 0;
         box-sizing: border-box;
         font-size: 16px;
        }
        
        input[type=number] {
          border: 2px solid red;
          border-radius: 4px;
         padding: 10px 12px;
         margin: 8px 0;
         box-sizing: border-box;
         font-size: 16px;
        } 
         select {
   
    padding: 10px 12px;
    border:2px solid red;
    border-radius: 4px;
    background-color: #f1f1f1;
    font-size: 16px;
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
        

        
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="get" class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลผู้สูงอายุ</h2>
       
<center>
    
   
    <a href="TableforAdminOld.php"> <input type="button" value="ย้อนกลับ" > </a><br></br>
   
 
  
    
    <table style="font-size: 16px;width: 90%;border:3px solid black"  align="center" border="2">
          
               <tr>
               
               <th width="300">ชื่อ</th>
                <th width="300">นามสกุล</th>
                <th width="80">เพศ</th>
                <th width="80">อายุ</th>
                <th width="160">รายละเอียด</th>
               
                <th width="90">แก้ไข</th>
                <th width="90">ลบ</th>
            </tr>
            
              
               <tr>
             
            <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
                    
                   
                    
            ?>
                
                   <td><div style="text-align: center"><?php echo $row['Op_Name'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Op_Surname'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Op_Sex'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Op_Age'];?></div></td>
                
               
                <td><div align="center"><a href="Oldshow.php?Op_ID=<?php echo $row['Op_ID']; ?>">ดูรายละเอียด</a></div></td>
                
                <td><div align="center"><a href="Oldedit.php?Op_ID=<?php echo $row['Op_ID']; ?>">แก้ไข</a></div></td>
                <td><div align="center"><a href="Olddelete.php?Op_ID=<?php echo $row['Op_ID']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a></div></td>
                
            </tr>
              
                <?php }?>  
               
        </table>
    </<>
</center>
        </form>
    </body>
 </html>

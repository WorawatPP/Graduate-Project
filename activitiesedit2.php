 <?php

       require 'connect1.php';
       
       
       $Queue_ID= $_GET['Queue_ID'];
       $q = "SELECT * FROM queue WHERE Queue_ID='$Queue_ID'";
       $result1 = mysqli_query($link,$q);
       $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
       ?>
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
<html>
    <head>
        <meta charset="UTF-8"> 
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
        
    </head>
    

    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        <form method="post" name="frm" action="activitesupdate2.php" enctype="multipart/form-data" id="form1"  >
            
            
            <fieldset style="border:3px solid black" class="detail"><legend>ยืนยันการบริจาคและจองคิว</legend>
               <table style="font-size:16px; color:black;width: 550px;"align="center">
                            
                            
                            
                               <tr>
                                    <td width="10%" >วันจอง:</td>
                                    <td width="50%">
                                    <input type="text" name="Queue_Date" readonly value="<?php echo $row ['Queue_Date'];?>" >
                                    </td>
                                    <td width="10%">เวลา:</td>
                                    <td width="50%">
                                    <input type="text" name="strtime" readonly value="<?php echo $row ['strtime'];?>" >
                                    </td>
                                </tr>
                               <tr>
                                    <td width="10%" >ถึงวันที่:</td>
                                    <td width="50%">
                                    <input type="text" name="Queue_Enddate" readonly value="<?php echo $row ['Queue_Enddate'];?>" >
                                    </td>
                                    <td width="10%" >เวลา:</td>
                                    <td width="50%">
                                    <input type="text" name="endtime" readonly value="<?php echo $row ['endtime'];?>" >
                                    </td>
                                    
                                </tr>
                  
                                <tr>
                                    <td width="10%" >ประเภท:</td>
                                    <td width="50%">
                                    <input type="text" name="Queue_Type" readonly value="<?php echo $row ['Queue_Type'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">ชื่อผู้จอง:</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Name"  readonly value="<?php echo $row ['Queue_Name'];?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">Email:</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Email" readonly value="<?php echo $row ['Queue_Email'];?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%" >เบอร์โทรศัพท์:</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Tel" readonly value="<?php echo $row ['Queue_Tel'];?>">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td >ยืนยันคำร้อง:</td><td><select name="Queue_Status">
                    
                                   <option value="ไม่ได้ยืนยัน"<?php if($row['Queue_Status']=='ไม่ได้ยืนยัน'){ echo "selected='selected'";} ?> name="Queue_Status" >ไม่ได้ยืนยัน</option>
                                   <option value="ยืนยัน"<?php if($row['Queue_Status']=='ยืนยัน'){ echo "selected='selected'";} ?> name="Queue_Status" >ยืนยัน</option>
                                
                                
                                
                    </select>
                </td>
                                </tr>
                                <tr></tr><tr></tr><tr></tr>
                                 
                        
                                <input type="hidden" name="Queue_ID" value="<?php echo $row['Queue_ID']; ?>">
                               <tr><td><input type="submit" class="button" value="ตกลง"></td>
                                   <td><a href="forEmployee4.php"><input type="button" value="ย้อนกลับ" ></a></button></td>
                                    </tr>
                        </table>  
                
                
                
           
                
            </fieldset>
            
            
            
            
            
            
            
        </form>
        
    </body>
</html>


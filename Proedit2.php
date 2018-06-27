<?php
    require 'connect1.php';
    
    $Pd_ID = $_GET['Pd_ID'];
    $qpd = "SELECT * FROM product WHERE Pd_ID='$Pd_ID'";
    $respd = mysqli_query($link, $qpd);
    $rowpd = mysqli_fetch_array($respd, MYSQLI_ASSOC);
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
    
    
    
    
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        
        
        
        
        <form method="post" action="Proupdate2.php" enctype="multipart/form-data" id="form1">
            
            
            <fieldset style="border:3px solid black" class="detail"><legend>เพิ่มจำนวนสิ่งของบริจาค</legend>
                
                
                
                
            <table style="font-size: 16px;color: black" align="center">
                
                
                
                
           
            
            <tr>
                <td>1.ชื่อสิ่งของบริจาค:</td><td><input type="text" name="Pd_Name"  size="30" readonly value="<?php echo $rowpd ['Pd_Name'];?>"></td>
               
            </tr>
            
           
            
            <tr>
                
                <td>2.แก้ไขประเภทสินค้า:</td><td><select name="Pd_Type">
                    
                                <option value="ไม่ได้ระบุ"<?php if($rowpd['Pd_Type']=='ตัวเลือก'){ echo "selected='selected'";} ?>>ไม่ได้ระบุ</option>
                                <option value="อาหารแห้ง"<?php if($rowpd['Pd_Type']=='อาหารแห้ง'){ echo "selected='selected'";} ?>name="Pd_Type" >อาหารแห้ง</option>
                                <option value="ยาสีฟัน"<?php if($rowpd['Pd_Type']=='ยาสีฟัน'){ echo "selected='selected'";} ?>name="Pd_Type"  >ยาสีฟัน</option>
                                <option value="แปรงสีฟัน"<?php if($rowpd['Pd_Type']=='แปรงสีฟัน'){ echo "selected='selected'";} ?>name="Pd_Type" >แปรงสีฟัน</option>
                                <option value="นม"<?php if($rowpd['Pd_Type']=='นม'){ echo "selected='selected'";} ?>name="Pd_Type" >นม</option>
                                <option value="สบู่"<?php if($rowpd['Pd_Type']=='สบู่'){ echo "selected='selected'";} ?>name="Pd_Type" >สบู่</option>
                                <option value="ยาสระผม"<?php if($rowpd['Pd_Type']=='ยาสระผม'){ echo "selected='selected'";} ?>name="Pd_Type" >ยาสระผม</option>
                                <option value="หนังสือ"<?php if($rowpd['Pd_Type']=='หนังสือ'){ echo "selected='selected'";} ?>name="Pd_Type" >หนังสือ</option>
                                <option value="อุปกรณ์ทำความสะอาด"<?php if($rowpd['Pd_Type']=='อุปกรณ์ทำความสะอาด'){ echo "selected='selected'";} ?>name="Pd_Type" >อุปกรณ์ทำความสะอาด</option>
                                <option value="อุปกรณ์ทางการแพทย์"<?php if($rowpd['Pd_Type']=='อุปกรณ์ทางการแพทย์'){ echo "selected='selected'";} ?>name="Pd_Type" >อุปกรณ์ทางการแพทย์</option>
                                <option value="อาหารกระป๋อง"<?php if($rowpd['Pd_Type']=='อาหารกระป๋อง'){ echo "selected='selected'";} ?>name="Pd_Type" >อาหารกระป๋อง</option>
                                <option value="อื่นๆ"<?php if($rowpd['Pd_Type']=='อื่นๆ'){ echo "selected='selected'";} ?>name="Pd_Type" >อื่นๆ</option>
                                
                    </select>
                        </td>
                
            </tr>
            <tr>
                
                <td>3.จำนวน:</td><td><input type="number" name="Pd_Sumtotal"  size="4" readonly value="<?php echo $rowpd ['Pd_Sumtotal'];?>" >
                                
                    
                        </td>
                
            </tr>
             <tr>
                 <td>4.เพิ่มจำนวน:</td><td><input type="number" name="Pd_Addtotal"  size="4" onKeyUp="if(this.value*1!=this.value) this.value='';" placeholder="กรุณาระบุจำนวน *"></td>
            </tr>
             <tr>
                <td>5.สถานะการเบิก:</td><td><select name="ActivePd">
                    
                    <option value="เบิกต่อไม่ได้"<?php if($rowpd['ActivePd']=='เบิกต่อไม่ได้'){ echo "selected='selected'";} ?> name="ActivePd" >เบิกต่อไม่ได้</option>
                    <option value="เบิกต่อได้"<?php if($rowpd['ActivePd']=='เบิกต่อได้'){ echo "selected='selected'";} ?> name="ActivePd">เบิกต่อได้</option>
                                
                                
                                
                    </select>
                </td>
            </tr>
              <tr>
                 *หมายเหตุ:สิ่งของบริจาค 1 หน่วยต่อ 1 ชิ้น*
            </tr>
            <br> <tr>
                 *กรุณากรอกจำนวนให้ครบตามสิ่งของที่มาบริจาค*
            </tr>
           
            
            
            
            
            <tr>
                <td></td>
                <td><br>
                    
                <input type="hidden" name="Pd_ID" value="<?php echo $rowpd['Pd_ID']; ?>">
                 <input type="hidden" name="Pd_Sumtotal" id="Pd_Sumtotal" value="<?php echo $rowpd['Pd_Sumtotal'];?>" > 
                <input name="submit" type="submit" id="submit" value="ยืนยัน"  onclick="return confirm('ยืนยันการแก้ไข')" >
                <a href="TableEmployee3PM.php"><input name="button" type="button" value="ย้อนกลับ"></a>
                </td>
                
                
                
            </tr>
           

              
        </table>
                
            </fieldset>
        </form>
    </body>
    
    
    
    
   
    
    
</html>

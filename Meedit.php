<?php
    require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
    $Medicine_ID = $_GET['Medicine_ID']; /* รับค่า Medicine_ID จากหน้า TableAdmin3M.php */
    $qme = "SELECT * FROM medicine WHERE Medicine_ID='$Medicine_ID'";
    $resme = mysqli_query($link, $qme);
    $rowme = mysqli_fetch_array($resme, MYSQLI_ASSOC);
?>
<html>
    <head>
    <meta charset="UTF-8"> <!-- กำหนดภาษาให้กับเว็บไซต์ -->
    <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
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
     <!-- กำหนดพื้นหลังในส่วน Body -->
     <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
         <form method="post" action="Meupdate.php" enctype="multipart/form-data" id="form1">
             <fieldset style="border:3px solid black" class="detail">
             <legend>เพิ่มจำนานยา</legend>
            <table style="font-size: 16px;color: black" align="center">
            <tr>
                <td>1.ชื่อยา:</td><td><input type="text" name="Medicine_Name"  size="30" readonly value="<?php echo $rowme ['Medicine_Name'];?>"></td>
            </tr>
            <tr>
                <td>2.สรรพคุณ:</td><td><select name="Medicine_Detail">
                                <option value="ไม่ได้ระบุ"<?php if($rowme['Medicine_Detail']=='ตัวเลือก'){ echo "selected='selected'";} ?> name="ไม่ได้ระบุ">ไม่ได้ระบุ</option>
                                <option value="ยาแก้ปวด"<?php if($rowme['Medicine_Detail']=='ยาแก้ปวด'){ echo "selected='selected'";} ?> name="Medicine_Detail" >ยาแก้ปวด</option>
                                <option value="ยาลดไข้"<?php if($rowme['Medicine_Detail']=='ยาลดไข้'){ echo "selected='selected'";} ?>name="Medicine_Detail" >ยาลดไข้</option>
                                <option value="ยาแก้เสมหะ"<?php if($rowme['Medicine_Detail']=='ยาแก้เสมหะ'){ echo "selected='selected'";} ?>name="Medicine_Detail" >ยาแก้เสมหะ</option>
                                <option value="ยาแก้อักเสบ"<?php if($rowme['Medicine_Detail']=='ยาแก้อักเสบ'){ echo "selected='selected'";} ?> name="Medicine_Detail" >ยาแก้อักเสบ</option>
                                <option value="ยาคลายกล้ามเนื้อ"<?php if($rowme['Medicine_Detail']=='ยาคลายกล้ามเนื้อ'){ echo "selected='selected'";} ?>name="Medicine_Detail" >ยาคลายกล้ามเนื้อ</option>
                                <option value="ครีมนวดแก้อักเสบ"<?php if($rowme['Medicine_Detail']=='ครีมนวดแก้อักเสบ'){ echo "selected='selected'";} ?>name="Medicine_Detail" >ครีมนวดแก้อักเสบ</option>
                                <option value="ยาแก้ท้องเสีย"<?php if($rowme['Medicine_Detail']=='ยาแก้ท้องเสีย'){ echo "selected='selected'";} ?>name="Medicine_Detail" >ยาแก้ท้องเสีย</option>
                    </select></td>
            </tr>
            <tr>
                <td>3.ข้อแนะนำการใช้:</td><td><input type="text" name="Medicine_Usage"  size="30" readonly value="<?php echo $rowme['Medicine_Usage'];?>"></td>
            </tr>
            <tr>
                <td>4.ชนิดของยา:</td><td><select name="Medicine_Type">
                    <option  value="ไม่ได้ระบุ"<?php if($rowme['Medicine_Type']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?>>ไม่ได้ระบุ</option>
                    <option  value="ชนิดนํ้า"<?php if($rowme['Medicine_Type']=='ชนิดนํ้า'){ echo "selected='selected'";} ?> name="Medicine_Type" >ชนิดนํ้า</option>
                    <option  value="ชนิดเม็ด"<?php if($rowme['Medicine_Type']=='ชนิดเม็ด'){ echo "selected='selected'";} ?> name="Medicine_Type">ชนิดเม็ด</option>
                    <option  value="ชนิดแคปซูล"<?php if($rowme['Medicine_Type']=='ชนิดแคปซูล'){ echo "selected='selected'";} ?> name="Medicine_Type">ชนิดแคปซูล</option>
                    <option  value="ชนิดเจล"<?php if($rowme['Medicine_Type']=='ชนิดเจล'){ echo "selected='selected'";} ?> name="Medicine_Type">ชนิดเจล</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>5.จำนวน:</td><td><input type="number" name="Medicine_Sumtotal"  size="4" readonly value="<?php echo $rowme['Medicine_Sumtotal'];?>" >
                        </td>
            </tr>
            <tr>
                <td>6.เพิ่มจำนวน:</td><td><input type="number" name="Medicine_Addtotal"  size="4" onKeyUp="if(this.value*1!=this.value) this.value='';" placeholder="กรุณาระบุจำนวน *">
                        </td>
            </tr>
            <tr>
                <td>7.สถานะการเบิก:</td><td><select name="Active">
                    <option value="เบิกต่อไม่ได้"<?php if($rowme['Active']=='เบิกต่อไม่ได้'){ echo "selected='selected'";} ?> name="Active">เบิกต่อไม่ได้</option>
                    <option value="เบิกต่อได้"<?php if($rowme['Active']=='เบิกต่อได้'){ echo "selected='selected'";} ?> name="Active">เบิกต่อได้</option>
                    </select>
                </td>
            </tr>
            <tr>
                 *หมายเหตุ:สิ่งของบริจาค 1 หน่วยต่อ 1 แผง หรือ 1 ขวด*
            </tr>
            <br> <tr>
                 *กรุณากรอกจำนวนให้ครบตามจำนวนยาที่รับบริจาค*
            </tr>
            <tr>
                <td></td>
                <td><br>
                <input type="hidden" name="Medicine_ID" value="<?php echo $rowme['Medicine_ID']; ?>">
                <input type="hidden" name="Medicine_Sumtotal" id="Medicine_Sumtotal" value="<?php echo $rowme['Medicine_Sumtotal'];?>" > 
                <input name="submit" type="submit" id="submit" value="ยืนยัน"  onclick="return confirm('ยืนยันการแก้ไข')" >
                <a href="TableAdmin3M.php"><input name="button" type="button" value="ย้อนกลับ"></a>
                </td>
            </tr>
        </table>
             </fieldset>
        </form>
    </body>
</html>
 <?php
       require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
       $q = "SELECT * FROM hotnew";
       $result1 = mysqli_query($link,$q);
       ?>
<html>
    <head>
    <meta charset="UTF-8"> <!-- กำหนดภาษาให้กับเว็บไซต์ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
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
    <script language ="javascript"> /* ตวจสอบค่าว่าง text */
     function check(){
         if(frm.hotnew.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล  กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.hotnew.focus();
             return false;
         }
         else if(frm.hotnew_Photo.value == ''){
             alert('ยังไม่ได้อัพข้อมูลรูปที่ 1 กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.hotnew_Photo.focus();
             return false;
         }
         else if(frm.hotnew_Photo2.value == ''){
             alert('ยังไม่ได้อัพข้อมูลรูปที่ 2 กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.hotnew_Photo2.focus();
             return false;
         }
         else if(frm.hotnew_Photo3.value == ''){
             alert('ยังไม่ได้อัพข้อมูลรูปที่ 3 กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.hotnew_Photo3.focus();
             return false;
         }
          else if(frm.hotnew_Headline.value == ''){
             alert('ยังไม่ได้ระบุหัวข้อข่าว กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.hotnew_Headline.focus();
             return false;
         }
    }
    </script>
    <!-- กำหนดพื้นหลังในส่วน Body -->
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="post" name="frm" class="detail" action="hotnewinsert.php" enctype="multipart/form-data" id="form1" onsubmit="return check();"  >
            <fieldset style="border:3px solid black"><legend>เพิ่มข้อมูลข่าวศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</legend>
            <table style="font-size: 16px;color: black" align="center" >
                <tr>
                    <td>1.หัวข้อข่าว:</td><td><input  type="text"  name="hotnew_Headline"  placeholder="กรุณาระบุหัวข้อข่าว" size="60"></textarea></td>
            </tr>         
                <tr>
                    <td>2.ข้อมูลข่าว:</td><td><textarea name="hotnew"  cols="100" rows="10" placeholder="กรุณาระบุข้อมูล ระบุวันที่เสนอข่าว ระบุข้อมูลให้ครบถ้วน *" size="600"></textarea></td>
            </tr>               
                <tr>
                    <td>รูปภาพ1:</td><td><input type="file" name="hotnew_Photo" ></td>
                </tr>
                <tr><td>รูปภาพ2:</td><td><input type="file" name="hotnew_Photo2" ></td></tr>
                <tr><td>รูปภาพ3:</td><td><input type="file" name="hotnew_Photo3" ></td>  </tr>
            <input type="hidden" name="hotnew_ID" >
      </table>
                <div style="text-align: center">
                <br></br>
                <br></br>
                <input type="submit" name="submit" value="เพิ่มข้อมูล" id="submit"  >
                <input type="reset" name="reset" value="ยกเลิก" id="reset"  >
                <a href="forAdmin.php"><input type="button" value="กลับหน้าหลัก"></a>  
                </div>
            </fieldset>
            <br><br>
            <h2 style="color:black; text-align: center;font-size: 30px">ตารางข้อมูลข่าวสาร</h2>
            <table style="font-size: 16px;width: 60%;border:3px solid black" align="center" border="2">
               <tr>
               <th width="180">หัวข้อข่าว</th>
               <th width="180">แก้ไข</th>
               <th width="180">ลบ</th>
            </tr>
               <tr>
            <?php
                /* คำสั่ง SQL ใช้สำหรับเรียกข้อมูลจากฐานข้อมูลมาแสดงแบบ Array */
                while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {  
            ?>
                   <td><div style="text-align: center"><?php echo $row['hotnew_Headline'];?></div></td>
                   <td><div align="center"><a href="hotnewedite.php?hotnew_ID=<?php echo $row['hotnew_ID'];?>">แก้ไข</a></div></td>
                   <td><div align="center"><a href="hotnewdelet.php?hotnew_ID=<?php echo $row['hotnew_ID']; ?>"onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a></div></td>
            </tr>
                <?php }?>  
        </table>
        </form>
    </body>
</html>

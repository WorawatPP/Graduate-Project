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
    <script language ="javascript">//เช็คข้อความใน text 
     function check(){
         if(frm.Medicine_Name.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ชื่อยา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Medicine_Name.focus();
             return false;
         }
         else if(frm.Medicine_Detail.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล สรพพคุณ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Medicine_Detail.focus();
             return false;
         }
         else if(frm.Medicine_Usage.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ข้อแนะนำการใช้ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Medicine_Usage.focus();
             return false;
         }
         else if(frm.Medicine_Type.value == 'ไม่ได้ระบุ'){
             alert('ยังไม่ได้กรอกข้อมูล ชนิดของยา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Medicine_Type.focus();
             return false;
         }
         else if(frm.Medicine_Sumtotal.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล จำนวน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Medicine_Sumtotal.focus();
             return false;
     }
 }
     </script>
     <!-- กำหนดพื้นหลังในส่วน Body -->
     <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
         <form method="post" name="frm" action="Meinsert.php" enctype="multipart/form-data" id="form1" onsubmit="return check();">
             <fieldset style="border:3px solid black" class="detail">
             <legend>เพิ่มข้อมูลยา</legend>
            <table style="font-size: 16px;color: black" align="center">
                <input type="hidden" name="Medicine_ID" > 
            <tr>
                <td>1.ชื่อยา:</td><td><input type="text" name="Medicine_Name"  placeholder="กรุณาระบุข้อมูล *" size="30"></td>
            </tr>
            <tr>
                <td>2.สรรพคุณ:</td><td><select name="Medicine_Detail">
                                <option value="ไม่ได้ระบุ" name="Medicine_Detail">ไม่ได้ระบุ</option>
                                <option value="ยาแก้ปวด" name="Medicine_Detail" >ยาแก้ปวด</option>
                                <option value="ยาลดไข้"name="Medicine_Detail" >ยาลดไข้</option>
                                <option value="ยาแก้เสมหะ"name="Medicine_Detail" >ยาแก้เสมหะ</option>
                                <option value="ยาแก้อักเสบ" name="Medicine_Detail" >ยาแก้อักเสบ</option>
                                <option value="ยาคลายกล้ามเนื้อ"name="Medicine_Detail" >ยาคลายกล้ามเนื้อ</option>
                                <option value="ครีมนวดแก้อักเสบ"name="Medicine_Detail" >ครีมนวดแก้อักเสบ</option>
                                <option value="ยาแก้ท้องเสีย"name="Medicine_Detail" >ยาแก้ท้องเสีย</option>
                    </select></td>
            </tr>
            <tr>
                <td>3.ข้อแนะนำการใช้:</td><td><input type="text" name="Medicine_Usage"  placeholder="กรุณาระบุข้อมูล *" size="30"></td>
            </tr>
            <tr>
                <td>4.ชนิดของยา:</td><td><select name="Medicine_Type">
                                <option value="ไม่ได้ระบุ" name="Medicine_Type">ไม่ได้ระบุ</option>
                                <option value="ชนิดนํ้า" name="Medicine_Type" >ชนิดนํ้า</option>
                                <option value="ชนิดเม็ด" name="Medicine_Type">ชนิดเม็ด</option>
                                <option value="ชนิดแคปซูล" name="Medicine_Type">ชนิดแคปซูล</option>
                                <option value="ชนิดเจล" name="Medicine_Type">ชนิดเจล</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>5.จำนวน:</td><td><input type="number" name="Medicine_Sumtotal"  placeholder="กรุณาระบุข้อมูล *" size="4"onKeyUp="if(this.value*1!=this.value) this.value='';">
                        </td>
            </tr>
            <tr>
                <td></td>
                <td><br>
                    <input type="submit" name="submit" value="เพิ่มข้อมูล" id="submit"  >
                    <input type="reset" name="reset" value="ยกเลิก" id="submit"  >
                    <a href="TableAdmin3M.php"> <input type="button" value="ย้อนกลับ"> </a>
                </td>
            </tr>
        </table>
            </fieldset>
        </form>
    </body>
</html>
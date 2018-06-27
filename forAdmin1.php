<html>
    <head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
    </head>
    <style>
        legend{font-weight: bold;
               font-size: 30px;
               color:#000000;
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
        input[type=text] {
          border: 2px solid red;
          border-radius: 4px;
         padding: 12px 20px;
         margin: 8px 0;
         box-sizing: border-box;
          font-size: 16px;
        }
        input[type=number] {
          border: 2px solid red;
          border-radius: 4px;
         padding: 12px 20px;
         margin: 8px 0;
         box-sizing: border-box;
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
    <script language ="javascript">//ตวจสอบค่าว่าง text
     function check(){
         if(frm.Emp_Name.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ชื่อ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Name.focus();
             return false;
         }
         else if(frm.Emp_Surname.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล นามสกุล กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Surname.focus();
             return false;
         }
         else if(frm.Emp_Age.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล อายุ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Age.focus();
             return false;
         }
         else if(frm.Emp_IDnum.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล หมายเลขบัตรประชาชน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_IDnum.focus();
             return false;}
         else if(frm.Emp_Address.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ที่อยู่ตามทะเบียนบ้าน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Address.focus();
             return false;
         }
           else if(frm.Emp_CTAdress.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ที่อยู่ที่ติดต่อได้ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_CTAdress.focus();
             return false;
         }
          else if(frm.Emp_Mobile.value.length =='') {
             alert('กรุณากรอกเบอร์มือถือให้ครบ10หลัก กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Mobile.focus();
             return false;
         }
           else if(frm.Emp_Status.value == 'ไม่ได้ระบุ'){
             alert('ยังไม่ได้ระบุ ตำแหน่ง กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Status.focus();
             return false;
         }
           else if(frm.Emp_User.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ชื่อผู้ใช้ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_User.focus();
             return false;
         }
            else if(frm.Emp_Password.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล รหัสผ่าน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Password.focus();
             return false;
         }
             else if(frm.Emp_Photo.value == ''){
             alert('ยังไม่ได้อัพข้อมูล  กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Emp_Photo.focus();
             return false;
         }
     }
     </script>
     <script type="text/javascript">/*ตรวจสอบกรอกเลขไม่ครบ*/
         function count(){
            var getE = document.getElementById("Emp_IDnum");/*document.getElementById สำหรับการเข้าถึง Element Id ที่ต้องการใน Form HTML*/
            var Emp_IDnum = getE.value.length;/*เช็คความยาวตัวอกัษร*/
                if(Emp_IDnum<13){
                alert("กรอกข้อมูลไม่ครบ 13 หลัก กรุณากรอกใหม่");
                  }	
            }
    </script>
    <script type="text/javascript">/*ตรวจสอบกรอกเลขไม่ครบ*/
         function count1(){
            var getE = document.getElementById("Emp_Mobile");/*document.getElementById สำหรับการเข้าถึง Element Id ที่ต้องการใน Form HTML*/
            var Emp_Mobile = getE.value.length;/*เช็คความยาวตัวอกัษร*/
                if(Emp_Mobile<10){
                alert("กรอกข้อมูลไม่ครบ 10 หลัก กรุณากรอกใหม่");
                  }	
            }
    </script>
    <script type="text/javascript">/*ตรวจสอบกรอกเลขไม่ครบ*/
         function count2(){
            var getE = document.getElementById("Emp_Password");/*document.getElementById สำหรับการเข้าถึง Element Id ที่ต้องการใน Form HTML*/
            var Emp_Password = getE.value.length;/*เช็คความยาวตัวอกัษร*/
                if(Emp_Password<6){
                alert("กรอกตัวอักษรหรือตัวเลข 6 ตัวขึ้นไป กรุณากรอกใหม่");
                  }	
            }
    </script>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="post" name="frm" action="Empinsert.php" enctype="multipart/form-data" id="form1" onsubmit="return check();"   >
            <fieldset style="border:3px solid black" class="detail"><legend>เพิ่มข้อมูลพนักงาน</legend>
                <table style="font-size: 20px;color: black" align="center" class="input">
            <tr>
                <td>1.ชื่อ:</td><td><input type="text" name="Emp_Name"  placeholder="กรุณาระบุข้อมูล *" size="30"></td>
                <td>11.ชื่อผู้ใช้:</td><td><input type="text" name="Emp_User"  placeholder="กรุณาระบุข้อมูล *" size="20"></td>
            </tr>
            <tr>
               <td>2.นามสกุล:</td><td><input type="text" name="Emp_Surname"  placeholder="กรุณาระบุข้อมูล *" size="30"></td>
                <td>12.รหัสผ่าน:</td><td><input type="text" name="Emp_Password" id="Emp_Password" onchange="count2()" placeholder="ตัวอักษรหรือตัวเลข 6 ตัวขึ้นไป *" size="22"></td>
            </tr>
            <tr>
                 <td>3.เพศ:</td><td><input type="radio" name="Emp_Sex"  value="ชาย">ชาย
                    <input type="radio" name="Emp_Sex"  value="หญิง">หญิง</td>
            </tr>
            <tr>
               <td>4.อายุ:</td><td><input type="number" name="Emp_Age"  placeholder="กรุณาระบุข้อมูล *" size="3" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>
            </tr>
              <tr>
                  <td>5.หมายเลขบัตรประชาชน:</td><td><input type="text" name="Emp_IDnum" id="Emp_IDnum" size="20"  maxlength="13"   placeholder="กรุณาใส่เลขให้ครบ 13 หลัก" onchange="count()" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>
            </tr>
              <tr>
                  <td>6.วันเกิด:</td><td><input type="date" name="Emp_BD"  size="10"></td>
            </tr>
            <tr>
            <td>7.รูปภาพ:</td><td><input type="file" name="Emp_Photo" >  </td>
            </tr>
            <tr>
                <td>8.ที่อยู่ตามทะเบียนบ้าน:</td><td><input type="text" name="Emp_Address"   placeholder="กรุณาระบุข้อมูล *" size="60"></td>
            </tr>
             <tr>
                 <td>9.ที่อยู่ที่ติดต่อได้:</td><td><input type="text" name="Emp_CTAdress"  placeholder="กรุณาระบุข้อมูล *"  size="60"></td>
            </tr>
            <tr>
                <td>10.เบอร์มือถือ:</td><td><input type="text" name="Emp_Mobile" id="Emp_Mobile"   placeholder="กรุณาใส่เบอร์มือถือ 10 หลัก" size="20" maxlength="10" onchange="count1()" onKeyUp="if(this.value*1!=this.value) this.value='';" ></td>
            </tr>
            <input type="hidden" name="Emp_ID" >
        </table>
                <div style="text-align: center">
                <br></br>
                <br></br>
                <input type="submit" name="submit" value="เพิ่มข้อมูล" id="submit"   >
                <input type="reset" name="reset" value="ยกเลิก" id="reset"  >
                <a href="EmpforAdminTable.php"><input type="button" value="ตรวจสอบข้อมูลพนักงาน" ></a>
                <a href="forAdmin.php"><input type="button" value="กลับหน้าหลัก"></a>  
                </div>
            </fieldset>
        </form>
    </body>
</html>

 <?php
    require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
    $Medicine_ID = $_GET['Medicine_ID']; /* รับค่า Medicine_ID มาจากหน้า Medicine.php */
    $qme = "SELECT * FROM medicine WHERE Medicine_ID='$Medicine_ID'";
    $resme = mysqli_query($link, $qme);
    $rowme = mysqli_fetch_array($resme, MYSQLI_ASSOC);
?>
 <?php
 session_start();/*เรียกใช้งาน session แสดงข้อมูลคนที่login*/
 $_SESSION['global_member_id'];
 ?>
<html>
 <script language ="javascript">//ตวจสอบค่าว่าง text
     function check(){
         if(frm.Total.value == ''){
             alert('ยังไม่ได้กรอก จำนวน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Total.focus();
             return false;
         }
         else if(frm.Date.value == ''){
             alert('ยังไม่ได้ระบุวันและเวลา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Date.focus();
             return false;
         }
     }
         </script>
    <head>
    <meta charset="UTF-8"> <!-- กำหนดภาษาของเว็บไซต์ -->
    <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
    </head>
    <style>
    legend
    {
    font-weight: bold;
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
         <form method="post" name="frm" action="MedicineReInUp.php" enctype="multipart/form-data" id="form1" onsubmit="return check();">
             <fieldset style="border:3px solid black" class="detail">
             <legend>เบิกยา</legend>
            <table style="font-size: 16px;color: black" align="center">
            <tr>
                <td>1.ชื่อยา:</td><td><input type="text" name="Medicine_Name" size="30" value="<?php echo $rowme ['Medicine_Name'];?>"readonly></td>
            </tr>
            <tr>
                <td>2.วันที่และเวลา:</td><td><input type="datetime-local" name="Date"  size="10"></td>
            </tr>
            <tr>
                <td>3.จำนวนคงเหลือ:</td><td><input type="text" name="Medicine_Sumtotal"  size="20" value="<?php echo $rowme ['Medicine_Sumtotal'];?>" readonly></td>
            </tr>
            <tr>
                <td>4.จำนวน:</td><td><input type="number" name="Total" size="20" placeholder="กรุณาระบุข้อมูล *" onKeyUp="if(this.value*1!=this.value) this.value='';" ></td>
            </tr>
             <tr>
                 <td><input type="hidden" name="Emp_ID"  size="20" value="<?php echo $_SESSION['global_member_id'];?>" ></td>
            </tr>
            <tr>
                 <td></td>
                 <td><br>
                 <input type="hidden" name="ID" >
                 <input type="hidden" name="Medicine_ID"  value="<?php echo $rowme['Medicine_ID'];?>" > 
                 <input type="hidden" name="Medicine_Sumtotal"  value="<?php echo $rowme['Medicine_Sumtotal'];?>" > 
                <input name="submit" type="submit" id="submit" value="เพิ่มข้อมูล" >
                <a href="Medicine.php"><input name="button" type="button" value="ย้อนกลับ"></a>
                 </td>
            </tr>
        </table>
            </fieldset>
         </form>
    </body>
         </html>

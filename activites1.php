<?php
session_start();
?>
<html lang="en">
<script type="text/javascript">
    /*ตรวจสอบกรอกเลขไม่ครบ*/
    function count() {
        var getE = document.getElementById("Emp_Mobile"); /*document.getElementById สำหรับการเข้าถึง Element Id ที่ต้องการใน Form HTML*/
        var Emp_Mobile = getE.value.length; /*เช็คความยาวตัวอกัษร*/
        if (Emp_Mobile < 10) {
            alert("กรอกข้อมูลไม่ครบ 10 หลัก กรุณากรอกใหม่");
        }
    }
</script>
<?php include("datepick/datepick.php"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
<script type="text/javascript">
    /* Code ในส่วนนี้จะเป็นฟังก์ชันสำหรับเช็ค ว่าผู้ใช้เลือกเวลาในการทำกิจกรรมแล้วหรือไม่ */
    function check(old, news) {
        o = old.options[old.selectedIndex].value;
        n = news.options[news.selectedIndex].value;
        //alert('old'+olds+'new'+newss);
        if (o == '') {
            /* จะทำการแจ้งเตือนเมื่อผู้ใช้ยังไม่ได้เลือกเวลาในการทำกิจกรรม */
            alert('กรุณาเลือกเวลาเริ่มต้นด้วยครับ');
            return false;
        } else {
            if (o > n) {
                /* จะทำการแจ้งเตือนเมื่อผู้ใช้เลือกเวลาสิ้นสุนกิจกรรม น้อยกว่าเวลาเริ่มต้นกิจกรรม */
                alert('ไม่สามารถใส่เวลาจบน้อยกว่าเวลาเริ่มได้');
                document.getElementById('hour2').selectedIndex = '';
            } else {
                //alert(o+'<'+n);
            }
        }
    }
</script>
<style type="text/css">
    .detail {
        font-size: 25px;
    }
</style>
<style>
    legend {
        font-weight: bold;
        font-size: 30px;
        color: #000000;
    }
    .detail1 {
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
        color: black;
        -webkit-border-radius: 15px; /*ส่วนโค้ง*/
        -moz-border-radius: 15px; /*ส่วนโค้ง*/
        border-radius: 15px; /*ส่วนโค้ง*/
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
    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #003366;
        border: none;
        color: white;
        font-size: 20px;
        padding: 15px 25px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-border-radius: 15px; /*ส่วนโค้ง*/
        -moz-border-radius: 15px; /*ส่วนโค้ง*/
        border-radius: 15px; /*ส่วนโค้ง*/
        border: #000000 3px solid;
    }
</style>
<script language="javascript">
    /*ตวจสอบค่าว่าง text*/
    function check() {
        if (frm.Queue_Name.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล ชื่อ กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.Queue_Name.focus();
            return false;
        } else if (frm.Queue_Tel.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล เบอร์โทร กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.Queue_Tel.focus();
            return false;
        } else if (frm.datepicker - th - 1. value == '') {
            alert('ยังไม่ได้กรอกข้อมูล วัน กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.datepicker - th - 1. focus();
            return false;
        } else if (frm.Queue_Enddate.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล ถึงวันที่ กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.Queue_Enddate.focus();
            return false;
        } else if (frm.Queue_Type.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล ประเภท กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.Queue_Type.focus();
            return false;
        } else if (frm.Queue_Email.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล Email กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.Queue_Email.focus();
            return false;
        } else if (frm.strtime.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล เวลา กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.strtime.focus();
            return false;
        } else if (frm.endtime.value == '') {
            alert('ยังไม่ได้กรอกข้อมูล ถึงเวลา กรุณาตรวจสอบข้อมูลอีกครั้ง')
            frm.endtime.focus();
            return false;
        }
    }
</script>
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
    <form method="post" name="frm" action="activitesinsert.php" class="detail1" id="from1" onsubmit="return check();">
        <fieldset style="border:3px solid black">
            <legend>จองคิวบริจาคหรือทำกิจกรรม</legend>
            <?php      
                require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
                $today = date("Y-m-d"); /* ตั้ง Format วันที่เป็น ปี-เดือน-วัน */
            ?>
            <div id="input-box" class="login-popup">
                <table style="font-size: 20px;width: 60%;border:3px solid black" align="center" border="2">
                    <tr>
                        <td width="15%" class="detail">วันที่จอง</td>
                        <td width="25%">
                            <!-- สร้าง Textbox สำหรับกรอกวันที่ทำกิจกรรม -->
                            <input type="text" id="datepicker-th-1" name="date1" value="" required=""> </td>
                        <td width="11%" class="detail">เวลา</td>
                        <td width="50%">
                            <!-- สร้าง Selectbox สำหรับเลือกเวลาเริ่มต้นกิจกรรม -->
                            <select name="hour1" id="hour1" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')" accesskey="" oninput="this.setCustomValidity('')">
                                <option value=""> --- </option>
                                <option value="06"> 06 </option>
                                <option value="07"> 07 </option>
                                <option value="08"> 08 </option>
                                <option value="09"> 09 </option>
                                <?php for($hour1=10;$hour1<18;$hour1++)
                                        {
                                        ?>
                                <option value="<?=$hour1;?>">
                                    <?=$hour1;?>
                                </option>
                                <?php
                                            }
                                            ?>
                                    :
                            </select> :
                            <select name="min1" id="min1" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')" accesskey="" oninput="this.setCustomValidity('')">
                                <option value=""> --- </option>
                                <option value="00"> 00 </option>
                                <?php for($min1=30;$min1<60;$min1+=30)
				{
				?>
                                <option value="<?=$min1;?>">
                                    <?=$min1;?>
                                </option>
                                <?php
				}
                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="15%" class="detail"></td>
                        <td width="25%">
                        </td>
                        <td width="10%" class="detail">เวลา</td>
                        <td width="50%">
                            <!-- สร้าง Selectbox สำหรับเลือกเวลาสิ้นสุดกิจกรรม -->
                            <select name="hour2" id="hour2" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')" accesskey="" oninput="this.setCustomValidity('')"
                                onchange="check(document.getElementById('hour1'),this);">
                                <option value=""> --- </option>
                                <option value="06"> 06 </option>
                                <option value="07"> 07 </option>
                                <option value="08"> 08 </option>
                                <option value="09"> 09 </option>
                                <?php for($hour2=10;$hour2<18;$hour2++)
				{
				?>
                                <option value="<?=$hour2;?>">
                                    <?=$hour2;?>
                                </option>
                                <?php
				}
                ?>
                            </select> :
                            <select name="min2" id="min2" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')" accesskey="" oninput="this.setCustomValidity('')">
                                <option value=""> --- </option>
                                <option value="00"> 00 </option>
                                <?php for($min2=30;$min2<60;$min2+=30)
				{
				?>
                                <option value="<?=$min2;?>">
                                    <?=$min2;?>
                                </option>
                                <?php
				}
                ?>
                            </select>
                        </td>
                    </tr>
                    <?php
                    /* คำสั่ง SQL เรียกข้อมูลทั้งหมดจากตาราง queue */ 
					$strSQL2 = "select * from queue";
					$objQuery2 = mysqli_query($link,$strSQL2) or die (mysqli_error());
				?>
                    <tr>
                        <td width="10%" class="detail">ประเภท</td>
                        <td>
                            <!-- สร้าง Radio Buuton เพื่อเลือกว่าจะทำกิจกรรมแบบใด -->
                            <label>
                                <input type="radio" name="Queue_Type" value="ทำกิจกรรม" class="detail" required="">ทำกิจกรรม</label>
                            <label>
                                <label>
                                    <input type="radio" name="Queue_Type" value="บริจาคสิ่งของ" class="detail" required="">บริจาคสิ่งของ</label>
                                <label>
                        </td>
                    </tr>
                    <tr>
                        <!-- สร้าง Textbox สำหรับกรอกชื่อ -->
                        <td width="10%" class="detail">ชื่อผู้จอง</td>
                        <td width="50%">
                            <input type="text" name="Queue_Name" placeholder="กรุณาระบุข้อมูล *" required="" oninvalid="this.setCustomValidity('กรุณากรอกชื่อ')"
                                oninput="this.setCustomValidity('')">
                        </td>
                    </tr>
                    <tr>
                        <!-- สร้าง Textbox สำหรับกรอกอีเมล -->
                        <td width="10%" class="detail">Email</td>
                        <td width="50%">
                            <input type="text" name="Queue_Email" placeholder="กรุณาระบุข้อมูล *" required="" oninvalid="this.setCustomValidity('กรุณากรอก Email')"
                                oninput="this.setCustomValidity('')">
                        </td>
                    </tr>
                    <tr>
                        <!-- สร้าง Textbox สำหรับกรอกเบอร์โทรศัพท์ -->
                        <td width="10%" class="detail">เบอร์โทรศัพท์</td>
                        <td width="50%">
                            <input type="text" name="Queue_Tel" placeholder="กรุณาระบุข้อมูล 10 หลัก *" size="20" maxlength="10" onKeyUp="if(this.value*1!=this.value) this.value='';"
                                required="" oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทรศัพท์')" oninput="this.setCustomValidity('')">
                        </td>
                        <tr>
                            <!-- สร้าง Textbox สำหรับกรอกรายละเอียด -->
                            <td width="10%" class="detail">รายละเอียดกิจกรรม</td>
                            <td width="50%">
                                <input type="text" name="Queue_Detail" placeholder="กรุณาระบุข้อมูล *" required="">
                            </td>
                        </tr>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td>
                            <input type="submit" value="ตกลง">
                        </td>
                        <td>
                            <a href="Homepage.php">
                                <input type="button" value="กลับหน้าหลัก">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <br>
        <br>
        <div>
            <!-- เรียกไฟล์ calendar.php เพื่อใช้งานปฏิทิน -->
            <?php
                include 'calendar.php';
            ?>
        </div>
    </form>
</body>
</html>
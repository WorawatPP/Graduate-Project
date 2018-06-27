<html>
<style>
    legend {
        font-weight: bold;
        font-size: 25px;
        color: #000000;
    }
    .detail {
        border: 25px solid navy;
        margin: 40px;
        left: 50%;
        transform: translate(-50%);
        border: #999 3px solid;
        padding: 35px 10px 10px 10px;
        width: 1000px;
        height: auto;
        position: absolute;
        word-spacing: 5px; /*ระยะห่างข้อความ*/
        background-color: #ff6600;
        color: black;
        -webkit-border-radius: 15px; /*ส่วนโค้ง*/
        -moz-border-radius: 15px; /*ส่วนโค้ง*/
        border-radius: 15px; /*ส่วนโค้ง*/
        border-color: black;
    }
    input[type=text] {
        border: 2px solid black;
        border-radius: 4px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        font-size: 20px;
    }
    input[type=password] {
        border: 2px solid black;
        border-radius: 4px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        font-size: 20px;
    }
    input[type=submit] {
        background-color: white;
        border: none;
        color: #333333;
        font-size: 25px;
        padding: 12px 20px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-border-radius: 15px; /*ส่วนโค้ง*/
        -moz-border-radius: 15px; /*ส่วนโค้ง*/
        border-radius: 15px; /*ส่วนโค้ง*/
        border: #000000 3px solid;
    }
</style>
<head>
    <meta charset="UTF-8" content="text/html">
    <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title>
</head>
<body style="background-image:url(img/bbb1.jpg);background-position: center;background-attachment:fixed;background-repeat:repeat">
    <form method="post" class="detail" action="login_form1.php" name="login_form1" style="text-align: center; font-size: 40px; color: white">
        <div style="text-align: center; font-size: 50px;color: white">ผู้ดูแลระบบและพนักงาน</div>
        <br></br>
        <div style="text-align: center;color: white;font-size: 30px ">
            <!-- วัน-เดือน-ปี -->
            <?php
                date_default_timezone_set("Asia/Bangkok"); /* กำหนดเวลาเว็บไซต์ ให้เป็นโซน Asia */
                $datenow= time();
                echo date("d/m/y H:i:s",$datenow);
            ?>
        </div>
        <br>
        <form method="post" action="login_form1.php" name="login_form1" style="text-align: center; font-size: 40px; color: white">
            <div style="text-align: center;font-size: 25; color: white">กรุณากรอกชื่อผู้ใช้และรหัสผ่าน</div>
            <br>
            <table style="font-size: 20px;width: 60%;color: white; text-align: center" align="center">
                <tr>
                    <td>ชื่อผู้ใช้:
                        <input type="text" name="Emp_User">
                    </td>
                </tr>
                <tr>
                    <td>รหัสผ่าน:
                        <input type="password" name="Emp_Password">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="เข้าระบบ">
        </form>
</body>
</html>
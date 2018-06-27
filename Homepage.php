<style> /* ประกาศหัวในส่วน CSS */
body {margin:0;}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}
.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}
.navbar a:hover {
  background: #ddd;
  color: black;
}
.navbar a:hover {
    border-bottom: 5px solid white;
}
.navbar a.active {
    border-bottom: 5px solid red;
}
</style> <!-- โค้ดปิดในส่วนของ CSS -->
<html>
    <head>
    <meta charset="UTF-8" content="text/html"> <!-- กำหนดภาษาให้กับเว็บไซต์ -->
    <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
    </head>
    <body style="background-image:url(img/bbb1.jpg); background-attachment: fixed; background-position:center center;background-repeat:no-repeatrepeat">
        <br>
        <div style="color: window; text-align: center; font-size: 30px; font-weight:bolder" >
        <h1>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</h1>
        <h2>จังหวัดปทุมธานี</h2> 
        <div style="text-align: center"> 
            <?php
                date_default_timezone_set("Asia/Bangkok"); /* กำหนดเวลาโซนเวลาของเว็บไซต์ ให้เป็นโซน Asia */
                $datenow= time();
                echo date("d/m/y H:i:s",$datenow);
            ?>
        </div>
        <img src="img/DF.jpg" style="border: solid 2px black; height: 400px;width: 800px">
        <marquee><h3>มุ่งสู่สังคมผู้สูงอายุอย่างมีคุณภาพและศักดิ์ศรี ภายใต้ความร่วมมือของภาคีเครือข่าย</h3></marquee>
        </div>
        <br>
        <div class="navbar" >
            <a href="#Homepage" class="active">หน้าแรก</a>
            <a href="Login.php">Login</a>
            <a href="hotnew.php">ข่าว</a>
            <a href="Contactus.php">ติดต่อองค์กร</a>
            <a href="right.php">สิทธิและสวัสดิการ</a>
            <a href="activites.php">จองคิวและกิจกรรม</a>
            <a href="Corporate.php">เกี่ยวกับองค์กร</a>
        </div>
    </body>
</html>

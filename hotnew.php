<?php
    require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
    $q = "SELECT * FROM hotnew";
    $result = mysqli_query($link,$q);
?>
<style>
    th,td 
    {
        border: 1px solid black;
        border-collapse: collapse;
    }
    legend
    {
        font-weight: bold;
        font-size: 30px;
        color:#000000;
    }
    .detail
    {
        padding: 25px;
        border: 25px solid navy;
        margin: 5px;
        left: 50%;
        transform: translate(-50%); 
        border: #999 3px solid;
        padding: 35px 10px 10px 10px;
        width: 1400px;
        height: auto;
        position: absolute;
        word-spacing: 5px; /*ระยะห่างข้อความ*/
        background-color: #ffffcc;
        color:black;
        -webkit-border-radius: 15px;/*ส่วนโค้ง*/
        -moz-border-radius: 15px;/*ส่วนโค้ง*/
        border-radius: 15px;/*ส่วนโค้ง*/
        border-color: black;
    }
    input[type=button], input[type=submit], input[type=reset] 
    {
        background-color: #ff6600;
        border: none;
        color: white;
        font-size: 25px;
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
    <meta charset="UTF-8"> <!-- กำหนดภาษาของเว็บไซต์ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="post" name="frm" class="detail" action="hotnewinsert.php" enctype="multipart/form-data" id="form1"  >
            <fieldset style="border:3px solid black"><legend>ข่าวศูนย์พัฒนาการจัดสวัสดิการสังคมอยู่สูงอายุ</legend><br><br>
      <div style="text-align: center;background-position: center"><br>
          <img src="img/slide.jpg" style="border: solid 3px black; width: 1200px; height: 300px"></div>
          <div style="text-align: center;background-position: center"><br>
          <img src="img/slide1.jpg" style="border: solid 3px black; width: 1200px; height: 300px"></div>
          <div style="text-align: center;background-position: center"><br>
          <img src="img/slide2.jpg" style="border: solid 3px black; width: 1200px; height: 300px"></div>
          <br><br>
                <?php
                /* คำสั่ง SQL ใช้สำหรับดึงข้อมูลจากฐานข้อมูลมาแสดงแบบ Array */
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
            ?>
          <table style="font-size:16px; "  align="center" border="3" bordercolor="black">
              <br><br> <tr><td><div style="color:black;font-size: 25px">หัวข้อข่าว:<?php echo $row['hotnew_Headline'];?></div></td></tr>
            <tr>  
                <td><img src ="img/<?php echo $row['hotnew_Photo']; ?>" width ="290px" height="240px"></td>
                <td><img src ="img/<?php echo $row['hotnew_Photo2']; ?>" width ="290px" height="240px"></td>
                <td><img src ="img/<?php echo $row['hotnew_Photo3']; ?>" width ="290px" height="240px"></td>
            </tr>  </table>
        <table style="font-size:20px; "  align="center" border="5" bordercolor="black">
                <tr>
                    <td><div style="text-align: center">ข้อมูลข่าว:</div></td><td><textarea name="hotnew"  cols="110" rows="10" readonly  size="200" ><?php echo $row['hotnew'];?></textarea></td>
            </tr>              
                <input type="hidden" name="hotnew_ID"  value="<?php echo $row['hotnew_ID'];?>">
             <?php }?>
      </table>
                <div style="text-align: center">
                <br></br>
                <br></br>
                <a href="Homepage.php"><input type="button" value="กลับหน้าหลัก"></a>  
                </div>
            </fieldset>
        </form>
    </body>
</html>

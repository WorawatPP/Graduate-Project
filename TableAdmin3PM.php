<?php 
$dd = isset($_POST['ddlSelect']) ? $_POST['ddlSelect'] : ''; /* สร้างตัวแปร $dd รับค่าจาก ddlSelect */
?>
<?php 
$txt = isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : ''; /* สร้างตัวแปร $txt รับค่าจาก txtKeyword */
?>
<html>
    <head>
    <meta charset="UTF-8"> <!-- กำหนดภาษาให้เว็บไซต์ -->
    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวเว็บไซต์ -->
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
    </head>
    <!-- กำหนดพื้นหลังในส่วน Body -->
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="post" action="TableAdmin3PM.php" class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลสิ่งของบริจาค</h2>
   <center>
        <table style="font-size: 16px;width: 90%;border:3px solid black" align="center" border="2">
    <tr><th>เลือกคอลัมน์ที่ต้องการค้นหา:<select name="ddlSelect">
    <option><เลือกคอลัมน์ที่ต้องการค้นหา></option>
    <option value="Pd_Name"<?php if($_POST["ddlSelect"]=="Pd_Name"){echo"selected";}php?>>ชื่อ</option>
    <option value="Pd_Type" <?php if($_POST["ddlSelect"]=="Pd_Type"){echo"selected";}php?>>ประเภท</option>
            </select><td>พิมพ์คำที่ต้องการหาในคอลัมน์:<input name="txtKeyword" size="30" type="text"placeholder="ค้นหา"></td>
        <td><div align="center"><input type="submit" value="ค้นหา"  ></td>
                </table><br>
    <a href="ProforAdmin3.php"> <input type="button" value="เพิ่มข้อมูลสิ่งของบริจาค" > </a>
    <a href="forAdmin.php"> <input type="button" value="กลับหน้าหลัก" > </a><br></br>
    <?php 
        require ("connect1.php"); /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
    ?>
    <?php /* โค้ดในส่วนนี้ใช้สำหรับการแบ่งหน้าเว็บไซต์ */
    $perpage = 5;
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }
    $start = ($page - 1) * $perpage;
    $sql = "select * from product order by Pd_ID DESC limit {$start} , {$perpage} ";
    $query = mysqli_query($link, $sql);
    ?>
   <table style="font-size: 16px;width: 80%;border:3px solid black" align="center" border="2">
               <tr>
               <th width="150">สถานะ</th> <!-- สร้างตารางเพื่อแสดงสถานะ -->
               <th width="150">ชื่อ</th> <!-- สร้างตารางเพื่อแสดงชื่อ -->
                <th width="150">ประเภท</th> <!-- สร้างตารางเพื่อแสดงประเภท -->
                <th width="80">จำนวน</th> <!-- สร้างตารางเพื่อแสดงจำนวน -->
                <th width="140">แก้ไขสถานะ</th> <!-- สร้างเพื่อแสดงปุ่มแก้ไข -->
            </tr>
               <tr>
            <?php
                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {  
            ?>
                <td><div style="text-align: center"><?php echo $row['ActivePd'];?></div></td>
                <td><div style="text-align: center"><?php echo $row['Pd_Name'];?></div></td>
                <td><div style="text-align: center"><?php echo $row['Pd_Type'];?></div></td>
                <td><div style="text-align: center"><?php echo $row['Pd_Sumtotal'];?></div></td>
                <td><div align="center"><a href="Proedit.php?Pd_ID=<?php echo $row['Pd_ID'];?>">แก้ไข</a></div></td>
            </tr>
                <?php }?>  
        </table>
       <?php
         $sql2 = "select * from product ";
         $query2 = mysqli_query($link, $sql2);
         $total_record = mysqli_num_rows($query2);
         $total_page = ceil($total_record / $perpage);
         ?>
         <nav>
        <ul class="pagination">
        <a href="TableAdmin3PM.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        <?php for($i=1;$i<=$total_page;$i++){ ?>
        <a href="TableAdmin3PM.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
        <a href="TableAdmin3PM.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </ul>
        </nav>
</center>
        </form>
</body>
    </html>
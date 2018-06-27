<?php /* ใช้งานคำสั่ง PHP เพื่อติดต่อกับฐานข้อมูล */
    require 'connect1.php'; /* เรียกใช้ไฟล์ connect1.php เพื่อติดต่อฐานข้อมูล */  
?>
<html>
<head>
    <meta charset="UTF-8"> <!-- กำหนดภาษาของเว็บไซต์ -->
    <title>ตารางข้อมูลพนักงาน</title> <!-- กำหนดชื่อส่วนหัวของเว็บไซต์ -->
    <style> /* ประกาศหัวในส่วน CSS */
        th,
        td 
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .detail 
        {
            border: 25px solid navy;
            margin: 20px;
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
        input[type=button],
        input[type=submit],
        input[type=reset] 
        {
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
</head>
<!-- กำหนดพื้นหลังของส่วน Body -->
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
    <form method="get" class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลพนักงาน</h2>
        <center>
            <!-- กำหนดลิงค์ให้ปุ่ม เพิ่มข้อมูลพนักงาน -->
            <a href="forAdmin1.php">
                <input type="button" value="เพิ่มข้อมูลพนักงาน"> </a>
            <!-- กำหนดลิงค์ให้ปุ่ม ข้อมูลพนักงานลาออก -->
            <a href="forAdminStatus.php">
                <input type="button" value="ข้อมูลพนักงานที่ลาออก"> </a>
            <!-- กำหนดลิงค์ให้ปุ่ม กลับหน้าหลัก -->
            <a href="forAdmin.php">
                <input type="button" value="กลับไปหน้าหลัก"> </a>
            <br></br>
            <!-- คำสั่ง PHP ใช้สำหรับแบ่งหน้าเว็บไซต์ -->
            <?php
            $perpage = 5;
            if (isset($_GET['page'])) {
            $page = $_GET['page'];
            } else {
            $page = 1;
            }
            $start = ($page - 1) * $perpage;
            $sql = "select * from employee order by Emp_ID ASC limit {$start} , {$perpage} ";
            $query = mysqli_query($link, $sql);
            ?>
                <table style="font-size: 20px;width: 60%;border:3px solid black" align="center" border="2">
                    <tr>
                        <th width="300">ชื่อ</th> <!-- สร้างตารางเพื่อแสดงชื่อ -->
                        <th width="300">นามสกุล</th> <!-- สร้างตารางเพื่อแสดงนามสกุล -->
                        <th width="80">ตำแหน่ง</th> <!-- สร้างตารางเพื่อแสดงตำแหน่ง -->
                        <th width="160">รายละเอียด</th> <!-- สร้างตารางเพื่อแสดงปุ่มรายละเอียด -->
                        <th width="90">แก้ไข</th> <!-- สร้างตารางเพื่อแสดงปุ่มแก้ไข -->
                    </tr>
                    <tr>
                    <?php
                        /* ใช้คำสั่ง PHP เพื่อเรียกข้อมูลมาแสดงแบบ Array */
                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {     
                    ?>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Emp_Name'];?> ดึงข้อมูลชื่อพนักงานออกมาแสดง
                                </div>
                            </td>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Emp_Surname'];?> ดึงข้อมูลนามสกุลพนักงานออกมาแสดง
                                </div>
                            </td>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Emp_Status'];?> ดึงข้อมูลตำแหน่งพนักงานออกมาแสดง
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <!-- เมื่อคลิ๊กจะแสดงรายละเอียดพนักงาน -->
                                    <a href="Empshow.php?Emp_ID=<?php echo $row['Emp_ID']; ?>">ดูรายละเอียด</a>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <!-- สร้างลิงค์แก้ไขเพื่อแก้ไขข้อมูลพนักงาน -->
                                    <a href="Empedit.php?Emp_ID=<?php echo $row['Emp_ID']; ?>">แก้ไข</a>
                                </div>
                            </td>
                    </tr>
                    <?php }?>
                </table>
                <?php
                    $sql2 = "select * from employee ";
                    $query2 = mysqli_query($link, $sql2);
                    $total_record = mysqli_num_rows($query2);
                    $total_page = ceil($total_record / $perpage);
                ?>
                    <nav>
                        <ul class="pagination">
                            <a href="EmpforAdminTable.php?page=1" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            <?php for($i=1;$i<=$total_page;$i++){ ?>
                            <a href="EmpforAdminTable.php?page=<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </a>
                            <?php } ?>
                            <a href="EmpforAdminTable.php?page=<?php echo $total_page;?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </ul>
                    </nav>
        </center>
    </form>
</body>
</html>
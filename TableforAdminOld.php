<?php
    require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
?>
<html>
<head>
    <meta charset="UTF-8"> <!-- กำหนดภาษาของเว็บไซต์ -->
    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
    <style>
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
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
    <form method="get" class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลผู้สูงอายุ</h2>
        <center>
            <a href="forAdmin2.php">
                <input type="button" value="เพิ่มข้อมูลผู้สูงอายุ"> </a>
            <a href="TableforAdminOldD.php">
                <input type="button" value="ข้อมูลผู้เสียชีวิต"> </a>
            <a href="forAdmin.php">
                <input type="button" value="กลับไปหน้าหลัก"> </a>
            <br></br>
            <?php /* โค้ดส่วนนี้ใช้สำหรับแบ่งหน้าเว็บไซต์ */
            $perpage = 5;
            if (isset($_GET['page'])) {
            $page = $_GET['page'];
            } else {
            $page = 1;
            }
            $start = ($page - 1) * $perpage;
            $sql = "select * from oldpeople order by Op_ID DESC limit {$start} , {$perpage} ";
            $query = mysqli_query($link, $sql);
            ?>
                <table style="font-size: 16px;width: 90%;border:3px solid black">
                    <tr>
                        <th width="300">ชื่อ</th> <!-- สร้างตารางเพื่อแสดงชื่อผู้สูงอายุ -->
                        <th width="300">นามสกุล</th> <!-- สร้างตารงเพื่อแสดงนามสกุลผู้สูงอายุ -->
                        <th width="80">เพศ</th> <!-- สร้างตารางเพื่อแสดงเพศผู้สูงอายุ -->
                        <th width="80">อายุ</th> <!-- สร้างตารางเพื่อแสดงอายุ -->
                        <th width="160">รายละเอียด</th> <!-- สร้างตารางเพื่อแสดงปุ่มรายละเอียด -->
                        <th width="160">นัดพบแพทย์</th> <!-- สร้างตารางเพื่อแสดงปุ่มนัดพบแพทย์ -->
                        <th width="90">แก้ไข</th> <!-- สร้างตารางเพื่อแสดงปุ่มแก้ไข -->
                    </tr>
                    <tr>
                    <?php
                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {       
                    ?>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Op_Name'];?>
                                </div>
                            </td>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Op_Surname'];?>
                                </div>
                            </td>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Op_Sex'];?>
                                </div>
                            </td>
                            <td>
                                <div style="text-align: center">
                                    <?php echo $row['Op_Age'];?>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <a href="Oldshow.php?Op_ID=<?php echo $row['Op_ID']; ?>">ดูรายละเอียด</a>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <a href="QueueOld.php?Op_ID=<?php echo $row['Op_ID']; ?>">นัดพบแพทย์</a>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <a href="Oldedit.php?Op_ID=<?php echo $row['Op_ID']; ?>">แก้ไข</a>
                                </div>
                            </td>
                    </tr>
                    <?php }?>
                </table>
                <?php
        $sql2 = "select * from oldpeople ";
        $query2 = mysqli_query($link, $sql2);
        $total_record = mysqli_num_rows($query2);
        $total_page = ceil($total_record / $perpage);
        ?>
                    <nav>
                        <ul class="pagination">
                            <a href="TableforAdminOld.php?page=1" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            <?php for($i=1;$i<=$total_page;$i++){ ?>
                            <a href="TableforAdminOld.php?page=<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </a>
                            <?php } ?>
                            <a href="TableforAdminOld.php?page=<?php echo $total_page;?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </ul>
                    </nav>
        </center>
    </form>
</body>
</html>
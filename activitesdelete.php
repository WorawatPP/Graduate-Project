<?php
    require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
    $Queue_ID = $_GET['Queue_ID']; /* รับค่า Queue_ID มาจากหน้า forAdmin4.php */
    /* คำสั่ง SQL ในส่วนนี้ใช้สำหรับลบข้อมูลในฐานข้อมูล */
    $q = "DELETE FROM queue WHERE Queue_ID='$Queue_ID'";
    $result = mysqli_query($link, $q);
    if ($result) {
        header("Location:forAdmin4.php");
        exit();
    }
    else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล" . mysqli_error($dbcon);
    }
    mysqli_close($link);
?>
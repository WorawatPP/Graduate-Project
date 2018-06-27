<?php
        $link = mysqli_connect('localhost', 'root', '', 'admin') or die(' ไม่สามารถติดต่อฐานข้อมูลได้ '. mysqli_connect_error());
         mysqli_set_charset($link, 'utf8');
    
        ?>

    <?php  
$mysqli = new mysqli("localhost", "root","","admin");  
/* check connection */ 
if ($mysqli->connect_errno) {  
    printf("Connect failed: %s\n", $mysqli->connect_error);  
    exit();  
}  
if(!$mysqli->set_charset("utf8")) {  
    printf("Error loading character set utf8: %s\n", $mysqli->error);  
    exit();  
}
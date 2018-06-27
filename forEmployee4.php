
      <?php

       require 'connect1.php';
       ?>
      

<html>
    
    
    
    <head>
        <meta charset="UTF-8">
        <title>ตารางข้อมูลการจองคิวและบริจาค</title>
        <style>
            legend{font-weight: bold;
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
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลการจองคิวและบริจาค</h2>
       
<center>
    
   
    <a href="foremployee.php"> <input type="button" value="ย้อนกลับ"> </a><br></br>
 
    <?php
    
    $perpage = 5;
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }

    $start = ($page - 1) * $perpage;

    $sql = "select * from queue order by Queue_ID DESC limit {$start} , {$perpage} ";
    $query = mysqli_query($link, $sql);
    ?>
     
    
  <table style="font-size: 16px;width: 80%;border:3px solid black" align="center" border="2">
          
               <tr>
               <th width="150">สถานะ</th>
               <th width="150">ชื่อ</th>
                <th width="150">เบอร์โทร</th>
                <th width="150">จองคิวหรือบริจาค</th>
                <th width="150">วันที่</th>
                <th width="150">เวลา</th>
                <th width="150">ถึงวันที่</th>
                <th width="150">เวลา</th>
                <th width="90">ยืนยัน</th>
                <th width="90">ลบ</th>
            </tr>
            
            
               <tr>
            <?php
                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {  
                    
                   
                    
            ?>
                   <td><div style="text-align: center"><?php echo $row['Queue_Status'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Queue_Name'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Queue_Tel'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Queue_Type'];?></div></td>
                    <td><div style="text-align: center"><?php echo $row['Queue_Date'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['strtime'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['Queue_Enddate'];?></div></td>
                   <td><div style="text-align: center"><?php echo $row['endtime'];?></div></td>
               
                
                   <td><div align="center"><a href="activitiesedit2.php?Queue_ID=<?php echo $row['Queue_ID']; ?>">ยืนยัน</a></div></td>
                   <td><div align="center"><a href="activitesdelete2.php?Queue_ID=<?php echo $row['Queue_ID']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a></div></td>
                
            </tr>
                <?php }?>  
        </table>
<?php
         $sql2 = "select * from queue ";
         $query2 = mysqli_query($link, $sql2);
         $total_record = mysqli_num_rows($query2);
         $total_page = ceil($total_record / $perpage);
         ?>
   
         <nav>
        <ul class="pagination">
        <a href="forEmployee4.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        <?php for($i=1;$i<=$total_page;$i++){ ?>
        <a href="forEmployee4.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
        <a href="forEmployee4.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </ul>
        </nav>
</center>
        </form>
    </body>
 </html>

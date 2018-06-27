<?php

       require 'connect1.php';
       ?>

<?php
    
        $perpage = 5;
        if (isset($_GET['page'])) {
        $page = $_GET['page'];
        } else {
        $page = 1;
        }

        $start = ($page - 1) * $perpage;

        $sql = "SELECT queueoldpeople.Queue_Op,queueoldpeople.Queue_Opdate,oldpeople.Op_Name,queueoldpeople.Queue_Opstatus,oldpeople.Op_Surname,oldpeople.Op_Diseases,queueoldpeople.Queue_Doctor,queueoldpeople.Queue_Hospital
              FROM queueoldpeople INNER JOIN oldpeople ON oldpeople.Op_ID = queueoldpeople.Op_Id 
              ORDER BY Queue_Op DESC limit {$start} , {$perpage} ";
        $query = mysqli_query($link,$sql);
        ?>
 <style>
        legend{font-weight: bold;
               font-size: 30px;
               color: black;
              
        }
        .detail{
        
     
      
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


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        <form method="post" name="frm" class="detail" action="QueueOldupdate2.php" enctype="multipart/form-data" id="form1"> 
            <h2 style="color:black; text-align: center;font-size: 50px"></h2>
<center>
    
    
 
    
    
    
    
    
  <table style="font-size: 16px;width: 100%;border:3px solid black" align="center" border="2">
          
      
      
      
          
      <div style="font-size:40px;color:black">ตารางข้อมูลแพทย์นัดพบ</div><br><br>
      <a href="foremployee.php"><input type="button" value="กลับหน้าหลัก" name="กลับหน้าหลัก"></a>
          
     
        
          
      
          
          
  <br><br>
      
      
      
               <tr>
              
                <th width="100">สถานะ</th>
                <th width="200">ชื่อ</th>
                <th width="200">นามสกุล</th>
                <th width="300">แพทย์</th>
                <th width="200">โรงพยาบาล</th>
                <th width="250">โรคประจำตัว</th>
                <th width="100">วันที่และเวลานัด</th>
            
            </tr>
            
            
               <?php
        while($objResult10 = mysqli_fetch_array($query, MYSQLI_ASSOC))
        { 	
			
		?>
        <tr >
            <td  width="4%" align="center"><a href="QueueOldupdate2.php?Queue_Opstatus=<?=$objResult10["Queue_Opstatus"];?>&&Queue_Op=<?=$objResult10["Queue_Op"];?>">
			<?php	if($objResult10["Queue_Opstatus"]=='Y')
			{
				echo "<img src='img/accept.png'>";
			}
			else if($objResult10["Queue_Opstatus"]=='N')
			{
				echo "<img src='img/wait.png'>";
			}
			
            ?>
            </a></td>

            <td><div style="text-align: center"><?php echo $objResult10['Op_Name'];?></div></td>
             <td><div style="text-align: center"><?php echo $objResult10['Op_Surname'];?></div></td>
              <td><div style="text-align: center"><?php echo $objResult10['Queue_Doctor'];?></div></td>
               <td><div style="text-align: center"><?php echo $objResult10['Queue_Hospital'];?></div></td>
            <td><div style="text-align: center"><?php echo $objResult10['Op_Diseases'];?></div></td>
            <td><div style="text-align: center"><?php echo $objResult10['Queue_Opdate'];?></div></td>
            
            
        </tr>
        <?php 
		}
        ?>
        </table>
                <?php
         $sql2 = "SELECT queueoldpeople.Queue_Op,queueoldpeople.Queue_Opdate,oldpeople.Op_Name,queueoldpeople.Queue_Opstatus,oldpeople.Op_Surname,oldpeople.Op_Diseases,queueoldpeople.Queue_Doctor,queueoldpeople.Queue_Hospital
              FROM queueoldpeople INNER JOIN oldpeople ON oldpeople.Op_ID = queueoldpeople.Op_Id";
         $query2 = mysqli_query($link, $sql2);
         $total_record = mysqli_num_rows($query2);
         $total_page = ceil($total_record / $perpage);
         ?>
   
         <nav>
        <ul class="pagination">
        <a href="forEmployee7.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        <?php for($i=1;$i<=$total_page;$i++){ ?>
        <a href="forEmployee7.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
        <a href="forEmployee7.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </ul>
        </nav>
</center>
     </form>
    </body>
</html>

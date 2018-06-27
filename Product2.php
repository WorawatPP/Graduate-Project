<?php 

$dd = isset($_POST['ddlSelect']) ? $_POST['ddlSelect'] : '';


?>
<?php 

$txt = isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : '';


?>
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
        

<html>
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
    <form method="post" action="Product2.php" class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลสิ่งของบริจาค</h2>
       <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
<center>
    
       <table style="font-size: 16px;width: 90%;border:3px solid black" align="center" border="2">
    <tr><th>เลือกคอลัมน์ที่ต้องการค้นหา:<select name="ddlSelect">

    <option><เลือกคอลัมน์ที่ต้องการค้นหา></option>

    <option value="Pd_Name"<?php if($_POST["ddlSelect"]=="Pd_Name"){echo"selected";}php?>>ชื่อ</option>

    <option value="Pd_Type" <?php if($_POST["ddlSelect"]=="Pd_Type"){echo"selected";}php?>>ชนิด</option>

            </select><td>พิมพ์คำที่ต้องการหาในคอลัมน์:<input name="txtKeyword" size="30" type="text" id="txtKeyword"  placeholder="ค้นหา"></td>

        <td><div align="center"><input type="submit" value="ค้นหา"  ></td>
                </table><br>
           <?php 
              require ("connect1.php");    
        ?>
                
        <?php
    
        $perpage = 5;
        if (isset($_GET['page'])) {
        $page = $_GET['page'];
        } else {
        $page = 1;
        }

        $start = ($page - 1) * $perpage;

        $sql = "SELECT * FROM product WHERE Activepd = 'เบิกต่อได้' limit {$start} , {$perpage} ";
                if($dd != "" and  $txt  != "")
                       {
                          $q .= " AND (".$dd." LIKE '%".$txt."%' ) ";/*like เลือกข้อมูลที่เก็บในตัวแปล $dd จากคำในตัวแปล $txt*/
                       } 
        $query = mysqli_query($link, $sql);
        ?>        

      <table style="font-size: 16px;width: 80%;border:3px solid black" align="center" border="2">
          
      
      
          <a href="foremployee.php"><input type="button" value="กลับหน้าหลัก"></a>   
       <a href="Reproduct2.php"><input  type="button" value="ข้อมูลการเบิก"></a>  
      
          
      <br><br>

                <tr>
               
               <th width="180">ชื่อ</th>
                <th width="150">ประเภท</th>
                <th width="80">จำนวน</th>
                <th width="50">เบิก</th>
                
            </tr>
            
            
               <tr>
            <?php
                while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {  
     
            ?>
                
                   <td><div style="text-align: center"><?php echo $row['Pd_Name'];?></div></td>
                <td><div style="text-align: center"><?php echo $row['Pd_Type'];?></div></td>
                <td><div style="text-align: center"><?php echo $row['Pd_Sumtotal'];?></div></td>
                
               
                
                <td><div align="center"><a href="ProRe2.php?Pd_ID=<?php echo $row['Pd_ID'];?>">เบิก</a></div></td>
                
                
            </tr>
                <?php }?>  
        </table>
        <?php
         $sql2 = "SELECT * FROM product WHERE Activepd = 'เบิกต่อได้'";
         $query2 = mysqli_query($link, $sql2);
         $total_record = mysqli_num_rows($query2);
         $total_page = ceil($total_record / $perpage);
         ?>
   
         <nav>
        <ul class="pagination">
        <a href="Product2.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        <?php for($i=1;$i<=$total_page;$i++){ ?>
        <a href="Product2.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
        <a href="Product2.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </ul>
        </nav>
    </center>
    </form>
    </body>

    </html>

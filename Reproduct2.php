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

        $sql = "SELECT requisitionpd.ID_PD , requisitionpd.Pd_ID, product.Pd_Name, requisitionpd.Date_PD, requisitionpd.Total_PD,employee.Emp_Name
       FROM requisitionpd INNER JOIN product ON product.Pd_ID = requisitionpd.Pd_ID
       INNER JOIN employee ON employee.Emp_ID = requisitionpd.Emp_ID order by ID_PD DESC limit {$start} , {$perpage} ";
        $query = mysqli_query($link, $sql);
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
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form class="detail">
        <h2 style="color:black; text-align: center;font-size: 40px">ตารางข้อมูลเบิกสิ่งของบริจาค</h2>
       
<center>
    
    
 
    
    
    
    
    
  <table style="font-size: 16px;width: 80%;border:3px solid black" align="center" border="2">
 
      <a href="Product2.php"><input  type="button" value="ย้อนกลับ"></a>    
  <br><br>
      
      
      
               <tr>
              
               <th width="200">ชื่อ</th>
               <th width="200">ชื่อผู้เบิก</th>
               <th width="100">วันที่และเวลา</th>
               <th width="50">จำนวน</th>
                
               
            
            </tr>
            
            
               <tr>
            <?php
                while ($row1 = mysqli_fetch_array($query, MYSQLI_ASSOC)) {  
                    
                   
                    
            ?>
             <td><div style="text-align: center"><?php echo $row1['Pd_Name'];?></div></td>
             <td><div style="text-align: center"><?php echo $row1['Emp_Name'];?></div></td>
             <td><div style="text-align: center"><?php echo $row1['Date_PD'];?></div></td>
             <td><div style="text-align: center"><?php echo $row1['Total_PD'];?></div></td>

                
            </tr>
                <?php }?>  
        </table>
<?php
         $sql2 = "SELECT requisitionpd.ID_PD , requisitionpd.Pd_ID, product.Pd_Name, requisitionpd.Date_PD, requisitionpd.Total_PD,employee.Emp_Name
       FROM requisitionpd INNER JOIN product ON product.Pd_ID = requisitionpd.Pd_ID
       INNER JOIN employee ON employee.Emp_ID = requisitionpd.Emp_ID";
         $query2 = mysqli_query($link, $sql2);
         $total_record = mysqli_num_rows($query2);
         $total_page = ceil($total_record / $perpage);
         ?>
   
         <nav>
        <ul class="pagination">
        <a href="Reproduct2.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        <?php for($i=1;$i<=$total_page;$i++){ ?>
        <a href="Reproduct2.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
        <a href="Reproduct2.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </ul>
        </nav>
</center>
        </form>
    </body>
</html>

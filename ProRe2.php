 <?php
    require 'connect1.php';
    
    $Pd_ID = $_GET['Pd_ID'];
    $qpd = "SELECT * FROM product WHERE Pd_ID='$Pd_ID'";
    $respd = mysqli_query($link, $qpd);
    $rowpd = mysqli_fetch_array($respd, MYSQLI_ASSOC);
?>
<?php
session_start();/*เรียกใช้งาน session แสดงข้อมูลคนที่login*/
$_SESSION['global_member_id'];

?>


<script language ="javascript">//เช็คข้อความใน text 
     function check(){
         if(frm.Total_PD.value == ''){
             
             alert('ยังไม่ได้กรอกข้อมูล จำนวน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Total_PD.focus();
             return false;
         }
          else if(frm.Date_PD.value == ''){
             alert('ยังไม่ได้ระบุวันและเวลา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Date_PD.focus();
             return false;
         }
     }
       
 </script>


<html>
    <head>
        <meta charset="UTF-8">
        <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title>
    </head>
    
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
     
     <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        
        
        
        
         <form method="post" name="frm" action="ProReInUp2.php" enctype="multipart/form-data" id="form1" onsubmit="return check();">
            
            
             <fieldset style="border:3px solid black" class="detail"><legend>เบิกสิ่งของบริจาค</legend>
                
                
                
                
            <table style="font-size: 16px;color: black" align="center">
                
                
                
                
            
            
            <tr>
                <td>1.ชื่อ:</td><td><input type="text" name="Pd_Name"  size="30" value="<?php echo $rowpd ['Pd_Name'];?>" readonly></td>
               
            </tr>
             
            
            <tr>
                <td>2.วันที่และเวลา:</td><td><input type="datetime-local" name="Date_PD"  size="10"></td>
                    
                   
            </tr>
            
            <tr>
                <td>3.จำนวนคงเหลือ:</td><td><input type="text" name="Pd_Sumtotal" size="20" value="<?php echo $rowpd ['Pd_Sumtotal'];?>" readonly></td>
               
            </tr>
            
            <tr>
                <td>4.จำนวน:</td><td><input type="number" name="Total_PD"  size="20" placeholder="กรุณาระบุข้อมูล *" onKeyUp="if(this.value*1!=this.value) this.value='';" ></td>
            </tr>
            
             <tr>
                 <td><input type="hidden" name="Emp_ID"  size="20" value="<?php echo $_SESSION['global_member_id'];?>" ></td>
            </tr>
            
            <tr>
                 <td></td>
                 <td><br>
                 <input type="hidden" name="ID_PD" id="ID_PD">
                 <input type="hidden" name="Pd_ID" id="Pd_ID" value="<?php echo $rowpd['Pd_ID'];?>" > 
                 <input type="hidden" name="Pd_Sumtotal" id="Pd_Sumtotal" value="<?php echo $rowpd['Pd_Sumtotal'];?>" > 
                <input name="submit" type="submit" id="submit" value="เพิ่มข้อมูล">
                <a href="Product2.php"><input name="button" type="button" value="ย้อนกลับ"></a>
                    
                 </td>
                
                
            </tr>
 
        </table>
            </fieldset>
        </form>
    </body>
</html>

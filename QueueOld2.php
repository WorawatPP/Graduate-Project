<?php
    require 'connect1.php';
    
    $op_id = $_GET['Op_ID'];
    $qop = "SELECT * FROM oldpeople WHERE Op_ID='$op_id'";
    $resop = mysqli_query($link, $qop);
    $rowop = mysqli_fetch_array($resop, MYSQLI_ASSOC);
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
    
    <script language ="javascript">//ตวจสอบค่าว่าง text
     function check(){
         if(frm.Queue_Doctor.value == ''){
             
             alert('ยังไม่ได้กรอก ชื่อ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Queue_Doctor.focus();
             return false;
         }
         
         
         else if(frm.Date.value == ''){
             alert('ยังไม่ได้ระบุวันและเวลา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Date.focus();
             return false;
         }
         else if(frm.Queue_Hospital.value == ''){
             alert('ยังไม่ได้ระบุวันและเวลา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Queue_Hospital.focus();
             return false;
        
         }
     }
         </script>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        
        
        
        
        <form method="post" name="frm" action="QueueOldinsert2.php" enctype="multipart/form-data" id="form1" onsubmit="return check();">
            
            
            <fieldset style="border:3px solid black" class="detail"><legend>นัดพบแพทย์</legend>
                
                
                
                
            <table style="font-size: 16px;color: black" align="center">
                
                
                
                
            
            
            <tr>
                <td>1.ชื่อผู้สูงอายุ:</td><td><input type="text" name="Name" size="30" value="<?php echo $rowop ['Op_Name'];?>" disabled=""></td>
               
            </tr>
             <tr>
                <td>2.ชื่อแพทย์ประจำตัว:</td><td><input type="text" name="Queue_Doctor" size="30"  placeholder="กรุณาระบุข้อมูล *"></td>
               
            </tr>
            <tr>
                <td>3.ชื่อโรงพยาบาล:</td><td><input type="text" name="Queue_Hospital" size="30"  placeholder="กรุณาระบุข้อมูล *"></td>
               
            </tr>
            
            <tr>
                <td>4.วันที่และเวลา:</td><td><input type="datetime-local" name="Queue_Opdate"  size="10"></td>
                    
                   
            </tr>
           
           
            
            
            
            <tr>
                 <td></td>
                 <td><br>
                 <input type="hidden" name="Queue_Op" >
                 <input type="hidden" name="Op_ID"  value="<?php echo $rowop['Op_ID'];?>" >
                <input name="submit" type="submit" id="submit" value="เพิ่มข้อมูล" >
                <a href="TableforEmployeeOld.php"><input name="button" type="button" value="ย้อนกลับ"></a>
                    
                 </td>
                
                
            </tr>
 
        </table>

            </fieldset>
         </form>
    </body>
</html>

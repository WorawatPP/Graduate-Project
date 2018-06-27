 <?PHP
session_start();
	?>
<!DOCTYPE html>
<html lang="en">
       <script type="text/javascript">/*ตรวจสอบกรอกเลขไม่ครบ*/
         function count(){
            var getE = document.getElementById("Emp_Mobile");/*document.getElementById สำหรับการเข้าถึง Element Id ที่ต้องการใน Form HTML*/
            var Emp_Mobile = getE.value.length;/*เช็คความยาวตัวอกัษร*/
                if(Emp_Mobile<10){
                alert("กรอกข้อมูลไม่ครบ 10 หลัก กรุณากรอกใหม่");
      
                  }	
            }
        </script>



<?php include("f_thaidate.php");?>
    <?php include("datepick/datepick.php"); ?>

      

        
       

        
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
         
            
          <style type="text/css" >
            .detail{
        
             font-size: 25px;
        
        
            }
  
               legend{font-weight: bold;
               font-size: 25px;
               color: black;
              
        }
        
            body {
                    margin: 40px 10px;
                    padding: 0;
                    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                    font-size: 14px;
            }

            #calendar {
                    max-width: 800px;
                    margin: 10px auto;
            }
        
        
         </style>
         
     
        
        <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
            
            
            <div>
                <?php
                        include 'calendar.php';
                ?>
            </div>
            
                </body>

        </html>
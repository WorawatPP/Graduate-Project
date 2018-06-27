 <?php

       require 'connect1.php';
       
       
       $hotnew_ID= $_GET['hotnew_ID'];
       $q = "SELECT * FROM hotnew WHERE hotnew_ID='$hotnew_ID'";
       $result1 = mysqli_query($link,$q);
       $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
       ?>

<html>
    <head>
        <meta charset="UTF-8"> 
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
        
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
        
        <form method="post" name="frm" action="hotnewPhotoUp.php" enctype="multipart/form-data" id="form1"  >
            
            
            <fieldset class="detail"><legend>แก้ไขรูปภาพ</legend>
                
                
                
                
            <table style="font-size: 16px;color: black" align="center">
                
                
                 <tr>   
                <td><img src ="img/<?php echo $row['hotnew_Photo']; ?>" width ="160px" height="160px" border="3">
                        </td> 
                         <tr>
                             

                    <td>รูปภาพ 1:</td><td><input type="file" name="hotnew_Photo" ></td></tr>
                       
            </tr>
                <tr>   
                <td><img src ="img/<?php echo $row['hotnew_Photo2']; ?>" width ="160px" height="160px" border="3">
                        </td> 
                         <tr>
                             

                    <td>รูปภาพ 2:</td><td><input type="file" name="hotnew_Photo2" ></td></tr>
                       
            </tr>
            <tr>   
                <td><img src ="img/<?php echo $row['hotnew_Photo3']; ?>" width ="160px" height="160px" border="3">
                        </td> 
                         <tr>
                             

                    <td>รูปภาพ 3:</td><td><input type="file" name="hotnew_Photo3" ></td></tr>
                       
            </tr>
                
                
         
                
                <input type="hidden" name="hotnew"  cols="100" rows="10"  size="200" value="<?php echo $row['hotnew'];?>">
                <input type="hidden" name="hotnew_Headline"  cols="100" rows="10"  size="200" value="<?php echo $row['hotnew_Headline'];?>">
                                
                     
                   

            
                <input type="hidden" name="hotnew_ID"  value="<?php echo $row['hotnew_ID'];?>">
      
            
      </table>
                
                <div style="text-align: center">
                <br></br>
                
                <br></br>
                <input type="submit" name="submit" value="บันทึกข้อมูล" id="submit"  >
               

                <a href="hotnewshow.php"><input type="button" value="กลับหน้าหลัก"></a>  
                
                </div>
                
            </fieldset>
            
            
            
            
            
            
            
        </form>
        
    </body>
</html>

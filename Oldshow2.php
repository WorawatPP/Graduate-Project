<?php
    require 'connect1.php';
    
    $Op_ID = $_GET['Op_ID'];
    $q = "SELECT * FROM oldpeople WHERE Op_ID='$Op_ID'";
    $resop = mysqli_query($link, $q);
    $row = mysqli_fetch_array($resop, MYSQLI_ASSOC);
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title>
        
    </head>
    
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

        <form method="post" action="Oldshow.php" enctype="multipart/form-data" id="form1" >
 
            <fieldset style="border:3px solid black" class="detail"><legend>รายละเอียดข้อมูลผู้สูงอายุ</legend>
     
            <table style="font-size: 20px;color: black" align="center">
                
                
            <tr>
               
                <td>1.ชื่อ:</td><td><input type="text" name="Op_Name" readonly size="30" value="<?php echo $row ['Op_Name'];?>"></td>
           
                <td></td><td>21.ค่าไขมันดี:</td><td><input type="number" readonly name="Op_HDL"  size="3" value="<?php echo $row['Op_HDL'];?>"></td>  
                        
            </tr>

            <tr>
                
                <td>2.นามสกุล:</td><td><input type="text" name="Op_Surname" readonly  size="30" value="<?php echo $row['Op_Surname'];?>"></td>
           
                <td></td><td>22.ค่าไขมันร้าย LDL:</td><td><input type="number" readonly name="Op_LDL"  size="3" value="<?php echo $row['Op_LDL'];?>"></td> 
                          
            </tr>     
 
            <tr>
                
                
                <td>3.เพศ:</td><td><input type="text" name="Op_Sex" readonly  size="30" value="<?php echo $row ['Op_Sex'];?>">
               
                </td>
       
                <td></td> <td>23.โรคประจำตัว:</td><td><input type="text" name="Op_Diseases" readonly  size="30" value="<?php echo $row ['Op_Diseases'];?>">
               
                </td>            
               
            </tr>
 
            <tr>
                  
               <td>4.กรุ๊ปเลือด:</td><td><input type="text" name="Op_Blood" readonly  size="15" value="<?php echo $row ['Op_Blood'];?>">
               </td>
        
               <td></td> <td>24.ภาวะโรคซึมเศร้า:</td><td><input type="text" name="Op_MDD" readonly  size="15" value="<?php echo $row ['Op_MDD'];?>">
               </td>
      
            </tr>   
  
            <tr>
                <td>5.อายุ:</td><td><input type="number" name="Op_Age" readonly  size="2" value="<?php echo $row['Op_Age'];?>"></td>          
  
                <td></td><td>25.อาการทางจิต:</td><td><input type="text" name="Op_Psychopathy" readonly  size="20" value="<?php echo $row ['Op_Psychopathy'];?>">
               
                </td>
            
            </tr>
 
            <tr>
               
                <td>6.ส่วนสูง:</td><td><input type="number" name="Op_Hight" readonly  size="3" value="<?php echo $row ['Op_Hight'];?>"></td>

                <td></td><td>26.แบ่งกลุ่มตามระดับความเครียด:</td><td><input type="text" name="Op_Strain" readonly  size="15" value="<?php echo $row ['Op_Strain'];?>">
                 
                </td> 
                
                
            </tr>

            <tr>
                
                <td>7.นํ้าหนัก:</td><td><input type="number" name="Op_Weight" readonly size="3" value="<?php echo $row ['Op_Weight'];?>"></td>  

                <td></td><td>27.ความจำ:</td><td><input type="text" name="Op_Remembrance" readonly  size="10" value="<?php echo $row ['Op_Remembrance'];?>">
                   
                </td>
                
            </tr>

            <tr>
                
                <td>8.วันเกิด:</td><td><input type="date" name="Op_BD" readonly  size="10" value="<?php echo $row ['Op_BD'];?>"></td>
                <td></td> <td>28.แบ่งกลุ่มตามศักยภาพ:</td><td><input type="text" name="Op_Potential" readonly  size="20" value="<?php echo $row ['Op_Potential'];?>">
                   
                </td> 

            </tr>

            <tr>
                <td>9.สถานภาพ:</td><td><input type="text" name="Op_Status" readonly size="15" value="<?php echo $row ['Op_Status'];?>">
                   
                </td>
                <td></td><td>29.จำแนกสมรรถภาพ:</td><td><input type="text" name="Op_Capability" readonly  size="40" value="<?php echo $row['Op_Capability'];?>">
     
                </td> 
        
            </tr>

            <tr>
                <td>10.อาขีพ:</td><td><input type="text" name="Op_Occupation" readonly size="15" value="<?php echo $row ['Op_Occupation'];?>">
                </td>
                <td></td><td>30.ID ผู้สูงอายุ:</td><td><input type="text" name="Op_ID" readonly  size="40" value="<?php echo $row['Op_ID'];?>">
            </tr>

            <tr>
                
                <td>11.การศึกษา:</td><td><input type="text" name="Op_Fducation" readonly  size="30" value="<?php echo $row['Op_Fducation'];?>">
             
                </td> 
            </tr>

            <tr>
                <td>12.หมายเลขบัตรประชาชน:</td><td><input type="number" name="Op_IDnum" readonly  size="13" value="<?php echo $row ['Op_IDnum'];?>"></td>  
  
            </tr>

            <tr>
             
                <td>13.ภูมิลำเนา:</td><td><input type="text" name="Op_Hometown" readonly size="30" value="<?php echo $row ['Op_Hometown'];?>"></td>     
    
            </tr>

            <tr>
               
                <td>14.สาเหตุการรับเข้าอาศัย:</td><td><input type="text" name="Op_Cause" readonly size="15" value="<?php echo $row ['Op_Cause'];?>">
                    
                </td>    
 
            </tr>
 
            <tr> 
                
                <td>15.วันที่เข้าพัก:</td><td><input type="Date/Time" name="Op_Checkin" readonly  value="<?php echo $row ['Op_Checkin'];?>"></td>
   
            </tr>

            <tr>

                <td>16.แบ่งกลุ่มตามความพิการ:</td><td><input type="text" name="Op_Typedisability" readonly  size="20" value="<?php echo $row ['Op_Typedisability'];?>">
             
                </td>
  
            </tr>

            <tr>
                <td>17.ประเภทตามความพิการ:</td><td><input type="text" name="Op_Disability" readonly  size="20" value="<?php echo $row ['Op_Disability'];?>">
                
                </td>    

            </tr>

            <tr>
                
                <td>18.สมรรถภาพในเชิงปฎิบัติ:</td><td><input type="text" name="Op_ADL" readonly  size="30" value="<?php echo $row ['Op_ADL'];?>">
                    
            </td>
                
                
            </tr>

            <tr>
                
                <td>19.ค่าความดันโลหิต:</td><td><input type="text" name="Op_Bpressure" readonly  size="7" value="<?php echo $row['Op_Bpressure'];?>"></td> 
 
            </tr>

            <tr>
                
                <td>20.ค่าคอเรสเตอรอล:</td><td><input type="number" name="Op_CHO" readonly  size="3" value="<?php echo $row ['Op_CHO'];?>"></td>   
  
            </tr>    

        </table>
                <div style=" text-align: center">
                <br></br>
                <br></br>
                
                
                <input type="hidden" name="Op_ID" value="<?php echo $row['Op_ID']; ?>">
                <a href="TableforEmployeeOld.php"><input type="button" value="ย้อนกลับ"></a>
                
                </div>
                
                
                
            </fieldset>
            
        </form>

    </body>
</html>


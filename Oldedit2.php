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
        
         select {
   
    padding: 16px 20px;
    border:2px solid red;
    border-radius: 4px;
    background-color: #f1f1f1;
     font-size: 20px;
   
    } 
        
        
    </style>
    
    
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        
        
        <form method="post" action="Oldupdate2.php"enctype="multipart/form-data" id="form1" >
            
            
            <fieldset style="border:3px solid black" class="detail"><legend>แก้ไขข้อมูลผู้สูงอายุ</legend>
  
            <table style="font-size: 16px;color: black" align="center">

                <tr>
               
                <td>1.ชื่อ:</td><td><input type="text" name="Op_Name"  size="30" value="<?php echo $row ['Op_Name'];?>"></td>
                 
                        
                        
                 <td></td><td>21.ค่าไขมันดี:</td><td><input type="number" name="Op_HDL"  size="3" value="<?php echo $row['Op_HDL'];?>"></td>  
                        
            </tr>

            <tr>
                
                <td>2.นามสกุล:</td><td><input type="text" name="Op_Surname"  size="30" value="<?php echo $row['Op_Surname'];?>"></td>
               
                          
                <td></td><td>22.ค่าไขมันร้าย LDL:</td><td><input type="number" name="Op_LDL"  size="3" value="<?php echo $row['Op_LDL'];?>"></td> 
                          
            </tr>     

            <tr>
                
                
                <td>3.เพศ:</td><td><input type="text" name="Op_Sex"  size="30" value="<?php echo $row ['Op_Sex'];?>"><br>
                    <input type="radio" name="Op_Sex"  value="ชาย">ชาย
                    <input type="radio" name="Op_Sex"  value="หญิง">หญิง
                </td>
                
               
                        
                        
                <td></td><td>23.โรคประจำตัว:</td><td><input type="text" name="Op"  size="30" value="<?php echo $row ['Op_Diseases'];?>"><select name="Op_Diseases[]"  value="<?php echo $row ['Op_Diseases'];?>" multiple="multiple">
                                <option value="ไม่ได้ระบุ" name="Op_Diseases">ไม่ได้ระบุ</option>
                                <option value="ไม่มีโรคประจำตัว" name="Op_Diseases" >ไม่มีโรคประจำตัว</option>
                                <option value="โรคหัวใจ" name="Op_Diseases" >โรคหัวใจ</option>
                                <option value="โรคไต" name="Op_Diseases" >โรคไต</option>
                                <option value="โรคมะเร็ง" name="Op_Diseases" >โรคมะเร็ง</option>
                                <option value="โรคเบาหวาน" name="Op_Diseases" >โรคเบาหวาน</option>
                                <option value="โรคความดันสูง" name="Op_Diseases" >โรคความดันสูง</option>
                                <option value="โรคหอบหืด" name="Op_Diseases" >โรคหอบหืด</option>
                                <option value="โรคไขมันในเลือดสูง" name="Op_Diseases" >โรคไขมันในเลือดสูง</option>
                                <option value="โรคลมชัก" name="Op_Diseases" >โรคลมชัก</option>
                                <option value="โรคถุงลมโป่งพอง" name="Op_Diseases" >โรคถุงลมโป่งพอง</option>
                                <option value="โรคกระดูกข้อเสื่อม" name="Op_Diseases" >โรคกระดูกข้อเสื่อม </option>
                                <option value="โรคกระเพาะ" name="Op_Diseases" >โรคกระเพาะ</option>
                                <option value="โรคพากินสันต์" name="Op_Diseases" >โรคพากินสันต์</option>
                                <option value="โรคไทรอยด์" name="Op_Diseases" >โรคไทรอยด์</option>
                                <option value="โรคเก๊า" name="Op_Diseases" >โรคเก๊า</option>
                                <option value="โรครูมาตอย" name="Op_Diseases" >โรครูมาตอย</option>
                                <option value="อื่นๆ" name="Op_Diseases" >อื่นๆ</option>
                                
                                
                    </select>
                    </td>                
                
                
               
            </tr>

               <tr>
                  
                <td>4.กรุ๊ปเลือด:</td><td><select name="Op_Blood">
                    <option value="ไม่ได้ระบุ"<?php if($row['Op_Blood']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Blood">ไม่ได้ระบุ</option>
                    <option value="กรุ๊ปA"<?php if($row['Op_Blood']=='กรุ๊ปA'){ echo "selected='selected'";} ?> name="Op_Blood" >กรุ๊ปA</option>
                    <option value="กรุ๊ปB"<?php if($row['Op_Blood']=='กรุ๊ปB'){ echo "selected='selected'";} ?> name="Op_Blood" >กรุ๊ปB</option>
                    <option value="กรุ๊ปAB"<?php if($row['Op_Blood']=='กรุ๊ปAB'){ echo "selected='selected'";} ?> name="Op_Blood" >กรุ๊ปAB</option>
                    <option value="กรุ๊ปO"<?php if($row['Op_Blood']=='กรุ๊ปO'){ echo "selected='selected'";} ?> name="Op_Blood" >กรุ๊ปO</option>
                                
                                
                 </select></td>
                
               
                        
                <td></td> <td>24.ภาวะโรคซึมเศร้า:</td><td><input type="text" name="Op_MDD"  size="15" value="<?php echo $row ['Op_MDD'];?>"><input type="radio" name="Op_MDD"value="ปกติ">ปกติ
                            <input type="radio" name="Op_MDD" value="มีแนวโน้ม">มีแนวโน้ม
                </td>
                
               
            </tr>   

            <tr>
             

                <td>5.อายุ:</td><td><input type="number" name="Op_Age"  size="2" value="<?php echo $row['Op_Age'];?>"></td>          
                        
                        
           
                        
                 <td></td><td>25.อาการทางจิต:</td><td><input type="text" name="Op_Psychopathy"  size="20" value="<?php echo $row ['Op_Psychopathy'];?>">
                <input type="radio" name="Op_Psychopathy"  value="ป่วยจิตเวชแพทย์รับรอง">ป่วยจิตเวชแพทย์รับรอง 
                <input type="radio" name="Op_Psychopathy"  value="ป่วยจิตเวชการประเมิน">ป่วยจิตเวชการประเมิน
                </td>
            
            </tr>

            <tr>
               
                 <td>6.ส่วนสูง:</td><td><input type="number" name="Op_Hight"  size="3" value="<?php echo $row ['Op_Hight'];?>"></td>
                
               
                
                <td></td><td>26.แบ่งกลุ่มตามระดับความเครียด:</td><td><select name="Op_Strain">
                    <option value="ไม่ได้ระบุ"<?php if($row['Op_Strain']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Strain">ไม่ได้ระบุ</option>
                    <option value="ปกติ"<?php if($row['Op_Strain']=='ปกติ'){ echo "selected='selected'";} ?> name="Op_Strain" >ปกติ</option>
                    <option value="เครียดน้อย"<?php if($row['Op_Strain']=='เครียดน้อย'){ echo "selected='selected'";} ?> name="Op_Strain" >เครียดน้อย</option>
                    <option value="เครียดปานกลาง"<?php if($row['Op_Strain']=='เครียดปานกลาง'){ echo "selected='selected'";} ?> name="Op_Strain" >เครียดปานกลาง</option>
                    <option value="เครียดมาก"<?php if($row['Op_Strain']=='เครียดมาก'){ echo "selected='selected'";} ?> name="Op_Strain" >เครียดมาก</option>
                    <option value="เครียดมากที่สุด"<?php if($row['Op_Strain']=='เครียดมากที่สุด'){ echo "selected='selected'";} ?> name="Op_Strain">เครียดมากที่สุด</option>
                               
                    </select>
                        </td> 
                
                
            </tr>

            <tr>
                
                 <td>7.นํ้าหนัก:</td><td><input type="number" name="Op_Weight" size="3" value="<?php echo $row ['Op_Weight'];?>"></td>  
                
                
                <td></td><td>27.ความจำ:</td><td><input type="text" name="Op_Remembrance"  size="10" value="<?php echo $row ['Op_Remembrance'];?>">
                    <input type="radio" name="Op_Remembrance" value="ความจำปกติ ">ความจำปกติ 
                    <input type="radio" name="Op_Remembrance" value="หลงลืม">หลงลืม
                </td>
                
            </tr>

            <tr>
                
                <td>8.วันเกิด:</td><td><input type="date" name="Op_BD"  size="10" value="<?php echo $row ['Op_BD'];?>"></td>
                <td></td> <td>28.แบ่งกลุ่มตามศักยภาพ:</td><td><select name="Op_Potential">
                     <option value="ไม่ระบุ"<?php if($row['Op_Potential']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Potential">ไม่ได้ระบุ</option>
                     <option value="มีศักยภาพมากที่สุด A5"<?php if($row['Op_Potential']=='มีศักยภาพมากที่สุด A5'){ echo "selected='selected'";}?> name="Op_Potential" >มีศักยภาพมากที่สุด A5</option>
                     <option value="มีศักยภาพ A4"<?php if($row['Op_Potential']=='มีศักยภาพ A4'){ echo "selected='selected'";}?> name="Op_Potential" >มีศักยภาพ A4</option>
                     <option value="มีศักยภาพ A3"<?php if($row['Op_Potential']=='มีศักยภาพ A3'){ echo "selected='selected'";}?> name="Op_Potential" >มีศักยภาพ A3 </option>
                     <option value="มีศักยภาพ A2"<?php if($row['Op_Potential']=='มีศักยภาพ A2'){ echo "selected='selected'";}?> name="Op_Potential" >มีศักยภาพ A2 </option>
                     <option value="มีศักยภาพน้อยที่สุด A1"<?php if($row['Op_Potential']=='มีศักยภาพน้อยที่สุด A1'){ echo "selected='selected'";}?> name="Op_Potential">มีศักยภาพน้อยที่สุด A1</option>
                               
                    </select>
                        </td> 

            </tr>

             <tr>
             <td>9.สถานภาพ:</td><td><select name="Op_Status">
                     <option value="ไม่ได้ระบุ"<?php if($row['Op_Status']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Status">ไม่ได้ระบุ</option>
                     <option value="สมรถอยู่ด้วยกัน"<?php if($row['Op_Status']=='สมรถอยู่ด้วยกัน'){ echo "selected='selected'";} ?> name="Op_Status" >สมรถอยู่ด้วยกัน </option>
                     <option value="โสด"<?php if($row['Op_Status']=='โสด'){ echo "selected='selected'";} ?> name="Op_Status" >โสด</option>
                     <option value="สมรถแยกกันอยู่"<?php if($row['Op_Status']=='สมรถแยกกันอยู่'){ echo "selected='selected'";} ?> name="Op_Status" >สมรถแยกกันอยู่ </option>
                     <option value="หม้าย(คู่สมรถเสียชีวิต)"<?php if($row['Op_Status']=='หม้าย(คู่สมรถเสียชีวิต)'){ echo "selected='selected'";} ?> name="Op_Status" >หม้าย(คู่สมรถเสียชีวิต) </option>
                     <option value="อย่าร้าง"<?php if($row['Op_Status']=='อย่าร้าง'){ echo "selected='selected'";} ?> name="Op_Status" >อย่าร้าง  </option>
                     <option value="ไม่สาสมารถสืบค้นได้"<?php if($row['Op_Status']=='ไม่สาสมารถสืบค้นได้'){ echo "selected='selected'";} ?> name="Op_Status">ไม่สาสมารถสืบค้นได้ </option>
                                
                                
                    </select>
                    </td>
            <td></td><td>29.จำแนกสมรรถภาพ:</td><td><select name="Op_Capability">
                    <option value="ไม่ได้ระบุ"<?php if($row['Op_Capability']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Capability">ไม่ได้ระบุ</option>
                                <option value="ช่วยเหลือตัวเองได้ไม่ใช้วอคเกอร์"<?php if($row['Op_Capability']=='ช่วยเหลือตัวเองได้ไม่ใช้วอคเกอร์'){ echo "selected='selected'";} ?> name="Op_Capability" >ช่วยเหลือตัวเองได้ไม่ใช้วอคเกอร์ </option>
                                <option value="ช่วยเหลือตัวเองได้ใช้วอคเกอร์"<?php if($row['Op_Capability']=='ช่วยเหลือตัวเองได้ใช้วอคเกอร์'){ echo "selected='selected'";} ?> name="Op_Capability" >ช่วยเหลือตัวเองได้ใช้วอคเกอร์ </option>
                                <option value="ช่วยเหลือตัวเองได้โดยใช้รถเข็น"<?php if($row['Op_Capability']=='ช่วยเหลือตัวเองได้โดยใช้รถเข็น'){ echo "selected='selected'";} ?> name="Op_Capability" >ช่วยเหลือตัวเองได้โดยใช้รถเข็น </option>
                                <option value="ช่วยเหลือตัวเองได้โดยใช้ไม้เท้า"<?php if($row['Op_Capability']=='ช่วยเหลือตัวเองได้โดยใช้ไม้เท้า'){ echo "selected='selected'";} ?> name="Op_Capability" >ช่วยเหลือตัวเองได้โดยใช้ไม้เท้า </option>
                                <option value="ติดเตียงช่วยเหลือตัวเองได้ดีช่วงท่อนบน"<?php if($row['Op_Capability']=='ติดเตียงช่วยเหลือตัวเองได้ดีช่วงท่อนบน'){ echo "selected='selected'";} ?> name="Op_Capability" >ติดเตียงช่วยเหลือตัวเองได้ดีช่วงท่อนบน  </option>
                                <option value="ติดเตียงช่วยเหลือตัวเองได้บางช่วงท่อนบน"<?php if($row['Op_Capability']=='ติดเตียงช่วยเหลือตัวเองได้บางช่วงท่อนบน'){ echo "selected='selected'";} ?> name="Op_Capability" >ติดเตียงช่วยเหลือตัวเองได้บางช่วงท่อนบน </option>
                                <option value="ติดเตียงไม่สามรถช่วยเหลือตัวเองได้"<?php if($row['Op_Capability']=='ติดเตียงไม่สามรถช่วยเหลือตัวเองได้'){ echo "selected='selected'";} ?> name="Op_Capability" >ติดเตียงไม่สามรถช่วยเหลือตัวเองได้</option>
                                
                                
                    </select>
                    </td> 
        
            </tr>
  
            <tr>
             <td>10.อาขีพ:</td><td><select name="Op_Occupation">
                                <option value="ไม่ได้ระบุ"<?php if($row['Op_Occupation']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Occupation">ไม่ได้ระบุ</option>
                                <option value="ไม่ได้ประกอบอาชีพ"<?php if($row['Op_Occupation']=='ไม่ได้ประกอบอาชีพ'){ echo "selected='selected'";} ?> name="Op_Occupation" >ไม่ได้ประกอบอาชีพ </option>
                                <option value="ค้าขาย"<?php if($row['Op_Occupation']=='ค้าขาย'){ echo "selected='selected'";} ?> name="Op_Occupation" >ค้าขาย</option>
                                <option value="เกษตรกรรม"<?php if($row['Op_Occupation']=='เกษตรกรรม'){ echo "selected='selected'";} ?> name="Op_Occupation" >เกษตรกรรม</option>
                                <option value="รับจ้างทั่วไป"<?php if($row['Op_Occupation']=='รับจ้างทั่วไป'){ echo "selected='selected'";} ?> name="Op_Occupation" >รับจ้างทั่วไป </option>
                                <option value="ธุรกิจส่วนตัว"<?php if($row['Op_Occupation']=='ธุรกิจส่วนตัว'){ echo "selected='selected'";} ?> name="Op_Occupation" >ธุรกิจส่วนตัว </option>
                                <option value="พนักงาน"<?php if($row['Op_Occupation']=='พนักงาน'){ echo "selected='selected'";} ?> name="Op_Occupation" >พนักงาน</option>
                                <option value="ข้าราชการ"<?php if($row['Op_Occupation']=='ข้าราชการ'){ echo "selected='selected'";} ?> name="Op_Occupation" >ข้าราชการ</option>
                                <option value="พนักงานรัฐวิสาหกิจ"<?php if($row['Op_Occupation']=='พนักงานรัฐวิสาหกิจ'){ echo "selected='selected'";} ?> name="Op_Occupation" >พนักงานรัฐวิสาหกิจ</option>
                                <option value="ไม่สามารถสืบค้นได้"<?php if($row['Op_Occupation']=='ไม่สามารถสืบค้นได้'){ echo "selected='selected'";} ?> name="Op_Occupation" >ไม่สามารถสืบค้นได้</option>
                                
                                
                    </select>
                        </td>
             <td></td><td>30.Status:</td><td><select name="Op_Status1">
                                <option value="ยังมีชีวิต"<?php if($row['Op_Status1']=='ยังมีชีวิต'){ echo "selected='selected'";} ?> name="Op_Status1">ยังมีชีวิต</option>
                                <option value="เสียชีวิต"<?php if($row['Op_Status1']=='เสียชีวิต'){ echo "selected='selected'";} ?> name="Op_Status1" >เสียชีวิต </option>
                            </select></td>  
            </tr>

            <tr>
                
                <td>11.การศึกษา:</td><td><select name="Op_Fducation">
                              <option value="ไม่ระบุ"<?php if($row['Op_Fducation']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Fducation">ไม่ระบุ</option>
                              <option value="ไม่ได้รับการศึกษา"<?php if($row['Op_Fducation']=='ไม่ได้รับการศึกษา'){ echo "selected='selected'";} ?> name="Op_Fducation"  >ไม่ได้รับการศึกษา</option>
                              <option value="ประถมศึกษา"<?php if($row['Op_Fducation']=='ประถมศึกษา'){ echo "selected='selected'";} ?> name="Op_Fducation"  >ประถมศึกษา</option>
                              <option value="มัธยมศึกษาตอนต้น"<?php if($row['Op_Fducation']=='มัธยมศึกษาตอนต้น'){ echo "selected='selected'";} ?> name="Op_Fducation" >มัธยมศึกษาตอนต้น</option>
                              <option value="มัธยมศึกษาตอนปลาย(ปวช)"<?php if($row['Op_Fducation']=='มัธยมศึกษาตอนปลาย(ปวช)'){ echo "selected='selected'";} ?> name="Op_Fducation" >มัธยมศึกษาตอนปลาย(ปวช)</option>
                              <option value="อนุปริญญาหรือปวส"<?php if($row['Op_Fducation']=='อนุปริญญาหรือปวส'){ echo "selected='selected'";} ?> name="Op_Fducation"  >อนุปริญญาหรือปวส</option>
                              <option value="ปริญญาตรี"<?php if($row['Op_Fducation']=='ปริญญาตรี'){ echo "selected='selected'";} ?> name="Op_Fducation"  >ปริญญาตรี</option>
                              <option value="สูงกว่าปริญญาตรี"<?php if($row['Op_Fducation']=='สูงกว่าปริญญาตรี'){ echo "selected='selected'";} ?> name="Op_Fducation"  >สูงกว่าปริญญาตรี</option>
                             
                                             
                    </select>
                    </td> 
            </tr>

            <tr>
                 <td>12.หมายเลขบัตรประชาชน:</td><td><input type="number" name="Op_IDnum"  size="13" value="<?php echo $row ['Op_IDnum'];?>"></td>  
 
            </tr>
 
            <tr>
             
             <td>13.ภูมิลำเนา:</td><td><input type="text" name="Op_Hometown" size="30" value="<?php echo $row ['Op_Hometown'];?>"></td>     
  
            </tr>

            <tr>
               
              <td>14.สาเหตุการรับเข้าอาศัย:</td><td><select name="Op_Cause">
                    
                         <option value="ไม่ได้ระบุ"<?php if($row['Op_Cause']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Cause">ไม่ได้ระบุ</option>
                         <option value="เร่ร่อน"<?php if($row['Op_Cause']=='เร่ร่อน'){ echo "selected='selected'";} ?> name="Op_Cause" >เร่ร่อน</option>
                         <option value="ขาดผู้อุปการะ"<?php if($row['Op_Cause']=='ขาดผู้อุปการะ'){ echo "selected='selected'";} ?> name="Op_Cause" >ขาดผู้อุปการะ</option>
                         <option value="ไม่มีที่อยู่อาศัย"<?php if($row['Op_Cause']=='ไม่มีที่อยู่อาศัย'){ echo "selected='selected'";} ?> name="Op_Cause" >ไม่มีที่อยู่อาศัย</option>
                         <option value="ถูกทอดทิ้ง"<?php if($row['Op_Cause']=='ถูกทอดทิ้ง'){ echo "selected='selected'";} ?> name="Op_Cause" >ถูกทอดทิ้ง</option>
                         <option value="ญาติไม่สามารถดูแล"<?php if($row['Op_Cause']=='ญาติไม่สามารถดูแล'){ echo "selected='selected'";} ?> name="Op_Cause" >ญาติไม่สามารถดูแล</option>
        
                    </select>
                    </td>    
   
            </tr>
   
            <tr> 
                
                <td>15.วันที่เข้าพัก:</td><td><input type="datetime" name="Op_Checkin"  value="<?php echo $row ['Op_Checkin'];?>"></td>
    
            </tr>

            <tr>
                
                
                <td>16.แบ่งกลุ่มตามความพิการ:</td><td><select name="Op_Typedisability">
                               <option value="ไม่ได้ระบุ"<?php if($row['Op_Typedisability']=='ไม่ได้ระบุ'){ echo "selected='selected'";}?>name="Op_Typedisability">ไม่ได้ระบุ</option>
                               <option value="พิการแพทย์รับรอง"<?php if($row['Op_Typedisability']=='พิการแพทย์รับรอง'){ echo "selected='selected'";}?>name="Op_Typedisability">พิการแพทย์รับรอง</option>
                               <option value="พิการจากการประเมิน"<?php if($row['Op_Typedisability']=='พิการจากการประเมิน'){ echo "selected='selected'";}?>name="Op_Typedisability">พิการจากการประเมิน</option>
                            
                               
                    </select>
                    </td>
   
            </tr>

            <tr>
             <td>17.ประเภทตามความพิการ:</td><td><select name="Op_Disability">
                               <option value="ไม่ได้ระบุ"<?php if($row['Op_Disability']=='ไม่ได้ระบุ'){ echo "selected='selected'";} ?> name="Op_Disability">ไม่ได้ระบุ</option>
                               <option value="พิการทางการได้ยิน"<?php if($row['Op_Disability']=='พิการทางการได้ยิน'){ echo "selected='selected'";} ?> name="Op_Disability" >พิการทางการได้ยิน </option>
                               <option value="ช่วงล่างอ่อนแรง"<?php if($row['Op_Disability']=='ช่วงล่างอ่อนแรง'){ echo "selected='selected'";} ?> name="Op_Disability" >ช่วงล่างอ่อนแรง </option>
                               <option value="ซีกขวาอ่อนแรง"<?php if($row['Op_Disability']=='ซีกขวาอ่อนแรง'){ echo "selected='selected'";} ?> name="Op_Disability" >ซีกขวาอ่อนแรง </option>
                               <option value="ซีกซ้ายอ่อนแรง"<?php if($row['Op_Disability']=='ซีกซ้ายอ่อนแรง'){ echo "selected='selected'";} ?> name="Op_Disability" >ซีกซ้ายอ่อนแรง </option>
                               <option value="ตาบอด"<?php if($row['Op_Disability']=='ตาบอด'){ echo "selected='selected'";} ?> name="Op_Disability" >ตาบอด</option>
                               
                    </select>
                    </td>    

            </tr>

            <tr>
                
              <td>18.สมรรถภาพในเชิงปฎิบัติ:</td><td><select name="Op_ADL">
                    
                              <option value="ไม่ได้ระบุ"<?php if($row['Op_ADL']=='ไม่ได้ระบุ'){ echo "selected='selected'";}?> name="Op_ADL">ไม่ได้ระบุ</option>
                              <option value="ภาวะพึ่งพาโดยสมบูรณ์ 0-4"<?php if($row['Op_ADL']=='ภาวะพึ่งพาโดยสมบูรณ์ 0-4'){ echo "selected='selected'";}?> name="Op_ADL">ภาวะพึ่งพาโดยสมบูรณ์ 0-4 </option>
                              <option value="ภาวะพึ่งพารุนแรง 5-8"<?php if($row['Op_ADL']=='ภาวะพึ่งพารุนแรง 5-8'){ echo "selected='selected'";}?> name="Op_ADL">ภาวะพึ่งพารุนแรง 5-8</option>
                              <option value="ภาวะพึ่งพาปานกลาง 9-11"<?php if($row['Op_ADL']=='ภาวะพึ่งพาปานกลาง 9-11'){ echo "selected='selected'";}?> name="Op_ADL">ภาวะพึ่งพาปานกลาง 9-11 </option>
                              <option value="ไม่เป็นภาวะพึ่งพา 12+"<?php if($row['Op_ADL']=='ไม่เป็นภาวะพึ่งพา 12+'){ echo "selected='selected'";}?> name="Op_ADL">ไม่เป็นภาวะพึ่งพา 12+</option>
       
                    </select>
                    </td>
   
            </tr>

            <tr>
                
                <td>19.ค่าความดันโลหิต:</td><td><input type="text" name="Op_Bpressure"  size="7" value="<?php echo $row['Op_Bpressure'];?>"></td> 
    
            </tr>

            <tr>
                
             <td>20.ค่าคอเรสเตอรอล:</td><td><input type="number" name="Op_CHO"  size="3" value="<?php echo $row ['Op_CHO'];?>"></td>   
                
                
            </tr>
 
        </table>
                <div style=" text-align: center">
                <br></br>
                <br></br>
                
                
                <input type="hidden" name="Op_ID" value="<?php echo $row['Op_ID']; ?>">
                <input type="submit" name="submit" id="submit" value="แก้ไข"  onclick="return confirm('ยืนยันการแก้ไข')">
                <a href="TableforEmployeeOld.php"><input type="button" value="ย้อนกลับ"></a>
                
                
                </div>
  
            </fieldset>
            
        </form>

    </body>
</html>


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
    
    
    <script language ="javascript">
     function check(){
         if(frm.Pd_Name.value == ''){
             
             alert('ยังไม่ได้กรอกข้อมูล ชื่อสิ่งของบริจาค กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Pd_Name.focus();
             return false;
         }
         
         
         else if(frm.Pd_Type.value == 'ไม่ได้ระบุ'){
             alert('ยังไม่ได้กรอกข้อมูล ประเภทสินค้า กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Pd_Type.focus();
             return false;
         }
         
         else if(frm.Pd_Sumtotal.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล อายุ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Pd_Sumtotal.focus();
             return false;
         }
         
         
         
         
     }
     
     </script>
     
    
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        
        
        
        
        
        <form method="post" name="frm" action="Proinsert2.php" enctype="multipart/form-data" id="form1" onsubmit="return check();">
            
            
            <fieldset style="border:3px solid black" class="detail"><legend>เพิ่มข้อมูลสิ่งของบริจาค</legend>
                
                
                
                
            <table style="font-size: 16px;color: black" align="center" >
                
                
                
                <input type="hidden" name="Pd_ID" > 
           
            
            <tr>
                <td>1.ชื่อสิ่งของบริจาค:</td><td><input type="text" name="Pd_Name"  placeholder="กรุณาระบุข้อมูล *" size="30" ></td>
               
            </tr>
            
           
            
            <tr>
                
                        <td>2.ประเภทสินค้า:</td><td><select name="Pd_Type">
                    
                                <option value="ไม่ได้ระบุ">ไม่ได้ระบุ</option>
                                <option value="อาหารแห้ง"name="Pd_Type" >อาหารแห้ง</option>
                                <option value="ยาสีฟัน"name="Pd_Type"  >ยาสีฟัน</option>
                                <option value="แปรงสีฟัน"name="Pd_Type" >แปรงสีฟัน</option>
                                <option value="นม"name="Pd_Type" >นม</option>
                                <option value="สบู่"name="Pd_Type" >สบู่</option>
                                <option value="ยาสระผม"name="Pd_Type" >ยาสระผม</option>
                                <option value="หนังสือ"name="Pd_Type" >หนังสือ</option>
                                <option value="อุปกรณ์ทำความสะอาด"name="Pd_Type" >อุปกรณ์ทำความสะอาด</option>
                                <option value="อุปกรณ์ทางการแพทย์"name="Pd_Type" >อุปกรณ์ทางการแพทย์</option>
                                <option value="อาหารกระป๋อง"name="Pd_Type" >อาหารกระป๋อง</option>
                                <option value="อื่นๆ"name="Pd_Type" >อื่นๆ</option>
                                
                    </select>
                        </td>
                
            </tr>
             <tr>
                 <td>3.จำนวน:</td><td><input type="number" name="Pd_Sumtotal"  placeholder="กรุณาระบุข้อมูล *" size="4" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>
            </tr>
           

            <tr>
                <td></td>
                <td><br>
                    
                    <input type="submit" name="submit" value="เพิ่มข้อมูล" id="submit"  >
                     <input type="reset" name="reset" value="ยกเลิก" id="submit"  >
                     <a href="TableEmployee3PM.php"> <input type="button" value="ย้อนกลับ" > </a>
                </td>
                
                
                
            </tr>
           

              
        </table>
                
            </fieldset>
        </form>
    </body>
    
    
    
    
   
    
    
</html>

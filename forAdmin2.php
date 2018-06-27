<html>
    <head>
    <meta charset="UTF-8">
    <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title>
    </head>
    <style>
    legend
    {
    font-weight: bold;
    font-size: 30px;
    color: black;
    }
    .detail
    {
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
    input[type=text] 
    {
    border: 2px solid red;
    border-radius: 4px;
    padding: 10px 12px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 16px;
    }
    input[type=number] 
    {
    border: 2px solid red;
    border-radius: 4px;
    padding: 10px 12px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 16px;
    } 
    select 
    {
    padding: 10px 12px;
    border:2px solid red;
    border-radius: 4px;
    background-color: #f1f1f1;
    font-size: 16px;
    }
    input[type=button], input[type=submit], input[type=reset] 
    {
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
     <script language ="javascript"> /* Script ในส่วนนี้ใช้สำหรับเช็คค่าว่าง */
     function check(){
         if(frm.Op_Name.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ชื่อ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Name.focus();
             return false;
         }
         else if(frm.Op_Surname.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล นามสกุล กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Surname.focus();
             return false;
         }
         else if(frm.Op_Age.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล อายุ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Age.focus();
             return false;
         }
         else if(frm.Op_IDnum.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล หมายเลขบัตรประชาชน กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_IDnum.focus();
             return false;
         }
         else if(frm.Op_Home.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ภูมิลำเนา กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Home.focus();
             return false;
         }
           else if(frm.Op_Hight.value == ''){
             alert('ยังไม่ได้กรอกข้อมูล ส่วนสูง กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Hight.focus();
             return false;
         }
          else if(frm.Op_Weight.value.length =='') {
             alert('กรุณากรอกข้อมูล นํ้าหนัก กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Weight.focus();
             return false;
         }
           else if(frm.Op_Status.value == 'ตัวเลือก'){
             alert('ยังไม่ได้ระบุ สถานภาพ กรุณาตรวจสอบข้อมูลอีกครั้ง')
             frm.Op_Status.focus();
             return false;
         }
     }
     </script>
      <script type="text/javascript">/*ตรวจสอบกรอกเลขไม่ครบ*/
         function count(){
            var getE = document.getElementById("Op_IDnum");/*document.getElementById สำหรับการเข้าถึง Element Id ที่ต้องการใน Form HTML*/
            var Op_IDnum = getE.value.length;/*เช็คความยาวตัวอกัษร*/
                if(Op_IDnum<13){
                alert("กรอกข้อมูลไม่ครบ 13 หลัก กรุณากรอกใหม่");
                  }	
            }
    </script>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form method="post" name="frm"  action="Oldinsert.php"enctype="multipart/form-data" id="form1" onsubmit="return check();" >
            <fieldset style="border:3px solid black"class="detail"  ><legend>เพิ่มข้อมูลผู้สูงอายุ</legend>
            <table style="font-size: 16px;color: black" align="center">
             <tr>
                <td>1.ชื่อ:</td><td><input type="text" name="Op_Name" placeholder="กรุณาระบุข้อมูล *" size="30"></td>
                      <td></td> <td>11.การศึกษา:</td><td><select name="Op_Fducation">
                              <option value="ไม่ระบุ" name="Op_Fducation">ไม่ระบุ</option>
                              <option value="ไม่ได้รับการศึกษา" name="Op_Fducation"  >ไม่ได้รับการศึกษา</option>
                              <option value="ประถมศึกษา" name="Op_Fducation"  >ประถมศึกษา</option>
                              <option value="มัธยมศึกษาตอนต้น" name="Op_Fducation" >มัธยมศึกษาตอนต้น</option>
                              <option value="มัธยมศึกษาตอนปลาย(ปวช)" name="Op_Fducation">มัธยมศึกษาตอนปลาย(ปวช)</option>
                              <option value="อนุปริญญาหรือปวส" name="Op_Fducation"  >อนุปริญญาหรือปวส</option>
                              <option value="ปริญญาตรี" name="Op_Fducation"  >ปริญญาตรี</option>
                              <option value="สูงกว่าปริญญาตรี" name="Op_Fducation" >สูงกว่าปริญญาตรี</option>
                    </select>
                    </td> 
                <td>21.ค่าไขมันดี:</td><td><input type="number" name="Op_HDL"  size="3" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>  
            </tr>
            <tr>
                <td>2.นามสกุล:</td><td><input type="text" name="Op_Surname"   placeholder="กรุณาระบุข้อมูล *" size="30"></td>
                <td></td><td>12.หมายเลขบัตรประชาชน:</td><td><input type="text" name="Op_IDnum" id="Op_IDnum"  onchange="count()"  placeholder="กรุณาใส่เลขให้ครบ 13 หลัก *" size="20"maxlength="13" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>
                <td>22.ค่าไขร้าย LDL:</td><td><input type="number" name="Op_LDL"  size="3" onKeyUp="if(this.value*1!=this.value) this.value='';"></td> 
            </tr>     
            <tr>
                 <td>3.เพศ:</td><td><input type="radio" name="Op_Sex"  value="ชาย">ชาย
                 <input type="radio" name="Op_Sex"  value="หญิง">หญิง
                 </td>
                 <td></td><td>13.ภูมิลำเนา:</td><td><input type="text" name="Op_Hometown" placeholder="กรุณาระบุข้อมูล *" size="30"></td>
                 <td>23.โรคประจำตัว:</td><td><select name="Op_Diseases[]" multiple="multiple">
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
                         <option value="ไม่ระบุ" name="Op_Blood">ไม่ระบุ</option>
                         <option value="กรุ๊ปA" name="Op_Blood" >กรุ๊ปA</option>
                         <option value="กรุ๊ปB" name="Op_Blood" >กรุ๊ปB</option>
                         <option value="กรุ๊ปAB" name="Op_Blood" >กรุ๊ปAB</option>
                         <option value="กรุ๊ปO" name="Op_Blood" >กรุ๊ปO</option>
                    </select>
                    </td>  
                    <td></td></td> <td>14.สาเหตุการรับเข้าอาศัย:</td><td><select name="Op_Cause">
                         <option value="ไม่ได้ระบุ" name="Op_Cause">ไม่ได้ระบุ</option>
                         <option value="เร่ร่อน" name="Op_Cause" >เร่ร่อน</option>
                         <option value="ขาดผู้อุปการะ" name="Op_Cause" >ขาดผู้อุปการะ</option>
                         <option value="ไม่มีที่อยู่อาศัย" name="Op_Cause" >ไม่มีที่อยู่อาศัย</option>
                         <option value="ถูกทอดทิ้ง" name="Op_Cause" >ถูกทอดทิ้ง</option>
                         <option value="ญาติไม่สามารถดูแล" name="Op_Cause" >ญาติไม่สามารถดูแล</option>
                    </select>
                    </td> 
                    <td>24.ภาวะโรคซึมเศร้า:</td><td><input type="radio" name="Op_MDD" value="ปกติ">ปกติ
                    <input type="radio" name="Op_MDD"  value="มีแนวโน้ม">มีแนวโน้ม
                    </td>
            </tr>   
            <tr>
                    <td>5.ส่วนสูง:</td><td><input type="number" name="Op_Hight"  placeholder="กรุณาระบุข้อมูล *" size="3" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>
                    <td></td><td>15.วันที่เข้าพัก:</td><td><input type="datetime-local" name="Op_Checkin" ></td>
                    <td>25.อาการทางจิต:</td><td><input type="radio" name="Op_Psychopathy"  value="ป่วยจิตเวชแพทย์รับรอง">ป่วยจิตเวชแพทย์รับรอง 
                            <input type="radio" name="Op_Psychopathy"  value="ป่วยจิตเวชการประเมิน">ป่วยจิตเวชการประเมิน
                </td>
            </tr>
            <tr>
                    <td>6.นํ้าหนัก:</td><td><input type="number" name="Op_Weight" placeholder="กรุณาระบุข้อมูล *" size="3" onKeyUp="if(this.value*1!=this.value) this.value='';"></td> 
                    <td></td><td>16.แบ่งกลุ่มตามความพิการ:</td><td><select name="Op_Typedisability">
                               <option value="ไม่ได้ระบุ" name="Op_Typedisability">ไม่ได้ระบุ</option>
                               <option value="พิการแพทย์รับรอง " name="Op_Typedisability" >พิการแพทย์รับรอง </option>
                               <option value="พิการจากการประเมิน" name="Op_Typedisability" >พิการจากการประเมิน</option>
                    </select>
                    </td>
                    <td>26.แบ่งกลุ่มตามระดับความเครียด:</td><td><select name="Op_Strain">
                               <option value="ไม่ได้ระบุ" name="Op_Strain">ไม่ได้ระบุ</option>
                               <option value="ปกติ" name="Op_Strain" >ปกติ</option>
                               <option value="เครียดน้อย" name="Op_Strain" >เครียดน้อย</option>
                               <option value="เครียดปานกลาง" name="Op_Strain" >เครียดปานกลาง</option>
                               <option value="เครียดมาก" name="Op_Strain">เครียดมาก</option>
                               <option value="เครียดมากที่สุด" name="Op_Strain" >เครียดมากที่สุด</option>
                    </select>
                    </td> 
            </tr>
            <tr>
                    <td>7.วันเกิด:</td><td><input type="date" name="Op_BD"  size="10"></td>
                    <td></td> <td>17.ประเภทตามความพิการ:</td><td><select name="Op_Disability">
                               <option value="ไม่ได้ระบุ" name="Op_Disability">ไม่ได้ระบุ</option>
                               <option value="พิการทางการได้ยิน" name="Op_Disability" >พิการทางการได้ยิน </option>
                               <option value="ช่วงล่างอ่อนแรง" name="Op_Disability" >ช่วงล่างอ่อนแรง </option>
                               <option value="ซีกขวาอ่อนแรง" name="Op_Disability" >ซีกขวาอ่อนแรง </option>
                               <option value="ซีกซ้ายอ่อนแรง" name="Op_Disability" >ซีกซ้ายอ่อนแรง </option>
                               <option value="ตาบอด" name="Op_Disability" >ตาบอด</option>
                    </select>
                    </td> 
                    <td>27.ความจำ:</td><td><input type="radio" name="Op_Remembrance" value="ความจำปกติ ">ความจำปกติ 
                    <input type="radio" name="Op_Remembrance" value="หลงลืม">หลงลืม
                    </td>
            </tr>
            <tr>
                    <td>8.อายุ:</td><td><input type="number" name="Op_Age"  placeholder="กรุณาระบุข้อมูล *" size="2" onKeyUp="if(this.value*1!=this.value) this.value='';"></td> 
                    <td></td><td>18.สมรรถภาพในเชิงปฎิบัติ:</td><td><select name="Op_ADL">
                              <option value="ไม่ได้ระบุ" name="Op_ADL">ไม่ได้ระบุ</option>
                              <option value="ภาวะพึ่งพาโดยสมบูรณ์ 0-4 " name="Op_ADL"  >ภาวะพึ่งพาโดยสมบูรณ์ 0-4 </option>
                              <option value="ภาวะพึ่งพารุนแรง 5-8" name="Op_ADL">ภาวะพึ่งพารุนแรง 5-8</option>
                              <option value="ภาวะพึ่งพาปานกลาง 9-11 " name="Op_ADL" >ภาวะพึ่งพาปานกลาง 9-11 </option>
                              <option value="ไม่เป็นภาวะพึ่งพา 12+" name="Op_ADL" >ไม่เป็นภาวะพึ่งพา 12+</option>
                    </select>
                    </td>
                    <td>28.แบ่งกลุ่มตามศักยภาพ:</td><td><select name="Op_Potential">
                              <option value="ไม่ระบุ" name="Op_Potential">ไม่ระบุ</option>
                              <option value="มีศักยภาพมากที่สุด A5" name="Op_Potential" >มีศักยภาพมากที่สุด A5</option>
                              <option value="มีศักยภาพ A4" name="Op_Potential" >มีศักยภาพ A4</option>
                              <option value="มีศักยภาพ A3" name="Op_Potential" >มีศักยภาพ A3 </option>
                              <option value="มีศักยภาพ A2" name="Op_Potential" >มีศักยภาพ A2 </option>
                              <option value="มีศักยภาพน้อยที่สุดA1" name="Op_Potential" >มีศักยภาพน้อยที่สุดA1</option>
                    </select>
                    </td> 
            </tr>
             <tr>
                    <td>9.สถานภาพ:</td><td><select name="Op_Status">
                              <option value="ตัวเลือก" name="Op_Status">ตัวเลือก </option>
                              <option value="สมรถอยู่ด้วยกัน" name="Op_Status" >สมรถอยู่ด้วยกัน </option>
                              <option value="โสด" name="Op_Status" >โสด</option>
                              <option value="สมรถแยกกันอยู่" name="Op_Status" >สมรถแยกกันอยู่ </option>
                              <option value="หม้าย(คู่สมรถเสียชีวิต)" name="Op_Status" >หม้าย(คู่สมรถเสียชีวิต) </option>
                              <option value="อย่าร้าง" name="Op_Status" >อย่าร้าง  </option>
                              <option value="ไม่สาสมารถสืบค้นได้" name="Op_Status" >ไม่สาสมารถสืบค้นได้ </option>
                    </select>
                    </td>
                    <td></td> <td>19.ค่าความดันโลหิต:</td><td><input type="text" name="Op_Bpressure"  size="10" >  </td>
                    <td>29.จำแนกสมรรถภาพ:</td><td><select name="Op_Capability">
                              <option value="ไม่ได้ระบุ" name="Op_Capability">ไม่ได้ระบุ</option>
                              <option value="ช่วยเหลือตัวเองได้ไม่ใช้วอคเกอร์" name="Op_Capability"  >ช่วยเหลือตัวเองได้ไม่ใช้วอคเกอร์</option>
                              <option value="ช่วยเหลือตัวเองได้ใช้วอคเกอร์" name="Op_Capability" >ช่วยเหลือตัวเองได้ใช้วอคเกอร์</option>
                              <option value="ช่วยเหลือตัวเองได้โดยใช้รถเข็น" name="Op_Capability" >ช่วยเหลือตัวเองได้โดยใช้รถเข็น</option>
                              <option value="ช่วยเหลือตัวเองได้โดยใช้ไม้เท้า" name="Op_Capability" >ช่วยเหลือตัวเองได้โดยใช้ไม้เท้า</option>
                              <option value="ติดเตียงช่วยเหลือตัวเองได้ดีช่วงท่อนบน" name="Op_Capability" >ติดเตียงช่วยเหลือตัวเองได้ดีช่วงท่อนบน</option>
                              <option value="ติดเตียงช่วยเหลือตัวเองได้บางช่วงท่อนบน " name="Op_Capability" >ติดเตียงช่วยเหลือตัวเองได้บางช่วงท่อนบน</option>
                              <option value="ติดเตียงไม่สามรถช่วยเหลือตัวเองได้" name="Op_Capability" >ติดเตียงไม่สามรถช่วยเหลือตัวเองได้</option>
                    </select>
                        </td> 
            </tr>
            <tr>
             <td>10.อาขีพ:</td><td><select name="Op_Occupation">
                                <option value="ตัวเลือก" name="Op_Occupation">ตัวเลือก </option>
                                <option value="ไม่ได้ประกอบอาชีพ" name="Op_Occupation">ไม่ได้ประกอบอาชีพ </option>
                                <option value="ค้าขาย" name="Op_Occupation" >ค้าขาย</option>
                                <option value="เกษตรกรรม" name="Op_Occupation" >เกษตรกรรม</option>
                                <option value="รับจ้างทั่วไป" name="Op_Occupation" >รับจ้างทั่วไป </option>
                                <option value="ธุรกิจส่วนตัว" name="Op_Occupation" >ธุรกิจส่วนตัว </option>
                                <option value="พนักงาน" name="Op_Occupation">พนักงาน</option>
                                <option value="ข้าราชการ" name="Op_Occupation" >ข้าราชการ</option>
                                <option value="พนักงานรัฐวิสาหกิจ" name="Op_Occupation">พนักงานรัฐวิสาหกิจ</option>
                                <option value="ไม่สามารถสืบค้นได้" name="Op_Occupation">ไม่สามารถสืบค้นได้</option>
                    </select>
                        </td>
                        <td></td> <td>20.ค่าคอเรสเตอรอล:</td><td><input type="number" name="Op_CHO" size="3" onKeyUp="if(this.value*1!=this.value) this.value='';"></td>
            </tr>
             <input type="hidden" name="Op_ID" >
        </table>
                <div style=" text-align: center">
                <br></br>
                <br></br>
                <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล">
                <input type="reset" name="reset" id="reset" value="ยกเลิก">
                <a href="TableforAdminOld.php"><input type="button"value="ตรวจสอบข้อมูลผู้สูงอายุ"></a>
                <a href="forAdmin.php"><input type="button" value="กลับหน้าหลัก"></a>
                </div>
            </fieldset>
        </form>
    </body>
</html>

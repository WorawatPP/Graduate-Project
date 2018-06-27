 <?php
session_start();
	?>


<?php include("f_thaidate.php");?>
<?php include("datepick/datepick.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
            <form method="post" name="frm" action="activitesinsert.php" class="detail1" id="from1" onsubmit="return check();">
            <fieldset style="border:3px solid black"><legend>จองคิวบริจาคหรือทำกิจกรรม</legend>
            
            
            <?php      
        require 'connect1.php';
	  	$today = date("Y-m-d");
	  ?>

                <div id="input-box" class="login-popup">
                   
                    
                        <table style="font-size: 20px;width: 60%;border:3px solid black" align="center" border="2">
                            <tr>
                                <td width="15%" class="detail">วันที่จอง</td>
                                <td width="25%">
                                    <input type="text" id="datepicker-th-1" name="date1" value="" required="" > </td>
                                <td width="11%" class="detail">เวลา</td>
                                <td width="50%">
                                    <select name="hour1" id="hour1" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')"
                                                accesskey=""oninput="this.setCustomValidity('')">
                                        <option value=""> --- </option>
                                        <option value="06"> 06 </option>
                                        <option value="07"> 07 </option>
                                        <option value="08"> 08 </option>
                                        <option value="09"> 09 </option>
                                        <?php for($hour1=10;$hour1<18;$hour1++)
                                        {
                                        ?>
                                            <option value="<?=$hour1;?>">
                                                <?=$hour1;?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                                :
                                    </select> :
                                    <select name="min1" id="min1" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')"
                                                accesskey=""oninput="this.setCustomValidity('')">
                                        <option value=""> --- </option>
                                        <option value="00"> 00 </option>
                                        <?php for($min1=30;$min1<60;$min1+=30)
				{
				?>
                                            <option value="<?=$min1;?>">
                                                <?=$min1;?>
                                            </option>
                                            <?php
				}
                ?>
                                    </select> 
                                </td>

                            </tr>

                            <tr>
                                <td width="15%" class="detail"></td>
                                <td width="25%">
                                    <!--<input type="text" id="datepicker-th-2"  name="date2" value="">--> </td>
                                <td width="10%" class="detail">เวลา</td>
                                <td width="50%">
                                    <select name="hour2" id="hour2" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')"
                                                accesskey=""oninput="this.setCustomValidity('')" onchange="check(document.getElementById('hour1'),this);">
                                        <option value=""> --- </option>
                                        <option value="06"> 06 </option>
                                        <option value="07"> 07 </option>
                                        <option value="08"> 08 </option>
                                        <option value="09"> 09 </option>
                                        <?php for($hour2=10;$hour2<18;$hour2++)
				{
				?>
                                            <option value="<?=$hour2;?>">
                                                <?=$hour2;?>
                                            </option>
                                            <?php
				}
                ?>
                                    </select> :
                                    <select name="min2" id="min2" required="" oninvalid="this.setCustomValidity('กรุณาเลือกเวลา')"
                                                accesskey=""oninput="this.setCustomValidity('')">
                                        <option value=""> --- </option>
                                        <option value="00"> 00 </option>
                                        <?php for($min2=30;$min2<60;$min2+=30)
				{
				?>
                                            <option value="<?=$min2;?>">
                                                <?=$min2;?>
                                            </option>
                                            <?php
				}
                ?>
                                    </select> 
                                </td>
                            </tr>


                            
                                    <?php 
					$strSQL2 = "select * from queue";
					$objQuery2 = mysqli_query($link,$strSQL2) or die (mysqli_error());
				?>


                            
                            <tr>
                                <td width="15%">
                                    <input type="button" class="button" value="ตรวจสอบ" onClick="JavaScript:doCallAjax();" > </td>
                                <td width="25%">
                                    <strong>
                                        <span id="mySpan" style="color:black" class="detail">คลิ๊กเพื่อตรวจสอบวันว่าง</span>
                                    </strong>
                                </td>
                                
                            </tr>
                            
                                <tr>
                                    <td width="10%" class="detail">ประเภท</td>
                                    <td>
                                    <label>
                                        <input type="radio" name="Queue_Type" value="ทำกิจกรรม"  class="detail" required="">ทำกิจกรรม</label>
                                    <label>
                                    <label>
                                        <input type="radio" name="Queue_Type" value="บริจาคสิ่งของ"  class="detail" required="">บริจาคสิ่งของ</label>
                                    <label>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%"class="detail">ชื่อผู้จอง</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Name" placeholder="กรุณาระบุข้อมูล *" required="" oninvalid="this.setCustomValidity('กรุณากรอกชื่อ')"
    oninput="this.setCustomValidity('')">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%" class="detail">Email</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Email" placeholder="กรุณาระบุข้อมูล *" required="" oninvalid="this.setCustomValidity('กรุณากรอก Email')"
    oninput="this.setCustomValidity('')">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%" class="detail" >เบอร์โทรศัพท์</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Tel" placeholder="กรุณาระบุข้อมูล 10 หลัก *" size="20" maxlength="10" onKeyUp="if(this.value*1!=this.value) this.value='';" required="" oninvalid="this.setCustomValidity('กรุณากรอกเบอร์โทรศัพท์')"
    oninput="this.setCustomValidity('')">
                                    </td>
                                <tr>
                                    <td width="10%"class="detail">รายละเอียดกิจกรรม</td>
                                    <td width="50%">
                                        <input type="text" name="Queue_Detail" placeholder="กรุณาระบุข้อมูล *" required="" >
                                    </td>
                                </tr>    
                                </tr>
                                <tr></tr><tr></tr><tr></tr>
                                 
                        
                                
                                <tr><td><input type="submit"  value="ตกลง"></td>
                                    <td><a href="Homepage.php"><input type="button"  value="กลับหน้าหลัก"></a></td>
                                    </tr>
                        </table>
                         </div>
        </fieldset>
                <br><br>
                 <div>
                <?php
                        include 'calendar.php';
                ?>
            </div>
        </form>
            
           
            
                </body>
</html>

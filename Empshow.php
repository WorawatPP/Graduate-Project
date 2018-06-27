<?php
    require 'connect1.php'; /* เรียกไฟล์ connect1.php เพื่อติดต่อกับฐานข้อมูล */
    $Emp_ID = $_GET['Emp_ID']; /* รับค่า Emp_ID มาจากหน้า EmpforAdminTable */
    $qemp = "SELECT * FROM employee WHERE Emp_ID='$Emp_ID'";
    $resemp = mysqli_query($link, $qemp);
    $rowemp = mysqli_fetch_assoc($resemp);
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>
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
    margin: 25px;
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
    input[type=text] 
    {
    border: 2px solid red;
    border-radius: 4px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    font-size: 16px;
    }
    input[type=number] 
    {
    border: 2px solid red;
    border-radius: 4px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
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
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
        <form action="Empshow.php" enctype="multipart/form-data" id="form1" >
            <fieldset style="border:3px solid black" class="detail"><legend>แสดงข้อมูลพนักงาน</legend>
            <table style="font-size: 16px;color: black" align="center">
                <tr>   
                <td><img src ="img/<?php echo $rowemp['Emp_Photo']; ?>" width ="160px" height="160px" border="3">
                        </td> 
                </tr>
            <tr>
                <td>1.ID พนักงาน:</td><td><input type="text" name="Emp_ID" readonly  size="4" value="<?php echo $rowemp['Emp_ID']; ?>"></td>
                  <td>11.ตำแหน่ง:</td><td><input type="text" name="Emp_Status" readonly  size="10"  value="<?php echo $rowemp['Emp_Status'];?>"></td>
            </tr>
            <tr>
                <td>2.ชื่อ:</td><td><input type="text" name="Emp_Name" readonly  size="30" value="<?php echo $rowemp['Emp_Name']; ?>"></td>
                   <td>12.ชื่อผู้ใช้:</td><td><input type="text" name="Emp_User" readonly  size="10" value="<?php echo $rowemp['Emp_User'];?>"></td>     
            </tr>
            <tr>
                <td>3.นามสกุล:</td><td><input type="text" name="Emp_Surname" readonly  size="30" value="<?php echo $rowemp['Emp_Surname'];?>"></td>
                <td>13.รหัสผ่าน:</td><td><input type="text" name="Emp_Password" readonly  size="10" value="<?php echo $rowemp['Emp_Password'];?>"></td>
            </tr>
            <tr>
                <td>4.เพศ:</td><td><input type="text" name="Emp_Sex" size="10" readonly value="<?php echo $rowemp['Emp_Sex'];?>">
            </tr>
            <tr>
                <td>5.อายุ:</td><td><input type="text" name="Emp_Age" readonly  size="3" value="<?php echo $rowemp['Emp_Age'];?>"></td>
            </tr>
              <tr>
                  <td>6.หมายเลขบัตรประชาชน:</td><td><input type="number" name="Emp_IDnum" readonly  size="13" value="<?php echo $rowemp['Emp_IDnum'];?>"></td>
            </tr>
              <tr>
                  <td>7.วันเกิด:</td><td><input type="text" name="Emp_BD" readonly  size="15" value="<?php echo $rowemp['Emp_BD'];?>"></td>
            </tr>
           <td>8.เบอร์มือถือ:</td><td><input type="number" name="Emp_Mobile" readonly  size="10" value="<?php echo $rowemp['Emp_Mobile'];?>"></td>
            <tr>
                <td>9.ที่อยู่ตามทะเบียนบ้าน:</td><td><input type="text" name="Emp_Address" readonly  size="60" value="<?php echo $rowemp['Emp_Address'];?>"></td>
            </tr>
             <tr>
                 <td>10.ที่อยู่ที่ติดต่อได้:</td><td><input type="text" name="Emp_CTAdress" readonly  size="60" value="<?php echo $rowemp['Emp_CTAdress'];?>"></td>
            </tr>
        </table>
                <div style="text-align: center">
                <br></br>
                <br></br>
                <input type="hidden" name="Emp_ID" value="<?php echo $rowemp['Emp_ID']; ?>">
                <a href="EmpforAdminTable.php"><input type="button" value="กลับหน้าหลัก"></a>
                </div>
            </fieldset>
        </form>
    </body>
</html>

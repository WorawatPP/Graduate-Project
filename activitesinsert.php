

<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="stylesheet/img/devil-icon.png">
    <!--Pemanggilan gambar favicon-->
    <link rel="stylesheet" type="text/css" href="mos-css/mos-style.css">
    <!--pemanggilan file css-->
</head>

<body>
    <div id="header">
        <div class="inHeaderLogin"></div>
    </div>
    <div id="errorForm">
        <br>
        <br>
        <div class="informasi">

            <?php
	include("connect1.php");
	
	if(trim($_POST["Queue_Name"]) == "")
	{
		echo "กรุณาระบุชื่อผู้จอง";
		exit();	
    }
    
    if(trim($_POST["Queue_Email"]) == "")
	{
		echo "กรุณาระบุอีเมล";
		exit();	
    }
    
    if(trim($_POST["Queue_Tel"]) == "")
	{
		echo "กรุณาระบุเบอร์โทรศัพท์";
		exit();	
	}
	
	/*if(trim($_POST["txtQty"]) == "")
	{
		echo "กรุณารุะบุจำนวนผู้เข้าร่วมประชุม!";
		exit();	
	}*/	
	
	$time1 = $_POST["hour1"].':'.$_POST["min1"].':00';
	$time2 = $_POST["hour2"].':'.$_POST["min2"].':00';
			
	$strSQL = "SELECT * FROM `queue` WHERE `Queue_Date` = '".$_POST["date1"]."' AND `strtime` BETWEEN '".$time1."' AND '".$time2."' AND `Queue_Status` = 'ยืนยัน' ";
	$objQuery = mysqli_query($link,$strSQL) or die (mysqli_error());
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			
                        echo '<script language="javascript">';
                        echo 'alert("วันและเวลาที่ท่านเลือกไม่สามารถจองคิวได้")';
                        echo '</script>';
                        header("Refresh: 1;URL=activites1.php");
                        
                        
	}
	else
	{	
		
		$strSQL1 = "INSERT INTO queue ";
		$strSQL1 .=" (Queue_ID, Queue_Date, Queue_Enddate, strtime, endtime, Queue_Name, Queue_Tel, Queue_Email, Queue_Type, Queue_Detail,  Queue_Status) ";
		$strSQL1 .=" VALUES (NULL,'".$_POST["date1"]."','".$_POST["date1"]."','".$time1."','".$time2."','".$_POST["Queue_Name"]."','".$_POST["Queue_Tel"]."' ";
		$strSQL1 .=" ,'".$_POST["Queue_Email"]."','".$_POST["Queue_Type"]."','".$_POST["Queue_Detail"]."','ไม่ได้ยืน')";
		$objQuery1 = mysqli_query($link,$strSQL1) or die (mysqli_error($link));
		
                        echo '<script language="javascript">';
                        echo 'alert("ท่านได้ทำการจองคิวเรียบร้อยแล้ว")';
                        echo '</script>';
                        header("Refresh: 1;URL=activites1.php");
	}

	mysqli_close($link);
?>

        </div>
    </div>
</body>

</html>
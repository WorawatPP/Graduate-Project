<?php
	include("connect1.php");

	$time1 = $_POST["myHour1"].":".$_POST["myMin1"].":00";
	$time2 = $_POST["myHour2"].":".$_POST["myMin2"].":00";

	$strSQL = "SELECT * FROM queue WHERE ((Queue_Date between '".$_POST["myDate1"]."' and '".$_POST["myDate2"]."') or ";
	$strSQL .= " (Queue_Enddate between '".$_POST["myDate1"]."' and '".$_POST["myDate2"]."')) and ";
	$strSQL .= " ((strtime between '".$time1."' and '".$time2."') or ";
	$strSQL .= " (endtime between '".$time1."' and '".$time2."')) and Queue_Status in('ยืนยัน','ไม่ได้ยืนยัน') ";
	$objQuery = mysqli_query($link,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo "ไม่ว่าง มีคนจองแล้ว!";
	}
	else
	{
		echo "ว่าง สามารถจองได้!";
	}

?>




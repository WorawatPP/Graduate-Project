<html>
<head>
<title>Uthong Management</title>
<meta HTTP-EQUIV="Refresh" CONTENT="1;URL=forAdmin7.php" charset="utf-8">
<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> 
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> 
</head>

<body>
<div id="errorForm"><br><br>
		<div class="informasi">

<?php
	include("connect1.php");
		
	
		if($_GET["Queue_Opstatus"]=='N')
		{
			$strSQL1 = "UPDATE queueoldpeople SET Queue_Opstatus = 'Y' where Queue_Op = '".$_GET["Queue_Op"]."' ";
			echo "ยืนยันการพบแพทย์";
		}
		
		else if($_GET["Queue_Opstatus"]=='Y')
		{
			$strSQL1 = "UPDATE queueoldpeople SET Queue_Opstatus = 'N' where Queue_Op = '".$_GET["Queue_Op"]."' ";
			echo "ยกเลิกยืนยันการพบแพทย์";
		}
		
		$objQuery1 = mysqli_query($link,$strSQL1) or die (mysqli_error($link));
		

	
?>

		</div>
</div>
</body>
</html>
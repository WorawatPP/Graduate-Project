<?php
	/*** By Weerachai Nukitram ***/
	/***  http://www.ThaiCreate.Com ***/

	$strIDnum = trim($_POST["tIDnum"]);

	if(trim($strIDnum) == "")
	{
		echo "<img src='img/false.png'>";
		exit();
	}

	

	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("admin");

	//*** Check Username (already exists) ***//

	$strSQL = "SELECT * FROM employee WHERE Emp_IDnum = '".$strIDnum."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		echo "<img src='img/false.png'>";
	}
	else
	{
		echo "<img src='img/true.png'>";
	}

	mysql_close($objConnect);
?>
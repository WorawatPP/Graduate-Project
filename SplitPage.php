<?PHP
     
    error_reporting( error_reporting() & ~E_NOTICE );
    $name = $_REQUEST['name'];
    echo $name;
     
?>

<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
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
</head>
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
if($_GET["txtKeyword"] != "")
	{
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
        mysql_set_charset('utf8');
	$objDB = mysql_select_db("admin");
	// Search By Name or Email
	$strSQL = "SELECT * FROM medicine WHERE (Medicine_Type LIKE '%".$_GET["txtKeyword"]."%')";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$Num_Rows = mysql_num_rows($objQuery);


	$Per_Page = 1;   // Per Page

	$Page = $_GET["Page"];
	if(!$_GET["Page"])
	{
		$Page=1;
	}

	$Prev_Page = $Page-1;
	$Next_Page = $Page+1;

	$Page_Start = (($Per_Page*$Page)-$Per_Page);
	if($Num_Rows<=$Per_Page)
	{
		$Num_Pages =1;
	}
	else if(($Num_Rows % $Per_Page)==0)
	{
		$Num_Pages =($Num_Rows/$Per_Page) ;
	}
	else
	{
		$Num_Pages =($Num_Rows/$Per_Page)+1;
		$Num_Pages = (int)$Num_Pages;
	}


	$strSQL .=" order  by Medicine_ID ASC LIMIT $Page_Start , $Per_Page";
	$objQuery  = mysql_query($strSQL ) or die(mysql_error());

	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">ID </div></th>
		<th width="98"> <div align="center">Name </div></th>
                <th width="98"> <div align="center">Type </div></th>
	  </tr>
	<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><?php echo $objResult["Medicine_ID"];?></div></td>
		<td><?php echo $objResult["Medicine_Name"];?></td>
                <td><?php echo $objResult["Medicine_Type"];?></td>
	  </tr>
	<?php
	}
	?>
	</table>
	<br>
	Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
	<?php
	if($Prev_Page)
	{
		echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$_GET[txtKeyword]'><< Back</a> ";
	}

	for($i=1; $i<=$Num_Pages; $i++){
		if($i != $Page)
		{
			echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$_GET[txtKeyword]'>$i</a> ]";
		}
		else
		{
			echo "<b> $i </b>";
		}
	}
	if($Page!=$Num_Pages)
	{
		echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$_GET[txtKeyword]'>Next>></a> ";
	}
	
	mysql_close($objConnect);

	}	
	?>
</body>
</html>
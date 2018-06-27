<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ศูนย์พัฒนาการจัดการสังคมผู้สูงอายุ</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <link href="dist/css/sb-admin-2.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
 <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js" type="text/javascript"></script>
    
</head>
<body>

<?php
	if(isset($_GET['id'])) {
    $_GET['id'];
} else {
    $_GET['id'] = '';
}
	include("db_connect.php"); // เรียกใช้งานไฟล์เชื่อมต่อกับฐานข้อมูล
	$mysqli = connect(); // เชื่อมต่อกับฐานข้อมูล    
	
	include 'config/thai_date.php';
	$sql="SELECT * FROM queue WHERE Queue_ID ='".$_GET['id']."'  ";  
    $result = $mysqli->query($sql);
	$rs=$result->fetch_object();
		 ?>
			
    
          <div id="wrapper">
        
       
                        
				<div class="row">
							
				<div class="col-lg-8">
                             <div class="panel panel-default">
                        <div class="panel-heading">
                            รายละเอียดการจองคิว
                        </div>
                          <div class="panel-body">
                          <button class="btn btn-info btn-sm" > ชื่อผู้จอง </button>
							<div class="alert alert-success">
                                <?php echo $rs->Queue_Name; ?> 
                            </div>
                            <button class="btn btn-info btn-sm" > ประเภทกิจกรรม </button>
                             <div class="alert alert-info">
                                <?php echo $rs->Queue_Type; ?>
                            </div>
                            <button class="btn btn-info btn-sm" > วันที่ </button>
                             <div class="alert alert-info">
                                <?php echo thai8($rs->Queue_Date); ?>
                            </div>
                            
                            <button class="btn btn-info btn-sm" > เวลา </button>
                             <div class="alert alert-info">
                                เริ่ม <?php echo $rs->strtime; ?> - <?php echo $rs->endtime; ?>
                            </div>
                            
                            <button class="btn btn-info btn-sm" > สถานะ </button>
                            <div class="alert alert-warning">
                                <?php echo $rs->Queue_Status; ?>
                            </div>
                            
                            <button class="btn btn-info btn-sm" > รายละเอียด </button>
                            <div class="alert alert-warning">
                                <?php echo $rs->Queue_Detail; ?>
                            </div>
						</div><!-- .panel-body -->
						
						</div> <!-- panel panel-default -->
					</div> <!-- col-lg-6 -->


</div><!-- row -->
</div>


</body></html>
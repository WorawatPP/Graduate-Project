<?php
header("Content-type:application/json; charset=UTF-8");          
header("Cache-Control: no-store, no-cache, must-revalidate");         
header("Cache-Control: post-check=0, pre-check=0", false);    
require("connect1.php");
if(isset($_GET['gData']) && $_GET['gData']|=""){
    $q="SELECT * FROM queue WHERE date(Queue_Date)>='".$_GET['start']."'  ";  
    $q.=" AND date(Queue_Enddate)<='".$_GET['end']."' ORDER by Queue_ID";  
    $result = $mysqli->query($q);
    while($rs=$result->fetch_object()){
        
        if($rs->Queue_Status == "ยืนยัน"){
            $color = "#449D44";
	}

	if($rs->Queue_Status == "ไม่ได้ยืนยัน"){
            $color = "#D9534F";
	}
        
        $json_data[]=array(  
            "id"=>$rs->Queue_ID,
            "title"=>$rs->Queue_Name."\n".$rs->Queue_Status,
            "start"=>$rs->Queue_Date,
            "end"=>$rs->Queue_Enddate,
            "url"=>"show2.php?id=".$rs->Queue_ID,
            "color"=>$color,
            //"allDay"=>($rs->event_allDay==true)?true:false      
            // กำหนด event object property อื่นๆ ที่ต้องการ
        );    
    }  
}
$json_data=(isset($json_data))?$json_data:NULL;
$json= json_encode($json_data);  
if(isset($_GET['callback']) && $_GET['callback']!=""){  
echo $_GET['callback']."(".$json.");";      
}else{  
echo $json;  
}
?>
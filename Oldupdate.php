<?php
      require 'connect1.php';
      
      
      
      
      $Op_ID = $_POST['Op_ID'];
      $Op_Name = $_POST['Op_Name'];
      $Op_IDnum = $_POST['Op_IDnum'];
      $Op_Surname = $_POST['Op_Surname'];
      $Op_Sex = $_POST['Op_Sex'];
      $Op_Blood = $_POST['Op_Blood'];
      $Op_Age = $_POST['Op_Age'];
      $Op_BD = $_POST['Op_BD'];
      $Op_Status = $_POST['Op_Status'];
      $Op_Occupation = $_POST['Op_Occupation'];
      $Op_Fducation = $_POST['Op_Fducation'];
      $Op_ADL = $_POST['Op_ADL'];
      $Op_Capability = $_POST['Op_Capability'];
      $Op_Potential = $_POST['Op_Potential'];
      $Op_Disability = $_POST['Op_Disability'];
      $Op_Psychopathy = $_POST['Op_Psychopathy'];
      $Op_Hight = $_POST['Op_Hight'];
      $Op_Weight = $_POST['Op_Weight'];
      $Op_Bpressure = $_POST['Op_Bpressure'];
      $Op_CHO = $_POST['Op_CHO'];
      $Op_HDL = $_POST['Op_HDL'];
      $Op_LDL = $_POST['Op_LDL'];
      
      $Op_MDD = $_POST['Op_MDD'];
      $Op_Cause = $_POST['Op_Cause'];
      $Op_Checkin = $_POST['Op_Checkin'];
      $Op_Hometown = $_POST['Op_Hometown'];
      $Op_Typedisability = $_POST['Op_Typedisability'];
      $Op_Strain = $_POST['Op_Strain'];
      $Op_Remembrance = $_POST['Op_Remembrance'];
      $Op_Status1=$_POST['Op_Status1'];
      
      
        $q0= "SELECT oldpeople.Op_IDnum FROM oldpeople WHERE Op_IDnum = '$Op_IDnum' AND Op_ID!=$Op_ID";
        $objQuery = mysqli_query($link,$q0) or die (mysqli_error());
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        if($objResult)
	{
                        echo '<script type="text/javascript">'; 
                        echo 'alert("เลขบัตรประชาชนซํ้า");'; 
                        echo 'window.location.href = "Oldedit.php?Op_ID='.$Op_ID.'";';
                        echo '</script>';
			exit();          
	}
      else {
           $q1 = "UPDATE oldpeople SET Op_IDnum='$Op_IDnum' WHERE Op_ID='$Op_ID'";
          $result = mysqli_query($link, $q1);
     
     
       }
      
      
      
      if($_POST['Op_Diseases'] !=""){
       foreach ($_POST['Op_Diseases'] as $value){
              $Op_Diseases.=$value.",";
        }
        
        $Op_Diseases=substr($Op_Diseases,0,-1);/* คำสั่งตัดคำบนภาษา PHP ซึ่งมีประโยชน์อย่างมากเวลาที่เราต้องการตัดคำในบางคำจากประโยคเต็ม ๆ*/
        
        
        
      $q = "UPDATE oldpeople SET Op_Diseases='$Op_Diseases' WHERE Op_ID='$Op_ID'";
       $result = mysqli_query($link, $q);
        }
 
       
       $q = "UPDATE oldpeople SET Op_Name='$Op_Name',Op_IDnum='$Op_IDnum',Op_Surname='$Op_Surname',Op_Sex='$Op_Sex',Op_Blood='$Op_Blood',"
           ."Op_Age='$Op_Age',Op_BD='$Op_BD',Op_Status='$Op_Status',Op_Occupation='$Op_Occupation',Op_Fducation='$Op_Fducation',Op_ADL='$Op_ADL',"
           ."Op_Capability='$Op_Capability',Op_Potential='$Op_Potential',Op_Disability='$Op_Disability',Op_Psychopathy='$Op_Psychopathy',"
           ."Op_Hight='$Op_Hight',Op_Weight='$Op_Weight',Op_Bpressure='$Op_Bpressure',Op_CHO='$Op_CHO',Op_HDL='$Op_HDL',Op_LDL='$Op_LDL',"
           ."Op_MDD='$Op_MDD',Op_Cause='$Op_Cause',Op_Checkin='$Op_Checkin',Op_Hometown='$Op_Hometown',Op_BD='$Op_BD',Op_Typedisability='$Op_Typedisability',"
           . "Op_Strain='$Op_Strain',Op_Remembrance='$Op_Remembrance',Op_Status1='$Op_Status1' WHERE Op_ID='$Op_ID'";
          $result = mysqli_query($link, $q);
      
      
      
      
      
     
        
        if ($result) {
             
             header("Location:TableforAdminOld.php");
             exit();
             
             
             
        } else {
            echo "เกิดข้อผิดพลาด". mysqli_errno($link);
        }

        mysqli_close($link);
        
        
        
        
        ?>

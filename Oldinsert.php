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
      
        $q0= "SELECT oldpeople.Op_IDnum FROM oldpeople WHERE Op_IDnum = '$Op_IDnum'";
        $objQuery = mysqli_query($link,$q0) or die (mysqli_error());
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        if($objResult)
	{
                        header("Refresh:2; url=forAdmin2.php");
			echo "มีข้อมูลนี่ในระบบแล้ว";
			exit();       
	}


          
        foreach ($_POST['Op_Diseases'] as $value){
              $Op_Diseases.=$value.",";
        }
        
        $Op_Diseases=substr($Op_Diseases,0,-1);/*เพิ่มหลายค่า*/
      
      
       $q = "INSERT INTO oldpeople (Op_ID,Op_Name,Op_IDnum,Op_Surname,Op_Sex,Op_Blood,Op_Age,Op_BD,Op_Status,Op_Occupation,Op_Fducation,Op_ADL,Op_Capability,Op_Potential,Op_Disability,Op_Psychopathy,Op_Hight,Op_Weight,Op_Bpressure,Op_CHO,Op_HDL,Op_LDL,Op_Diseases,Op_MDD,Op_Cause,Op_Checkin,Op_Hometown,Op_Typedisability,Op_Strain,Op_Remembrance)"
           ."VALUES ('$Op_ID','$Op_Name','$Op_IDnum','$Op_Surname','$Op_Sex','$Op_Blood','$Op_Age','$Op_BD','$Op_Status','$Op_Occupation','$Op_Fducation','$Op_ADL','$Op_Capability','$Op_Potential','$Op_Disability','$Op_Psychopathy','$Op_Hight','$Op_Weight','$Op_Bpressure','$Op_CHO','$Op_HDL','$Op_LDL','$Op_Diseases','$Op_MDD','$Op_Cause','$Op_Checkin','$Op_Hometown','$Op_Typedisability','$Op_Strain','$Op_Remembrance')";
        
      
       $result = mysqli_query($link,$q);
       
       
       if($result){
            
             header("Location:TableforAdminOld.php");
             exit();
            
            
        
            
        }
        
        
        else {
            echo "Wrong". mysqli_errno($link);
        }
        
    ?>
    
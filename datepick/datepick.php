<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">
     <?php
      require 'connect1.php';
      $sql = "SELECT * FROM queue";
      $result = mysqli_query($mysqli, $sql);
      $invalid_date = array();
      while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
          $date_part = substr($row['Queue_Date'], 0, 10);
          list($year, $month, $day) = explode('-', $date_part);
          $invalid_date[] = $year . '-' . $month . '-' . $day;
      }
      mysqli_free_result($result);
      ?>
	$(function() {
		$('#datepicker-th-1').datepicker({
			dateFormat: 'yy-mm-dd',
                        dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                        dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
                        monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
                        monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'],
			beforeShowDay: checkAvailability,
                        minDate: new Date()

		});
	});

var $myBadDates = <?php echo json_encode($invalid_date); ?>;

function checkAvailability(mydate){
var $return=true;
var $returnclass ="available";
$checkdate = $.datepicker.formatDate('yy-mm-dd', mydate);
for(var i = 0; i < $myBadDates.length; i++)
    {    
       if($myBadDates[i] == $checkdate)
          {
        $return = true;
        $returnclass= "unavailable";
        }
    }
return [$return,$returnclass];
}

	
	</script>

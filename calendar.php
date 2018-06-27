
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<!--fancybox -->
      <link rel="stylesheet" href="fancy/jquery.fancybox.css" type="text/css" media="screen" />

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="fancy/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />

	<!-- fullcalendar -->
	<link href='fullcalendar.css' rel='stylesheet' />
	<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
 
 









    <!-- Custom Theme JavaScript -->
 <script src='lib/moment.min.js'></script>

<script src='fullcalendar.min.js'></script>




<script src='lang/th.js'></script>
<script  src="fancy/jquery.fancybox.pack.js"></script>
<script  src="fancy/helpers/jquery.fancybox-thumbs.js"></script>   
 <script  src="fancy/helpers/jquery.fancybox-buttons.js"></script>



 
<script type="text/javascript">
jQuery( document ).ready(function() {   
      //var currentLangCode = 'th';
      $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month'
            },          
            eventLimit: true, // allow "more" link when too many events
            defaultDate: new Date(),
            //lang: currentLangCode,
			timezone: 'Asia/Bangkok',
            events: {
            url: 'data_events-3.6.2.php?gData=1'
         	},  
            loading: function(bool) {
                $('#loading').toggle(bool);
            },
			
			eventClick: function(event) {
    if (event.url) {
      $.fancybox({
        	'href' : event.url,
        	'type' : 'iframe',
		'autoScale'     	: false,
		'openEffect' : 'elastic',
        	'openSpeed'  : 'fast',
                'closeEffect' : 'elastic',
        	'closeSpeed'  : 'fast',
		'closeBtn'  : true,
				onClosed:function() {
				parent.location.reload(true); 
				},
				helpers : {
				thumbs : {
				width  : 50,
				height : 50
					},
					
				overlay : {
            			css : {
                		'background' : 'rgba(49, 176, 213, 0.7)'
           			 }
       				 }
				}
            });
      return false;
    }
  }
			
		
        });
    });
</script>


    
        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
				 "order": [[ 1, "desc" ]]
        });
    });
    </script>

</head>

<body>

    

      

		   		
				<div id='calendar'></div>
   
</body>

</html>
  <!-- script src="../js/morris-data.js"></script -->

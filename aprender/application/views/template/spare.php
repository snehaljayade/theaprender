<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>How to add timer countdown digital clock using jQuery</title>

    <!--[if lt IE 9]>
  <script>
		document.createElement('figure');
		document.createElement('figcaption');
	</script>
	<![endif]-->
	<link href="assets/css/timeTo.css" type="text/css" rel="stylesheet"/>
</head>
<body>

	<!--HTML structure for countdown timer-->
    <div id="clockcontainer">
		
		<h2>jQuery Countdown timer</h2>
		<hr />

		<h3>Set delay in seconds</h3>
		<div id="countdown-1"></div>

		<h3>Set delay to specyfied datetime</h3>
		<div id="countdown-2"></div>

		<h3>Set captions and dark theme</h1>
		<div id="countdown-3"></div>

	</div>

    <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.timeTo.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
         
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>


<!doctype html>
<html>
<head>
<title>PHP Countdown Timer</title>
<style>
.green{color:green;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php
$date = strtotime("December 3, 2014 2:00 PM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
?>
 
<h1>There are <span class="green"> <?php echo $days_remaining?></span> days and <span class="green"> <?php echo $hours_remaining?></span> hours left</h1>
<p>
    <?php echo validation_errors(); ?>
</p>

</body>
</html>
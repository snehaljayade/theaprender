<html>
	<head>
		<title>
			Login - NotifyMe Admin Panel
		</title>
		<link rel="stylesheet" type="text/css" href="assets/sr/main.css">
		<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="sr-wrapper">
		<header>
			<h1>NotifyMe Admin Panel</h1><span style="position: absolute; top: 40px; left: 310px;">version 1.1</span>
			<h2>Government College of Engineering, Amravati</h2>
		</header>
		
		<nav>
		<a href="#">Home</a>
		<div class="sr-clearfix"></div>
		</nav>
		
		
		<div id="sr-content">
		<div class="sr-clearfix"></div>
			<h1 class="heading">Login to Admin Panel</h1>
			<br>
			<form action="<?php echo ('http://localhost/app/index.php/login/process'); ?>" method="POST">
			<table style="margin-left: auto; margin-right: auto;">
			<?php if($e==1) echo "<tr><td style=\"color: #f00; font-size: 12px;\">Incorrect username or password</td></tr>"; ?>
				<tr><td>Username</td></tr>
				<tr><td><input type="text" name="username" class="textbox" placeholder="Enter username"></td></tr>
				<tr><td>Password</td></tr>
				<tr><td><input type="password" name="password" class="textbox" placeholder="Enter password"></td></tr>
				
				<tr><td><input type="submit" name="submit" value="Login" style="padding: 5px; width: 100px;"></td></tr>
			</table>
			</form>
		</div>
		
		
		<div class="sr-clearfix"></div>
		<footer>
			<p>2015, G. C. O. E. Amravati</p>
			
		</footer>
		</div>
	</body>
</html>
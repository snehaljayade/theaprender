<!DOCTYPE html>

<html>
<head>
<title><?= $title?> :: Classic Theme</title>
<link rel="icon" type="img/ico" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/style.css'; ?>">
</head>
<body>

		<div id="wrapper">
		<header> 
			<h2>Welcomes you...</h2>
			<h1>TheAprender  &nbsp;&nbsp;&nbsp;   </h1>
			
			<img src = "<?php echo base_url() .'assets/images/logo.png'?>" id = "logo">
			</header>
		<?= $navigation ?>
		<?= $sidebar ?>
		
	
	<div id="content">
			<h1><?= $title ?></h1>
	
			<?= $content ?>
		</div>
		
		
		
		<footer>
			<p>&copy; 2014 <a href="http://facebook.com/sohailqureshi"></a></p>
		</footer>
		</div>
	</body>
</html>

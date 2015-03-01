<html>
	<head>
		<title>
			<?= $title ?> :: Project Builder
		</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		
		 <script>
            $(document).ready(function(){
                $rotatec();
                $('.delete').click(function(event){
                	if(!confirm("Are you sure to delete?"))
                		return false;
                	});
                });
		</script>
	</head>
	<body>
		<div id="wrapper">
		<header>
			<img id="logo" src="<?php echo base_url(); ?>assets/img/project_cycle.png" alt="Project Cycle">
			<img id="circle" src="<?php echo base_url(); ?>assets/img/circle.png" alt="Project Cycle - Circle">
			<h1>Road Project Builder (version 1.0)</h1>
			
		</header>
		
		<nav>
		<?= $navigation ?>
		<div class="clearfix"></div>
		</nav>
		
		<div id="leftsidebar" class="sidebar">
			<?= $leftsidebar ?>
		</div>
		<!--<div id="rightsidebar" class="sidebar">
			<?= $rightsidebar ?>
		</div>
		-->
		<div id="content">
		
			<?= $content ?>
		</div>
		<div class="clearfix"></div>
		</div>
		<footer>
			<a href="http://gcoea.ac.in" target="_blank"><img id="gcoea" src="<?php echo base_url(); ?>assets/img/gcoea.png" alt="G. C. O. E. Amravati logo"></a>
			<a href="http://gcoea.ac.in" target="_blank"><p>2013 Government College of Engineering, Amravati</p></a>
		</footer>
	</body>
</html>
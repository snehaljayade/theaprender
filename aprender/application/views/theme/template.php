<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">	
 	<?php echo link_tag('bootstrap/css/bootstrap.css'); ?>

<title><?= $title?> :: Classic Theme</title>
<link rel="icon" type="img/ico" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/style.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'bootstrap/css/bootstrap.css'; ?>">
</head>
<body>

<div id="wrapper">
		<header> 
		
		<img src = "<?php echo base_url() .'assets/images/finallogo.png'?>" id = "logo1" />
		<img src = "<?php echo base_url() .'assets/images/logo.png'?>" id = "logo2" />
			
		</header>
		<?= $navigation ?>
		
		
<div class="container">
    <div class="row">

		<?= $sidebar ?>	        
		
	<div class="col-md-7 col-sm-8 col-xs-8" id="content">		
			<!--BOOTSTRAPPING-->
		<div class="panel panel-default">
			<div class="panel-heading">
					<h4 class="panel-title">
						<?= $title ?>
					</h4>
			</div>
		
			<div class="panel-body center">
  			
			<?= $content ?>	
			</div>
		</div><!--BOOTSTRAPPING-->


	</div>
	<div class="col-sm-2 col-md-2">
            <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOneq"><span class="glyphicon glyphicon-folder-close">
                            </span>Notifications</a>
                        </h4>
                    </div>
                    <div id="collapseOneq" class="panel-collapse collapse in">
					   <div class="panel-body">
											<marquee id ="box" scrollamount="3" scrolldelay="" direction="up" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 2, 0);">
					<?php 
						foreach($notifications as $n)
							echo $n->subject."<br>".$n->message."<br><br>";
					?>
					
					</marquee>
					 
					    </div>
                    </div>
                </div>
                </div>
        </div>
	
</div>
</div>
		
		
		
		<footer class="site-footer">
			<p>&copy; 2014 <a href="http://facebook.com/sohailqureshi"></a></p>

			<script src="<?php echo  base_url('bootstrap/js/jquery.js');?>"></script>
			<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
			<script src="<?php echo base_url('bootstrap/js/imp.js');?>"></script>
		</footer>
</div>
	</body>
</html>

<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('coding_zone/index', $attributes);
	
?>
<html lang="en">

<body>
Upcoming Challenges<br><br>
<?php
$date = new DateTime(); 
foreach($challenges as $c){
	if($c->end_time>=$date->format('yyyy-dd-mm'))
	
	echo "Competetion:&nbsp;&nbsp;".$c->name." <br> End Time:&nbsp;&nbsp;".$c->end_time."<br>";
}
?><br><br>
<a href="<?php echo site_url('coding_zone/register'); ?>">Register Now</a> <br>
<a href="<?php echo site_url('coding_zone/view_challenge'); ?>">Already Done?</a>          
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>
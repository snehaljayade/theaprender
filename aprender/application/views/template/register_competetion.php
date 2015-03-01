<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('coding_zone/register', $attributes);
	
?>
<html lang="en">

<body>

Upcoming Challenges
<?php
$date = new DateTime(); 
foreach($challenges as $c){
	if($c->end_time>=$date->format('yyyy-mm-dd'))
	echo "<br><input type='checkbox' name='coding_competetion' value=".$c->coding_competetion_id.">".$c->name."<br>";
	else 
	echo "<br><br>No new challenges<br>";
}
?>
<button type='submit' class='pure-button pure-button-primary'>Submit</button><br>
	<a href="<?php echo site_url('coding_zone/view_challenge');?>">View challenge</a>
<br><br>
<a href="<?php echo site_url('coding_zone/view_challenge'); ?>">Already Done?</a>          
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>
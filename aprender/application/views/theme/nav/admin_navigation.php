
	<nav><font color="#1f8dd6" size="4px">
<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    
	foreach($members as $mem)
echo "Welcome ".$mem->username." Admin!"; 
?>	</font>

		<a href="<?php echo site_url('activities/logout'); ?>">Logout</a><a href="<?php echo site_url('activities/settings' ); ?>">Settings</a><a href="">Home</a>
		<div class="clearfix"></div>
		</nav>

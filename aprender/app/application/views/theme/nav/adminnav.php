
<nav>
<font color="#1f8dd6" size="4px">
<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
</font>

		<ul>
		
		<li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
		<li><a href="<?php echo site_url('activities/settings' ); ?>">Settings</a></li>
		<li><a href="">Home</a></li>
		<div class="clearfix"></div>
		</ul>
		</nav>

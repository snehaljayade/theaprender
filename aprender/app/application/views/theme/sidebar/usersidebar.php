
<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
		<div id="leftsidebar" class="sidebar">
			<p>Activities</p>
			<a href="<?php echo site_url('user_home'); ?>">Home</a>
			<a href="<?php echo site_url('user_home/sendnotification'); ?>">Send Notification</a>
			<a href="<?php echo site_url('user_home/userlist'); ?>">Users List</a>
			<a href="<?php echo site_url('user_home/history'); ?>">History</a>
			<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
			</div>

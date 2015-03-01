<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
		<div id="leftsidebar" class="sidebar">
			<p>Activities</p>
			<a href="<?php echo site_url('admin_home/allusers'); ?>">All Users</a>
			<a href="<?php echo site_url('admin_home/allclubs'); ?>">All Clubs</a>
			<a href="<?php echo site_url('admin_home/createclub'); ?>">Create Club</a>
			<a href="<?php echo site_url('admin_home/createadmin'); ?>">Create Admin</a>
			<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
			</div>

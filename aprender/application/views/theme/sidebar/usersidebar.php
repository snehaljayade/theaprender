
			
<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
			
<div class="col-md-2 col-sm-2 col-xs-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				Activities
			</h4>
		</div>
		
		<div class="panel-body center">
  			
			<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
				<div id="leftsidebar" class="sidebar">
			
					<a class="btn btn-default" href="<?php echo site_url('notification_user'); ?>">Home</a>
					<a class="btn btn-default" href="<?php echo site_url('notification_user/sendnotification'); ?>">Send Notification</a>
					<a class="btn btn-default" href="<?php echo site_url('notification_user/userlist'); ?>">Users List</a>
					<a class="btn btn-default" href="<?php echo site_url('notification_user/history'); ?>">History</a>
					<a class="btn btn-default" href="<?php echo site_url('login/logout'); ?>">Logout</a>
				</div>		
		</div>
	</div>
</div>	



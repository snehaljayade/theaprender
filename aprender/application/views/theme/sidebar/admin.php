<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
   
	

?>	
		<div id="leftsidebar" class="sidebar">
			<p>Activities</p>
			<a href="<?php echo site_url('admin_home/profile'); ?>">Profile</a>
			<?php
			foreach($members as $mem){
				if($mem->role_id==11){
					?>
					<a href="<?php echo site_url('admin_home/create_roles'); ?>">Create Roles</a>
					<a href="<?php echo site_url('admin_home/create_clubs'); ?>">Create Clubs</a>
					
					<?php
				}
				else{
					foreach($roles as $role)
					echo "<a href=".site_url('admin_home/'.$role->role_name).">Clubs</a>";
				}
			}
			?>
		</div>
		<div id="rightsidebar" class="sidebar">
			<p>Notices</p>
			<a href="">Link One</a>
			<a href="">Link Two</a>
			<a href="">Link Three</a>
			<p>Chat Box</p>
			<textarea name="chat" rows="10" cols="22" ></textarea>
		</div>
	
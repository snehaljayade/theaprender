<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('admin_home/view_clubs', $attributes);
?>
<html lang="en">
<body>
<form class="pure-form pure-form-stacked">
    
        
	<?php
	foreach($clubs as $club){
		
		foreach($roles as $role){
			if($club->role_id==$role->role_id)
				echo "<a href=".site_url('admin_home/'.$role->role_name).">{$club->username}</a><br>";
		}
	}?>	
    
</form>            
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>

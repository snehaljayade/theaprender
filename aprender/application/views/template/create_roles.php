<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('admin_home/create_roles', $attributes); ?>
<html lang="en">
<body>

    <fieldset>
        <legend>Create Role</legend>
			<div class="pure-form pure-form-stacked">
                <label for="role_name">Role Name</label>
                <input  class="form-control"  id="role_name" name="role_name" type="text" placeholder="" value="<?php echo set_value('role_name'); ?>">
			</div>
			
           	<button type="submit" class="btn btn-info">Create</button>
</fieldset>    
        </div>
 <p><?php echo validation_errors(); ?></p></body></html>


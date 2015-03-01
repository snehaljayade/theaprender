<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('admin_home/create_clubs', $attributes); ?>
<html lang="en">
<body>

    <fieldset>
        <legend>Create Club</legend>
			<div class="pure-form pure-form-stacked">
                <label for="username">Club Name</label>
                <input id="username" name="username" type="text" placeholder="" value="<?php echo set_value('username'); ?>">
			</div>
			<div class="pure-form pure-form-stacked">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="" value="<?php echo set_value('password'); ?>">
			</div>
			<div class="pure-form pure-form-stacked">
                <label for="role">Role</label>
                <select id="role" name="role" class="pure-input-1-2">
                            <?php
                                foreach($all_roles as $sc){
                                    echo "<option value=\"{$sc->role_id}\">{$sc->role_name}</option>";
                                }
                            ?>
                </select>
			</div>
           	<button type="submit" class="pure-button pure-button-primary">Create</button>
</fieldset>    
        </div>
 <p><?php echo validation_errors(); ?></p></body></html>


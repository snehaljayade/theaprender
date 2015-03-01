<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
                    $attributes = array('class' => 'pure-form pure-form-aligned', 'id' => 'register');
                    echo form_open('test/validate/', $attributes);
                ?>
<fieldset>
		<a href="<?php echo site_url('activities/login'); ?>">Click Here to LOGIN</a>
</fieldset>
</form>
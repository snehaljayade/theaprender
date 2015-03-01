<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('activities/login', $attributes);
?>
<html lang="en">
<body>
<form class="pure-form pure-form-stacked">
    <fieldset>
        <legend>Login Form</legend>
		
		<label for="username">Username</label>
        <input value="<?php echo set_value('username'); ?>" id="username" name="username" type="text" placeholder=" ">

        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password">
		
		<button type="submit" class="pure-button pure-button-primary">Login</button>
    </fieldset>
</form>            </div>
 <p>
                    <?php echo validation_errors(); ?>
                </p>
            

</body>
</html>

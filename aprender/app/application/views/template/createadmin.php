<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('Admin_home/processcreate', $attributes);
?>
<form class="pure-form pure-form-stacked">
    <table border = 0>
			
				        
            <tr><td>Username<td><input value="<?php echo set_value('username'); ?>" id="username" name="username" type="text"></td>
            </tr>

			<tr><td>Email</td><td><input value="<?php echo set_value('email'); ?>" id="email" name="email" type="text"></td></tr>

			<tr><td>Password</td><td><input value="<?php echo set_value('password'); ?>" id="password" name="password" type="password"></td></tr>
<tr><td>Select Club</td><td>
<select value="<?php echo set_value('club_id');?>" name = "club_id">
<?php
foreach($info["clubdetail"] as $club)
  {
  echo "<option value='$club->club_id'> $club->club_name</option>";
  }
  ?>
  
</select>
</td></tr>

			
	<tr><td></td><td><button type="submit">Create admin</button>
    </td></tr>		
	<tr><td></td><td style="color: #f00; font-size: 15px;"><?php  if(isset($info["msg"])&&$info["msg"]!="") echo $info["msg"];?></td></tr>
			</table>
		
	
</form>            
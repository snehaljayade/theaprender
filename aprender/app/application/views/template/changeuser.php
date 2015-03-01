<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('home/changedetail', $attributes);
?>
<form class="pure-form pure-form-stacked">
    <table border = 0>
			
				        
            <tr><td>Username<td><input disabled value="<?php foreach($userdetails["users"] as $u) $clubid=$u->club_id; echo $u->username; ?>" id="username" name="username" type="text"></td>
            </tr>

			<tr><td>Email</td><td><input value="<?php foreach($userdetails["users"] as $u) echo $u->email; ?>" id="email" name="email" type="text"></td></tr>

			<tr><td>Password</td><td><input placeholder = "Enter New Password" value="<?php echo set_value('password'); ?>" id="password" name="password" type="password"></td></tr>
<tr><td>Select Club</td><td>
<select value="<?php echo set_value('club_id');?>" name = "club_id">
<?php
$sel="selected";
foreach($userdetails["clubs"] as $club)
  {
if($club->club_id==$clubid) $sel = "selected=true";
echo "<option value='$club->club_id' $sel> $club->club_name</option>";
$sel="";
  }
  ?>
</select></td></tr>

			
	<tr><td></td><td><button type="submit">Update Details</button>
    </td></tr>		
	<tr><td></td><td style="color: #f00; font-size: 15px;"><?php  if(isset($info["msg"])&&$info["msg"]!="") echo $info["msg"];?></td></tr>
			</table>
		
	
</form>            
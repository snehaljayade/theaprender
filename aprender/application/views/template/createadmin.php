<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('notification_admin_home/processcreate', $attributes);
?>
<form class="pure-form pure-form-stacked">
			
				        
              Username <input class="form-control" value="<?php echo set_value('username'); ?>" id="username" name="username" type="text"> 
             

			  Email  <input class="form-control" value="<?php echo set_value('email'); ?>" id="email" name="email" type="text">  

			  Password  <input class="form-control" value="<?php echo set_value('password'); ?>" id="password" name="password" type="password">  
  Select Club  
<select class="form-control" value="<?php echo set_value('club_id');?>" name = "club_id">
<?php
foreach($info["clubdetail"] as $club)
  {
  echo "<option value='$club->club_id'> $club->club_name</option>";
  }
  ?>
  
</select>
  <br />

			
	    <button  class="btn btn-info" type="submit">Create admin</button>
      	<br />
<br />		
	   <?php  if(isset($info["msg"])&&$info["msg"]!="") echo "<div class='alert alert-success' role='alert'>"; echo $info["msg"]; echo "</div>"?>
		
	
</form>            
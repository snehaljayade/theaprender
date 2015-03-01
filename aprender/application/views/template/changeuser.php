<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('home/changedetail', $attributes);
?>
<form class="pure-form pure-form-stacked">
    
				        
              Username <input class="form-control"  disabled value="<?php foreach($userdetails["users"] as $u) $clubid=$u->club_id; echo $u->username; ?>" id="username" name="username" type="text"> 
             

			  Email  <input class="form-control"  value="<?php foreach($userdetails["users"] as $u) echo $u->email; ?>" id="email" name="email" type="text">  

			  Password  <input class="form-control"  placeholder = "Enter New Password" value="<?php echo set_value('password'); ?>" id="password" name="password" type="password">  
  Select Club  
<select value="<?php echo set_value('club_id');?>" class="form-control"  name = "club_id">
<?php
$sel="selected";
foreach($userdetails["clubs"] as $club)
  {
if($club->club_id==$clubid) $sel = "selected=true";
echo "<option value='$club->club_id' $sel> $club->club_name</option>";
$sel="";
  }
  ?>
</select>  

			<br />
	    <button class="btn btn-info" type="submit">Update Details</button>
      		
	   <td style="color: #f00; font-size: 15px;"><?php  if(isset($info["msg"])&&$info["msg"]!="") echo $info["msg"];?>  
		
	
</form>            
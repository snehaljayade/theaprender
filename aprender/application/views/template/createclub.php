<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('notification_admin_home/createclub', $attributes);
?>
<form class="pure-form pure-form-stacked">

				        
              <label for="clubname">Club Name</label> 
                 <input class="form-control"  value="<?php echo set_value('club_name'); ?>" id="club_name" name="club_name" type="text"> 
             

			  <label for="description">Club Description</label> 
             <textarea class="form-control"  value="<?php echo set_value('description'); ?>"  rows="10" cols="22" id = "description" name = "description">
			</textarea> 
<br />
	    <button  class="btn btn-info" type="submit">Register</button>
      		
		
	
</form>            
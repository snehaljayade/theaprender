<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('admin_home/coding_zone', $attributes);
?>
<html lang="en">
<body>
<form class="pure-form pure-form-stacked">

  
        
	Create Event
	<label for="question">Question</label>
	<input  class="form-control"  id="question" name="question" type="text" placeholder="" value="<?php echo set_value('question'); ?>">
	<label for="duration">Duration</label>
	<input  class="form-control"  id="duration" name="duration" type="text" placeholder="" value="<?php echo set_value('duration'); ?>">
	&nbsp;<button  class="btn btn-info"  type="submit" value="">Submit</button></table>
	<a href="<?php echo site_url('admin_home/create_event'); ?>">Create Event</a>
    
    
	
    
</form>            
<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>

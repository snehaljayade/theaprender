<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('admin_home/create_event', $attributes);
?>
<form class="pure-form pure-form-stacked">
      
	Add Question
	<label for="name">Name</label>
	<input  class="form-control"  id="name" name="name" type="text" placeholder="" value="<?php echo set_value('name'); ?>">
	<label for="end_time">End Time</label>
	<input  class="form-control"  id="end_time" name="end_time" type="date" placeholder="" value="<?php echo set_value('end_time'); ?>">
	Question
	 <select id="question" name="question"  class="form-control" >
                            <?php
                                foreach($questions as $sc){
                                    echo "<option value=\"{$sc->question_id}\">{$sc->question}</option>";
                                }
                            ?>
                </select>
	&nbsp;<button  class="btn btn-info"  type="submit" value="">Submit</button>
    
</form>            
<p>
    <?php echo validation_errors(); ?>
</p>
            
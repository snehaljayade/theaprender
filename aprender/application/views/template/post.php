<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('staff_home/post', $attributes); ?>
<html lang="en">
<body>
    <fieldset>
        <legend>Add Post</legend>
			<div class="pure-form pure-form-stacked">
                <label  for="topic">Topics</label>
                <select id="topic" name="topic" class="form-control">
                            <?php
                                foreach($topics as $sc){
                                    echo "<option value=\"{$sc->topic_id}\">{$sc->topic}</option>";
                                }
                            ?>
                </select>
			</div>
			<div class="pure-u-1 pure-u-md-1-3">
                <label for="text"></label>
                <textarea class = "form-control" value="<?php echo set_value('text'); ?>" id="text" name="text" type="textarea" rows='5'></textarea>
           	<br />
			<button type="submit" class="btn btn-info">Post</button>
</fieldset>    
           </div>
 <p><?php echo validation_errors(); ?></p></body></html>



<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
  echo  form_open_multipart('notification_user/sendnotif');
?>

<form class="pure-form pure-form-stacked">

			
				        
			Subject <input class="form-control" value="<?php echo set_value('subject'); ?>" id="subject" name="subject" type="text">
            

            Message
            
			<textarea class="form-control" value = "<?php echo set_value('message')?>" id = "message" name = "message" cols = 21 rows = 5> </textarea>
			
            Upload PDF or Image <?php echo form_upload('userfile');?></td>
           <br />
	<input type="submit" class="btn btn-info" id = "upload" value="Send Notification">	 
    <br />
	<br />
	<?php if($msg!="") echo "<div class='alert alert-success' role='alert'>"; echo $msg; echo "</div>"; ?>
	
	
</form>            
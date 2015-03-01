
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
  echo  form_open_multipart('user_home/sendnotif');
?>
<form class="pure-form pure-form-stacked">
<center>
 <div style = "background-color:#ffe; border: solid 1px #000; width:400px; height:200px;"> 
 <table border = 0px width = 100%>
			
				        
            <tr>
			<td>Subject</td>
            <td><input value="<?php echo set_value('subject'); ?>" id="subject" name="subject" type="text"></td>
            </tr>

            <tr>
			<td>Message</td>
            <td>
			<textarea value = "<?php echo set_value('message')?>" id = "message" name = "message" cols = 21 rows = 5> </textarea>
			</td>
            </tr>
			
	        <tr>
			
			<td>Upload PDF or Image</td>
            <td><?php echo form_upload('userfile');?></td>
            </tr>


			
	<tr><td></td><td><?php echo form_submit('upload', 'Send Notification');?>
    </td></tr>		
	<tr><td></td><td><?php echo $msg;?></td></tr>		
	
			</table>
		</div>
		</center>
	
</form>            
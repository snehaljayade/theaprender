<?php
        $attributes = array('class' => 'pure-form pure-form-aligned', 'id' => 'register');
        echo form_open_multipart('staff_home/notes', $attributes);
    ?>
   

       
            <label for="title">Title</label>
            <input class="form-control" id="title" name="title" type="text" placeholder="" value="">
        <label for="subject">Subject</label>
            <input class="form-control" id="subject" name="subject" type="text" placeholder="" value="">
        <label for="branch">Branch</label>
                <select class="form-control" id="branch" name="branch" class="pure-input-1-2">
                            <?php
                                foreach($branches as $sc){
                                    echo "<option value=\"{$sc->branch_id}\">{$sc->branch_name}</option>";
                                }
                            ?>
                </select>
        
			<label for="file_location">File</label>
			<input id="file_location" class="form-control" type="file" name="userfile"  />
		
		<br />		
        
			<button type="submit" class="btn btn-info">Upload</button>
       
   
	</form>
	<p>
		<?php echo validation_errors(); ?>
		<?php if(isset($error)&&$error!='') print_r($error); //echo "<span class=\"message\">{$error}</span>"; ?>
	</p>
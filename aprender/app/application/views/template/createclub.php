<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('home/createclub', $attributes);
?>
<form class="pure-form pure-form-stacked">
    <table border = 0>
			
				        
            <tr><td><label for="clubname">Club Name</label></td>
                <td><input value="<?php echo set_value('club_name'); ?>" id="club_name" name="club_name" type="text"></td>
            </tr>

			<tr><td><label for="description">Club Description</label></td>
            <td><textarea  value="<?php echo set_value('description'); ?>"  rows="10" cols="22" id = "description" name = "description">
			</textarea></tr>

	<tr><td></td><td><button type="submit">Register</button>
    </td></tr>		
			</table>
		
	
</form>            
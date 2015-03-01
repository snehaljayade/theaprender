<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('staff_home/profile', $attributes);
?>
<form class="pure-form pure-form-stacked">
    
        
		<?php
		foreach($members as $mem){
		?>
		<table class= table>
<tr><td>		<label for='name' ><b>Name</b></label></td><td>
			&nbsp;&nbsp;<?php echo $mem->fname;?>	
        
			&nbsp;&nbsp;<?php echo $mem->mname;?>	
        
			&nbsp;&nbsp;<?php echo $mem->lname;?></td></tr>
      
<tr><td>
            <label for='gender'><b>Gender</b></label>
			</td><td><?php 
			if($mem->gender==0)
			echo "Male";
			else
			echo "Female";
			?></td></tr>		
        

        	<tr><td>
            <label for='dob'><b>Date of Birth</td></label>
            <td><?php echo $mem->dob;?>
        </td></tr>
		<tr>
		<td>
            <label for='college'><b>College</label></td>
            <td><?php echo $this->data['colleges'][0]->college_name; ?></td></tr>
        <tr><td>
		
            <label for='branch'><b>Branch</b></label></td>
           <td><?php echo $this->data['brnches'][0]->branch_name; ?></td></tr>
        </div>
		</table>
		<?php } ?>
			

    
</form>            
<p>
    <?php echo validation_errors(); ?>
</p>
            


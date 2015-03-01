<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('student_home/profile', $attributes);
?>
<table class = "table">
    
        
		<?php
		foreach($members as $mem){
		?>
		   <tr>
		   <td><label  for='name' ><b>Name</b></label></td>
		   <td><?php echo $mem->fname;?>
			&nbsp;&nbsp;<?php echo $mem->mname;?>	
        
			&nbsp;&nbsp;<?php echo $mem->lname;?>
			</td>
		   </tr>
        <tr>
		   <td>
	        <label for='gender'><b>Gender</b></label></td>
			<td><?php 
			if($mem->gender==0)
			echo "Male";
			else
			echo "Female";
			?>	</td>
		</tr>			

		<tr>
		   <td>	
            <label for='dob'><b>Date of Birth</b></label>
            </td>
			<td><?php echo $mem->dob;?></td>
		</tr>
		<tr>
		   <td>
		    <label for='college'><b>College</b></label>
            </td>
			<td><?php echo $this->data['colleges'][0]->college_name; ?></td></tr>
			<tr>
		   <td>
		   <label for='branch'><b>Branch</b></label></td>
            <td><?php echo $this->data['brnches'][0]->branch_name; ?></td></tr>
		<?php } ?>
			

    
</table>            
<p>
    <?php echo validation_errors(); ?>
</p>
            

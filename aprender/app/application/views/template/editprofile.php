<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('student_home/profile', $attributes);
?>
<html lang="en">
<body>
<form class="pure-form pure-form-stacked">
    
        
		<?php
		foreach($members as $mem){
		?>
		<div class="pure-control">
		<p><font size='4px'>
            <table border=0px;>
			<tr><td><label for='name' ><b>Name</b></label></td><td><input type="text" id = "fname"><?php echo $mem->fname;?>	
        
			&nbsp;&nbsp;<?php echo $mem->mname;?>	
        
			&nbsp;&nbsp;<?php echo $mem->lname;?></p>	
        </div>

        <div class='pure-control'>
			<p>
            <label for='gender'><b>Gender</b></label>
			&nbsp;&nbsp;<?php 
			if($mem->gender==0)
			echo "Male";
			else
			echo "Female";
			?></p>			
        </div>

        <div class='pure-control'>
			<p>
            <label for='dob'><b>Date of Birth</b></label>
            &nbsp;&nbsp;<?php echo $mem->dob;?></p>
        </div>
		
		<div class='pure-control'>
			<p>
            <label for='college'><b>College</b></label>
            &nbsp;&nbsp;<?php echo $this->data['colleges'][0]->college_name; ?></p>
        </div>
		
		<div class='pure-control'>
			<p>
            <label for='branch'><b>Branch</b></label>
            &nbsp;&nbsp;<?php echo $this->data['brnches'][0]->branch_name; ?></p>
        </div>
		</font>
		<?php } ?>
			

    
</form>            



<form class="pure-form pure-form-stacked">
    <table><th>
        <legend>Edit Profile</legend></th>
		
			
			<div class="pure-g">	        
            <tr><div class="pure-u-1 pure-u-md-1-3">
                <td><label for="fname">First Name</label></td>
                <td><input value="<?php echo $mem->fname; ?>" id="fname" name="fname" type="text"></td>
            </div></tr>

            <tr><div class="pure-u-1 pure-u-md-1-3">
                <td><label for="mname">Middle Name</label></td>
                <td><input value="<?php echo $mem->mname; ?>" id="mname" name="mname" type="text"></td>
            </div></tr>

            <tr><div class="pure-u-1 pure-u-md-1-3">
                <td><label for="lname">Last Name</label></td>
                <td><input value="<?php echo $mem->lname; ?>" id="lname" name="lname" type="text" ></td>
            </div></tr>
			
		
		        <tr><div class="pure-u-1 pure-u-md-1-3">
                <td><label for="gender">Gender</label></td>
                        <td><select id="gender" name="gender" class="pure-input-1-2">
                            <option value="0" <?php echo set_select('gender', '0', TRUE); ?>>Male</option>
                            <option value="1" <?php echo set_select('gender', '1'); ?>>Female</option>
                        </select></td>
				</div></tr>
				<tr><div class="pure-u-1 pure-u-md-1-3">
                <td><label for="dob">Date of Birth</label></td>
                <td><input value="<?php echo set_value('dob'); ?>" id="dob" name="dob" type="date"></td>
            </div></tr>
			</div>
			
			<tr><td><label for="member_address">Address</label></td>
			<td><input value="<?php echo set_value('member_address'); ?>" id="member_address" name="member_address" type="textarea" placeholder="Address"></td></tr>

			<tr><td><label for="contact_number">Contact Number</label></td>
			<td><input value="<?php echo set_value('contact_number'); ?>" id="contact_number" name="contact_number" type="text" placeholder="">	</td>	</tr>	
			
        <tr><td><label for="member_email_id">Email</label></td>
        <td><input value="<?php echo set_value('member_email_id'); ?>" id="member_email_id" name="member_email_id" type="email" placeholder="Email"></td></tr>
		
		<tr><td><label for="username">Username</label></td>
        <td><input value="<?php echo set_value('username'); ?>" id="username" name="username" type="text" placeholder=" "></td></tr>

        <tr><td><label for="password">Password</label></td>
        <td><input id="password" name="password" type="password" placeholder="Password"></td></tr>
		
		<tr><td><label for="cpassword">Confirm Password</label></td>
        <td><input id="cpassword" name="cpassword" type="password" placeholder="Confirm Password"></td></tr>

		<tr><div class="pure-form pure-form-stacked">
                <td><label for="question">Security Question</label></td>
                <td><select id="question" name="question" class="pure-input-1-2">
                            <?php
                                foreach($security_questions as $sc){
                                    echo "<option value=\"{$sc->security_question_id}\">{$sc->question}</option>";
                                }
                            ?>
                </select></td>
        </div></tr>
		
			<tr><td><label for="answer">Answer</label></td>
			<td><input value="<?php echo set_value('answer'); ?>" id="answer" name="answer" type="text" placeholder=""></td></tr>

		<tr><div class="pure-form pure-form-stacked">
            <td><label for="role">Role</label></td>
                <td><select id="role" name="role"  class="pure-input-1-2">
                            <?php
                                foreach($roles as $sc){
                                    echo "<option value=\"{$sc->role_id}\">{$sc->role_name}</option>";
                                }
                            ?>
                </select></td>
        </div></tr>
		
		<tr><div class="pure-form pure-form-stacked">
                <td><label for="college">College</label></td>
                <td><select id="college" name="college" class="pure-input-1-2">
                            <?php
                                foreach($colleges as $sc){
                                    echo "<option value=\"{$sc->college_id}\">{$sc->college_name}</option>";
                                }
                            ?>
                </select></td>
        </div></tr>

		<tr><div class="pure-form pure-form-stacked">
                <td><label for="branch">Branch</label></td>
                <td><select id="branch" name="branch" class="pure-input-1-2">
                            <?php
                                foreach($branches as $sc){
                                    echo "<option value=\"{$sc->branch_id}\">{$sc->branch_name}</option>";
                                }
                            ?>
                </select></td>
        </div></tr>	</table>
		
		<button type="submit" class="pure-button pure-button-primary">Register</button>
    
</form>            </div>
 <p>
                    <?php echo validation_errors(); ?>
                </p>






<p>
    <?php echo validation_errors(); ?>
</p>
            

</body>
</html>

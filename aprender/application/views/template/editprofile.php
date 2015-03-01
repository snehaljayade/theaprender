<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('student_home/profile', $attributes);
?>
<form class="pure-form pure-form-stacked">
    
        
		<?php
		foreach($members as $mem){
		?>
		<div class="pure-control">
		<p><font size='4px'>
         	<label for='name' ><b>Name</b></label><input  class="form-control"  type="text" id = "fname"><?php echo $mem->fname;?>	
        
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
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="fname">First Name</label>
                <input  class="form-control"  value="<?php echo $mem->fname; ?>" id="fname" name="fname" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="mname">Middle Name</label>
                <input  class="form-control"  value="<?php echo $mem->mname; ?>" id="mname" name="mname" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="lname">Last Name</label>
                <input  class="form-control"  value="<?php echo $mem->lname; ?>" id="lname" name="lname" type="text" >
            </div>
			
		
		        <div class="pure-u-1 pure-u-md-1-3">
                <label for="gender">Gender</label>
                        <select  id="gender" name="gender"  class="form-control" >
                            <option value="0" <?php echo set_select('gender', '0', TRUE); ?>>Male</option>
                            <option value="1" <?php echo set_select('gender', '1'); ?>>Female</option>
                        </select>
				</div>
				<div class="pure-u-1 pure-u-md-1-3">
                <label for="dob">Date of Birth</label>
                <input  class="form-control"  value="<?php echo set_value('dob'); ?>" id="dob" name="dob" type="date">
            </div>
			</div>
			
			<label for="member_address">Address</label>
			<input  class="form-control"  value="<?php echo set_value('member_address'); ?>" id="member_address" name="member_address" type="textarea" placeholder="Address">

			<label for="contact_number">Contact Number</label>
			<input  class="form-control"  value="<?php echo set_value('contact_number'); ?>" id="contact_number" name="contact_number" type="text" placeholder="">			
			
        <label for="member_email_id">Email</label>
        <input  class="form-control"  value="<?php echo set_value('member_email_id'); ?>" id="member_email_id" name="member_email_id" type="email" placeholder="Email">
		
		<label for="username">Username</label>
        <input  class="form-control"  value="<?php echo set_value('username'); ?>" id="username" name="username" type="text" placeholder=" ">

        <label for="password">Password</label>
        <input  class="form-control"  id="password" name="password" type="password" placeholder="Password">
		
		<label for="cpassword">Confirm Password</label>
        <input  class="form-control"  id="cpassword" name="cpassword" type="password" placeholder="Confirm Password">

		<div class="pure-form pure-form-stacked">
                <label for="question">Security Question</label>
                <select  class="form-control"  id="question" name="question" class="pure-input-1-2">
                            <?php
                                foreach($security_questions as $sc){
                                    echo "<option value=\"{$sc->security_question_id}\">{$sc->question}</option>";
                                }
                            ?>
                </select>
        </div>
		
			<label for="answer">Answer</label>
			<input  class="form-control"  value="<?php echo set_value('answer'); ?>" id="answer" name="answer" type="text" placeholder="">

		<div class="pure-form pure-form-stacked">
            <label for="role">Role</label>
                <select  class="form-control"  id="role" name="role"  class="pure-input-1-2">
                            <?php
                                foreach($roles as $sc){
                                    echo "<option value=\"{$sc->role_id}\">{$sc->role_name}</option>";
                                }
                            ?>
                </select>
        </div>
		
		<div class="pure-form pure-form-stacked">
                <label for="college">College</label>
                <select  class="form-control"  id="college" name="college" class="pure-input-1-2">
                            <?php
                                foreach($colleges as $sc){
                                    echo "<option value=\"{$sc->college_id}\">{$sc->college_name}</option>";
                                }
                            ?>
                </select>
        </div>

		<div class="pure-form pure-form-stacked">
                <label for="branch">Branch</label>
                <select  class="form-control"  id="branch" name="branch" class="pure-input-1-2">
                            <?php
                                foreach($branches as $sc){
                                    echo "<option value=\"{$sc->branch_id}\">{$sc->branch_name}</option>";
                                }
                            ?>
                </select>
        </div>	</table>
		
		<button type="submit" class="btn btn-info">Register</button>
    
</form>            </div>
 <p>
                    <?php echo validation_errors(); ?>
                </p>






<p>
    <?php echo validation_errors(); ?>
</p>
            

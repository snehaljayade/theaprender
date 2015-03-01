<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
<?php
    $attributes = array('class' => 'pure-form pure-form-stacked', 'id' => 'register');
    echo form_open('register_user/info', $attributes);
?>
<html lang="en">
 	<?php echo link_tag('bootstrap/css/bootstrap.css'); ?>

<link rel="icon" type="img/ico" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/style.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'bootstrap/css/bootstrap.css'; ?>">

<body>
<form class="pure-form pure-form-stacked">
    
        <legend >Registration Form</legend>
		
			
			<div class="pure-g">	        
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="fname">First Name</label>
                <input  class="form-control"  value="<?php echo set_value('fname'); ?>" id="fname" name="fname" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="mname">Middle Name</label>
                <input  class="form-control"  value="<?php echo set_value('mname'); ?>" id="mname" name="mname" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="lname">Last Name</label>
                <input  class="form-control"  value="<?php echo set_value('lname'); ?>" id="lname" name="lname" type="text" >
            </div>
			
		
		        <div class="pure-u-1 pure-u-md-1-3">
                <label for="gender">Gender</label>
                        <select  class="form-control"  id="gender" name="gender" class="pure-input-1-2">
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
			<input   class="form-control"  value="<?php echo set_value('member_address'); ?>" id="member_address" name="member_address" type="textarea" placeholder="Address">

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
                            
                 <option value=1>Student Account</option>";
                            
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
        </div>	
		
		<button type="submit" class="btn btn-info">Register</button>
    
</form>            </div>
 <p>
                    <?php echo validation_errors(); ?>
                </p>
            

</body>
</html>

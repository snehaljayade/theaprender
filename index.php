<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM college";
$result1 = $conn->query($sql);


$sql = "SELECT * FROM security_question";
$result2 = $conn->query($sql);


$sql = "SELECT * FROM branch";
$result3 = $conn->query($sql);


$conn->close();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Aprender</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-glyphicons.css" rel="stylesheet">
		<link rel="stylesheet" href="includes/css/styles.css">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="tutorials" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse">
			
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#login">Login</a></li>
						<li><a href="#services">Services</a></li>
                        <li><a href="#app">App</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
            
			</div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
						<img src = "images/finallogo.png" />
                        <h1>TheAprender.org</h1>
                        <p class="lead">Welcomes you to new era of Education.</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Enroll your Institute</h1>
                        <p class="lead">Cloud based Learning Environment</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->

    <section id="login">
        <div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-6 col-sm-5">
                        
                    
                    
        <div id="register">
				<div class="modal-header">
					
					<h4 class="modal-title" id="myModalLabel">Sign Up</h4>
				</div>
				<div class="modal-body" >
				
					
                                <form id="defaultForm" method="post" class="form-horizontal" action="aprender/index.php/register_user/info"
                      data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
					  
					<div class=""><center><b>REQUIRED INFORMATION</b></center></div>
					<hr/>
					<div>All fields are required.Please note that passwords are case sensitive</div>
					<hr/>
					<div><?php if(isset($_GET['msg']))
						if($_GET['msg']==4) echo "<div class='alert alert-danger' role='alert'>You failed to insert proper data..</div>";
						else
						if($_GET['msg']==5) echo "<div class='alert alert-success' role='alert'>Please activate your account for proceeding further.... Follow the link sent you on your mail....</div>";
						
						?> </div>
					<div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="username" placeholder="" required data-bv-notempty-message="The login name is required and cannot be empty" />
                        </div>
                     </div>

					 <div class="form-group">
                        <label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-5">
                            <input type="password" class="form-control" name="password"
                                   required data-bv-notempty-message="The password is required and cannot be empty"
                                   data-bv-identical="true" data-bv-identical-field="confirmPassword" data-bv-identical-message="The password and its confirm are not the same"
                                   data-bv-different="true" data-bv-different-field="loginName" data-bv-different-message="The password cannot be the same as username"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Retype password</label>
                        <div class="col-lg-5">
                            <input type="password" class="form-control" name="cpassword"
                                   required data-bv-notempty-message="The confirm password is required and cannot be empty"
                                   data-bv-identical="true" data-bv-identical-field="password" data-bv-identical-message="The password and its confirm are not the same"
                                   data-bv-different="true" data-bv-different-field="loginName" data-bv-different-message="The password cannot be the same as username"/>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-lg-3 control-label">Security Question</label>
                        <div class="col-lg-5">
                            
							<select  name="question" class="form-control">
                            <?php
                               if ($result2->num_rows > 0) {
    // output data of each row
    while($s = $result2->fetch_assoc()) {
       echo "<option value=\"{$s[security_question_id]}\">{$s[question]}</option>";
       
    }
} else {
    echo "0 results";
}
                                   
                                
                            ?>
                </select>
                        </div>
                     </div>
					
					<div class="form-group">
                        <label class="col-lg-3 control-label">Answer</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="answer" placeholder="" required data-bv-notempty-message="The Answer is required and cannot be empty" />
                        </div>
                     </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email address</label>
                        <div class="col-lg-5">
                            <input class="form-control" name="member_email_id" type="email" data-bv-emailaddress-message="The input is not a valid email address" />
                        </div>
                    </div>

					<div class="form-group">
                        <label class="col-lg-3 control-label">Mobile phone</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="contact_number"
                                   required data-bv-notempty-message="The mobile phone number is required"
                                   data-bv-digits data-bv-digits-message="The mobile phone number is not valid" />
                        </div>
                    </div>
                  <div class="form-group">
                        <label class="col-lg-3 control-label">Address</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="member_address" placeholder="" required data-bv-notempty-message="The Address is required and cannot be empty" />
                        </div></div>
<br><br>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Gender</label>
                        <div class="col-lg-5">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="0" required data-bv-notempty-message="The gender is required" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="1" /> Female
                                </label>
                            </div>
                        
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-lg-3 control-label">Date of Birth</label>
                        <div class="col-lg-5">
                            <input type="date" class="form-control" name="dob"
                                   required data-bv-notempty-message="The Date of Birth is required"
                                    />
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-lg-3 control-label">College Name</label>
                        <div class="col-lg-5">
                            
							<select  name="college" class="form-control">
                            <?php
                               if ($result1->num_rows > 0) {
                               // output data of each row
                               while($c = $result1->fetch_assoc()) {
                                  echo "<option value=\"{$c[college_id]}\">{$c[college_name]}</option>";
                               }
                               } else {
                                 echo "0 results";
                              }
                                
                            ?>
                </select>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label class="col-lg-3 control-label">Branch Name</label>
                        <div class="col-lg-5">
                            <select  name="branch" class="form-control">
                            <?php
                                if ($result3->num_rows > 0) {
    // output data of each row
    while($b = $result3->fetch_assoc()) {
      echo "<option value=\"{$b[branch_id]}\">{$b[branch_name]}</option>";
    }
} else {
    echo "0 results";
}
                                    
                                
                            ?>
                </select>
                        </div>
                     </div>

					 <div class="form-group">
                        <label class="col-lg-3 control-label">Full name</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" name="fname" placeholder="First name" required data-bv-notempty-message="The first name is required and cannot be empty" />
                        </div>
                        
						<div class="col-lg-3">
                            <input type="text" class="form-control" name="mname" placeholder="middle name" />
                        </div>
                        
						
						<div class="col-lg-3">
                            <input type="text" class="form-control" name="lname" placeholder="SurName" required data-bv-notempty-message="The surname is required and cannot be empty" />
                        </div>
                    </div>

                    
                    
                    
                
				
				
				<div class="modal-footer">
					
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-success" type="submit">Sign Up</button>
                         </div>
                
				</div>
				</div>
		        </div><!--/.col-md-4-->
</form>
                    <div class="col-md-4 col-sm-6">
                        <div class="modal-header">
					
					<h4 class="modal-title" id="myModalLabel">LOG IN</h4>
				</div>
				
				<div class="modal-body" >
				
					<form id="defaultForm" method="post" class="form-horizontal" action="aprender/index.php/activities/login"
                      data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    <div class=""><center><b>Please Log In</b></center></div>
					<hr/>
					<div class="form-group">
                        <label class="col-lg-3 control-label">Login</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="username" placeholder="" required data-bv-notempty-message="The login name is required and cannot be empty" />
                        </div>
						<div class="col-lg-4">
                         <a href="#register" > Want to Register? </a>
                        </div>
						
                     </div>

					 <div class="form-group">
                        <label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-5">
                            <input type="password" class="form-control" name="password"
                                   required data-bv-notempty-message="The password is required and cannot be empty"
                                   data-bv-identical="true" data-bv-identical-field="confirmPassword" data-bv-identical-message="The password and its confirm are not the same"
                                   data-bv-different="true" data-bv-different-field="loginName" data-bv-different-message="The password cannot be the same as username"/>
                        </div>
						<div class="col-lg-4">
                         <a href="#" > Forgot Password </a>
                        </div>
                    </div>         
<div class="modal-footer">
					
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
					<button class="btn btn-success">Log in</button>
				</div>
                <div><?php if(isset($_GET['msg']))
						if($_GET['msg']==1) echo "<div class='alert alert-danger' role='alert'>Incorrect Username or Password..</div>";
						else
						if($_GET['msg']==2) echo "<div class='alert alert-success' role='alert'>Successfully Logout....</div>";
						else if($_GET['msg']==3) echo "<div class='alert alert-alert' role='alert'>Please Login to Continue....</div>";
						?> </div>
					
				</form>
				</div>
				
				    </div>
					
					<div >
					<div class=""><center><b>Notification Android App</b></center></div>
					<hr/>
					<center>
						<img class=".img-circle"	 src = "images/back.jpg" width="300px"/>
					</center>
					</div>
				</div>	<!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#login-->
	
	    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            
							<img src="images/ico/tutorials.jpg" height='50px' width='50px'></img>
                            <h4>Notes and Tutorials</h4>
                            <p>Provides internal notes of the college and some external study material.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/ico/quiz.png" height='50px' width='50px'></img>
                            <h4>Quizzes</h4>
                            <p>Consists of quizzes on various subjects, helping students to increase their knowledge. </p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/ico/codepng.png" height='50px' width='50px'></img>
                            <h4>Coding zone</h4>
                            <p>software Engineering students are provided with a special facility of online coding.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/ico/favicon.ico" height='50px' width='50px'></img>
                            <h4>Clubs</h4>
                            <p>Various internal clubs of college are included, where students can know, "What's getting popular in the college?"</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/ico/forum.jpg" height='50px' width='50px'></img>
                            <h4>Discussion Forum</h4>
                            <p>This is a special platform for every one to share and discuss the issues. It will help students to solve their issues and get the solutions.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <img src="images/ico/blog.jpg" height='50px' width='50px'></img>
                            <h4>Blogs</h4>
                            <p>Interested students can express their views in the form of blogs. This will explore the writing skills of students. </p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="app">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Notification an Android Application</h2>
                    <p class="lead">It provides students with the facility of online notice board. Registered students will get the notifications on their application.
					<br>Notices can be in any form. the students will also have facility to disable and enable notifications.<br>
					This application uses 'GCM' for sending notices across the network on android platform.</p>
                
                
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#app-->

    
    <section id="about-us">
        <div class="container">
            <div class="box">
                
                    <h2>About Project</h2>
                    <center>
                    <p class="lead">The Project 'TheAprender.org' is completed under Persistent B.E Project Activity under the Guidance of <br /><h3>Mr. Kundan Deotale Sir </h3><br/> <h4>(Persistent Systems, Nagpur)</h4><br /><h2> By</h2> <br />
				    
                <h4>Snehal Jayade<hr/>
                Sohail Qureshi<hr />
                Priti Baldawa<hr />
                Deepak Upase<hr/>
                Prajakta Rane<br /><br/>(Government College of Engineering , Amravati)</h4>
				</center>	
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Form</h1>
                        <p></p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Government college of Engineering, Amravati</strong><br>
                                    
                                    <abbr title="Phone">P:</abbr> 7588752553
                                </address>
                            </div>
                            
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                    <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="www.prajwalan.org/project">TheAprender</a>. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
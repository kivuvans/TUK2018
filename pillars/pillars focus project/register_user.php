<?php
session_start();
include("functions/functions.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pillars Focus</title>


<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link href="assets/css/flexslider.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/agc.css">
<link rel="stylesheet" href="assets/css/property.css">
<link rel="stylesheet" href="assets/css/ace.min.css">
<link href="assets/css/font-awesome.css" rel="stylesheet" />
</head>

<body class="login-layout">
   <!--  wrapper -->
   
    
<!-- start header -->
	<header>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar" >

<div class="container"><!-- start navbar container -->
<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                </button>
<a href="" class="navbar-brand text-center"><span style="color:palegreen; margin-bottom:5px; font-size:30px"> PILLARS FOCUS </span ></a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav ">
<li><a href="index.php"> Home</a> </li>
<li><a href="aboutus.php"> About Us</a> </li>
<li><a href="market.php"> Market</a> </li>
<li><a href="contacts.php"> Contact Us</a> </li>
</ul>
</div>
</div> <!-- end container -->
</nav>  <!-- end navbar -->
</header>
     <!-- Statistics Box -->
<!-- start of content container -->
<div class="container" style="margin-top:36px;">

<div class="row">
           
           <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<!--start login-->
                    <div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
                    <div class="position-relative">
	        		<div id="signup-box" class="signup-box visible widget-box no-border"> 
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to post ads: </p>

											<form action="register_user.php" method="post" enctype="multipart/form-data">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Firstname" name="firstname" required="required" />
															
														</span>
													</label>
                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Lastname" name="lastname" required="required" />
															<!-- <i class="ace-icon fa fa-envelope"></i> -->
														</span>
													</label>
                                                    
                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" name="email"  required="required"/>
															<!-- <i class="ace-icon fa fa-envelope"></i> -->
														</span>
													</label>
                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Phone Number" name="phone" required="required" />
															<!-- <i class="ace-icon fa fa-user"></i> -->
														</span>
													</label>

													<label class="block clearfix">
														<span class="block  input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username"  name="username" required="required" />
															<!-- <i class="ace-icon fa fa-user"></i> -->
														</span>
													</label>

													<label class="block clearfix">
														<span class="block   input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="password"  required="required"/>
															<!-- <i class="ace-icon fa  fa-lock"></i> -->
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" name="repeatpassword" required="required" />
														<!-- 	<i class="ace-icon fa fa-retweet"></i> -->
														</span>
													</label>

													<!-- <label class="block">
														<input type="checkbox" class="ace"  name="agreement" required="required"/>
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label> -->

													<div class="space-6"></div>

													<div class="clearfix">
														<button type="submit" name="register" class="width-65  btn btn-sm btn-success">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="login.php" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div>
                                </div>
                                </div>
                                </div>
	        		<!-- End login -->
	        	
	        	</div>
	        </div>
	    </div>   
     
                
</div> <!-- end container -->



</div>
<?php include("footer.php"); ?>

<?php 
$con = mysqli_connect("localhost","root","","pillarsfocus_db");
if(mysqli_connect_errno ()){
	echo"Failed to connect to MYSQL:" . mysqli_connect_error();
	}
if(isset($_POST['register'])){ 
$user_firstname=$_POST['firstname'];
$user_lastname=$_POST['lastname'];
$user_email=$_POST['email'];
$user_username=$_POST['username'];
$user_phoneno=$_POST['phone'];
$user_password=$_POST['password'];
$user_repeatpassword=$_POST['repeatpassword'];
$user_agreement=$_POST['agreement'];
$sel_email ="select * from users where email = '$user_email'";
	$run_email =mysqli_query($con, $sel_email);
	$check_email = mysqli_num_rows($run_email);
if($check_email==1){
		echo"<script>alert('Email is Already Registered')</script>";
		exit();
		}
elseif($password1!=$password2){
			echo"<script>alert('Password Do Not Match')</script>";
			exit();
			}
			else{
$insert_user = "insert into users (firstname,lastname,email,phone_no,username,password ) values( '$user_firstname','$user_lastname','$user_email','$user_phoneno','$user_username','$user_password')";		
 $run_user = mysqli_query($con, $insert_user);
 $_SESSION['email']=$user_email;
	echo " <script> alert('account created successfully ')</script>";
   echo " <script> window.open('dashboard.php','_self')</script>";
			}
}
 ?>

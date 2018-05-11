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

</div> -->
</div> <!-- end container -->
</nav>  <!-- end navbar -->
</header>
<br/>
<br />

<div class="container" style="margin-top:36px;">

<div class="row">
           
           <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<!--start login-->
                    <div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
                    <div class="position-relative">
	        		<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Admin login
											</h4>

											<div class="space-6"></div>

										  <form action="login.php" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Email/Username" name="email" required="required"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="password" required="required" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<div class="space"></div>
													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" name="login" class="width-35 pull-right btn btn-sm btn-primary">
															Login
														</button>
                                                        <hr style="color:#FFF"/>
                                                        
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

                                       <?php
 
if(isset($_POST['login'])){
	$password = $_POST['password'];
	$email = $_POST['email'];
	$sel_user = "select * from pillars_admin where email='$email' OR username='$email' AND password = '$password'";
	$run_user = mysqli_query($con, $sel_user);
	$check_user = mysqli_num_rows($run_user);
	if($check_user==0){
	echo " <script>alert('password or email is incorrect, please try again!') </script>";
	exit();
	}
	else {
		
        $_SESSION['email'] =$email;
        echo"<script>window.open('index.php','_self')</script>";
         
	
		}
}
?>     

											
</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											

											<div>
												<a href="register_user.php" data-target="#signup-box" class="user-signup-link">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
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
     <br><br>
                
</div> <!-- end container -->

</div>


    

</div> <!-- end wrapper -->

</body>
</html>
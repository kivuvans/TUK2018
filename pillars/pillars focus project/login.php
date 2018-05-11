<?php
include("header.php");
?>
     <!-- Statistics Box -->
<!-- start of content container -->
<div class="container" style="margin-top:100px; min-height: 480px">

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
												Please Enter Your Details
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
	$sel_user = "select * from users where email='$email' OR username='$email' AND password = '$password'";
	$run_user = mysqli_query($con, $sel_user);
	$check_user = mysqli_num_rows($run_user);
	if($check_user==0){
	echo " <script>alert('password or email is incorrect, please try again!') </script>";
	exit();
	}
	else {
		$_SESSION['email']=$email;
	
	echo " <script> window.open('market.php','_self')</script>";
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
 <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright" style="background:#333; color:#FFF;">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left"> 2017 PillarsFocus.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Design by <a href="">pillarsFocus.com</a>
                        
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->

 <!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
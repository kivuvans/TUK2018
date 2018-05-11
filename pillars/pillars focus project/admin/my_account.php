
                       <?php
		   
	if(isset($_GET['my_account'])){
		$email =$_SESSION['email'];	
	$get_user = "select * from pillars_admin where email= '$email'";
	
$run_user = mysqli_query($con, $get_user);
$i = 0;
while ($row_user= mysqli_fetch_array($run_user)){
$user_id= $row_user['id'];
$user_firstname=$row_user['first_name'];
$user_lastname=$row_user['last_name'];
$user_username=$row_user['username'];
$user_phoneno=$row_user['phone_no'];	
	$i++;
}
	}
	
?> 
<div class="col-lg-9">
 <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Personal account details</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<form class="form-horizontal" role="form" method="post" action="dashboard.php?my_account">

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">UserName</label>

										<div class="col-sm-9">
										  <input class="input-xlarge"  name="username" type="text" id="form-field-4" value="<?php echo $user_username; ?>" placeholder="username"  required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">First Name</label>

										<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" name="fname" value="<?php echo $user_firstname; ?>" placeholder="firstname"  required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Last Name</label>

										<div class="col-sm-9">
										  <input class="input-xlarge" type="text"  name="lname" id="form-field-4" placeholder="surname" value="<?php echo $user_lastname; ?>" required="required" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Phone Number</label>

										<div class="col-sm-9">
											<input class="input-xlarge" name="Phone" type="text" id="form-field-4" placeholder="+254725271712" value="<?php echo $user_phoneno; ?>"  required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									
<div class="space-4"></div>
<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="user_update">
												<i class="ace-icon fa fa-check "></i>
												Update
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo  bigger"></i>
												Refresh
											</button>
										</div>
									</div>

									
								</form> <!-- end of recent post -->
											 </div>
											</div>
										</div>
									</div>
            
                </div>

                <?php

//getting the text data from the fields
if(isset($_POST['user_update'])){

	$emails = $_SESSION['email'];
	var_dump($emails);
	$username= $_POST['username'];
	$firstname= $_POST['fname'];
	$lastname= $_POST['lname'];
	$phoneno= $_POST['Phone'];


$insert_user ="UPDATE pillars_admin set first_name='$firstname', last_name='$lastname', phone_no='$phoneno', username='$username' where email='$emails'";
var_dump($insert_user);

$connect_user = mysqli_query($con, $insert_user);
var_dump($connect_user);
if($connect_user){
	?>
    <script>
alert('update successful');


window.location = "dashboard.php";
</script>
<?php
	}
	else {
		echo " a problem occured";
}


	}
?>
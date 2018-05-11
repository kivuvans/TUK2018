<div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Add Company</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">												

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Company Name</label>

										<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" placeholder="Name" name="company_name"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>

<div class="space-4"></div>

									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Company Logo/Image</label>

										<div class="col-sm-9">
											 <input class="input-xlarge" type="file" id="form-field-4" placeholder="Place/Building" name="file" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									
<div class="space-4"></div>


<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Phone Number</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="07252....." name="phone" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Email Address</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="Email"  name="email" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Website Address</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="i.e pillarsfocus.com" name="webaddress" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
                <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Postal Address</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="Postal Address" name="address"  />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
                <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Company Location</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="Place/Building" name="location"  />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Description</label>

										<div class="col-sm-9">
										 <textarea class="form-control limited input-xlarge" id="form-field-9" maxlength="500" name="description" placeholder="Description" ></textarea>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>

									

									<div class="clearfix form-actions">
										<div class="col-md-offset-4 col-md-9">
											<button class="btn btn-info" type="submit" name="add_company">
												<i class="ace-icon fa fa-check "></i>
												Add Company
											</button>

										</div>
									</div>
                                    
                                     <?php

//getting the text data from the fields
if(isset($_POST['add_company'])){
	$emails = $_SESSION['email'];
	
    $name = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name']; 
	move_uploaded_file($temp_name,"company_images/$name");
	
	$company_name= $_POST['company_name'];
	$company_location= $_POST['location'];
	$phone_no= $_POST['phone'];
	$company_email= $_POST['email'];
	$website_link= $_POST['webaddress'];
	$company_description= $_POST['description'];

	
$insert_company ="insert into company(company_name,company_image,company_location,phone_no, company_email,website_link,company_description,user_email)values ('$company_name','$name','$company_location','$phone_no','$company_email','$website_link','$company_description','$emails')";

$insert_company = mysqli_query($con, $insert_company);
if($insert_company){
	?>
    <script>
alert('successful');


window.location = "dashboard.php";
</script>
<?php
	}
	else {echo " a problem occured";}


	}
?>
								</form> <!-- end of recent post -->
											 </div>
											</div>
										</div>
									</div>
            
                </div>
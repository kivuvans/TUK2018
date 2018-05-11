
<div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Edit Company</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
                                             <?php
	if(isset($_GET['edit_company'])){
    $edit_company = $_GET['edit_company'];
	$get_company = "select * from company where company_id= '$edit_company'";
$run_company = mysqli_query($con, $get_company);
$i = 0;
while ($row_company = mysqli_fetch_array($run_company)){
	$company_id= $row_company['company_id'];
	$company_name= $row_company['company_name'];
	$company_location= $row_company['company_location'];
	$phone_no=$row_company['phone_no'];
	$company_email=$row_company['company_email'];
	$website_link=$row_company['website_link'];
	$company_description= $row_company['company_description'];
	$user_email=$row_company['user_email'];
	$company_regdate=$row_company['reg_date'];
	$i++;
}
	}
	
?>           
												
<form class="form-horizontal" role="form" action="add_company.php" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4" >Company Name</label>

										<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" placeholder="Name" value="<?php echo $company_name ?>" name="company_name"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>

<div class="space-4"></div>

									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Company Logo/Image</label>

										<div class="col-sm-9">
											 <input class="input-xlarge" type="file" id="form-field-4" placeholder="Place/Building" name="logo" value="<?php echo $company_name?>"  required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									
<div class="space-4"></div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Company Location</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="Place/Building"vvalue="<?php echo $company_location ?>" name="location"  />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Phone Number</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="07252....." name="phone" <?php echo $phone_no ?> />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Email Address</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="Email"  name="email" value="<?php echo $company_email?>" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Website Address</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="i.e pillarsfocus.com" name="webaddress"  value="<?php echo $website_link ?>"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
                
                <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Location</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="city/town" name="location" value="<?php echo $company_location ?>"  />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Description</label>

										<div class="col-sm-9">
										 <textarea class="form-control limited input-xlarge" id="form-field-9" maxlength="500" name="description"  placeholder="Description" ><?php echo $company_description?></textarea>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">User Email</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="user email" name="user_email"  value="<?php echo $user_email ?>" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-4 col-md-9">
											<button class="btn btn-info" type="submit" name="edit_company" >
												<i class="ace-icon fa fa-check "></i>
												Update Company
											</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check "></i>
												Back
											</button>
										</div>
                                    </div>
                                    
                                     <?php

//getting the text data from the fields
if(isset($_POST['edit_company'])){
	
	$company_name= $_POST['company_name'];
	$company_location= $_POST['location'];
	$phone_no= $_POST['phone'];
	$company_email= $_POST['email'];
	$website_link= $_POST['webaddress'];
	$company_description= $_POST['description'];
	$user_email= $_POST['user_email'];
	
//getting the image from the field

	$product_image = $_FILES['logo'] ['name'];	
	$product_image_tmp = $_FILES['logo'] ['tmp_name'];
	move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
	
$insert_company ="update company set '$company_name'=company_name,'$product_image'=company_image,'$company_location'=company_location,'$phone_no'=phone_no,'$company_email'=company_email,'$website_link'=website_link,'$company_description'=company_description,'$user_email'=user_email";

$update_company = mysqli_query($con, $insert_company);
if($update_company){
	
	echo "<script>  alert('company has been updated!')</script>";
	
	}
	else {echo " a problem occured";}
echo"<script>windows.open('dashboard.php','_self')</script>";

	}
?>

								</form> <!-- end of recent post -->
											 </div>
											</div>
										</div>
									</div>
            
                </div>

 
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
	$c_image= $row_company['company_image'];
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
												
<form class="form-horizontal" role="form" action="" method="post">
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
								
   <input class="input-xlarge" type="file" id="form-field-4" placeholder="Place/Building" name="file" />     <img src="company_images/<?php echo $c_image ?>" width="60" height="60"/>                                     
                                             
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>

<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Phone Number</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="07252....." name="phone"  value="<?php echo $phone_no ?>" />
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

<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9 ">
                                   <div class="btn btn-info" >    <a href='dashboard.php?company_listing'><i class="ace-icon fa fa-check "></i>Back </a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button class="btn btn-info" type="submit" name="editcompany" >
												<i class="ace-icon fa fa-check "></i>
												Update Company
											</button>
                                           
										</div>
                                    </div>
                                    
                                     <?php

//getting the text data from the fields
if(isset($_POST['editcompany'])){
	$emails = $_SESSION['email'];
	$company_name= $_POST['company_name'];
	$company_location= $_POST['location'];
	$phone_no= $_POST['phone'];
	$company_email= $_POST['email'];
	$website_link= $_POST['webaddress'];
	$company_description= $_POST['description'];
	
//getting the image from the field
$name = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name']; 
	move_uploaded_file($temp_name,"company_images/$name");

	
$insert_company ="update company set company_name='$company_name',company_image='$product_image',company_location='$company_location',phone_no='$phone_no',company_email='$company_email',website_link='$website_link',company_description='$company_description',user_email='$emails' where company_id= $company_id";

$update_company = mysqli_query($con, $insert_company);
if($update_company){
	
	?>
    <script>
alert('update successful');


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
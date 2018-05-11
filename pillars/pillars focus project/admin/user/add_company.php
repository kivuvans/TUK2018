<?php 
include("functions/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pillars Focus</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
 <link href="css/flexslider.css" rel="stylesheet" />
<link rel="stylesheet" href="css/agc.css">
<link rel="stylesheet" href="css/property.css">
<link rel="stylesheet" href="css/ace.min.css">

</head>

<body>
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
<li><a href="index.html"> Home</a> </li>
<li><a href="aboutus.html"> About Us</a> </li>
<li><a href="market.html"> Market</a> </li>
<li><a href="articles.html">Articles </a> </li>
<li><a href="contacts.html"> Contact Us</a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
 <li><a href=""><span class="glyphicon  glyphicon-alert" style="color:palegreen"></span> Post ads</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user" style="color:palegreen"></span> Register</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in" style="color:palegreen"></span> Login</a></li>
      </ul>
</div>
</div> <!-- end container -->
</nav>  <!-- end navbar -->
</header>


      

<!-- start of content container -->
<div class="container" style="margin-top:30px;">


<hr />

<div class="row">
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-3">
                     <div class="alert alert-default text-center" style="background-color:#FFF">
                     <div class="panel-body">
                    
                        <div class="sidebar content-box" style="display: block;">
                        
                <ul class="nav" style="text-align:left">
                <span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Add profile pic" src="img/profile.png" />
												</span>
                    <!-- Main menu -->
                    <li class="current"><a href="dashboard.html"><i class="glyphicon glyphicon-home"></i> User Dashboard</a></li>
                     <li><a href="adminprofile.html"><i class="glyphicon glyphicon-user"></i>  My Account</a></li>
                    
                    <li><a href="productlisting.html"><i class="glyphicon glyphicon-pencil"></i> Add Product to Buy</a></li>
                      <li><a href="productlisting.html"><i class="glyphicon glyphicon-list"></i> Order listing</a></li>
                    <li><a href="productlisting.html"><i class="glyphicon glyphicon-pencil"></i> Add Product to Sell</a></li>
                      <li><a href="productlisting.html"><i class="glyphicon glyphicon-list"></i> Sell Listing</a></li>
                        <li><a href="productlisting.html"><i class="glyphicon glyphicon-pencil"></i>Advertise Company</a></li>
                    <li><a href="productlisting.html"><i class="glyphicon glyphicon-list"></i> Company Listing</a></li>
                    <li><a href="logout.html"><i class="glyphicon glyphicon-record"></i> logout</a></li>
                    
                </ul>
                
                
             </div>      
</div>             
                        
                        
                     </div>
                </div>
                
            <div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Add Company</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<form class="form-horizontal" role="form" action="add_company.php" method="post">
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
											 <input class="input-xlarge" type="file" id="form-field-4" placeholder="Place/Building" name="logo"  required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									
<div class="space-4"></div>

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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Location</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="city/town" name="location"  />
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
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">User Email</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4" placeholder="user email" name="user_email"  />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									

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

//getting the image from the field

	$product_image = $_FILES['logo'] ['name'];	
	$product_image_tmp = $_FILES['logo'] ['tmp_name'];
	move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
	
$insert_company ="insert into company(company_image)values('$product_image')";

$insert_company = mysqli_query($con, $insert_company);
if($insert_company){
	
	echo "<script>  alert('company has been inserted!')</script>";
	
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
               
                
                
</div> <!-- end row -->



</div>


    
</div> <!-- end wrapper -->
 <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright" style="background:#333; color:#FFF;">
            <div class="container" >
                <div class="col-md-6">
                    <p class="pull-left">© 2017 pillarsFocus</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right">Design by <a href="">pillarsFocus.com</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->

 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:100%;
      margin: auto;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/blink.js" language="javascript" type="text/javascript"></script>

</body>
</html>
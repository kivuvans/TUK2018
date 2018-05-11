 <div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Add  Product</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">											

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
	<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Post Type</label>

										<div class="col-sm-9">
										  <select class="chosen-select form-control input-xlarge" id="form-field-select-3" name="ptype">
										  	
										  	<option>  SELL ITEM </option>
										  	<option>  BUY ITEM </option>
										  </select>
                                                           
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Name</label>

										<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" name="proname" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>
<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Category</label>

										<div class="col-sm-9">
										  <select class="chosen-select form-control input-xlarge" id="form-field-select-3" name="category">
													
													 <?php 
             $get_cats="select * from product_category";
            $run_cats= mysqli_query($con,$get_cats);
                
            while($row_cats=mysqli_fetch_array($run_cats)){
                    
                    $category_id=$row_cats['category_id'];
                    $category_name=$row_cats['category_name'];
                    
                    echo " <option value=' $category_id '>  $category_name </option>";
                    
                    }
            ?>


			
		
															</select>
                                                           
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Image</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="file" name="file" id="fileToUpload">
                                             
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									
<div class="space-4"></div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Price</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4"  name="price"  />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Location</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4"  name="location" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Country</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4"  name="country" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Description</label>

										<div class="col-sm-9">
										 <textarea class="form-control limited input-xlarge" id="form-field-9" name="desc" maxlength="500" ></textarea>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
                <div class="space-4"></div>
                
									<div class="clearfix form-actions">
										<div class="col-md-offset-4 col-md-9">
											<button class="btn btn-info" type="submit" name="submit">
												<i class="ace-icon fa fa-check "></i>
												Add Product
											</button>
										</div>
									</div>
                                   
                                     <?php

//getting the text data from the fields
if(isset($_POST['submit'])){
$emails = $_SESSION['email'];
	
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name']; 
	move_uploaded_file($temp_name,"uploads/$name"); 
  
	$product_name= $_POST['proname'];
	$post_type= $_POST['ptype'];
	$product_category= $_POST['category'];
	$product_price= $_POST['price'];
	$product_location= $_POST['location'];
	$product_country= $_POST['country'];
	$product_description= $_POST['desc'];

	
	

	
	
$insert_product ="insert into product(post_type,product_name,category_name,product_image,product_price, product_location,product_country,product_description,user_email)values ('$post_type','$product_name','$product_category','$name','$product_price','$product_location','$product_country','$product_description','$emails')";

$connect_pro = mysqli_query($con, $insert_product);
if($connect_pro){
	echo "<script>  alert('product has been inserted!')</script>";
	echo "<script>  window.open('index.php?insert_product','_self')</script>";
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
               
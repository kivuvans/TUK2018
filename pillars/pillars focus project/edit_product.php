
            <div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Update  Product</h5>
											</div>
                                            
                                             <?php
	if(isset($_GET['edit_product'])){
    $edit_product = $_GET['edit_product'];
	$get_product = "select * from product where product_id= '$edit_product'";
$run_product = mysqli_query($con, $get_product);
$i = 0;
while ($row_product= mysqli_fetch_array($run_product)){
	$product_id= $row_product['product_id'];
	$product_name= $row_product['product_name'];
	$product_category= $row_product['category_name'];
	$product_image= $row_product['product_image'];
	$product_price= $row_product['product_price'];
	$product_location= $row_product['product_location'];
	$product_country= $row_product['product_country'];
	$product_description= $row_product['product_description'];
	
	$i++;
}
	}
	
?>     

										  <div class="widget-body">
											<div class="widget-main">											

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Name</label>

										<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" name="proname" value="<?php echo $product_name ?>" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>
<div class="form-group">

										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Category</label>

										<div class="col-sm-9">
										  <select class="chosen-select form-control input-xlarge" id="form-field-select-3" name="category" value="" >


											<?php
											$get_cats="select * from product_category";
            $run_cats= mysqli_query($con,$get_cats);
                
            while($row_cats=mysqli_fetch_array($run_cats)){
                    
                    $category_id=$row_cats['category_id'];
                    $category_name=$row_cats['category_name'];

			echo		"<option value='$category_id'> $category_name </option>";
			
		}?>
															</select>
                                                            
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Image</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="file" value="<?php echo $product_image ?>" name="file" id="fileToUpload" ><img src="uploads/<?php echo $product_image ?>" width="60" height="60"/>
                                             
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
									
<div class="space-4"></div>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Price</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4"  name="price" value="<?php echo $product_price ?>" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Location</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4"  name="location" value="<?php echo $product_location ?>" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Country</label>

										<div class="col-sm-9">
											<input class="input-xlarge" type="text" id="form-field-4"  name="country" value="<?php echo $product_country ?>" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
<div class="space-4"></div>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Product Description</label>

										<div class="col-sm-9">
										 <textarea class="form-control limited input-xlarge" id="form-field-9" name="desc" maxlength="500" ><?php echo $product_description ?></textarea>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
                <div class="space-4"></div>
                
<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9 ">
                                   <div class="btn btn-info" >    <a href='dashboard.php?product_listing'><i class="ace-icon fa fa-check "></i>Back </a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button class="btn btn-info" type="submit" name="editproduct" >
												<i class="ace-icon fa fa-check "></i>
												Update Product
											</button>
                                           
										</div>
                                    </div>
                                   
                                     <?php

//getting the text data from the fields
if(isset($_POST['editproduct'])){
$emails = $_SESSION['email'];
	
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name']; 
	move_uploaded_file($temp_name,"uploads/$name"); 
  
	$product_name= $_POST['proname'];
	$product_category= $_POST['category'];
	$product_price= $_POST['price'];
	$product_location= $_POST['location'];
	$product_country= $_POST['country'];
	$product_description= $_POST['desc'];
	
	
$insert_product ="update product set product_name='$product_name',category_name='$product_category',product_image='$name',product_price='$product_price', product_location='$product_location',product_country='$product_country',product_description='$product_description',user_email='$emails' where product_id=$product_id";

$connect_pro = mysqli_query($con, $insert_product);
if($connect_pro){
	?>
    <script>
alert('update successful');


window.location = "dashboard.php?product_listing";
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
               
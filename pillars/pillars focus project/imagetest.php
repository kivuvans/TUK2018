 
 <?php
 include('functions/functions.php'); ?>
 <form  action="imagetest.php" method="post">
								

										
											<input  type="file"  name="picture"  />
											
	<input  type="text"  name="company_name"  />
									


                <br />
									

									
											<button class="btn btn-info" type="submit" name="insert_post">
												
												Add Company
											</button>

									
                                    
                                    </form>
									<?php

//getting the text data from the fields
if(isset($_POST['insert_post'])){

$company_name= $_POST['company_name'];
	$product_image = $_FILES['picture'] ['name'];	
	$product_image_tmp = $_FILES['picture'] ['tmp_name'];
	move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
	
$insert_company ="insert into company(company_name,company_image)values ('$company_name','$product_image')";

$insert_company = mysqli_query($con, $insert_company);
if($insert_company){
	
	echo "<script>  alert('company has been inserted!')</script>";
	
	}
	else {echo " a problem occured";}


	}
?>
<?php
$con= mysqli_connect("localhost","root","","pillarsfocus_db");
if(mysqli_connect_errno ()){
	echo"Failed to connect to MYSQL:" . mysqli_connect_error();
	}
 ?>
 
 <?php
function getPro(){
		if(!isset($_GET['category']) && !isset($_GET['pro_id'])){
	global $con;
	
	$get_product = "select * from product where status = '1' AND post_type = 'SELL ITEM' order by reg_date LIMIT 0, 12";
	$run_pro = mysqli_query($con, $get_product);
	while($row_pro=mysqli_fetch_array($run_pro)){			
		$pro_id= $row_pro['product_id'];
		$pro_name= $row_pro['product_name'];
		$pro_brand= $row_pro['category_name'];
		$pro_country= $row_pro['product_country'];
		$pro_price= $row_pro['product_price'];
		$pro_desc= $row_pro['product_description'];
		$pro_image= $row_pro['product_image'];
		$pro_location= $row_pro['product_location'];
		 $pro_date= $row_pro['reg_date'];
		echo "
		<div class='col-sm-3 col-md-3'>
														<div class='thumbnail search-thumbnail'>
                                                            <img class='samesize img-responsive' src='uploads/$pro_image'/>
																<div class='caption'>
																	<div class='clearfix'>
																		<span class='pull-right label label-gray info-label'>Ksh. $pro_price</span>
</div>
<h5 class='search-title'>
																		<a href='#' class='blue'>$pro_name</a>
																	</h5>
																	<p>$pro_location</p>
                                                                    <p>$pro_date</p>
                                                                 <a href='market.php?pro_id=$pro_id'> <div class=' center'>  <button type='button' class='btn btn-sm btn-success'>
																View Details
																<i class='ace-icon fa fa-arrow-right icon-on-right bigger-11'></i>
															</button></div></a>
																</div>
															</div>
														</div>
														";
		}
	}
}



function getrelateditems(){
		if(!isset($_GET['category']) && !isset($_GET['pro_id'])){
	global $con;
	
	$get_product = "select * from product where status = '1'  order by reg_date LIMIT 0, 6";
	$run_pro = mysqli_query($con, $get_product);
	while($row_pro=mysqli_fetch_array($run_pro)){			
		$pro_id= $row_pro['product_id'];
		$pro_name= $row_pro['product_name'];
		$pro_brand= $row_pro['category_name'];
		$pro_country= $row_pro['product_country'];
		$pro_price= $row_pro['product_price'];
		$pro_desc= $row_pro['product_description'];
		$pro_image= $row_pro['product_image'];
		$pro_location= $row_pro['product_location'];
		 $pro_date= $row_pro['reg_date'];
		echo "
		<div class='col-sm-2 col-md-2'>
														<div class='thumbnail search-thumbnail'>
                                                            <img class='samesize img-responsive' src='uploads/$pro_image'/>
																<div class='caption'>
																	<div class='clearfix'>
																		<span class='pull-right label label-gray info-label'>Ksh. $pro_price</span>
</div>
<h5 class='search-title'>
																		<a href='#' class='blue'>$pro_name</a>
																	</h5>
																	<p>$pro_location</p>
                                                                    <p>$pro_date</p>
                                                                 <a href='market.php?pro_id=$pro_id'> <div class=' center'>  <button type='button' class='btn btn-sm btn-success'>
																View Details
																<i class='ace-icon fa fa-arrow-right icon-on-right bigger-11'></i>
															</button></div></a>
																</div>
															</div>
														</div>
														";
		}
	}
}
	 
	?>

 <?php

function getBuyPro(){
		if(!isset($_GET['category']) && !isset($_GET['pro_id'])){
	global $con;
	
	$get_product = "select * from product where status = '1' AND post_type = 'BUY ITEM' order by reg_date LIMIT 0, 12";
	$run_pro = mysqli_query($con, $get_product);
	while($row_pro=mysqli_fetch_array($run_pro)){			
		$pro_id= $row_pro['product_id'];
		$pro_name= $row_pro['product_name'];
		$pro_brand= $row_pro['category_name'];
		$pro_country= $row_pro['product_country'];
		$pro_price= $row_pro['product_price'];
		$pro_desc= $row_pro['product_description'];
		$pro_image= $row_pro['product_image'];
		$pro_location= $row_pro['product_location'];
		 $pro_date= $row_pro['reg_date'];
		echo "
		<div class='col-sm-3 col-md-3'>
														<div class='thumbnail search-thumbnail'>
                                                            <img class='samesize img-responsive' src='uploads/$pro_image'/>
																<div class='caption'>
																	<div class='clearfix'>
																		<span class='pull-right label label-gray info-label'>Ksh. $pro_price</span>
</div>
<h5 class='search-title'>
																	Looking for	<a href='#' class='blue'>$pro_name</a>
																	</h5>
																	<p>$pro_location</p>
                                                                    <p>$pro_date</p>
                                                                 <a href='market.php?pro_id=$pro_id'> <div class=' center'>  <button type='button' class='btn btn-sm btn-success'>
																View Details
																<i class='ace-icon fa fa-arrow-right icon-on-right bigger-11'></i>
															</button></div></a>
																</div>
															</div>
														</div>
														";
		}
	}
}
	 
	?>

 <?php
//getting categories
function getCategory(){
	global $con;
	
	$get_cats="select * from product_category order by category_name";
	$run_cats= mysqli_query($con,$get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		
		$cat_id=$row_cats['category_id'];
		$cat_title=$row_cats['category_name'];
		
		echo"<li><a href='market.php?category=$cat_id'> $cat_title </a></li>";
		
		}
	}


function getCatPro(){
	if(isset($_GET['category'])){
		$cat_id = $_GET['category'];
	global $con;
	
	$get_cat_pro = "select * from product where category_name= $cat_id";
	$run_cat_pro = mysqli_query($con, $get_cat_pro);
	$count_cats = mysqli_num_rows($run_cat_pro);
	if($count_cats==0){
		echo"<h2 style='padding:120px'>No products where found in this category!</h2>";
		}

		while($row_pro=mysqli_fetch_array($run_cat_pro)){
		
		$pro_id= $row_pro['product_id'];
		$pro_name= $row_pro['product_name'];
		$pro_brand= $row_pro['category_name'];
		$pro_country= $row_pro['product_country'];
		$pro_price= $row_pro['product_price'];
		$pro_desc= $row_pro['product_description'];
		$pro_image= $row_pro['product_image'];
		$pro_location= $row_pro['product_location'];
		 $pro_date= $row_pro['reg_date'];
		
		
		 
		echo "
		<div class='col-sm-3 col-md-3'>
															<div class='thumbnail search-thumbnail'>
                                                            <img class='samesize img-responsive' src=' uploads/$pro_image' />
																<div class='caption'>
																	<div class='clearfix'>
																		<span class='pull-right label label-gray info-label'>Ksh. $pro_price</span>
</div>
<h5 class='search-title'>
																		<a href='#' class='blue'>$pro_name</a>
																	</h5>
																	<p>$pro_location</p>
                                                                    <p>$pro_date</p>
                                                                 <a href='market.php?pro_id=$pro_id'> <div class=' center'>  <button type='button' class='btn btn-sm btn-success'>
																View Details
																<i class='ace-icon fa fa-arrow-right icon-on-right bigger-11'></i>
															</button></div></a>
																</div>
															</div>
														</div>
														";
			
		} 
	}
	}

function getProdetails(){
		
	
	
	if(isset($_GET['pro_id'])){
		global $con;
		
			
		$product_id = $_GET['pro_id'];	
         $get_pro = "select * from product where product_id= '$product_id'";
	$run_pro = mysqli_query($con, $get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id= $row_pro['product_id'];
		$pro_name= $row_pro['product_name'];
		$pro_brand= $row_pro['category_name'];
		$pro_country= $row_pro['product_country'];
		$pro_price= $row_pro['product_price'];
		$pro_desc= $row_pro['product_description'];
		$pro_image= $row_pro['product_image'];
		$pro_location= $row_pro['product_location'];
		 $pro_date= $row_pro['reg_date'];
		 $email= $row_pro['user_email'];
		 
		 
		  $get_phone = "select * from users where email= '$email'";
	$run_prophone = mysqli_query($con, $get_phone);
		 while ($row_phone=mysqli_fetch_array($run_prophone)){
			$phone_no= $row_phone['phone_no'];
		 }
		$get_title = "select * from product_category where category_id= '$pro_brand'";
	$run_title = mysqli_query($con, $get_title);
		 while ($row_title=mysqli_fetch_array($run_title)){
			$title= $row_title['category_name'];
		 
			 }
	
		echo "

		<div class='col-lg-3 '>
															
                                                            <img class='prodetails' src=' ../uploads/$pro_image' />
														</div> 
                                                        <div class=' col-lg-6'>
															<div class='thumbnail1 '>
                                               <div class='caption1'>
                                               <h1 class='search-title'>
																		<a href='#' class='blue'>$pro_name</a>
																	</h1>
                                                                    
																	<p><div class='clearfix'>
																		<span class='pull-left  info-label'>Location:  $pro_location</span>
</div></p>
<p><div class='clearfix'>
																		<span class='pull-left  info-label'>Post Time: $pro_date</span>
</div></p>
<p><div class='clearfix'>
																		<span class='pull-left  label-success '>Contact: $phone_no</span>
</div></p>
<p><div class='clearfix'>
																		<span class='pull-left  info-label'>Email: $email</span>
</div></p>
<p><div class='clearfix'>
																		<span class='pull-left  info-label'>Product Type: $title</span>
</div></p>


														                                                   
																</div>         
                                                        </div></div>
                                                       
                                                  
                                                  <div class=' col-lg-12'  >
                  
															<div class='thumbnail1 '>
                                               <div class='caption1'>
                                               <h2 class='search-title'>
																		<a href='#' class='blue'>Product Details</a>
																	</h2>
                                                                    
																	<p>
																	<div class='clearfix'>
																	$pro_desc
                                                                        
                                                                    </div>
                                                                    </p>

																</div>         
                                                        </div></div>                              

											  
											 
														";
			
		}
	}
}



function getmarketdetails(){
		global $con;
	if(isset($_GET['search'])){
		 $search_query= $_GET['name_search'];
         $get_pro = "select * from product where  product_name like'%$search_query%' or product_location like'%$search_query%' or post_type like'%$search_query%'";
	
	$run_pro = mysqli_query($con, $get_pro);

	$count_cats = mysqli_num_rows($run_pro);
	if($count_cats==0){
		echo"<h2 style='padding:120px'>Product search not found!</h2>";
		}
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id= $row_pro['product_id'];
		$pro_name= $row_pro['product_name'];
		$pro_brand= $row_pro['category_name'];
		$pro_country= $row_pro['product_country'];
		$pro_price= $row_pro['product_price'];
		$pro_desc= $row_pro['product_description'];
		$pro_image= $row_pro['product_image'];
		$pro_location= $row_pro['product_location'];
		 $pro_date= $row_pro['reg_date'];
		 $email= $row_pro['user_email'];
		 
		 
		  $get_phone = "select * from users where email= '$email'";
	$run_prophone = mysqli_query($con, $get_phone);
		 while ($row_phone=mysqli_fetch_array($run_prophone)){
			$phone_no= $row_phone['phone_no'];
		 }
		$get_title = "select * from product_category where category_id= '$pro_brand'";
	$run_title = mysqli_query($con, $get_title);
		 while ($row_title=mysqli_fetch_array($run_title)){
			$title= $row_title['category_name'];
		 
			 }
	
		echo "
		<div class='col-sm-3 col-md-3'>
															<div class='thumbnail search-thumbnail'>
                                                            <img class='samesize img-responsive' src=' uploads/$pro_image' />
																<div class='caption'>
																	<div class='clearfix'>
																		<span class='pull-right label label-gray info-label'>Ksh. $pro_price</span>
</div>
<h5 class='search-title'>
																		<a href='#' class='blue'>$pro_name</a>
																	</h5>
																	<p>$pro_location</p>
                                                                    <p>$pro_date</p>
                                                                 <a href='market.php?pro_id=$pro_id'> <div class=' center'>  <button type='button' class='btn btn-sm btn-success'>
																View Details
																<i class='ace-icon fa fa-arrow-right icon-on-right bigger-11'></i>
															</button></div></a>
																</div>
															</div>
														</div>
														";
			
		}
	}
}
	?>
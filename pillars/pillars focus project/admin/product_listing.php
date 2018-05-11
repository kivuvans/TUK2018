 <div class="col-lg-9">
            <div class="pricing-box" style="min-height:533px;">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Product Listing</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<form class="form-horizontal" action="" method="post">
                            
                                
                                <div class="panel-body">
                                <div class="col-md-12 col-xs-12">
                                   
                                    <div class='table-responsive'>
                                    <table class='table table-bordered table-striped table-actions '>
                                            <thead>
                                                <tr>
                                                	<tr id='trow_1'>
                                                    <th>Product ID</th>
                                                    <th>Product Name</th>
                                                     <th>Product Category</th>
                                                    <th>Product Image</th>
                                                     <th>Product Price</th>
                                                     <th>Product Location</th>
                                                   <th>Product Country</th>
                                                    <th>Status </th>
                                                   <th>View </th>
                                                    <th>Activate </th>
                                                    <th>Deactivate </th>
 </tr>
                                            </thead>
                                            <?php
                                            global $con;
                                            $p_email= $_SESSION['email'];
                                           
$get_product = "select * from product ";
$run_product = mysqli_query($con, $get_product);
$count_cats = mysqli_num_rows($run_product);
  if($count_cats==0){
    echo"<h2 style='padding:120px'>No product listing found!</h2>";
    }
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
  $status= $row_product['status'];
 //  if ($status=='0'){
 // $status = 'unfeatured';
 //  }
 //  else{$status = 'featured';}

	$i++;	

?>
 <tbody>                                         
                                             <tr id='trow_1'>
                                                   <td><?php echo $product_id?></td>
                                                   <td><?php echo $product_name?></td>
                                                   <td><?php echo $product_category?></td>
                                                   <td><?php echo $product_image?></td>
                                                   <td><?php echo $product_price?></td>
                                                   <td><?php echo $product_location?></td>
                                                   <td><?php echo $product_country?></td>
                                                   <?php  if ($status=='0'){ 

 echo"<td style='color:red;'>Unfeatured </td>";}
else{ 

 echo"<td style='color:blue;'>Featured </td>";


}
?>
 




                                                   
                                                   
      							<td><a href='dashboard.php?pro_id=<?php echo $product_id;?>'> Post Preview </a></td>
                   <td><a href='activate_product.php?activate_product=<?php echo $product_id;?>'> Activate  </a></td>
     							 <td><a href='deactivate_product.php?deactivate_product=<?php echo $product_id;?>'> Deactivate  </a></td>
     										 </tr>
                                            <?php }?>
                                              </tbody>
                                             </table>
                                            </div>
                                            </div>
                                </div>
                            
							  </form> <!-- end of recent post -->
											 </div>
											</div>
										</div>
									</div>
            
                </div>}

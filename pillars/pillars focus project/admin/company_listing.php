 <div class="col-lg-9">
            <div class="pricing-box">
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
                                                    <th>Company ID</th>
                                                    <th>Company Name</th>
                                                     <th>Company Location</th>
                                                    <th>Phone No.</th>
                                                     <th>Email Address</th>
                                                     <th>post Date</th>
                                                   <th>Status</th>
                                                   <th>View </th>
                                                    <th>Edit </th>
                                                    <th>Delete </th>
                                                    
                                                    
                                                   
                                                </tr>
                                            </thead>
                                            <?php
$get_company = "select * from company";
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

?>
 <tbody>                                         
                                             <tr id='trow_1'>
                                                   <td><?php echo $company_id?></td>
                                                   <td><?php echo $company_name?></td>
                                                   <td><?php echo $company_location?></td>
                                                   <td><?php echo $phone_no?></td>
                                                   <td><?php echo $company_email?></td>
                                                   <td><?php echo $company_regdate?></td>
                                                   <td>Active</td>
      							<td><a href='dashboard.php?company_details'> Post Preview </a></td>
                                 <td><a href='dashboard.php?edit_company=<?php echo $company_id;?>'> Edit  </a></td>
     							 <td><a href='delete_company.php?delete_company=<?php echo $company_id;?>'> Delete   </a></td>
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
            
                </div>
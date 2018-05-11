 <div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Manage User</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<form class="form-horizontal" action="" method="post">
                            
                                
                                <div class="panel-body">
                                <div class="col-md-12 col-xs-12">
                                   
                                    <div class='table-responsive'>
                                    <table class='table table-bordered table-striped table-actions '>
                                            <thead>
                                                
                                                	<tr id='trow_1'>
                                                    <th>User ID</th>
                                                    <th>First Name</th>
                                                     <th>Last Name</th>
                                                    <th>Username</th>
                                                     <th>Email</th>
                                                     <th>Phone Number</th>
                                                   <th>Reg Date</th>
                                                    <th>Status </th>                                                  
                                                    <th>Activate </th>
                                                    <th>Deactivate </th>
 </tr>
                                            </thead>
                                            <?php
                                            global $con;
                                            $p_email= $_SESSION['email'];
                                           
$get_product = "select * from users ";
$run_product = mysqli_query($con, $get_product);
$count_cats = mysqli_num_rows($run_product);
  if($count_cats==0){
    echo"<h2 style='padding:120px'>No Registered users!</h2>";
    }
$i = 0;
while ($row_product= mysqli_fetch_array($run_product)){
$user_id= $row_product['user_id'];
	$first_name= $row_product['firstname'];
	$last_name= $row_product['lastname'];
	$email= $row_product['email'];
	$phone_no= $row_product['phone_no'];
	$username= $row_product['username'];
	$reg_date= $row_product['reg_date'];
  $status= $row_product['status'];
  if ($status=='0'){
 $status = 'Inactive';
  }
  else{$status = 'active';}

	$i++;	

?>
 <tbody>                                         
                                             <tr id='trow_1'>
                                                   <td><?php echo $user_id?></td>
                                                   <td><?php echo $first_name?></td>
                                                   <td><?php echo $last_name?></td>
                                                   <td><?php echo $username?></td>
                                                   <td><?php echo $email?></td>
                                                   <td><?php echo $phone_no?></td>
                                                   <td><?php echo $reg_date ?></td>
                                                   <td><?php echo $status ?></td> 
                     <td><a href='activate_user.php?activate_user=<?php echo $user_id;?>'> Activate  </a></td>
     							 <td><a href='deactivate_user.php?deactivate_user=<?php echo $user_id;?>'> Deactivate  </a></td>
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
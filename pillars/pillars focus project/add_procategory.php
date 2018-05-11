
<?php
include("header.php");
?>

<!-- start of content container -->
<div class="container" style="margin-top:30px;">


<div class="row">
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-3">
                     <div class="alert alert-default text-center" style="background-color:#FFF">
                     <div class="panel-body">
                    <div class="thumbnail search-thumbnail">
                        <span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Add profile pic" src="img/profile.png" />
												</span>
                        <div class="space"></div>
                            
                           <div class="clearfix">
																		<span class=" center label label-info info-label">Evans Kivuva</span>
</div>
<p><a href=""> My Account</a></p>
<p><a href=""> My Listings</a></p>
<p><a href=""> Post New Product</a></p>
<p><a href=""> My Listings</a></p>
<p><a href=""> logout</a></p>
      
   </div>      
</div>             
                        
                        
                     </div>
                </div>
                
            <div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Add Product Category</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<form class="form-horizontal" role="form" action="add_procategory.php" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Category Name</label>
<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" placeholder="Category Name"  name="category" required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Description</label>
<div class="col-sm-9">
										 <textarea class="form-control limited input-xlarge" id="form-field-9" maxlength="500" placeholder="Description" name="description"></textarea>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
				</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Added_by</label>
<div class="col-sm-9">
										  <input class="input-xlarge" type="text" id="form-field-4" placeholder="Category Name"  name="admin_id" required="required"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>
<div class="space-4"></div>
<div class="clearfix ">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="category_submit" >
												<i class="ace-icon fa fa-check "></i>
												Add Category
											</button>
										</div>
									</div>
								</form> <!-- end of recent post -->
											 </div>
											</div>
                                            
                                         <?php 
										 if(isset($_POST['category_submit'])){
											$category_name = $_POST['category'];
											 $category_description = $_POST['description'];
											 $category_adminid = $_POST['admin_id'];
											 
		$insert_category = "insert into product_category (category_name,description,added_by) values('$category_name','$category_description','$category_adminid')";		
 $run_category = mysqli_query($con, $insert_category);

	echo " <script> alert('category added ')</script>";
   echo " <script> window.open('add_procategory.php','_self')</script>";
											 }
										 ?>   
                                            <div class="widget-body">
											<div class="widget-main">
                                            
                                           <div class="panel-body">
                                <div class="col-md-12 col-xs-12">
                                   
                                    <div class='table-responsive'>
                                    <table class='table table-bordered table-striped table-actions '>
                                            <thead>
                                                <tr>
                                                    <th>Cat ID</th>
                                                    <th>Cat Name</th>
                                                    <th>Description</th>
                                                    <th>Added by</th>
                                                    <th>Reg Date</th>
                                                    
                                               
                                                   <th>Active</th>
                                                    <th>Edit </th>
                                                    <th>Delete </th>
                                                    
                                                    
                                                   
                                                </tr>
                                            </thead>
                                            <?php

$get_cat = "select * from product_category";
$run_cat = mysqli_query($con, $get_cat);
$i = 0;
while ($row_cat = mysqli_fetch_array($run_cat)){
	$cat_id=$row_cat['category_id'];
	$cat_name= $row_cat['category_name'];
	$cat_description= $row_cat['description'];
	$addedby= $row_cat['added_by'];
	$reg_date= $row_cat['reg_date'];
	$i++;
	 
	

?>

 
                                         <tbody>                                         
                                             <tr id='trow_1'>
                                               <td><?php echo $cat_id;?></td>
                                                   <td><?php echo $cat_name;?></td>
                                                   <td><?php echo $cat_description;?></td>
                                                   <td><?php echo $addedby;?></td>
                                                   <td><?php echo $reg_date;?></td>
                                                   <td>active</td>
      							 <td><a href='edit_procategory.php'> Edit  </a></td>
     							 <td><a href='#'> Delete   </a></td>
     										 </tr>
                         <?php }?>
                                             </tbody>
                                             
                                            </table>
                                            </div>
                                            </div>
                                </div>
                                            </div>
                                            </div>  
                                            
                                            
										</div>
									</div>
            
                </div>
               
                
                
</div> <!-- end row -->



</div>




    
    
    
    <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp" style="background:#DDF7E1;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>
<hr class="soften"/>
                        <ul>
                            <li><a href="aboutus.html">About us</a>
                            </li>
                            <li><a href="">Articles</a>
                            </li>
                            <li><a href="">Ads</a>
                            </li>
                            <li><a href="contacts.html">Contact us</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top Articles/Ads</h4><hr class="soften"/>

                        <h5>Articles</h5>

                        <ul>
                            <li><a href="">The Hidden Treasure in Agri</a>
                            </li>
                            <li><a href="">Agri as a Key Pillar</a>
                            </li>
                            <li><a href="">The Mind of christ Towards Agri</a>
                            </li>
                        </ul>

                       

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Contact Us</h4>
                        <hr class="soften"/>

                        <p><strong>Pillars Focus Company.</strong>
                            <br>PO BOX 73510 - 00200
                            <br>Nairobi 
                          
                            <br>
                            <strong>Kenya</strong>
                        </p>
 </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4> <hr class="soften"/>

                        <p class="text-muted">Subscribe to get our weekly articles @PillarsFocus by giving your email</p>

                        <form>
                            <div class="input-group">

                                <input type="text" placeholder="Email Address" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default"  type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>
 </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** --> 
    
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
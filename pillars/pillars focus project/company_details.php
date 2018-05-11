 <div class="col-lg-9">
              <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="agri_companies.html"> Company</a> >>> Company details
                        </div>
                      <div class="panel-body">
                      <div style="text-align:center; float:left;">
                      
                      </div>
  

<div class="content-box-large">
<?php
			  				if(isset($_GET['comp_id'])){
			
		$company_id = $_GET['comp_id'];	
$get_company = "select * from company company_id= '$company_id'";
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
							}
							}
		?>
			  				<div class="panel-body">
			  				 <div style="color:#36F">
                               <h3> MKULIMA YOUNG. </h3>
                               <div class="date">posted on: 14 August 2014 by- evans </div>
                              </div>
                              
                                   
 <div class="col-xs-12 col-sm-12 col-md-12">
															<div class="thumbnail search-thumbnail  ">
                                                            
  <div class="row">																
																
<div class="col-xs-8 col-sm-3">
																	<div class="space visible-xs"></div>
																	
																	<div class="space-6"></div> 

																	 <span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Add profile pic" src="img/profile.png" />
												</span>
																</div>
																<div class="col-xs-12 col-sm-7">
																	<div class="space visible-xs"></div>

																	<div class="profile-user-info profile-user-info-striped">
																		<div class="profile-info-row">
																			<div class="profile-info-name"> Company Name </div>

																			<div class="profile-info-value">
																				<span>Mkulima Young</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Location /Building</div>

																			<div class="profile-info-value">
																				<i class="fa fa-map-marker light-orange bigger-110"></i>
																				<span>Nairobi, Kenya</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Email Address</div>

																			<div class="profile-info-value">
																				<span>kivuvans@gmail.com</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Phone Number </div>

																			<div class="profile-info-value">
																				<span>0725271712</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Website Link </div>

																			<div class="profile-info-value">
																				<span>3 hours ago</span>
																			</div>
																		</div>

																		<div class="profile-info-row">
																			<div class="profile-info-name"> Physical Address</div>

																			<div class="profile-info-value">
																				<span>53710 - 00200, Nairobi</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
                                                            <div class="hr hr-dotted"></div>                                                          <div class="caption1">
																	
<h4 class="search-title">
<a href="#" class="blue">More Details</a></h4>
																	<div class="caption1" style="font-size:16px">Cras justo odio, dapibus ac facilisis in, egestas eget quam ..  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.  	 
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet,   consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore   et. Lorem ipsum dolor sit amet.
                             Cras justo odio, dapibus ac facilisis in, egestas eget quam ..  		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.  	 </div>
                                                                    <div class=" center">  <button type="button" class="btn btn-sm btn-success">
																Connect with us
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
															</button></div>
                                                               </div>
															</div>
														</div>
                                                        
                                                       <!-- end of recent post -->
			  				</div>
                        </div>
                                    

                </div>
                </div>
                
       </div>
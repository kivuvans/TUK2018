<?php
include("header.php");
?>
<br/>


     <!-- Statistics Box -->
            

<!-- start of content container -->
<div class="container" style="margin-top:10px;">




<div class="row">
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-3">
                <!---start search -->	<div class="search-area well well-sm">
														<div class="search-filter-header bg-primary">
															<h5 class="smaller no-margin-bottom">
																<i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; Search Product
															/ Buyer by:</h5>
														</div>

														<div class="space-10"></div>

														<form action="market_search.php" method="GET" enctype="multipart/form-data">
															
														
<!-- <h4 class="green smaller">
															<i class="fa fa-tags"></i>
															Product Category
														
<input class="input-sm" type="text" id="form-field-4" name="cat_search" placeholder="eg.farm produce, equipment" />
</h4> -->

<div class="hr hr-dotted"></div>

														<h4 class="green smaller">
															<i class="fa fa-tags"></i>
															Product Name
														
<input class="input-sm" type="text" name="name_search" id="form-field-4" placeholder="eg. Onion" />
</h4>
<div class="hr hr-dotted"></div>

														<!-- <h4 class="green smaller">
															<i class="fa fa-tags"></i>
															Location
														
<input class="input-sm" type="text" name="location_search" id="form-field-4" placeholder="eg. Nairobi" /></h4> -->
<div class="hr hr-dotted"></div>

<div class="text-center">
															
<!-- <input type="submit" name="search" value="search"> -->
				<button type="submit" name="search" class="btn btn-info btn-round ">
																<i class="ace-icon fa fa-refresh green"></i>
																Searchh
															</button>
														</div>
</form>  
													</div><!---end search -->
                    <div class="panel">
                        
                        <div class="panel-body">
                            <h4 align="center">Top Ad Categories</h4>
                            <hr />
                          <ul class="list-unstyled" style=" margin-left:10px" >
                         <?php getCategory();

                         ?>


                          </ul>
                         
                        </div>
                       
                    </div>
                    
                    
        
        
      </div>
                
            <div class="col-lg-9">
            <div class="pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">Find your search product</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<div class="row">
<?php

getmarketdetails();


?>



</div> <!-- end of recent post -->
											
											 </div>
											</div>
										</div>
									</div>
            
                </div>
               
                
                
</div> <!-- end row -->
<hr />
<div class="col-xs-12 pricing-box">
										<div class="widget-box widget-color-green">
											<div class="widget-header">
												<h5 class="widget-title bigger lighter">see other items you may like</h5>
											</div>

										  <div class="widget-body">
											<div class="widget-main">
												
<div class="row">

	<?php

getrelateditems();


?>
														<div class="col-sm-2 col-md-2">
															<div class="thumbnail search-thumbnail">
                                                            
                                                            <img class="samesize" src="img/30.jpg" />
																<div class="caption">
																	<div class="clearfix">
																		<span class="pull-right label label-gray info-label">Ksh. 5000</span>
</div>
<h5 class="search-title">
																		<a href="#" class="blue">sukuma wiki</a>
																	</h5>
																	<p>Pangani Nairobi</p>
                                                                    <p>3/11/2017 10:41:20</p>
                                                                  <div class=" center">  <button type="button" class="btn btn-sm btn-success">
																View Details
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
															</button></div>
																</div>
															</div>
														</div>
                                                        
 
                                                        </div> <!-- end of recent post -->
													
											  </div>
											</div>
										</div>
									</div>

<hr />


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
                    <p class="pull-left">© 2017 pillarsfocus</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Design by <a href="">pillarsfocus.com</a>
                        
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
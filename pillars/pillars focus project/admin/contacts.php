<?php
include("header.php");
?>
<!-- start of content container -->
<div class="container" style="margin-top:10px;">
<div class="row">
  <div class="col-lg-3">
      <!---start search --> <div class="search-area well well-sm">
        <div class="search-filter-header bg-primary">
          <h5 class="smaller no-margin-bottom">
            <i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; Search Product
           by:</h5>
        </div>

        <div class="space-10"></div>

        <form action="market_search.php" method="GET" enctype="multipart/form-data">

<div class="hr hr-dotted"></div>

<h4 class="green smaller">
  <i class="fa fa-tags"></i>
  Product Name

  <input class="input-sm" type="text" name="name_search" id="form-field-4" placeholder="eg. Onion" />
</h4>
<div class="hr hr-dotted"></div>

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
                                <?php getCategory();?>


                              </ul>

                            </div>

                          </div>




                        </div>
           <div class="col-lg-9">
              <div class="panel panel-default">
                        <div class="panel-heading">
                         Contact us
                        </div>
                      <div class="panel-body">
                      <div style="text-align:center; float:left;">
                      
                      </div>
         <div class="panel panel-success">                    
           <div class="panel-body">
<div><strong><h4>Contact Info</h4></strong></div>
<h5>PILLARS LINK</h5> <br />
<h5>P.O BOX 73510 - 00200</h5> <br />
<h5>NAIROBI - KENYA.</h5><br />
<h5>EMAIL ADDRESS : info@pillarslink.com</h5><br />
<h5>PHONE NO. : 0725271712</h5> 
</div>
</div>
<br />
<br />

<div class="content-box-large">
			  				<div class="panel-heading">
								<div class="panel-title">Contact Form</div>
							</div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" action="">
							
									<fieldset>
										<legend>For any inquiry or comment, reach us through the form below.</legend>
									  <div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Name/company</label>
											<div class="col-md-8">
												<input class="form-control" placeholder="Name / company" type="text">
											</div>
										</div>
										
                                        <div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Phone Number</label>
											<div class="col-md-8">
												<input class="form-control" placeholder="Mobile Number" type="text">
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-md-2 control-label" for="text-field">Email Address</label>
											<div class="col-md-8">
												<input class="form-control" placeholder="Email Address" type="text">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label" for="textarea">Message</label>
											<div class="col-md-8">
												<textarea class="form-control" placeholder="Textarea" rows="4"></textarea>
											</div>
										</div>
									
												<button class="btn btn-primary  pull-right " style="text-align:center" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
									
									</fieldset>
                                    </form>
                                    </div>
                                    </div>
                                    

                </div>
                </div>
                
       </div>
              
</div> <!-- end container -->



</div>


<!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp" style="background:#DDF7E1;">
            <div class="container">
                <div class="row">

                </div>
            </div>

</div> <!-- end wrapper -->
 <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright" style="background:#333; color:#FFF;">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 PillarsFocus.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Design by <a href="">pillarsfocus.com</a>
                   </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

 <!-- Placed at the end of the document so the pages load faster -->
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
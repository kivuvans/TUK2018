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
													<div class="pricing-box">
														<div class="widget-box widget-color-green">
															<div class="widget-header">
																<h5 class="widget-title bigger lighter">Latest posted items</h5>
															</div>

															<div class="widget-body">
																<div class="widget-main">

																	<div class="row">
																		<?php
																		getpro();
																		getCatPro();
																		getProdetails();
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
														<h5 class="widget-title bigger lighter">latest posted and featured products</h5>
													</div>

													<div class="widget-body">
														<div class="widget-main">

															<div class="row">
																<?php
																		getlatest();
																		

																		?>





															</div> <!-- end of recent post -->

														</div>
													</div>
												</div>
											</div>

											<hr />


										</div>


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
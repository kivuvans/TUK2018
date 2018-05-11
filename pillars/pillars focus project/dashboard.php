<?php
include("header.php");
?>
<br />
<br />

<!-- start of content container -->
<div class="container" style="margin-top:10px;">

<div class="row">
                 <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-3">
                    <?php include("dashboard_left.php"); ?>
                </div> 

               <?php 
if(isset($_GET['add_company'])){
	include("add_company.php");
	}
elseif(isset($_GET['company_listing'])){
	include("company_listing.php");
	}
elseif(isset($_GET['edit_company'])){
	include("edit_company.php");
	}
elseif(isset($_GET['company_details'])){
	include("company_details.php");
	}
elseif(isset($_GET['add_product'])){
	include("add_product.php");
	}
elseif(isset($_GET['product_listing'])){
	include("product_listing.php");
	}	
elseif(isset($_GET['edit_product'])){
	include("edit_product.php");
	}
elseif(isset($_GET['pro_id'])){
	include("product_details.php");
	}	
elseif(isset($_GET['my_account'])){
	include("my_account.php");
	}	
else (include("user_dashboard.php"));
	?> 
                
             <!-- end row -->
</div>

    
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
  <script src="js/bootstrap.min.js" language="javascript" type="text/javascript"></script>
  <script src="js/blink.js" language="javascript" type="text/javascript"></script>
<script src="js/bootstrap.js" language="javascript" type="text/javascript"></script>

</body>
</html>

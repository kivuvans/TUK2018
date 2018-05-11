<?php
include("functions/functions.php"); 
if(isset($_GET['activate_product'])){
	$activate_id = $_GET['activate_product'];
	$activate_product= " update product set status = '1' where product_id = $activate_id";
	$run_activate = mysqli_query($con, $activate_product);
	if($run_activate){
		echo "<script>  alert('product has been activated!')</script>";
	echo "<script> window.open('dashboard.php?product_listing','_self')</script>";
		}
	}
?>
<?php
include("functions/functions.php"); 
if(isset($_GET['deactivate_product'])){
	$deactivate_id = $_GET['deactivate_product'];
	$deactivate_product= " update product set status = '0' where product_id = $deactivate_id";
	$run_deactivate = mysqli_query($con, $deactivate_product);
	if($run_deactivate){
		echo "<script>  alert('product has been Deactivated!')</script>";
	echo "<script> window.open('dashboard.php?product_listing','_self')</script>";
		}
	}
?>
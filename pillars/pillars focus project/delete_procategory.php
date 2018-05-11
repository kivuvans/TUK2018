<?php
include("functions/functions.php"); 
if(isset($_GET['delete_category'])){
	$delete_id = $_GET['delete_category'];
	$delete_category = " delete from product_category where category_id = '$delete_id'";
	$run_delete = mysqli_query($con, $delete_category);
	if($run_delete){
		echo "<script>  alert('product_category has been deleted!')</script>";
	echo "<script>  window.open('dashboard.php?view_cats','_self')</script>";
		}
	
	}

?>
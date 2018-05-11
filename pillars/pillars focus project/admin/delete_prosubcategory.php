<?php
include("functions/functions.php"); 
if(isset($_GET['delete_subcategory'])){
	$delete_id = $_GET['delete_subcategory'];
	$delete_subcategory = " delete from product_subcategory where subcategory_id = '$delete_id'";
	$run_delete = mysqli_query($con, $delete_subcategory);
	if($run_delete){
		echo "<script>  alert('product_subcategory has been deleted!')</script>";
	echo "<script>  window.open('dashboard.php?view_cats','_self')</script>";
		}
	
	}

?>
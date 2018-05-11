<?php
include("functions/functions.php"); 
if(isset($_GET['delete_company'])){
	$delete_id = $_GET['delete_company'];
	$delete_company = " delete from company where company_id = $delete_id";
	$run_delete = mysqli_query($con, $delete_company);
	if($run_delete){
		echo "<script>  alert('company has been deleted!')</script>";
	echo "<script> window.open('dashboard.php?company_listing','_self')</script>";
		}
	}
?>
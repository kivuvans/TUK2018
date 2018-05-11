<?php
include("functions/functions.php"); 
if(isset($_GET['deactivate_user'])){
	$activate_id = $_GET['deactivate_user'];
	$activate_product= " update users set status = '0' where user_id = $activate_id";
	$run_activate = mysqli_query($con, $activate_product);
	if($run_activate){
		echo "<script>  alert('user has been deactivated!')</script>";
	echo "<script> window.open('dashboard.php?manage_users','_self')</script>";
		}
	}
?>
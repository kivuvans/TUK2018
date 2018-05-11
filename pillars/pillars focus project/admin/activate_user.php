<?php
include("functions/functions.php"); 
if(isset($_GET['activate_user'])){
	$activate_id = $_GET['activate_user'];
	$activate_product= " update users set status = '1' where user_id = $activate_id";
	$run_activate = mysqli_query($con, $activate_product);
	if($run_activate){
		echo "<script>  alert('user has been activated!')</script>";
	echo "<script> window.open('dashboard.php?manage_users','_self')</script>";
		}
	}
?>


<?php

include("functions/functions.php");

session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pillars Focus</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link href="assets/css/flexslider.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/agc.css">
<link rel="stylesheet" href="assets/css/property.css">
<link rel="stylesheet" href="assets/css/ace.min.css">
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<link href="assets/dataTables/dataTables.bootstrap.css" rel="stylesheet"/>
</head>

<body>
   <!--  wrapper -->
<!-- start header -->
	<header>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar" >

<div class="container"><!-- start navbar container -->
<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                </button>
<a href="" class="navbar-brand text-center"><span style="color:palegreen; margin-bottom:5px; font-size:30px"> PILLARS FOCUS </span ></a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav ">
<li><a href="index.php"> Home</a> </li>
<li><a href="aboutus.php"> About Us</a> </li>
<li><a href="market.php"> Market</a> </li>
<!-- <li><a href="agri_companies.php"> Agri Companies</a> </li>
<li><a href="articles.php">Articles </a> </li> -->
<li><a href="contacts.php"> Contact Us</a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
         <?php
		 
		 if(!isset($_SESSION['email'])){
			 echo "<li><a href='login.php'><span class='glyphicon  glyphicon-alert' style='color:palegreen'></span> Post ads</a></li>";
			//  echo "<li><a href='register_user.php'><span class='glyphicon glyphicon-user' style='color:palegreen'></span> Register</a></li>";
			// echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in' style='color:palegreen'></span> Login</a></li>"; 
			 
			 }
			 else {
	echo "<li><a href='dashboard.php?add_product'><span class='glyphicon  glyphicon-alert' style='color:palegreen'></span> Post ads</a></li>";
	 echo "<li><a href='dashboard.php?my_account'>" . $_SESSION['email'] . "</a></li>";
	 echo "<li><a href='logout.php' ><span class='glyphicon glyphicon-log-in' style='color:palegreen'></span> Logout</a></li>";
	
				 }
				 
		  ?>
      </ul>
</div>
</div> <!-- end container -->
</nav>  <!-- end navbar -->
</header>
<br />
<br />
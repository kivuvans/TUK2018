<!DOCTYPE>
<?php
 include("functions/functions.php"); 
 ?>
<HTML>
<head><title> Inserting Product</title>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body bgcolor="skyblue">
<form action="" method="post" enctype="multipart/form-data">

<table width="795"  align="center" border="2" bgcolor="#187eae">

<tr align="center">
<td colspan="8"><h2>Insert new post here</h2> </td>
</tr>

<tr>
<td align="right"><b> Product Title:</b> </td>
<td><input type="text" name="product_title" /> </td>
</tr>






<tr>
<td align="right"><b> Product Image:</b> </td>
<td><input type="file" name="product" required/> </td>
</tr>


<tr>

<td colspan="7" align="center"><input type="submit" name="insert_post" value="insert_now"/> </td>
</tr>

</table>

</form>

</body>
</HTML>


<?php

//getting the text data from the fields
if(isset($_POST['insert_post'])){
	
	$product_cat= $_POST['product_cat'];
	$product_brand= $_POST['product_brand'];
	$product_title= $_POST['product_title'];
	$product_price= $_POST['product_price'];
	$product_desc= $_POST['product_desc'];
	$product_keywords= $_POST['product_keywords'];
	
//getting the image from the field

	$product_image = $_FILES['product'] ['name'];	
	$product_image_tmp = $_FILES['product'] ['tmp_name'];
	move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
	
$insert_product ="insert into products(product_image) values ('$product_image')";

$insert_pro = mysqli_query($con, $insert_product);
if($insert_pro){
	
	echo "<script>  alert('product has been inserted!')</script>";
	echo "<script>  window.open('index.php?insert_product','_self')</script>";
	}
	else {echo " a problem occured";}


	}
?>


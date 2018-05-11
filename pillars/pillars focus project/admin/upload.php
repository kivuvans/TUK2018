
<?php
 include("functions/functions.php"); 
 ?><!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php 
 if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name']; 
	move_uploaded_file($temp_name,"uploads/$name"); 
   $insert_product ="insert into products(product_image) values ('$name')";

$insert_pro = mysqli_query($con, $insert_product);
if($insert_pro){
	
	echo "<script>  alert('product has been inserted!')</script>";
	echo "<script>  window.open('index.php?insert_product','_self')</script>";
	}
	else {echo " a problem occured";}


	
}
?>

<!DOCTYPE html>
<?php include("includes/db.php"); ?>
<html>
<head>
	<title>Inserting Product</title>

	<link rel="stylesheet" href="widgEditor/css/widgEditor.css"/>
 <script src="widgEditor/scripts/widgEditor.js"></script>
</head>
<body bgcolor="skyblue">
<form action="insert_product.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" border="2" bgcolor="orange">
		<tr align="center">
			<td colspan="7"><h2>Insert New Post here</h2></td>
		</tr>
		<tr>
			<td align="right"><b>product Title:</b></td>
			<td ><input type="text" name="product_title" size="60" required /></td>
		</tr>
		<tr>
			<td align="right" ><b>product Category:</b></td>
			<td >
				<select name="product_cat">
					<option>Select a Categories</option>
					<?php 

						$get_cats="select * from categories";
    $run_cats=mysqli_query($con, $get_cats);
     while ($row_cats=mysqli_fetch_array ($run_cats)){

	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];

echo "<option value='$cat-id'>$cat_title</option>";
}
					 ?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right"><b>product Brand:</b></td>
			<td >
				<select name="product_brand">
					<option>Select a Brands</option>
					<?php 


						$get_brands="select * from brands";
$run_brands=mysqli_query($con, $get_brands);
while ($row_brands=mysqli_fetch_array ($run_brands)){

	$brand_id=$row_brands['brand_id'];
	$brand_title=$row_brands['brand_title'];

echo "<option value='$brand_id'>$brand_title</a></option>";
}

					 ?>
				</select>

			</td>
		</tr>
		<tr>
			<td align="right"><b>product Image:</b></td>
			<td ><input type="file" name="product_image"/></td>
		</tr>
		<tr>
			<td align="right"><b>product Price:</b></td>
			<td ><input type="text" name="product_price"/></td>
		</tr>
		<tr>
			<td align="right"><b>product Description:</b></td>
			<td >
				<textarea id="widgEditor" name="product_desc" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td align="right"><b>product Keywords:</b></td>
			<td ><input type="text" name="product_keywords" size="50" required /></td>
		</tr>
		
		<tr align="center">
			
			<td colspan="8"><input type="submit" name="insert_post" value="Insert Product Now" /></td>
		</tr>
		
	</table>
	
</form>

</body>
</html>


<?php 
//getting the text data from the fields
if(isset($_POST['insert_post'])){
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];

	$product_brand=$_POST['product_brand'];

	$product_price=$_POST['product_price'];

	$product_desc=$_POST['product_desc'];

	$product_keyword=$_POST['product_keywords'];
	
	//getting the image from the field
	$product_image=$_FILES['product_image']['name'];
	$product_image_tmp=$_FILES['product_image']['tmp_name'];

	move_uploaded_file($product_image_tmp,"product_image/$product_image");
//inserting data into data base
	 $insert_product="insert into products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keyword)values('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keyword')";

	$insert_pro = mysqli_query($con, $insert_product);
	if($insert_pro){
		echo "ok";
		echo "<script>alert('product has been inserted!')</script>";
		echo "<script>window.open('insert_product.php','_self')</script>";
	}
}



 ?>
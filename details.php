<!DOCTYPE html>
<?php include("functions/functions.php"); ?>
<html>
<head>
	<title>online shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- main container start here -->
	<div class="main_wrapper">
	<!-- header start here -->
		<div class="header_wrapper">
			<!-- heading image here -->
		</div>
		<!-- header end here -->

		<!-- navigation bar start here -->
		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All product</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li><div id="form">
				<form method="get" action="result.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="search for product"/>
					<input type="submit" name="search" value="search"/	>
				</form>
			</div>
			
			</ul>
			
		</div>

		<!-- navigation bar end here -->


		<!-- content wrapper start here -->
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
					<ul id="cats">
						<?php getCats(); ?>


					</ul>
					<div id="sidebar_title">Brands</div>
					<ul id="cats">
						<?php getBrands(); ?>
				
					</ul>

			</div>
				
			<div id="content_area">
				<div id="shopping_cart">
				<span style="color:white;float:right; font-size:18px; padding:5px; line-height:40px;">Welcom Guest!<b style="color:yellow">Shooping Cart-</b>Total Items:Total Price:<a href="cart.php">Go to Cart</a></span>
					
				</div>
			<div id="products_box">
				<?php 
				if(isset($_GET['pro_id'])){

					$product_id=$_GET['pro_id'];
					
	$get_pro="select * from products where product_id='$product_id'";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		$pro_desc=$row_pro['product_desc'];
		echo"

		<div id='single_product'>
		<h3>$pro_title</h3>
		<img src='admin_area/product_image/$pro_image' width='400' height='300'/>
		<p><b>$$pro_price</b></p>
		<p>$pro_desc</p>
		<a href='index.php' style='float:left;'>Go Back</a>
		<a href='index.php?pro_id=$pro_id'><button style='float:right;'>Add to Cart</botton></a>

		</div>

		";
		

	}
}

				 ?>
			</div>
				
			</div>
		</div>

		<!-- content wrapper start end -->
		
		<div id="footer">
			<h2 style="text-align:centre;padding-top:30px;">@2014 By Ramesh adhikari</h2>

		</div>
	</div>
	<!-- main container end here -->

</body>
</html>
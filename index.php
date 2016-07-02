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
				<li><a href="index.php">Home</a></li>
				<li><a href="all_product.php">All product</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
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
			<?php cart(); ?>
				<div id="shopping_cart">
				<span style="color:white;float:right; font-size:18px; padding:5px; line-height:40px;">Welcom Guest!<b style="color:yellow">Shooping Cart-</b>Total Items:<?php total_items(); ?>Total Price:<?php total_price(); ?><a href="cart.php">Go to Cart</a></span>
					
				</div>

			<div id="products_box">
				<?php getPro(); ?>
				<?php getCatPro(); ?>
				<?php getBrandPro(); ?>
			</div>
				
			</div>
		</div>

		<!-- content wrapper start end -->
		
		<div id="footer">
			<h2 style="text-align:centre;padding-top:30px;">@2014 By Ramesh adhikari</h2>

		</div>
	</div>
	<!-- main container end here -->

</body>
</html>
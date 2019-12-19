<!DOCTYPE>
<?php
session_start();

include("functions/functions.php");

?>
<html>
	<head>
	<title>My Online shop</title>
	<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>

	<body>
	
	
<!-- Main Wrapper starts here-->
	<div class="main_wrapper">
	
	
	<!-- Header starts here-->
	<div class="header_wrapper">
	<a href="index.php"><img id="logo" src="images/shoplogo.jpg"/>
	<img id="banner" src="images/banner.jpg"/>

		
	
	

	</div>
	<!-- Header ends here-->
	
	
	<!-- navigations bar starts here-->
	<div class="menubar active">
	
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All Products</a></li>
			<li><a href="customer/my_account.php">My Account</a></li>
			<li><a href="customer_register.php">Sign Up</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search a Product"/>
				<input type="submit" name="search" value="Search"/>
				</form>
		</div>
		
		
		
	</div>
	<!-- navigation bar ends here-->
	
	
	
	
	<!-- Content wrapper starts here-->
	<div class="content_wrapper">
	
	<div id="sidebar">
	
		<div id="sidebar_title"> Categories</div>
		
			<ul id="cats">
				
				<?php
				
				getCats();
				?>

		</ul>
		
				<div id="sidebar_title"> Brands</div>
		
			<ul id="cats">
				
				<?php
				
					getBrands();
					
					
					?>
		</ul>
	
	</div>
	
	<div id="content_area">
	
	<?php cart(); ?>
	
	<div id="shopping_cart">
		<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
			<?php
				if(isset($_SESSION['customer_email']))
			{
				
				echo"<b>Welcome:</b>".$_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>";
			}
			else{
				
				echo"<b>Welcome Guest:</b>";
			}
			?>
		
		
		
		
		<b style="color:yellow">Shopping Cart -</b> Total Items:<?php total_items(); ?> Total Price:<?php total_price(); ?> <a href="cart.php" style="color:yellow;">Go to Cart</a>
			
			<?php
			
			
			if(!isset($_SESSION['customer_email']))
			{
				
				echo"<a href='checkout.php' style='color:orange'>Login</a>";
				
			}
			
			else
			{
				
				echo"<a href='logout.php' style='color:orange'>Logout</a>";
				
			}



			?>
		
		
		
		</span>
	
	
	
	</div>
	
	
	<div id="products_box">
	
	
	<?php
	
	getPro();
	
	?>
	<?php getCatPro(); ?>
	<?php getBrandPro(); ?>
	
	</div>
	</div>
	<!-- Content wrapper ends here-->
	
	
	
	<div id="footer">
	<h2 style="text-align:center; padding-top:30px;"> Copyright &copy; OnlineShop By HuzafaQazi-All Rights Reserved!</h2>
	</div>
	
	
	
	</div>
	<!-- Main Wrapper ends here-->





	</body>
</html>
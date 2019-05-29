<?php 
	include 'config/connect.php ';
 ?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from carla-html.buzline.org/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2019 08:25:38 GMT -->
	<head>
		<title>Carla</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
		<!--====>> Favicon icon CSS <<====-->
		<link href="public/img/favicon/favicon.ico" type="image/x-icon" rel="shortcut icon" >
		
		<!--====>> Bootstrap V3 CSS <<====-->
		<link rel="stylesheet" href="public/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
		<!--====>> GOGLE FONTS <<====-->
		<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	
		<!--====>> Material design icons CSS <<====-->
		<link href="public/cdn.materialdesignicons.com/2.7.94/css/materialdesignicons.min.css" rel="stylesheet">
	
		<!--====>> Slick Slider CSS <<====-->
		<link href="public/cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" type="text/css" rel="stylesheet" />
	
		<!--====>> Custom select <<====-->
		<link href="public/cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	
		<!--====>> Photoswipe <<====-->
		<link rel="stylesheet" href="public/libs/photoswipe/photoswipe.css">
		<link rel="stylesheet" href="public/libs/photoswipe/default-skin.css">
		
		<!--====>> Index CSS <<====-->
		<link href="public/css/index.css" type="text/css" rel="stylesheet" />
	</head>
	<body class="home-page">
		<div class="preloader">
			<div class="preloader-container">
			  <div class="item-1"><div></div></div>
			  <div class="item-2"><div></div></div>
			  <div class="item-3"><div></div></div>
			  <div class="item-4"><div></div></div>
			  <div class="item-5"><div></div></div>
			  <div class="item-6"><div></div></div>
			  <div class="item-7"><div></div></div>
			  <div class="item-8"><div></div></div>
			  <div class="item-9"><div></div></div>
			</div>
		</div>
		<!-- Begin header -->
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="main-header">
						<div class="humburger-wrap">
							<div class="humburger"><span></span> <span></span> <span></span></div>
						</div>
						<div class="inner-wrap">
							<div class="main-header_logo">
								<a href="index.php" class="main-header_logo_link"><img src="public/img/logo.png" alt="img"></a>
							</div>
							<nav class="main-navigation">
								<div class="close-wrap">
									<p>Close</p>
									<span class="mdi mdi-window-close"></span>
								</div>
								<ul>
									<li><a class="active" href="index.php">Home</a></li>
									<li class="toggle-menu">
										<p>Pages <span class="mdi mdi-chevron-down"></span></p>
										<ul>
											<li><a href="about.php">About</a></li>
											<li><a href="categories.php">Categories</a></li>
											<li class="toggle-menu">
												<a href="product-page.php">Product Page <span class="mdi mdi-chevron-right"></span></a>
												<ul>
													<li><a href="product-page-2.php">Product Page 2 </a></li>
													<li><a href="product-page-3.php">Product Page 3 </a></li>
													<li><a href="product-page-4.php">Product Page 4 </a></li>
													<li><a href="product-page-5.php">Product Page 5 </a></li>
													<li><a href="product-page-6.php">Product Page 6 </a></li>
												</ul>
											</li>
											<li class="toggle-menu">
												<a href="shop-page.php">Shop Page <span class="mdi mdi-chevron-right"></span></a>
												<ul>
													<li><a href="shop-page-2.php">Shop Page 2 </a></li>
													<li><a href="shop-page-3.php">Shop Page 3 </a></li>
												</ul>
											</li>
											<li class="toggle-menu">
												<a href="blog.php">Blog <span class="mdi mdi-chevron-right"></span></a>
												<ul>
													<li><a href="single-post.php">Single Post</a></li>
												</ul>
											</li>
											<li><a href="contact.php">Contacts</a></li>
											<li><a href="account.php">My Account</a></li>
											<li><a href="cart.php">Cart</a></li>
											<li><a href="checkout.php">Checkout</a></li>
											<li><a href="wish-list.php">Wish List</a></li>
											<li><a href="typography.php">Typography</a></li>
										</ul>
									</li>
									<li><a href="shop-page.php">Woman</a></li>
									<li><a href="shop-page.php">Man</a></li>
									<li><a href="shop-page.php">Accesories</a></li>
								</ul>
								<div class="header-search">
									<span class="mdi mdi-magnify"></span>
									<span class="mdi mdi-close"></span>
									<form action="#" class="header-search-form">
										<select name="select" class="select-2">
											<option value="1">All Categories</option>
											<option value="2">Man</option>
											<option value="3">Wooman</option>
										</select>
										<input type="search" name="search" placeholder="Search here...">
										<button type="submit"><span class="mdi mdi-magnify"></span></button>
									</form>
								</div>
							</nav>
						</div>
						<div class="header-cart">
							<div class="cart-count">
								<span class="mdi mdi-cart-outline"></span>
								<div class="cart-count_number">26</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="popup-cart">
			<div class="popup-cart__head">
				<h2>Cart</h2>
				<span class="mdi mdi-close popup-cart__close"></span>
			</div>
			<div class="popup-cart__content">
				<div class="product-card-small">
					<a href="product-page.php"><img src="public/img/popup-product-1.jpg" alt="img"></a>
					<div class="product-card-small__content">
						<a href="product-page.php" class="h5">White Blouse<br>by Brand Name</a>
						<div class="product-card-small__info">
							<p>Size : <span>M</span></p>
							<p>Color : <span class="pink"></span></p>
						</div>
					</div>
					<div class="product-card-small__price">
						<p class="price">$145</p>
						<div class="inner-wrap">
							<a href="cart.php"><span class="mdi mdi-pencil"></span></a>
							<span class="mdi mdi-close delete-product"></span>
						</div>
					</div>
				</div>
				<div class="product-card-small">
					<a href="product-page.php"><img src="public/img/popup-product-2.jpg" alt="img"></a>
					<div class="product-card-small__content">
						<a href="product-page.php" class="h5">White Blouse<br>by Brand Name</a>
						<div class="product-card-small__info">
							<p>Size : <span>M</span></p>
							<p>Color : <span class="pink"></span></p>
						</div>
					</div>
					<div class="product-card-small__price">
						<p class="price">$145</p>
						<div class="inner-wrap">
							<a href="cart.php"><span class="mdi mdi-pencil"></span></a>
							<span class="mdi mdi-close delete-product"></span>
						</div>
					</div>
				</div>
				<div class="product-card-small">
					<a href="product-page.php"><img src="public/img/popup-product-3.jpg" alt="img"></a>
					<div class="product-card-small__content">
						<a href="product-page.php" class="h5">White Blouse<br>by Brand Name</a>
						<div class="product-card-small__info">
							<p>Size : <span>M</span></p>
							<p>Color : <span class="pink"></span></p>
						</div>
					</div>
					<div class="product-card-small__price">
						<p class="price">$145</p>
						<div class="inner-wrap">
							<a href="cart.php"><span class="mdi mdi-pencil"></span></a>
							<span class="mdi mdi-close delete-product"></span>
						</div>
					</div>
				</div>
				<div class="product-card-small">
					<a href="product-page.php"><img src="public/img/popup-product-4.jpg" alt="img"></a>
					<div class="product-card-small__content">
						<a href="product-page.php" class="h5">White Blouse<br>by Brand Name</a>
						<div class="product-card-small__info">
							<p>Size : <span>M</span></p>
							<p>Color : <span class="pink"></span></p>
						</div>
					</div>
					<div class="product-card-small__price">
						<p class="price">$145</p>
						<div class="inner-wrap">
							<a href="cart.php"><span class="mdi mdi-pencil"></span></a>
							<span class="mdi mdi-close delete-product"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="popup-cart__subtotal">
				<p>Order Total : <span id="subtotal">$345</span></p>
			</div>
			<div class="popup-cart__buttons">
				<a href="cart.php" class="button white">View Cart</a>
				<a href="checkout.php" class="button">Checkout</a>
			</div>
		</div>
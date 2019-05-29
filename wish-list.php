<?php
	include 'header.php'
?>
		<!-- End header -->
		<!-- Begin page name -->
		<section class="page-name">
			<div class="container">
				<!-- page-name.jpg -->
				<div class="row">
					<div class="col-md-12">
						<h1>Wish List</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>Pages</p></li>
							<li><p>Wish List</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		
		<!-- Begin wish content -->
		<main class="wish-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cart-table">
							<div class="thead">
								<div class="row">
									<div class="col-xs-4 col-sm-3 col-md-5 col-lg-5">
										<h5>Item</h5>
									</div>
									<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
										<h5>Price</h5>
									</div>
									<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
										<h5>Quantity</h5>
									</div>
								</div>
							</div>
							<div class="cart-products-list">
								<div class="cart__item">
									<div class="row">
										<div class="col-xs-12 col-sm-3 col-md-5 col-lg-5 d-flex">
											<a href="product-page.php" class="cart-product__logo">
												<img src="public/img/wish-product-1.jpg" alt="img">
											</a>
											<div class="cart-product-info">
												<h4>White Blouse <br> by Brand Name</h4>
												<div class="product-settings">
													<p class="size">Size : <span>M</span></p>
													<p class="color">Color : <span class="pink"></span></p>
												</div>
											</div>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
											<p class="price">$145</p>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
											<div class="counter-area">
												<span class="counter-button minus">-</span>
												<input type="text" name="counter" value="1">
												<span class="counter-button plus">+</span>
											</div>
										</div>
										<div class="col-mob col-xs-3 col-sm-3 col-md-2 col-lg-2">
											<a href="#" class="button">Add to Cart</a>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
											<div class="cart-product_options">
												<span class="mdi mdi-close delete-cart_product"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="cart__item">
									<div class="row">
										<div class="col-xs-12 col-sm-3 col-md-5 col-lg-5 d-flex">
											<a href="product-page.php" class="cart-product__logo">
												<img src="public/img/wish-product-2.jpg" alt="img">
											</a>
											<div class="cart-product-info">
												<h4>Gray Sweater <br> by Brand Name</h4>
												<div class="product-settings">
													<p class="size">Size : <span>M</span></p>
													<p class="color">Color : <span class="pink"></span></p>
												</div>
											</div>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
											<p class="price">$95</p>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
											<div class="counter-area">
												<span class="counter-button minus">-</span>
												<input type="text" name="counter" value="1">
												<span class="counter-button plus">+</span>
											</div>
										</div>
										<div class="col-mob col-xs-3 col-sm-3 col-md-2 col-lg-2">
											<a href="#" class="button">Add to Cart</a>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
											<div class="cart-product_options">
												<span class="mdi mdi-close delete-cart_product"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cart-controls">
								<div class="inner-wrap">
									<a href="#" class="button border">Update list</a>
									<a href="#" class="button white">Share Wish List</a>
									<a href="#" class="button border">Add All to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End wish content -->

		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>
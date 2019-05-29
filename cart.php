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
						<h1>Cart</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>Cart</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		
		<!-- Begin cart content -->
		<main class="cart-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cart-table">
							<div class="thead">
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-5 col-lg-5">
										<h5>Item</h5>
									</div>
									<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
										<h5>Price</h5>
									</div>
									<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
										<h5>Quantity</h5>
									</div>
									<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
										<h5>Subtotal</h5>
									</div>
								</div>
							</div>
							<div class="cart-products-list">
								<div class="cart__item">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-5 col-lg-5 d-flex">
											<a href="product-page.html" class="cart-product__logo">
												<img src="public/img/cart-product-1.jpg" alt="img">
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
										<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
											<p class="price subtotal">$145</p>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
											<div class="cart-product_options">
												<span class="mdi mdi-close delete-cart_product"></span>
												<span class="mdi mdi-border-color correct_product"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="cart__item">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-5 col-lg-5 d-flex">
											<a href="product-page.html" class="cart-product__logo">
												<img src="public/img/cart-product-2.jpg" alt="img">
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
										<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
											<p class="price subtotal">$95</p>
										</div>
										<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
											<div class="cart-product_options">
												<span class="mdi mdi-close delete-cart_product"></span>
												<span class="mdi mdi-border-color correct_product"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cart-controls">
								<div class="inner-wrap">
									<a href="#" class="clear-cart button border">Clear Cart</a>
									<a href="#" class="button white">Update Cart</a>
								</div>
								<a href="#" class="button border">Continue</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="cart-form-list">
							<form action="#" class="cart-form">
								<h3>Coupon Discount :</h3>
								<p>Nullam et felis eros. Cras vehicula convallis nisi.</p>
								<select name="select" class="select-2">
									<option value="1">Viet Nam</option>
									<option value="2">Viet Nam 2</option>
									<option value="3">Viet Nam 3</option>
								</select>
								<input type="text" name="city" placeholder="State / City">
								<input type="text" name="zip" placeholder="Postcode (ZIP)">
								<button type="submit" class="border">Get a Quote</button>
							</form>
							<form action="#" class="cart-form">
								<h3>Coupon Discount :</h3>
								<p>Nullam et felis eros. Cras vehicula convallis nisi.</p>
								<input type="text" name="code" placeholder="Enter your code here">
								<button type="submit" class="border">Apply Coupon</button>
							</form>
							<div class="invoice-wrap">
								<div class="invoice">
									<div class="invoice-info">
										<div class="inner-invoice">
											<div class="list-invoice">
												<h5>Subtotal : <span>$335</span></h5>
												<p>Shipping : <span>$10</span></p>
											</div>
											<h3>Order Total : <span>$345</span></h3>
										</div>
									</div>
									<a href="checkout.html" class="button border">Procesed to Checkout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End cart content -->
		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
	<?php
	include 'footer.php'
	?>
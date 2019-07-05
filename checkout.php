<?php
	include 'header.php';
	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $key => $value) {
			$product = $value['quantity'] * $value['price'];
			$total+=$product;
		}

	}
?>
		<!-- End header -->
		<!-- Begin page name -->
		<section class="page-name">
			<div class="container">
				<!-- page-name.jpg -->
				<div class="row">
					<div class="col-md-12">
						<h1>Checkout</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>Checkout</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		
		<!-- Begin checkout content -->
		<main class="checkout-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form action="#" class="checkout-form">
							<div class="user-info">
								<h2>Billing Details</h2>
								<div class="row-input">
									<div class="input-wrap">
										<input type="text" name="name" placeholder="First Name">
									</div>
									<div class="input-wrap">
										<input type="text" name="last-name" placeholder="Last Name">
									</div>
								</div>
								<input type="text" name="company" placeholder="Company Name">
								<div class="row-input">
									<div class="input-wrap">
										<input type="email" name="email" placeholder="E-mail Address">
									</div>
									<div class="input-wrap">
										<input type="tel" name="phone" placeholder="Phone">
									</div>
								</div>
								<input type="text" name="address-1" placeholder="Address 1">
								<input type="text" name="address-2" placeholder="Address 2">
								<input type="text" name="country" placeholder="Country">
								<input type="text" name="city" placeholder="Town / City">
								<div class="row-input">
									<div class="input-wrap">
										<input type="text" name="state" placeholder="State / Country">
									</div>
									<div class="input-wrap">
										<input type="text" name="zip" placeholder="Postcode / ZIP">
									</div>
								</div>
								<div class="agree">
									<input type="radio" name="agree" id="agree" required>
									<label for="agree">I have read and agree to the Terms & Conditions</label>
								</div>
							</div>
							<div class="order-info">
								<h2>Your Order</h2>
								<div class="invoice">
									<div class="invoice-info">
										<div class="inner-invoice">
											<div class="list-invoice">
												<h5>Subtotal : 
													<span><?php 
													if(isset($total)){
														echo $total;
													}
													else{
														echo 0;
													}
													?> $
													</span></h5>
												<p>Shipping : <span>$10</span></p>
											</div>
											<h3>Order Total : <span>
												<?php echo isset($total) ? $total+=10 : '0' ?>
													$
												</span></h3>
										</div>
									</div>
									<button type="submit" class="border">Complete Order</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
		<!-- End checkout content -->

		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
		<?php
	include 'footer.php'
?>
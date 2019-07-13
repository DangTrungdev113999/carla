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
					
					<div id="listCart">
						<?php 
						if(isset(($_SESSION["cart"])) && sizeof($_SESSION["cart"],0) > 0 ){ 
							$total=0;
							?>
							<div class="cart-products-list" style="width: 100%;" >
								<?php foreach($_SESSION["cart"] as $key => $sp): ?>
									<div class="cart__item">
										<div class="row" id="itemCart<?php echo $key; ?>">
											<div class="col-xs-12 col-sm-4 col-md-5 col-lg-5 d-flex">
												<a href="product-page.php?id=<?php echo $key;  ?>" class="cart-product__logo">
													<img src="public/img/<?php echo $sp['image']; ?>" alt="img">
												</a>
												<div class="cart-product-info">
													<h4><?php echo $sp['name']; ?></h4>
													<div class="product-settings">
														<p class="size">Size : <span>M</span></p>
														<p class="color">Color : <span class="pink"></span></p>
													</div>
												</div>
											</div>
											<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
												<p class="price"><?php echo $sp['price'].' $'; ?></p>
											</div>
											<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
												<div class="counter-area">
													<span class="counter-button minus" 
													onclick= "updateQuantity2(<?php echo $key; ?>,-1)" >-</span>
													<input type="text" 
													name="counter" 
													id="quantity_<?php echo $key; ?>"
													onchange= "updateQuantity1(<?php echo $key; ?>)"
													value=<?php echo $sp['quantity']; ?>>
													<span class="counter-button plus" 
													onclick= "updateQuantity2(<?php echo $key; ?>, 1)"
													>+</span>
												</div>
											</div>
											<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
												<p class="price subtotal">
													<?php echo $sp['price']*$sp['quantity'].' $';
													$total+=$sp['price']*$sp['quantity']; 
													?>
												</p>
											</div>
											<div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
												<div class="cart-product_options">
													<span 
													class="mdi mdi-close"
													onclick="deleteProduct(<?php echo $key; ?>)"
													></span>
													<span class="mdi mdi-border-color correct_product"></span>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<div class="cart-controls">
								<div class="inner-wrap">
									<a href="#" class="clear-cart button border">Clear Cart</a>
									<a href="#" class="button white">Update Cart</a>
								</div>
								<a href="index.php" class="button border">Continue Buy</a>
							</div>
						</div>
					<?php }else{
						echo "<br/>
						<h2 class='alert alert-danger'>Your Cart don't have any products !!!</h2>";
					} ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="cart-form-list">
					<form action="#" class="cart-form">
						<h3>Coupon Discount :</h3>
						<p>Nullam et felis eros. Cras vehicula convallis nisi.</p>
						<input type="text" name="code" placeholder="Enter your code here">
						<button type="submit" class="border">Apply Coupon</button>
					</form>
					
					<div class="invoice-wrap" >
						<?php if(isset($total)){ ?>
							<div class="invoice" id="totalPrice">
								<div class="invoice-info">
									<div class="inner-invoice" id="checkoutCart">
										<div class="list-invoice">
											<h5>Subtotal : <span><?php 
											if(isset($total)){
												echo $total; 
												echo ' $';
											}
											?></span></h5>
											<p>Shipping : <span>
												<?php 
												if(isset($total)){
													echo "10 $";
												}
												?>

											</span></p>
										</div>
										<h3>Order Total : <span><?php  
										if(isset($total)){
											echo $total+=10;
											echo " $";
										}
										?></span></h3>
									</div>
								</div>
								<a href="checkout.php" class="button border" 
								id="closeCheckout" >Procesed to Checkout</a>
							</div>
						<?php } ?>
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
include 'footer.php';
?>

<div class="popup-cart">
	<div class="popup-cart__head">
		<h2>Cart</h2>
		<span class="mdi mdi-close popup-cart__close"></span>
	</div>
	<div class="popup-cart__content" id="sub-cart">
		<?php 
		if(isset(($_SESSION["cart"])) && sizeof($_SESSION["cart"],0) > 0 ){ 
			?>

			<?php foreach($_SESSION["cart"] as $key => $sp): ?>
				<div class="product-card-small"  >
					<a href="product-page.php">
						<img src="public/img/<?php  echo $sp['image'] ?>" alt="img"></a>
						<div class="product-card-small__content">
							<a href="product-page.php?id=<?php echo $sp['id']; ?>" class="h5">
								<?php  echo $sp['name'] ?><br>by Brand Name</a>
								<div class="product-card-small__info">
									<p>Size : <span>M</span></p>
									<p>Color : <span class="pink"></span></p>
								</div>
							</div>
							<div class="product-card-small__price">
								<p class="price">
									<?php echo $sp['price']; 
									?>
								</p>
								<div class="inner-wrap">
									<a href="cart.php"><span class="mdi mdi-pencil"></span></a>
									<span class="mdi mdi-close"
									onclick= "deleteProduct(<?php echo $key; ?>)"
											
									></span>
								</div>
							</div>
						</div>
					<?php  endforeach; ?>
					<?php }else{
					echo "<h3>Your cart don't have any products</h3>";
					} ?>
				</div>
				<div class="popup-cart__buttons">
					<a href="cart.php" class="button white">View Cart</a>
					<a href="checkout.php" class="button">Checkout</a>
				</div>
	
		</div>


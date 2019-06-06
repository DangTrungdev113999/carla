<?php 
$newArrivals = mysqli_query($conn, 'SELECT * FROM PRODUCT ORDER BY ID DESC');
?>
<section class="new-arrivals-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="new-arrivals-wrap">
					<div class="new-arrivals-head">
						<h2>New <br> Arrivals</h2>
						<div class="slider-buttons">
							<span class="mdi mdi-arrow-left new-arrivals-prev slider-arrow"></span>
							<span class="mdi mdi-arrow-right new-arrivals-next slider-arrow"></span>
						</div>
					</div>
					<div class="new-arrivals-slider-wrap">
						<div class="new-arrivals-slider">
							<?php foreach($newArrivals as $n => $sp): ?>
								<div class="slider-card">
									<div class="product-card">
										<div class="product-card-logo">
											<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
											<div class="tag-list">
												<div class="tag">New</div>
												<div class="tag sale-tag">
													<?php 
													if($sp['sale_price']){
														echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 );
														echo '%';
													}
													?>
												</div>
											</div>
											<ul class="product-card__control">
												<li><a><span class="mdi mdi-cart-outline" onclick="addToCart(
													<?php echo $sp['id']; ?>
													,1)"></span></a></li>
													<li><a href="#"><span class="mdi mdi-heart-outline"></span></a></li>
													<li><a href="#"><span class="mdi mdi-compare"></span></a></li>
												</ul>
											</div>
											<div class="product-card-info">
												<ul class="rating">
													<li><span class="mdi mdi-star"></span></li>
													<li><span class="mdi mdi-star"></span></li>
													<li><span class="mdi mdi-star"></span></li>
													<li><span class="mdi mdi-star-half"></span></li>
													<li><span class="mdi mdi-star-outline"></span></li>
												</ul>
												<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4">
													<?php echo $sp['name'] ?></a>
													<p class="price">
														<?php 
														if ($sp['sale_price']){
															echo '$';
															echo $sp['sale_price'];	
														}
														else
															echo $sp['price'];																						
														?>
														<span class="sale">
															<?php 
															if($sp['sale_price']) {							echo $sp['price'];				
														}

														?>											
													</span>
												</p>
											</div>
										</div>
									</div>
								<?php endforeach; ?>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- End new arrivals -->
	<!-- Begin instagram widget wrap -->
	<?php include('home-instagram.php'); ?>
	<!-- End instagram widget wrap -->
	<div class="bg-popup"></div>
	
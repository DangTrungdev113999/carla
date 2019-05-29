<?php
	include 'header.php';
	$banner = mysqli_query($conn, "select * from banner");
	$products = mysqli_query($conn, 'select * from product');
	$Woman = mysqli_query($conn, 'select * from product where category_id = 2');
	$Man = mysqli_query($conn, 'select * from product where category_id = 1');
	$Accessories = mysqli_query($conn, 'select * from product where category_id = 7');
	$Tranding = mysqli_query($conn, 'select * from product where category_id = 5');
	$topRated = mysqli_query($conn, 'select * from product where category_id = 6');
	// echo $banner
?>
		<!-- End header -->
		<!-- Begin home content -->
		<main class="home-content">
			<!-- Begin main slider banel -->
			<section class="main-slider-wrap">
				<div class="main-slider to-count-slider animate-slider">
					<?php 
							foreach($banner as $k => $bn) :
						 ?>
					<div class="slider-card">
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-lg-8">
									<div class="main-slider-desc">
										<p class="main-slider__sale">Up to -50%</p>
										<p class="h1"><?php echo $bn['name'] ?></p>
										<p class="main-slider__text"><?php echo $bn['content'] ?></p>
										<div class="link-wrap"><a href="categories.php" class="link">Discover</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="main-slider__image">
							<a href="categories-2.php">
								<img src="public/img/<?php echo $bn['image'] ?> " alt="img"></a>
						</div>
					
					</div>
					<?php  endforeach; ?>
				</div>
				<button type="button" class="main-slider__navigation next">Next <span class="mdi mdi-arrow-right"></span></button>
				<button type="button" class="main-slider__navigation prev"><span class="mdi mdi-arrow-left"></span> Prev</button>
			
				<div class="social-wrap">
					<ul class="social-list-second">
						<li><a href="#" target="_blank"><span class="mdi mdi-instagram"></span> Instagram</a></li>
						<li><a href="#" target="_blank"><span class="mdi mdi-twitter"></span> Twitter</a></li>
						<li><a href="#" target="_blank"><span class="mdi mdi-facebook"></span> Facebook</a></li>
					</ul>
				</div>
			</section>
			<!-- End main slider -->
			<!-- Begin home about -->
			<section class="home-about">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="home-about__content">
								<div class="home-about__logo">
									<img src="public/img/about-img.jpg" alt="img">
								</div>
								<div class="home-about__text">
									<p class="h1">About<br><strong>Carla Shop</strong></p>
									<p>Nulla facilisi. Pellentesque risus ipsum, gravida nec quam et, ultricies pulvinar ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus interdum mus. Pellente  fringilla tempus quam, suscipit dignissim nunc lacinia nonsque sit amet tellus eros. Curabitur sed nibh lobortis, interdum nisl eget, efficitur nisl.</p>
									<a href="about.php" class="link">About Us</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<ul class="benefit-list">
								<li>
									<div class="benefit-card">
										<img src="public/img/free-delivery.png" alt="img">
										<div class="benefit__text">
											<h4>Free Shipping</h4>
											<p>Donec purus est, elementum at auctor vel, scelerisque ac.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="benefit-card">
										<img src="public/img/wallet.png" alt="img">
										<div class="benefit__text">
											<h4>14 Days Easy Return</h4>
											<p>Donec purus est, elementum at auctor vel, scelerisque ac.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="benefit-card">
										<img src="public/img/headphones.png" alt="img">
										<div class="benefit__text">
											<h4>24/7 Customer Support</h4>
											<p>Donec purus est, elementum at auctor vel, scelerisque ac.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- End home about -->
			<!-- Begin home products -->
			<section class="home-products">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2 class="section-header">Our Products</h2>
							<div class="grid-wrap">
								<div class="grid-filter">
									<ul>
										<li><a href="#" data-filter="*" class="active">All</a></li>
										<li><a href="#" data-filter=".group1">Wooman</a></li>
										<li><a href="#" data-filter=".group2">Man</a></li>
										<li><a href="#" data-filter=".group3">Accessories</a></li>
										<li><a href="#" data-filter=".group4">Tranding</a></li>
										<li><a href="#" data-filter=".group5">Top Rated</a></li>
									</ul>
								</div>
								<div class="grid">
									<div class="grid-item group1">
										<?php foreach($Woman as $n => $sp): ?>
										<div class="product-card">
											<div class="product-card-logo">
												<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
												<div class="tag-list">
													<div class="tag">New</div>
													<div class="tag sale-tag"><?php 
													if($sp['sale_price'])
														echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 )
													 ?>%</div>
												</div>
												<ul class="product-card__control">
													<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
												<a href="product-card.php" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price">$<?php 
												if ($sp['sale_price'])
													echo $sp['sale_price'];	
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
												if($sp['sale_price']) {													
												}
													echo $sp['price']
												 ?>
												 	
												 </span></p>
											</div>
										</div>
									<?php  endforeach; ?>
									</div>
									<div class="grid-item group2">
										<?php foreach($Man as $n => $sp): ?>
										<div class="product-card">
											<div class="product-card-logo">
												<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
												<div class="tag-list">
													<div class="tag">New</div>
													<div class="tag sale-tag"><?php 
													if($sp['sale_price'])
														echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 )
													 ?>%</div>
												</div>
												<ul class="product-card__control">
													<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
												<a href="product-card.php" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price">$<?php 
												if ($sp['sale_price'])
													echo $sp['sale_price'];	
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
												if($sp['sale_price']) {													
												}
													echo $sp['price']
												 ?>
												 	
												 </span></p>
											</div>
										</div>
									<?php  endforeach; ?>
									</div>
									<div class="grid-item group3">
										<?php foreach($Accessories as $n => $sp): ?>
										<div class="product-card">
											<div class="product-card-logo">
												<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
												<div class="tag-list">
													<div class="tag">New</div>
													<div class="tag sale-tag"><?php 
													if($sp['sale_price'])
														echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 )
													 ?>%</div>
												</div>
												<ul class="product-card__control">
													<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
												<a href="product-card.php" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price">$<?php 
												if ($sp['sale_price'])
													echo $sp['sale_price'];	
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
												if($sp['sale_price']) {													
												}
													echo $sp['price']
												 ?>
												 	
												 </span></p>
											</div>
										</div>
									<?php  endforeach; ?>
									</div>
									<div class="grid-item group4">
										<?php foreach($Tranding as $n => $sp): ?>
										<div class="product-card">
											<div class="product-card-logo">
												<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
												<div class="tag-list">
													<div class="tag">New</div>
													<div class="tag sale-tag"><?php 
													if($sp['sale_price'])
														echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 )
													 ?>%</div>
												</div>
												<ul class="product-card__control">
													<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
												<a href="product-card.php" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price">$<?php 
												if ($sp['sale_price'])
													echo $sp['sale_price'];	
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
												if($sp['sale_price']) {													
												}
													echo $sp['price']
												 ?>
												 	
												 </span></p>
											</div>
										</div>
									<?php  endforeach; ?>
									</div>
									<div class="grid-item group5">
										<?php foreach($topRated as $n => $sp): ?>
										<div class="product-card">
											<div class="product-card-logo">
												<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
												<div class="tag-list">
													<div class="tag">New</div>
													<div class="tag sale-tag"><?php 
													if($sp['sale_price'])
														echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 )
													 ?>%</div>
												</div>
												<ul class="product-card__control">
													<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
												<a href="product-card.php" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price">$<?php 
												if ($sp['sale_price'])
													echo $sp['sale_price'];	
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
												if($sp['sale_price']) {													
												}
													echo $sp['price']
												 ?>
												 	
												 </span></p>
											</div>
										</div>
									<?php  endforeach; ?>
									</div>								
							</div>
							<a href="#" class="link">Load More</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End home products -->
			<!-- Begin Sale banner -->
			<section class="sale-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
							<div class="sale-banner__header">
								<h2>Big Winter Sale <span class="percent">-50%</span></h2>
								<h4>for the whole range</h4>
							</div>
							<div id="timer" class="timer-wrap">
								<div class="timer-block-wrap">
									<div class="timer-block">
										<div class="timer-count">
									  		<p id="days"></p>
									  	</div>
									  	<p class="timer-text">days</p>
									</div>
								</div>
								<div class="timer-block-wrap">
									<div class="timer-block">
										<div class="timer-count">	
											<p id="hours"></p>
										</div>
										<p class="timer-text">hours</p>	
									</div>
								</div>
						  		<div class="timer-block-wrap">
						  			<div class="timer-block">
						  				<div class="timer-count">
						  					<p id="minutes"></p>
						  				</div>	
						  				<p class="timer-text">minutes</p>
						  			</div>
						  		</div>
						  		<div class="timer-block-wrap">
						  			<div class="timer-block">	
						  				<div class="timer-count">
						  					<p id="seconds"></p>
						  				</div>	
						  				<p class="timer-text">seconds</p>
						  			</div>
						  		</div>
							</div>
						</div>
					</div>
				</div>
			
				<a href="shop-page.php" class="rotate-sell sale-left"><span>Wooman</span></a>
				<a href="shop-page.php" class="rotate-sell sale-right"><span>Man</span></a>
				<!-- <div class="rotate-sell sale-left"><a href="#">Wooman</a></div> -->
				<!-- <div class="rotate-sell sale-right"><a href="#">Man</a></div> -->
				<img src="public/img/girl.png" class="left-img" alt="img">
				<img src="public/img/couple.png" class="right-img" alt="img">
			</section>
			<!-- End Sale banner -->
			<!-- Begin new arrivals -->
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
								<div class="	">
									<div class="new-arrivals-slider">
										<div class="slider-card">
											<div class="product-card">
												<div class="product-card-logo">
													<img src="public/img/product-1.jpg" alt="img">
													<div class="tag-list">
														<div class="tag">New</div>
														<div class="tag sale-tag">-40%</div>
													</div>
													<ul class="product-card__control">
														<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
													<a href="product-card.php" class="h4">Beige Sweater</a>
													<p class="price">$133 <span class="sale">$290</span></p>
												</div>
											</div>
										</div>
										<div class="slider-card">
											<div class="product-card">
												<div class="product-card-logo">
													<img src="public/img/product-2.jpg" alt="img">
													<div class="tag-list">
														<div class="tag">New</div>
													</div>
													<ul class="product-card__control">
														<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
													<a href="product-card.php" class="h4">Pink Sweater</a>
													<p class="price">$100</p>
												</div>
											</div>
										</div>
										<div class="slider-card">
											<div class="product-card">
												<div class="product-card-logo">
													<div class="tag-list">
														<div class="tag">New</div>
													</div>
													<img src="public/img/product-3.jpg" alt="img">
													<ul class="product-card__control">
														<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
														<li><a href="#"><span class="mdi mdi-heart-outline"></span></a></li>
														<li><a href="#"><span class="mdi mdi-compare"></span></a></li>
													</ul>
												</div>
												<div class="product-card-info">
													<ul class="rating">
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star-half"></span></li>
													</ul>
													<a href="product-card.php" class="h4">Gray Sweater</a>
													<p class="price">$130</p>
												</div>
											</div>
										</div>
										<div class="slider-card">
											<div class="product-card">
												<div class="product-card-logo">
													<div class="tag-list">
														<div class="tag">New</div>
													</div>
													<img src="public/img/product-4.jpg" alt="img">
													<ul class="product-card__control">
														<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
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
													<a href="product-card.php" class="h4">Denim Shirt</a>
													<p class="price">$125</p>
												</div>
											</div>
										</div>
										<div class="slider-card">
											<div class="product-card">
												<div class="product-card-logo">
													<img src="public/img/product-5.jpg" alt="img">
													<div class="tag-list">
														<div class="tag">New</div>
														<div class="tag sale-tag">-50%</div>
													</div>
													<ul class="product-card__control">
														<li><a href="#"><span class="mdi mdi-cart-outline"></span></a></li>
														<li><a href="#"><span class="mdi mdi-heart-outline"></span></a></li>
														<li><a href="#"><span class="mdi mdi-compare"></span></a></li>
													</ul>
												</div>
												<div class="product-card-info">
													<ul class="rating">
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
													</ul>
													<a href="product-card.php" class="h4">Black Dress</a>
													<p class="price">$123 <span class="sale">$290</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End new arrivals -->
			<!-- Begin instagram widget wrap -->
			<section class="instagram-widget-wrap">
				<div class="container-fluid">
					<div class="instagram-widget__head">
						<h4>Check Our Instagram</h4>
						<a href="#" class="h5" target="_blank">@Carla_Shop</a>
						<img src="public/img/insta_img.png" alt="img">
					</div>
			
					<div class="instagram-widget-slider">
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-1.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 21</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 2</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-2.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 43</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 10</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-3.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 15</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 5</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-4.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 25</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 4</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-5.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 77</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 20</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-6.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 45</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 12</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-7.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 50</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 1</span>
								</span>
							</a>
						</div>
						<div class="slider-card">
							<a href="#" class="insta-card" target="_blank">
								<img src="public/img/insta-8.jpg" alt="img">
								<span class="post-info">
									<span class="like"><span class="mdi mdi-heart-outline"></span> 46</span>
									<span class="coments"><span class="mdi mdi-message-outline"></span> 3</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End instagram widget wrap -->
			<div class="bg-popup"></div>
		</main>
		<!-- End home content -->
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>
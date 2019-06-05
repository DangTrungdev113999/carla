<?php 	// LẤY RA CÁC DANH MỤC THEO CATEFORY_ID
$Woman = mysqli_query($conn, 'select * from product where category_id = 2');
$Man = mysqli_query($conn, 'select * from product where category_id = 1');
$Accessories = mysqli_query($conn, 'select * from product where category_id = 7');
$Tranding = mysqli_query($conn, 'select * from product where category_id = 5');
$topRated = mysqli_query($conn, 'select * from product where category_id = 6');
 ?>

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
											if($sp['sale_price']){
												echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 );
												echo '%';
											}
											?></div>
										</div>
										<ul class="product-card__control">
											<li><a><span class="mdi mdi-cart-outline" onclick="addCart(
												<?php echo $sp['id']; ?>
												)"></span></a></li>
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
											<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4"><?php echo $sp['name'];
											?></a>
											<p class="price"><?php 
											if ($sp['sale_price']){
												echo '$';
												echo $sp['sale_price'];	
											}
											else
												echo $sp['price'];																						
											?>
											<span class="sale">
												<?php 
												if($sp['sale_price']) {									echo $sp['price'];				
											}

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
											if($sp['sale_price']){
												echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 );
												echo '%';
											}
											?></div>
										</div>
										<ul class="product-card__control">
											<li><a><span class="mdi mdi-cart-outline" onclick="addCart(
												<?php echo $sp['id']; ?>
												)"></span></a></li>
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
											<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4"><?php echo $sp['name'] ?></a>
											<p class="price"><?php 
											if ($sp['sale_price']){
												echo '$';
												echo $sp['sale_price'];	
											}
											else
												echo $sp['price'];																						
											?>
											<span class="sale">
												<?php 
												if($sp['sale_price']) {								echo $sp['price'];		
											}

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
											if($sp['sale_price']){
												echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 );
												echo '%';
											}
											?></div>
										</div>
										<ul class="product-card__control">
											<li><a><span class="mdi mdi-cart-outline" onclick="addCart(
												<?php echo $sp['id']; ?>
												)"></span></a></li>
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
											<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4"><?php echo $sp['name'] ?></a>
											<p class="price"><?php 
											if ($sp['sale_price']){
												echo '$';
												echo $sp['sale_price'];	
											}
											else
												echo $sp['price'];																						
											?>
											<span class="sale">
												<?php 
												if($sp['sale_price']) {			
													echo $sp['price'];	
												}

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
												if($sp['sale_price']){
													echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 );
													echo '%';
												}
												?></div>
											</div>
											<ul class="product-card__control">
												<li><a><span class="mdi mdi-cart-outline" onclick="addCart(
													<?php echo $sp['id']; ?>
													)"></span></a></li>
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
												<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price"><?php 
												if ($sp['sale_price']){
													echo '$';
													echo $sp['sale_price'];	
												}
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
													if($sp['sale_price']) {									echo $sp['price'];				
												}

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
												if($sp['sale_price']){
													echo round(($sp['price']-$sp['sale_price'])/$sp['price'] *100,0 );
													echo '%';
												}
												?></div>
											</div>
											<ul class="product-card__control">
												<li><a><span class="mdi mdi-cart-outline" onclick="addCart(
													<?php echo $sp['id']; ?>
													)"></span></a></li>
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
												<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4"><?php echo $sp['name'] ?></a>
												<p class="price"><?php 
												if ($sp['sale_price']){
													echo '$';
													echo $sp['sale_price'];	
												}
												else
													echo $sp['price'];																						
												?>
												<span class="sale">
													<?php 
													if($sp['sale_price']) {									echo $sp['price'];				
												}

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
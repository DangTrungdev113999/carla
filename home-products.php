<?php 	// LẤY RA CÁC DANH MỤC THEO CATEFORY_ID
$Woman = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 2');
$Man = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 1');
$Accessories = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.id = 5');
$Tranding = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.id = 6');
$topRated = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.id = 7');
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
							<li><a href="#" data-filter=".group3">Accessories</a></li>
							<li><a href="#" data-filter=".group4">Tranding</a></li>
							<li><a href="#" data-filter=".group5">Top Rated</a></li>
						</ul>
					</div>
<div class="grid">
			<?php if(isset($Accessories)){
			foreach($Accessories as $n => $sp):
			 ?>
			<div class="grid-item group3">
					<div class="product-card">
						<div class="product-card-logo">
							<img src="public/img/<?php echo $sp['image'] ?>" 
							width="262px"
							height="270px"
							alt="img"
							id="anh_<?php echo $sp['id']; ?>"
							>
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
								<li><a><span class="mdi mdi-cart-outline" onclick="addToCart(
									<?php echo $sp['id']; ?>
									,1)"></span></a></li>
									<li><a href="product-page.php?id=<?php echo $sp['id'] ?>"><span class="mdi mdi-heart-outline"></span></a></li>
								</ul>
							</div>
							<div class="product-card-info">								
								<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4" id="nameProduct_<?php echo $sp["id"]; ?>"><?php echo $sp['name'] ?></a>
								<p class="price">
									<span id="priceProduct_<?php echo $sp['id'] ?>">
										<?php 
										if ($sp['sale_price']){
											echo '$';
											echo $sp['sale_price'];	
										}
										else
											echo $sp['price'];																						
										?>
									</span>
									<span class="sale">
										<?php 
										if($sp['sale_price']) {			
											echo $sp['price'];	
										}

										?>

									</span></p>
								</div>
							</div>
					</div>
					<?php  endforeach; } ?>
					<?php if(isset($Tranding)){
					foreach($Tranding as $n => $sp):
					 ?>
					<div class="grid-item group4">
							<div class="product-card">
								<div class="product-card-logo">
									<img src="public/img/<?php echo $sp['image'] ?>" 
									alt="img"
									width="262px"
									height="270px"
									id="anh_<?php echo $sp['id']; ?>"
									>
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
										<li><a><span class="mdi mdi-cart-outline" onclick="addToCart(
											<?php echo $sp['id']; ?>
											,1)"></span></a></li>
											<li><a href="product-page.php?id=<?php echo $sp['id'] ?>"><span class="mdi mdi-heart-outline"></span></a></li>

										</ul>
									</div>
									<div class="product-card-info">
										<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4" id="nameProduct_<?php echo $sp["id"]; ?>"><?php echo $sp['name'] ?></a>
										<p class="price">
											<span id="priceProduct_<?php echo $sp['id'] ?>">
												<?php 
												if ($sp['sale_price']){
													echo '$';
													echo $sp['sale_price'];	
												}
												else
													echo $sp['price'];																						
												?>
											</span>
											<span class="sale">
												<?php 
												if($sp['sale_price']) {									echo $sp['price'];				
											}

											?>

										</span></p>
									</div>
								</div>
						
						</div>
							<?php  endforeach; } ?>
							<?php if(isset($topRated)){
							foreach($topRated as $n => $sp):
							 ?>
						<div class="grid-item group5">
							
								<div class="product-card">
									<div class="product-card-logo">
										<img src="public/img/<?php echo $sp['image'] ?>" 
										alt="img"
										width="262px"
										height="270px"
										id="anh_<?php echo $sp['id']; ?>"
										>
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
											<li><a><span class="mdi mdi-cart-outline" onclick="addToCart(
												<?php echo $sp['id']; ?>
												,1)"></span></a></li>
												<li><a href="product-page.php?id=<?php echo $sp['id'] ?>"><span class="mdi mdi-heart-outline"></span></a></li>
											</ul>
										</div>
										<div class="product-card-info">
											<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4" id="nameProduct_<?php echo $sp["id"]; ?>"><?php echo $sp['name'] ?></a>
											<p class="price">
												<span id="priceProduct_<?php echo $sp['id'] ?>">
													<?php 
													if ($sp['sale_price']){
														echo '$';
														echo $sp['sale_price'];	
													}
													else
														echo $sp['price'];																						
													?>
												</span>
												<span class="sale">
													<?php 
													if($sp['sale_price']) {									echo $sp['price'];				
												}

												?>

											</span></p>
										</div>
									</div>
								
							</div>	
							<?php  endforeach; } ?>							
						</div>
						<a href="#" class="link">Load More</a>
					</div>
				</div>
			</div>
		</section>
		<!-- modal  -->

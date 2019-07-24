<?php
include 'header.php';

$Categories = isset($_GET['name']) ? $_GET['name'] : null;
$Search = isset($_GET['search']) ? $_GET['search'] : null;
$IdCategory = mysqli_query($conn,'SELECT category.id from category where category.name = '.strval($Categories ));
$LastestProduct = mysqli_query($conn, 'SELECT  * FROM product
	ORDER BY id DESC LIMIT 3');
if($Categories === 'woman'){
	$Products = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 2');
	$LastestProduct = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 2
		ORDER BY p.id DESC LIMIT 3');
	if(isset($Search)){
		$Products = mysqli_query($conn, "SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 2 and p.name like '%$Search%'  ");
	}
}
else if($Categories === 'man'){
	$Products = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 1');
	$LastestProduct = mysqli_query($conn, 'SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 1
		ORDER BY p.id DESC LIMIT 3');
	if(isset($Search)){
		$Products = mysqli_query($conn, "SELECT p.* FROM product p JOIN category c ON p.category_id = c.id WHERE c.parent_id = 1 and p.name like '%$Search%'  ");
	}
}
else if($Categories === 'all'){
	$Products = mysqli_query($conn,  "SELECT * from product");
	if(isset($Search)){
		$Products = mysqli_query($conn,  "SELECT * from product where name like '%$Search%' ");
	}
}else{
	$Products = mysqli_query($conn, 'select * from product');
}




// get category


$CategoryWoman = mysqli_query($conn,'select * from category where parent_id = 2');
$CategoryMan = mysqli_query($conn,'select * from category where parent_id = 1');

?>
<!-- End header -->
<!-- Begin page name -->
<section class="page-name">
	<div class="container">
		<!-- page-name.jpg -->
		<div class="row">
			<div class="col-md-12">
				<h1>Shop Page <?php 		
				print_r($IdCategory); 		
				print_r($Categories); ?></h1>
				<ul class="bread-crumbs">
					<li><a href="index.php">Home</a></li>
					<li><p>Pages</p></li>
					<li><p><?php echo $Categories; ?></p></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End page name -->
<!-- Begin shop page content -->
<main class="shop-page-content-1">
	<div class="container">
		<div class="row mobile-reverse">
			<div class="col-md-4 col-lg-3">
				<!-- Begin sidebar -->
				<aside class="shop-sidebar">
					<div class="sidebar-filter">
						<p class="close-filter">Close <span class="mdi mdi-close"></span></p>
						<div class="inner-wrap">
							<div class="filter-sidebar">
								<h4 class="filter-head filter-head-active">Categories <span class="mdi mdi-chevron-down"></span></h4>
								<ul class="categories-list filter-list filter-body">
									<li>
										<a href="shop-page.php">Woman <span class="plus"></span></a>
										<ul>
											<?php foreach ($CategoryWoman as $key => $sp) { ?>
												<li>
													<a href="shop-page.php?name=<?php echo $sp['name']; ?>">
														<?php echo $sp['name']; ?>			
														</a>
													</li>
											<?php } ?>
										</ul>
									</li>
									<li>
										<a href="shop-page.php">Man <span class="plus"></span></a>
										<ul>
											<?php foreach ($CategoryMan as $key => $sp) { ?>
												<li>
													<a href="shop-page.php?name=<?php echo $sp['name']; ?>">
													<?php echo $sp['name']; ?>
														
													</a>
												</li>
											<?php } ?>
										</ul>
									</li>
								</ul>
							</div>
							<div class="filter-sidebar">
								<h4 class="filter-head filter-head-active">Select Price <span class="mdi mdi-chevron-down"></span></h4>
								<div class="filter-body">
									<div class="slider-range-wrap">
										<div id="slider-range" class="slider-range" data-from='100' data-to='300'></div>
									</div>
									<form action="#">
										<p class="price-filter">Price: $ <input type="text" id="from" readonly> - $ <input type="text" id="to" readonly></p>
									</form>
								</div>
							</div>
							<div class="filter-sidebar">
								<h4 class="filter-head filter-head-active">Color <span class="mdi mdi-chevron-down"></span></h4>
								<div class="filter-body">
									<form action="#" class="color-picker-form">
										<input type="checkbox" name="color" id="pink">
										<label for="pink">Pink <span class="pink"></span></label>
										<input type="checkbox" name="color" id="blue">
										<label for="blue">Blue <span class="blue"></span></label>
										<input type="checkbox" name="color" id="green">
										<label for="green">Green <span class="green"></span></label>
										<input type="checkbox" name="color" id="black" checked>
										<label for="black">Black <span class="black"></span></label>
									</form>
								</div>
							</div>
							<div class="filter-sidebar">
								<h4 class="filter-head filter-head-active">Size <span class="mdi mdi-chevron-down"></span></h4>
								<form action="#" class="main-picker-form">
									<input type="checkbox" name="size" id="s">
									<label for="s">S(44)</label>
									<input type="checkbox" name="size" id="m">
									<label for="m">M(46)</label>
									<input type="checkbox" name="size" id="l">
									<label for="l">L(48)</label>
									<input type="checkbox" name="size" id="xl" checked>
									<label for="xl">XL(50)</label>
								</form>
							</div>
							<div class="filter-sidebar">
								<h4 class="filter-head filter-head-active">Brand <span class="mdi mdi-chevron-down"></span></h4>
								<form action="#" class="main-picker-form">
									<input type="checkbox" name="brand" id="brand-1">
									<label for="brand-1">Brand Name 1</label>
									<input type="checkbox" name="brand" id="brand-2">
									<label for="brand-2">Brand Name 2</label>
									<input type="checkbox" name="brand" id="brand-3">
									<label for="brand-3">Brand Name 3</label>
									<input type="checkbox" name="brand" id="brand-4" checked>
									<label for="brand-4">Brand Name 4</label>
								</form>
							</div>
						</div>
						<p class="show-filter"><span class="mdi mdi-filter-outline"></span></p>
					</div>

					<div class="shop-sidebar-tags">
						<h4 class="filter-head filter-head-active">Tags <span class="mdi mdi-chevron-down"></span></h4>
						<ul class="main-sidebar-tags__list">
							<li><a href="shop-page.php">Dresses</a></li>
							<li><a href="shop-page.php">Outwear</a></li>
							<li><a href="shop-page.php">Sweather</a></li>
							<li><a href="shop-page.php">Necklace</a></li>
						</ul>
					</div>

					<div class="main-sidebar-latest-product">
						<h4 class="filter-head filter-head-active">Latest Product <span class="mdi mdi-chevron-down"></span></h4>
						<ul class="latest-product-list">
							<?php foreach($LastestProduct as $key => $sp): ?>
								<li>
									<figure class="latest-product">
										<a href="product-page.php?id=<?php echo $sp['id'] ?>">
											<img src="public/img/
											<?php echo $sp['image'] ?>
											" alt="img"
											width="123px"
											height="127px"
											
											>
										</a>
											<figcaption class="latest-product__desc">
												<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h5">
													<?php echo $sp['name'] ?>
												</a>
												<p class="price"><?php 
												if ($sp['sale_price']){
													echo '$';
													echo $sp['sale_price'];	
												}
												else
													echo $sp['price'];						
												?>
											</p>
										</figcaption>
									</figure>
								</li>	
							<?php endforeach; ?>								
						</ul>
					</div>
				</aside>
				<!-- End sidebar -->
			</div>
			<div class="col-md-8 col-lg-9">
				<section class="shop-page-section">
					<form action="#" class="page-filter">
						<div class="types-card">
							<a href="shop-page.php" class="active"><span class="mdi mdi-view-grid"></span></a>
						</div>
						<div class="selects-wrap">
							<div class="select-block">
								<h6>Show</h6>
								<select name="count" class="select-2">
									<option value="1">16</option>
									<option value="2" selected>12</option>
									<option value="3">8</option>
								</select>
							</div>
							<div class="select-block">
								<h6>per page</h6>
							</div>
						</div>
					</form>
					<div class="product-list">
						<?php foreach($Products as $key => $sp): ?>
							<div class="product-card">
								<div class="product-card-logo">
									<img src="public/img/<?php echo $sp['image'] ?>" 
									alt="img"
									id="anh_<?php echo $sp['id']; ?>"
									width="262px"
									height="270px"
									>
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
										<li><a><span 
											class="mdi mdi-cart-outline"
											onclick="addToCart(
												<?php echo $sp['id']; ?>
												,1)"
												></span></a></li>
											<li><a href="product-page.php?id=<?php echo $sp['id'] ?>"><span class="mdi mdi-heart-outline"></span></a></li>							
											</ul>
										</div>
										<div class="product-card-info">
											<a href="product-page.php?id=<?php echo $sp['id'] ?>" class="h4"
												id="nameProduct_<?php echo $sp["id"]; ?>"
												>
												<?php echo $sp['name'] ?>
											</a>
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
													}
													echo $sp['price']
													?>
												</span>
											</p>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
							<a class="link">Load More</a>
						</section>
					</div>
				</div>
			</div>
		</main>
		<!-- End shop page content -->

		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
		<?php include('modal-Cart.php'); ?>
		<?php
		include 'footer.php'
		?>
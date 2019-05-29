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
						<h1>Shop Page 3</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>Pages</p></li>
							<li><p>Shop Page 3</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		
		<!-- Begin shop page 3 content -->
		<main class="shop-page-content-3">
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
													<li><a href="#">Dresses <span>(26)</span></a></li>
													<li><a href="#">Underwear <span>(45)</span></a></li>
													<li><a href="#">Shirt <span>(15)</span></a></li>
													<li><a href="#">Jacets <span>(10)</span></a></li>
													<li><a href="#">Sweaters <span>(103)</span></a></li>
												</ul>
											</li>
											<li>
												<a href="shop-page.php">Man <span class="plus"></span></a>
												<ul>
													<li><a href="#">Dresses <span>(26)</span></a></li>
													<li><a href="#">Underwear <span>(45)</span></a></li>
													<li><a href="#">Shirt <span>(15)</span></a></li>
													<li><a href="#">Jacets <span>(10)</span></a></li>
													<li><a href="#">Sweaters <span>(103)</span></a></li>
												</ul>
											</li>
											<li>
												<a href="shop-page.php">Accessories <span class="plus"></span></a>
												<ul>
													<li><a href="#">Dresses <span>(26)</span></a></li>
													<li><a href="#">Underwear <span>(45)</span></a></li>
													<li><a href="#">Shirt <span>(15)</span></a></li>
													<li><a href="#">Jacets <span>(10)</span></a></li>
													<li><a href="#">Sweaters <span>(103)</span></a></li>
												</ul>
											</li>
											<li>
												<a href="shop-page.php">Shoes <span class="plus"></span></a>
												<ul>
													<li><a href="#">Dresses <span>(26)</span></a></li>
													<li><a href="#">Underwear <span>(45)</span></a></li>
													<li><a href="#">Shirt <span>(15)</span></a></li>
													<li><a href="#">Jacets <span>(10)</span></a></li>
													<li><a href="#">Sweaters <span>(103)</span></a></li>
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
									<li>
										<figure class="latest-product">
											<a href="product-page.php"><img src="public/img/latest-post-1.jpg" alt="img"></a>
											<figcaption class="latest-product__desc">
												<a href="product-page.php" class="h5">Mini Beige Sweater by Brand Name</a>
												<p class="price">$256</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure class="latest-product">
											<a href="product-page.php"><img src="public/img/latest-post-2.jpg" alt="img"></a>
											<figcaption class="latest-product__desc">
												<a href="product-page.php" class="h5">Mini Beige Sweater by Brand Name</a>
												<p class="price">$256</p>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure class="latest-product">
											<a href="product-page.php"><img src="public/img/latest-post-3.jpg" alt="img"></a>
											<figcaption class="latest-product__desc">
												<a href="product-page.php" class="h5">Mini Beige Sweater by Brand Name</a>
												<p class="price">$256</p>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div>
						</aside>
						<!-- End sidebar -->
					</div>
					<div class="col-md-8 col-lg-9">
						<section class="shop-page-section">
							<form action="#" class="page-filter">
								<div class="types-card">
									<a href="shop-page-3.php" class="active"><span class="mdi mdi-format-list-bulleted"></span></a>
									<a href="shop-page.php"><span class="mdi mdi-view-grid"></span></a>
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
										<select name="count" class="select-2">
											<option value="1">sort by</option>
											<option value="2">Rating</option>
											<option value="3">Price</option>
										</select>
									</div>
								</div>
							</form>
							<div class="product-list list-bullet">
								<div class="product-card bullet-type">
									<div class="product-card-logo">
										<a href="product-page.php"><img src="public/img/product-1.jpg" alt="img"></a>
										<div class="tag-list">
											<div class="tag">New</div>
											<div class="tag sale-tag">-40%</div>
										</div>
									</div>
									<div class="product-card-info">
										<div class="product-card-info__head">
											<a href="product-card.php" class="h4">Beige Sweater</a>
											<ul class="rating">
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star-half"></span></li>
												<li><span class="mdi mdi-star-outline"></span></li>
											</ul>
											<p class="price">$133 <span class="sale">$290</span></p>
										</div>
										<p class="product-card__text">Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem.</p>
										<div class="product-card-buttons">
											<a href="#" class="button">Add to Cart</a>
											<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
											<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
										</div>
									</div>
								</div>
								<div class="product-card bullet-type">
									<div class="product-card-logo">
										<a href="product-page.php"><img src="public/img/product-2.jpg" alt="img"></a>
										<div class="tag-list">
											<div class="tag">New</div>
										</div>
									</div>
									<div class="product-card-info">
										<div class="product-card-info__head">
											<a href="product-card.php" class="h4">Pink Sweater</a>
											<ul class="rating">
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star-half"></span></li>
												<li><span class="mdi mdi-star-outline"></span></li>
											</ul>
											<p class="price">$142</p>
										</div>
										<p class="product-card__text">Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem.</p>
										<div class="product-card-buttons">
											<a href="#" class="button">Add to Cart</a>
											<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
											<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
										</div>
									</div>
								</div>
								<div class="product-card bullet-type">
									<div class="product-card-logo">
										<a href="product-page.php"><img src="public/img/product-3.jpg" alt="img"></a>
									</div>
									<div class="product-card-info">
										<div class="product-card-info__head">
											<a href="product-card.php" class="h4">Gray Sweater</a>
											<ul class="rating">
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star-half"></span></li>
												<li><span class="mdi mdi-star-outline"></span></li>
											</ul>
											<p class="price">$100</p>
										</div>
										<p class="product-card__text">Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem.</p>
										<div class="product-card-buttons">
											<a href="#" class="button">Add to Cart</a>
											<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
											<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
										</div>
									</div>
								</div>
								<div class="product-card bullet-type">
									<div class="product-card-logo">
										<a href="product-page.php"><img src="public/img/product-4.jpg" alt="img"></a>
									</div>
									<div class="product-card-info">
										<div class="product-card-info__head">
											<a href="product-card.php" class="h4">Black Dress</a>
											<ul class="rating">
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star-half"></span></li>
												<li><span class="mdi mdi-star-outline"></span></li>
											</ul>
											<p class="price">$115</p>
										</div>
										<p class="product-card__text">Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem.</p>
										<div class="product-card-buttons">
											<a href="#" class="button">Add to Cart</a>
											<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
											<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
										</div>
									</div>
								</div>
								<div class="product-card bullet-type">
									<div class="product-card-logo">
										<a href="product-page.php"><img src="public/img/product-5.jpg" alt="img"></a>
									</div>
									<div class="product-card-info">
										<div class="product-card-info__head">
											<a href="product-card.php" class="h4">Gray Sweater</a>
											<ul class="rating">
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star-half"></span></li>
												<li><span class="mdi mdi-star-outline"></span></li>
											</ul>
											<p class="price">$95</p>
										</div>
										<p class="product-card__text">Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem.</p>
										<div class="product-card-buttons">
											<a href="#" class="button">Add to Cart</a>
											<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
											<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
										</div>
									</div>
								</div>
								<div class="product-card bullet-type">
									<div class="product-card-logo">
										<a href="product-page.php"><img src="public/img/product-6.jpg" alt="img"></a>
									</div>
									<div class="product-card-info">
										<div class="product-card-info__head">
											<a href="product-card.php" class="h4">Blouse Mango</a>
											<ul class="rating">
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star"></span></li>
												<li><span class="mdi mdi-star-half"></span></li>
												<li><span class="mdi mdi-star-outline"></span></li>
											</ul>
											<p class="price">$80</p>
										</div>
										<p class="product-card__text">Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem.</p>
										<div class="product-card-buttons">
											<a href="#" class="button">Add to Cart</a>
											<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
											<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
										</div>
									</div>
								</div>
							</div>
							<a href="#" class="link">Load More</a>
						</section>
					</div>
				</div>
			</div>
		</main>
		<!-- End shop page 3 content -->
		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
		<?php
		include 'footer.php'
		?>
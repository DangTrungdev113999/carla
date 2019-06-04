<?php
	include 'header.php';

	$productdefault = 
	$idProduct = $_GET['id'] ? $_GET['id'] : null;
	if($idProduct){
		$detail_product = mysqli_query($conn, "select * from product where id = '$idProduct' ");
	}
	else{
		$detail_product = null;
	};
	
	

	// echo $banner;
	// echo $_GET;
	// echo '$detail_product';
?>
		<!-- End header -->
		<!-- Begin page name -->
		<section class="page-name">
			<div class="container">
				<!-- page-name.jpg -->
				<div class="row">
					<div class="col-md-12">
						<h1>Product Page 1</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>Pages</p></li>
							<li><p>Product Page 1</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		
		<!-- Brgin product page content -->
		<main class="product-page-content-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<section class="product-section-1">
							<div class="product-preview">
								<div class="vertical-slider-1-wrap">
									<div class="vertical-slider-1">
										<?php foreach($detail_product as $key => $sp): ?>
										<div class="slider-card">
											<img src="public/img/<?php echo $sp['image'] ?>" alt="img">
										</div>
										<?php endforeach; ?>
										<div class="slider-card">
											<img src="public/img/product-page-sm-2.jpg" alt="img">
										</div>
										<div class="slider-card">
											<img src="public/img/product-page-sm-3.jpg" alt="img">
										</div>
									</div>
									<button type="button" class="vertical-nav prev"><span class="mdi mdi-arrow-up"></span></button>
									<button type="button" class="vertical-nav next"><span class="mdi mdi-arrow-down"></span></button>
								</div>
								<div class="big-slider-1 photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
									<?php foreach($detail_product as $key => $sp): ?>
									<div class="slider-card">										
										<a href="img/product-page-big-1-2.jpg" itemprop="contentUrl" data-size="458x600">
											<img src="public/img/<?php echo $sp['image'] ?>" itemprop="thumbnail" alt="Image description" width="100%">
										</a>
									</div>
								<?php endforeach; ?>
									<div class="slider-card">
										<a href="img/product-page-big-1.jpg" itemprop="contentUrl" data-size="458x600">
											<img src="public/img/product-page-big-1.jpg" itemprop="thumbnail" alt="Image description" width="100%">
										</a>
									</div>

									<div class="slider-card">
										<a href="img/product-page-big-1-3.jpg" itemprop="contentUrl" data-size="458x600">
											<img src="public/img/product-page-big-1-3.jpg" itemprop="thumbnail" alt="Image description" width="100%">
										</a>
									</div>
								</div>
							</div>
							<div class="product-section-description all-description">
								<?php foreach($detail_product as $key => $sp): ?>
								<h2>
									<?php echo $sp['name'] ?>								 	
								 </h2>
								<div class="product-review">
									<ul class="rating">
										<li><span class="mdi mdi-star"></span></li>
										<li><span class="mdi mdi-star"></span></li>
										<li><span class="mdi mdi-star"></span></li>
										<li><span class="mdi mdi-star-half"></span></li>
											<li><span class="mdi mdi-star-outline"></span></li>
									</ul>
									<p>5 Review</p>
									<a href="#">Add your review</a>
								</div>
								<div class="product-available">
									<p class="price"><?php 
														if ($sp['sale_price']){
															echo '$';
															echo $sp['sale_price'];	
														}
														else{
															echo $sp['price'];									
														}
														?>																					
									 <span class="sale">
									 	<?php 
									 	if($sp['sale_price']){		
									 		echo '$';
									 		echo $sp['price'];											
									 	}
									
									?>	
									</span>
									</p>
									<div class="available">
										<div class="left">
											<img src="public/img/label.png" alt="img">
											<p>Left 6</p>
										</div>
										<p>Available: <span>In Stock</span></p>
									</div>
								</div>
								<div class="product-text">
									<p>Nam vitae turpis congue, aliquet risus vitae, bibendum dolor. Curabitur gravida dictum eros non consequat.</p>
								</div>
								<form action="#" class="product-form">
									<div class="color-picker-form">
										<p>Select Color :</p>
										<input type="radio" name="color" id="pink">
										<label for="pink"><span class="pink"></span></label>
										<input type="radio" name="color" id="blue" checked>
										<label for="blue"><span class="blue"></span></label>
										<input type="radio" name="color" id="green">
										<label for="green"><span class="green"></span></label>
										<input type="radio" name="color" id="black">
										<label for="black"><span class="black"></span></label>
									</div>
									<div class="main-picker-form">
										<p>Size :</p>
										<input type="radio" name="size" id="s">
										<label for="s">S</label>
										<input type="radio" name="size" id="m" checked>
										<label for="m">M</label>
										<input type="radio" name="size" id="l">
										<label for="l">L</label>
									</div>
									<div class="product-form-control">
										<div class="counter-area">
											<span class="counter-button minus">-</span>
											<input type="text" name="counter" value="1">
											<span class="counter-button plus">+</span>
										</div>
										<button type="submit">Add to Cart</button>
										<a href="#" class="control"><span class="mdi mdi-content-copy"></span></a>
										<a href="#" class="control"><span class="mdi mdi-heart-outline"></span></a>
									</div>
								</form>
								<ul class="product-more-info">
									<li>
										<p>Categories :</p>
										<p>Woman, Dresses</p>
									</li>
									<li>
										<p>Brand :</p>
										<p>Buzline</p>
									</li>
									<li>
										<p>SKU :</p>
										<p>TP09485746G</p>
									</li>
									<li>
										<p>Share :</p>
										<ul class="social-list">
											<li><a href="#"><span class="mdi mdi-instagram"></span></a></li>
											<li><a href="#"><span class="mdi mdi-facebook"></span></a></li>
											<li><a href="#"><span class="mdi mdi-twitter"></span></a></li>
										</ul>
									</li>
								</ul>
							<?php endforeach; ?>
							</div>
						</section>
					</div>
				</div>
			</div>
		
			<!-- Begin product tab -->
			<section class="product-tab">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="tab-wrap">
								<div class="tab-head">
									<h3 class="active-tab" data-tab='#tab-1'>Description</h3>
									<h3 data-tab='#tab-2'>Reviews (2)</h3>
									<h3 data-tab='#tab-3'>Additional Informations</h3>
								</div>
								<div class="tab-body-wrap">
									<h3 class="mobile-accordeon active-tab" data-tab='#tab-1'>Description <span class="mdi mdi-chevron-down"></span></h3>
									<div class="tab-content" id="tab-1">
										<p>Mauris nec justo ut nisi elementum laoreet sit amet sed erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse venenatis turpis justo, sed pretium sapien interdum at. Aliquam rutrum cursus tristique. Fusce dignissim vestibulum blandit. Quisque ac lacus et urna pharetra efficitur nec eget urna. Phasellus turpis nisi, vulputate sed venenatis vel, luctus in magna. Morbi a eros et nulla dapibus consequat sit amet ut ex. Aliquam bibendum eget justo luctus commodo. Cras libero lacus, ornare vel interdum vitae, hendrerit eu tortor. Nulla a sem ac turpis interdum vestibulum. Aliquam lacinia velit ex, eu interdum felis interdum hendrerit. Nullam vitae ultrices purus. Phasellus malesuada hendrerit eleifend. In vitae ante ut mauris</p>
										<table class="product-table">
										    <tbody>
										        <tr>
										            <td><p>Material :</p></td>
										            <td><p>100% Cotton</p></td>
										        </tr>
										        <tr>
										            <td><p>Weight :</p></td>
										            <td><p>300 g</p></td>
										        </tr>
										        <tr>
										            <td><p>Color :</p></td>
										            <td><p>Green, Blue, Pink, Beige</p></td>
										        </tr>
										        <tr>
										            <td><p>Sizes :</p></td>
										            <td><p>S, M, L</p></td>
										        </tr>
										    </tbody>
										</table>
										<p>Duis eu congue nibh. Integer erat nisi, consectetur vitae auctor sed, gravida sit amet risus. Nunc aliquam, turpis sit amet pellentesque placerat, magna elit luctus ante, sed rutrum mi neque at lorem. Aenean neque ante, ultrices sed augue a, viverra fringilla eros. In consequat leo at erat venenatis ultricies. Fusce non arcu in orci faucibus viverra. Proin aliquet quam felis, at lacinia diam interdum id. Cras vitae viverra urna. Nulla lobortis magna in gravida egestas.</p>
									</div>
									<h3 class="mobile-accordeon" data-tab='#tab-2'>Reviews (2) <span class="mdi mdi-chevron-down"></span></h3>
									<div class="tab-content" id="tab-2">
										<ul class="reviews-list">
											<li>
												<div class="reviews-block">
													<div class="reviews-head">
														<h5>Sarah Doe</h5> <time datetime="2018-10-23">23 Oct 2018</time>
													</div>
													<ul class="rating">
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star-half"></span></li>
														<li><span class="mdi mdi-star-outline"></span></li>
													</ul>
													<p>Nam vitae turpis congue, aliquet risus vitae, bibendum dolor. Curabitur gravida dictum eros non consequat. Morbi commodo diam augue, quis viverra lacus pharetra id. In eget tortor tempor, ullamcorper leo eget, sagittis lectus. Nam ultricies ex lorem, vel vulputate quam elementum vel. Fusce nisi orci, hendrerit nec euismod ac, aliquet a sem.</p>
												</div>
											</li>
											<li>
												<div class="reviews-block">
													<div class="reviews-head">
														<h5>Kate Doe</h5> <time datetime="2018-10-23">23 Oct 2018</time>
													</div>
													<ul class="rating">
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star"></span></li>
														<li><span class="mdi mdi-star-half"></span></li>
														<li><span class="mdi mdi-star-outline"></span></li>
													</ul>
													<p>Quisque erat nunc, mollis quis lectus a, sollicitudin porta turpis. Vestibulum fringilla pellentesque ante eget porta. Aenean maximus consequat ultrices. Vivamus congue gravida magna, ut finibus mauris sodales eu. Praesent in arcu eu tortor condimentum fringilla. Nunc mattis, tortor eleifend facilisis congue, tortor dui dictum arcu, sed maximus nibh mauris fermentum quam. Quisque erat nunc, mollis quis lectus a, sollicitudin porta turpis. Vestibulum fringilla pellentesque ante eget porta. Aenean maximus consequat ultrices. Vivamus congue gravida magna, ut finibus mauris sodales eu.</p>
												</div>
											</li>
										</ul>
										<form action="#" class="reviews-form">
											<h4>Add New Review</h4>
											<p>Your email address will not be published. Required fields are marked *</p>
											<div class="review-stars">
												<p>rating : </p>
												<div class="review-stars-input">
													<input id="star-4" type="radio" name="reviewStars">
													<label title="gorgeous" for="star-4">
														<span class="mdi mdi-star-outline"></span>
														<span class="mdi mdi-star"></span>
													</label>
																					
													<input id="star-3" type="radio" name="reviewStars">
													<label title="good" for="star-3">
														<span class="mdi mdi-star-outline"></span>
														<span class="mdi mdi-star"></span>
													</label>
																					
													<input id="star-2" type="radio" name="reviewStars">
													<label title="regular" for="star-2">
														<span class="mdi mdi-star-outline"></span>
														<span class="mdi mdi-star"></span>
													</label>
																					
													<input id="star-1" type="radio" name="reviewStars">
													<label title="poor" for="star-1">
														<span class="mdi mdi-star-outline"></span>
														<span class="mdi mdi-star"></span>
													</label>
																					
													<input id="star-0" type="radio" name="reviewStars">
													<label title="bad" for="star-0">
														<span class="mdi mdi-star-outline"></span>
														<span class="mdi mdi-star"></span>
													</label>
												</div>
											</div>
											<div class="input-columns">
												<div class="input-columns__item">
													<input type="text" name="name" placeholder="Name*" required>
												</div>
												<div class="input-columns__item">
													<input type="email" name="email" placeholder="E-mail*" required>
												</div>
											</div>
											<textarea name="rewiev" placeholder="Your Review *" required></textarea>
											<button type="submit">Submit</button>
										</form>
									</div>
									<h3 class="mobile-accordeon" data-tab='#tab-3'>Additional Informations <span class="mdi mdi-chevron-down"></span></h3>
									<div class="tab-content" id="tab-3">
										<table class="product-table type-2">
										    <tbody>
										        <tr>
										            <td><p>Material :</p></td>
										            <td><p>100% Cotton</p></td>
										        </tr>
										        <tr>
										            <td><p>Weight :</p></td>
										            <td><p>300 g</p></td>
										        </tr>
										        <tr>
										            <td><p>Color :</p></td>
										            <td><p>Green, Blue, Pink, Beige</p></td>
										        </tr>
										        <tr>
										            <td><p>Sizes :</p></td>
										            <td><p>S, M, L</p></td>
										        </tr>
										    </tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End product tab -->
			<!-- Begin related product section -->
			<section class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="related-product-wrap">
							<h2>Related Product</h2>
							<div class="related-product-list">
								<div class="related-product">
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
								<div class="related-product">
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
								<div class="related-product">
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
								<div class="related-product">
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
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End related product section -->
			<!-- Root element of PhotoSwipe. Must have class pswp. -->
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
			    <!-- Background of PhotoSwipe. 
			         It's a separate element, as animating opacity is faster than rgba(). -->
			    <div class="pswp__bg"></div>
			    <!-- Slides wrapper with overflow:hidden. -->
			    <div class="pswp__scroll-wrap">
			        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
			        <div class="pswp__container">
			            <div class="pswp__item"></div>
			            <div class="pswp__item"></div>
			            <div class="pswp__item"></div>
			        </div>
			        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			        <div class="pswp__ui pswp__ui--hidden">
			            <div class="pswp__top-bar">
			                <!--  Controls are self-explanatory. Order can be changed. -->
			                <div class="pswp__counter"></div>
			                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
			                <button class="pswp__button pswp__button--share" title="Share"></button>
			                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
			                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
			                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
			                <!-- element will get class pswp__preloader--active when preloader is running -->
			                <div class="pswp__preloader">
			                    <div class="pswp__preloader__icn">
			                        <div class="pswp__preloader__cut">
			                            <div class="pswp__preloader__donut"></div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
			                <div class="pswp__share-tooltip"></div>
			            </div>
			            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			            </button>
			            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			            </button>
			            <div class="pswp__caption">
			                <div class="pswp__caption__center"></div>
			            </div>
			        </div>
			    </div>
			
			</div>
		</main>
		<!-- End product page content -->

		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>
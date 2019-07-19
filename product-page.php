<?php
include 'header.php';

$productdefault = null;
$idProduct = $_GET['id'] ? $_GET['id'] : null;
if($idProduct){
	//fix
	$detail_product = mysqli_query($conn, "select * from product where id = '$idProduct' ");
	$RelatedImg = mysqli_query($conn, "select * from product_image where product_id = '$idProduct' ");

	$Related = mysqli_fetch_row($detail_product);
	$RelatedProducts = mysqli_query($conn, "SELECT * from product WHERE category_id = '$Related[0]'
	 order by rand() LIMIT 4");
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
<?php if($idProduct){ ?>
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
											<img src="public/img/<?php echo $sp['image'] ?>" 				
											alt="img"
											width="163px"
											height="160px"
											>
										</div>
									<?php endforeach; ?>
									<?php foreach($RelatedImg as $key => $sp): ?>
										<div class="slider-card">
											<img src="public/img/<?php echo $sp['image'] ?>" 
											width="100%"
											height="160px"
											alt="img">
										</div>
									<?php endforeach; ?>
								</div>
								<button type="button" class="vertical-nav prev"><span class="mdi mdi-arrow-up"></span></button>
								<button type="button" class="vertical-nav next"><span class="mdi mdi-arrow-down"></span></button>
							</div>
							<div class="big-slider-1 photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
								<?php foreach($detail_product as $key => $sp): ?>
									<div class="slider-card">										
										<a href="public/img/<?php echo $sp['image'] ?>" itemprop="contentUrl" data-size="458x600">
											<img src="public/img/<?php echo $sp['image'] ?>" itemprop="thumbnail" alt="Image description" 
											id='anh_<?php echo $sp['id']; ?>' 
											width="458px"
											height="471px"
											>
										</a>
									</div>
								<?php endforeach; ?>
								<!-- $RelatedImg -->

								<?php foreach($RelatedImg as $key => $sp): ?>
									<div class="slider-card">										
										<a href="public/img/<?php echo $sp['image'] ?>" itemprop="contentUrl" data-size="458x600">
											<img src="public/img/<?php echo $sp['image'] ?>" itemprop="thumbnail" alt="Image description" 
											id='anh_<?php echo $sp['id']; ?>' 
											width="458px"
											height="471px"
											>											
										</a>
									</div>
								<?php endforeach; ?>

							</div>
						</div>
						<div class="product-section-description all-description">
							<?php foreach($detail_product as $key => $sp): ?>
								<h2 id="nameProduct_<?php echo $sp['id']; ?>">
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
									<p class="price" ><span id="priceProduct_<?php echo $sp['id']; ?>">
										<?php 
									if ($sp['sale_price']){
										echo '$';
										echo $sp['sale_price'];	
									}
									else{
										echo $sp['price'];									
									}
									?>	
									</span>												
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
								<p><?php echo $sp['content'] ?></p>
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
										<input type="text" name="counter" id='quantity' value="1">
										<span class="counter-button plus">+</span>
									</div>
									<a 
									style="width: 40%; color:black;line-height: 20px;font-size:20px; font-weight: 800"
									class='btn btn-primary' 
									onclick="addToCart(<?php echo $sp['id'] ?>,quantity.value)" >
										Add to Cart
								</a>
								</div>
							</form>
							<ul class="product-more-info">							
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
	<!-- Button trigger modal -->
<!-- Modal -->
<?php include('modal-Cart.php'); ?>
	
	<!-- Begin product tab -->
	<section class="product-tab">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="tab-wrap">
						<div class="tab-head">
							<h3 class="active-tab" data-tab='#tab-1'>Description</h3>
							<h3 data-tab='#tab-3'>Additional Informations</h3>
						</div>
						<div class="tab-body-wrap">
							<h3 class="mobile-accordeon active-tab" data-tab='#tab-1'>Description <span class="mdi mdi-chevron-down"></span></h3>
							<div class="tab-content" id="tab-1">
								<p>
									<?php $content = mysqli_fetch_row($detail_product);
									echo $content[3];
									 ?>
								</p>
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
						<?php foreach ($RelatedProducts as $key => $sp) { ?>
						<div class="related-product">
							<div class="product-card">
								<div class="product-card-logo">
									<img src="public/img/product-1.jpg" alt="img">
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
									<a href="product-card.php" class="h4">
										<?php echo $sp['name']; ?>
									</a>
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
												if($sp['sale_price']) {									
													echo $sp['price'];				
												}
													
											?>
										</span>
									</p>
								</div>
							</div>
						</div>
						<?php } ?>
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
			<?php 
		}else{
			echo "<br />";
			echo '<h1>Không tìm thấy sản phẩm</h1>';
			echo "<br />";
		} 
		?>
		<!-- End product page content -->

		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
		<?php
		include 'footer.php'
		?>
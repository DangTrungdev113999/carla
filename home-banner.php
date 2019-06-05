
<?php 
$banner = mysqli_query($conn, "select * from banner");
	// LẤY RA DÁNH SÁCH BANNER
?>
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
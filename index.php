<?php
ob_start();
include 'header.php';
$products = mysqli_query($conn, 'select * from product');
?>
<!-- End header -->
<!-- Begin home content -->
<main class="home-content">
	<!-- Begin main slider BANNER -->
	<?php include('home-banner.php'); ?>
	<!-- End main slider -->
	<!-- Begin home about -->
	<?php include('home-about.php'); ?> 
	<!-- End home about -->
	<!-- Begin home products -->
	<?php include('home-products.php'); ?> <!-- addCart -->
	<!-- End home products -->
	<!-- Begin Sale banner -->
	<?php include('home-sale-banner.php'); ?>
	<!-- End Sale banner -->
	<!-- Begin new arrivals -->
	<?php include('home-newArrivals.php'); ?> <!-- addCart -->
</main>
<!-- End home content -->
<div class="back-top" id="backTop"><p>up!</p></div>
<!-- Begin footer -->
<?php include('modal-Cart.php'); ?>
<?php
include 'footer.php'
?>
<?php
	include 'header.php';
		$id = $_GET['id'];
		$orderDetail = mysqli_query($conn, "SELECT * FROM order_detail o where order_id = '$id' ");	
		print_r($id);
		$Total = mysqli_query($conn, "SELECT sum(quantity * price) FROM order_detail  where order_id = '$id' ");
		$Total = mysqli_fetch_row($Total);
		$account = mysqli_query($conn, "SELECT account_id FROM orders o where id = '$id' ");	
		$idAccount = mysqli_fetch_row($account);
		$detailAccount = mysqli_query($conn, "SELECT * FROM account a where id = '$idAccount[0]' ");
		print_r($detailAccount);

?>
		<section class="page-name">
			<div class="container">
				<!-- page-name.jpg -->
				<div class="row">
					<div class="col-md-12">
						<h1>History Payment</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>history</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<br>
		<br>
		<div class="container">
			<table class="table table-hover">
				<caption><h3>User Information</h3></caption>
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
					<!-- <?php print_r() ?> -->
					<?php foreach ($detailAccount as $key=>$value) { ?>
					<tr>
						<td><?php  echo $value['name']; ?></td>
						<td><?php  echo $value['email']; ?></td>
						<td><?php  echo $value['phone']; ?></td>
						<td><?php  echo $value['address']; ?></td>
						<td><?php  echo $value['created']; ?></td>

					</tr>
				<?php } ?>
				</tbody>
			</table>
			<br>
			<table class="table table-hover">
			<thead>
				<h2>Detail History</h2>
				<tr>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($orderDetail as $key=>$value) { ?>
				<tr>
					<td>
						<div style="height:80px;width: 80px">
						<?php  
						$id = $value['product_id'];
						$products = mysqli_query($conn, "SELECT * FROM product o where id = '$id' ");
						$product = mysqli_fetch_row($products);
						?>
						<img src="public/img/<?php echo $product[2]; ?>" />
						<span><?php echo $product[1]; ?></span>
						</div>
					</td>
					<td>
						$ <?php  
						echo $value['price'];
						?>
					</td>
						
					<td>
						<?php  
						echo $value['quantity'];
						?>
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><h3>Sum : $ <?php  echo $Total[0]; ?></h3></td>
			</tr>
			</tbody>
		</table>
		<br>
		

		</div>
		<br>
		<br>


		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>

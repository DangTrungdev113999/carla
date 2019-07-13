<?php
	include 'header.php';

	$orders = mysqli_query($conn, "SELECT * FROM orders");


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
			<?php if(!empty($orders)){ ?>
			<table class="table table-hover">
			<thead>
				<h2>List Orders</h2>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Created</th>
					<th>Detail</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($orders as $key=>$value) { ?>
				<tr>
					<td>
						<?php  
						if(empty($value['name'])){
							$id = $value['account_id'];
							$account = mysqli_query($conn, "SELECT * FROM account where account.id = '$id ' ");
							$name = mysqli_fetch_row($account);
							echo $name[1];
						}else{
							echo $value['name'];
						}
					?>
					</td>
					<td><?php  
						if(empty($value['email'])){
							$account = mysqli_query($conn, "SELECT * FROM account where account.id = '$id ' ");
							$name = mysqli_fetch_row($account);
							echo $name[2];
						}else{
							echo $value['email'];
						}
					?></td>

					<td><?php echo $value['created']; ?></td>
					<td>
						<a 
						href="detailHistory.php?id=<?php echo $value['id'] ?>"
						type="button" 
						class="btn btn-primary">Detail</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	<?php }else{ ?>
		<h2>History Null !!!</h2>
	<?php } ?>
		</div>


		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>

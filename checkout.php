<?php
	include 'header.php';
	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $key => $value) {
			$product = $value['quantity'] * $value['price'];
			$total+=$product;
		}

	}
?>
		<!-- End header -->
		<!-- Begin page name -->
		<section class="page-name">
			<div class="container">
				<!-- page-name.jpg -->
				<div class="row">
					<div class="col-md-12">
						<h1>Checkout</h1>
						<ul class="bread-crumbs">
							<li><a href="index.php">Home</a></li>
							<li><p>Checkout</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		
		<!-- Begin checkout content -->
		<main class="checkout-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form  action="uploads/userOrder.php"		
						class="checkout-form" method="POST">
							<?php if(empty($_SESSION['login'])){ ?>
							<div class="user-info">
								<h2>Billing Details</h2>
								<div class="row-input">
									<div class="input-wrap">
										<input type="text" name="name"  placeholder="First Name" id="name">
									</div>
								</div>
								<div class="row-input">
									<div class="input-wrap">
										<input type="email" name="email" id="email" placeholder="E-mail Address">
									</div>
									<div class="input-wrap">
										<input type="tel" name="phone" id="phone" placeholder="Phone">
									</div>
								</div>
								<input type="text" name="address-1" id="address" placeholder="Address">
								<div class="agree">
									<input type="radio" name="agree" id="agree" required>
									<label for="agree">I have read and agree to the Terms & Conditions</label>
								</div>
							</div>
						<?php }else{ ?>
						<div class="user-info" id="Account">
								<div class="panel panel-info">
							<div class="panel-heading">								
							<h2 style="text-align: center">You Account</h2>
							</div>
							<div class="panel-body">
											
							<div class="clearfix"></div>
							<div style="padding: 20px 100px">
								
								<h3><i class="glyphicon glyphicon-user"></i>  <span style="color:red;font-style: italic;"
									><?php echo  $_SESSION['login'][1]?>
								</span></h3>
								<h3><i class="glyphicon glyphicon-envelope"></i>  <span style="color:blue;font-style: italic;">
									<?php echo  $_SESSION['login'][2]?>
								</span></h3>
								<h3><i class="glyphicon glyphicon-phone"></i> <span style="color:#23456;font-style: italic;">
									<?php echo  $_SESSION['login'][3]?>
								</span></h3>
								<h3>Your address: <span style="color:gray;font-style: italic;">
									<?php echo  $_SESSION['login'][5]?>							
								</span></h3>
							</div>
							</div>
					</div>
							</div>
						<?php } ?>
						<?php if(!empty($_SESSION['cart'])){ ?>
							<div class="order-info">
								<h2 >Your Order</h2>
								<div class="invoice">
									<div class="invoice-info">
										<div class="inner-invoice">
											<div class="list-invoice">
												<h5>Subtotal : 
													<span><?php 
													if(isset($total)){
														echo $total;
													}
													else{
														echo 0;
													}
													?> $
													</span></h5>
												<p>Shipping : <span>$10</span></p>
											</div>
											<h3>Order Total : <span>
												<?php echo isset($total) ? $total+=10 : '0' ?>
													$
												</span></h3>
										</div>
									</div>
									
									<?php if(empty($_SESSION['login'])){ ?>
									<button  type="submit" class="border btn btn-success"  id="NoAccount" >Complete Order</button>
									<?php }else{ ?>
									<button  type="submit" class="border btn btn-primary"  id="userOrder" >Complete Order</button>
									<?php } ?>
								</div>
							</div>
						<?php  }else{?>
							<div class="alert alert-info" style="height:100px; text-align: center;">
								<strong>Your Cart Empty !</strong> <br> Would you like to see 
								<a href="historyPayment.php" style="text-decoration: underline;">payment history</a> ?
							</div>
						<?php } ?>
						</form>
					</div>
				</div>
			</div>
		</main>
		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="modal-title">Modal title</h4>						
					</div>
					<div class="modal-body" id="content-alert">
	
					</div>
				</div>
			</div>
		</div>
		<!-- End checkout content -->

		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
		<?php
	include 'footer.php'
?>
<script>
		$(document).ready(function(){
		$('#userOrder').click(function(e){
				e.preventDefault();		
				$.ajax({
					url:'uploads/userOrder.php',
					type:'post',
					dataType:'json',
					data:null,
					success:function(res){
						if(res.success==true) {
						$('#modal-id .modal-title').html(res.message);
						$('#content-alert').html('');
						$('#modal-id').modal('show');
							setTimeout(function(){
								location.reload();
							},1000);
						}else{
						$('#modal-title').html(()=> res.message);
						$('#content-alert').html(() =>("<p style='color:red'>You need enter enough infomation or <a href='account.php'>Login</a></p>"));
						$('#modal-id').modal('show');
						}
						
					}
				});

		})


		$('#NoAccount').click(function(e){
				e.preventDefault();	
				let name = $('#name').val();
				let email = $('#email').val();
				let phone = $('#phone').val();
				let address = $('#address').val();	
				$.ajax({
					url:'uploads/userOrder.php',
					type:'post',
					dataType:'json',
					data:{name, email, phone, address},
					success:function(res){
						if(res.success==true) {
						$('#modal-id .modal-title').html(res.message);
						$('#content-alert').html('');
						$('#modal-id').modal('show');
							setTimeout(function(){
								location.reload();
							},1000);
						}else{
						$('#modal-title').html(()=> res.message);
						$('#content-alert').html(() =>("<p style='color:red'>You need enter enough infomation or <a href='account.php'>Login</a></p>"));
						$('#modal-id').modal('show');
						}
						
					}
				});

		})

	})
</script>
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
				<h1>Account</h1>
				<ul class="bread-crumbs">
					<li><a href="index.php">Home</a></li>
					<li><p>Pages</p></li>
					<li><p>Account</p></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End page name -->

<!-- Begin account content -->
<main class="account-content">
	<div class="container">
		<div class="row">
			<?php if(empty($_SESSION['login'])) { ?>
				<div class="col-sm-5 col-md-4 col-lg-4">
					<div class="account-block rbd">							
						<h3>Log In Your Account</h3>						
						<p>Aliquam sodales faucibus sapien, ut tristique quam imperdiet non. Nullam et felis eros. Cras vehicula convallis nisi.</p>
						<form class="account-form" method="POST" action="uploads/LoginAccount.php">
							<input type="text" name="username" placeholder="Login" id="_login" >
							<input type="password" name="password"  placeholder="Password" id="_password">
							<div class="controls">
								<input type="radio" name="keep" id="keep">
								<label for="keep">Keep me logged in</label>
								<a href="#">Forgot Password?</a>
							</div>
							<button class="btn btn-primary" id="btn-login"> Login </button>
								<!-- <a class="btn btn-primary"
								href="http://localhost:88/carla/account.php"
								onclick='Login()'>Login</a> -->
							</form>
						</div>
					</div>
				<?php } ?>
				<?php if(empty($_SESSION['login'])) { ?>
					<div class="col-sm-7 col-md-8 col-lg-8">
						<div class="account-block">
							<h3>Don`t Have an Acoount?</h3>
							<p>Aliquam sodales faucibus sapien, ut tristique quam imperdiet non. Nullam et felis eros. Cras vehicula convallis nisi.</p>
							<form  class="account-form" method="POST"   action="uploads/Register.php">
								<div class="input-area">
									<div class="input-wrap">
										<input type="text" name="name" id="newName" placeholder="Name">
									</div>
									<div class="input-wrap">
										<input type="email" name="email" id="Address" placeholder="Address">
									</div>
									<div class="input-wrap">
										<input type="text" name="username" id="newUsername" placeholder="Email">
									</div>
									<div class="input-wrap">
										<input type="tel" name="phone" id="newPhone" placeholder="Phone">
									</div>
									<div class="input-wrap">
										<input type="password" name="password" id="newPassWord" placeholder="Password">
									</div>
									<div class="input-wrap">
										<input type="password" name="re-password" id="RepeatPassWord" placeholder="Re - Password">
									</div>
								</div>
								<button type="submit" id="btn-register">Register Now</button>
							</form>
						</div>
					</div>
				<?php }?>
				<?php if(!empty($_SESSION['login'])) {
					?>
					<h3 
					style='color:red;float:right;margin:10px;font-size: 20px;text-decoration: underline' onclick="logOut()">
				Log out</h3>
				<div class="clearfix"></div>
				<div style="border:gray 3px solid;padding: 20px 100px">
					<h2 style="text-align: center">You Account</h2>
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
			<?php }?>

		</div>
	</div>
</main>
<!-- End account content -->
<div class="bg-popup"></div>
<div class="back-top" id="backTop"><p>up!</p></div>

<div class="modal fade" id="modal-message">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Alert !!! </h4>
				<p class="modal-error" ></p>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php'
?>
<script>
	$(document).ready(function(){
		$('#btn-login').click(function(e){
			e.preventDefault();
			var username = $('#_login').val();
			var password = $('#_password').val();
			$.ajax({
				url:'uploads/LoginAccount.php',
				type:'post',
				dataType:'json',
				data:{username:username,password:password},
				success:function(res){
					$('#modal-message .modal-title').html(res.message);
					$('#modal-message .modal-error').html(res.error);
					$('#modal-message').modal('show');
					if (res.success==true) {
						setTimeout(function(){
							location.reload();
						},1000);
					}
					
				}
			});
		})
		$('#btn-register').click((e)=>{
			e.preventDefault();
			let error = [];
			let newName = $('#newName').val();
			let Address = $('#Address').val();
			let newUsername= $('#newUsername').val();
			let newPhone = $('#newPhone').val();
			let newPassWord = $('#newPassWord').val();
			let RepeatPassWord = $('#RepeatPassWord').val();
			function validateEmail(email) {
		    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    return re.test(String(email).toLowerCase());
			}
			let userRex = validateEmail(newUsername);
			if(newName && Address && userRex && newPhone && newPassWord && RepeatPassWord){
				$.ajax({
					url:'uploads/Register.php',
					type:'post',
					dataType:'json',
					data:{newName, Address, newUsername, newPhone, newPassWord, RepeatPassWord},
					success:function(res){
						$('#modal-message .modal-title').html("Register success <3");
						setTimeout(function(){
							location.reload();
						},1000)
						$('#modal-message .modal-error').html(res.message);
						$('#modal-message').modal('show');
						return;
					}
				});
			}else{
				let error = [];		
				if(!newName){
					error.push("You don't have a name !");
				}
				if(!Address){
					error.push("You don't have a address !");
				}
				if(!userRex){
					error.push("You don't have a username !");
				}
				if(!newPhone){
					error.push("You don't have a phone !");
				}
				if(!newPassWord){
					error.push("You don't have a password !");
				}
				if(RepeatPassWord !==  newPassWord){
					error.push("Repeat password wrong !");
				}
				$('#modal-message .modal-title').html("Register Faulted !!!");
				$('#modal-message .modal-error').css("color", "red");
				$('#modal-message').modal('show');
				$('#modal-message .modal-error').html(error.map((e)=>{
					return "<p>" + e + "</p>"
				}));
			}
			



		})


	});
	function logOut(){
		if(confirm('Do you want log out ?')){
			$.post('uploads/logOut.php',{},(data)=>{
				window.location.href="http://localhost:88/carla/account.php";
			})
		}
	}
</script>
		<!-- Begin footer -->
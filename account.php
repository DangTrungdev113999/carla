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
							<form class="account-form" method="POST" action="uploads/CreateAccount.php">
								<input type="text" name="username" placeholder="Login" id="_login" >
								<input type="password" name="password"  placeholder="Password" id="_password">
								<div class="controls">
									<input type="radio" name="keep" id="keep">
									<label for="keep">Keep me logged in</label>
									<a href="#">Forgot Password?</a>
								</div>
								<button class="btn btn-primary"> Login </button>
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
							<form  class="account-form" >
								<div class="input-area">
									<div class="input-wrap">
										<input type="text" name="name" placeholder="Name">
									</div>
									<div class="input-wrap">
										<input type="email" name="email" placeholder="E-mail Address">
									</div>
									<div class="input-wrap">
										<input type="text" name="username" placeholder="Username">
									</div>
									<div class="input-wrap">
										<input type="tel" name="phone" placeholder="Phone">
									</div>
									<div class="input-wrap">
										<input type="password" name="password" placeholder="Password">
									</div>
									<div class="input-wrap">
										<input type="password" name="re-password" placeholder="Re - Password">
									</div>
								</div>
								<button type="submit">Register Now</button>
							</form>
						</div>
					</div>
				<?php }?>
				<?php if(!empty($_SESSION['login'])) {
					?>
					<a 
					style='color:red;float:right;margin:10px;font-size: 20px;text-decoration: underline' onclick="logOut()">
				Log out</a>
				<div class="clearfix"></div>
				<div style="border:solid;padding: 20px">
					<h2>You Account</h2>
					<h3>Your Name: <span style="color:red;font-style: italic;"
						><?php echo  $_SESSION['login'][1]?>
					</span></h3>
					<h3>Your email: <span style="color:blue;font-style: italic;">
						<?php echo  $_SESSION['login'][2]?>
					</span></h3>
					<h3>Your phone: <span style="color:#23456;font-style: italic;">
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
		<script>
			// function Login(){
			// 	let login = _login.value;
			// 	let password = _password.value;
			// 	$.post('uploads/CreateAccount.php',{"username":login,"password":password},(data)=>{
			// 		console.log(data);
			// 	})
			// }
			function logOut(){
				if(confirm('Do you want log out ?')){
				$.post('uploads/logOut.php',{},(data)=>{
					window.location.href="http://localhost:88/carla/account.php";
				})
				}
			}
		</script>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>
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
					<div class="col-sm-5 col-md-4 col-lg-4">
						<div class="account-block rbd">
							<h3>Log In Your Account</h3>
							<p>Aliquam sodales faucibus sapien, ut tristique quam imperdiet non. Nullam et felis eros. Cras vehicula convallis nisi.</p>
							<form action="#" class="account-form">
								<input type="text" name="login" placeholder="Login">
								<input type="password" name="password" placeholder="Password">
								<div class="controls">
									<input type="radio" name="keep" id="keep">
									<label for="keep">Keep me logged in</label>
									<a href="#">Forgot Password?</a>
								</div>
								<button type="submit">Login</button>
							</form>
						</div>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-8">
						<div class="account-block">
							<h3>Don`t Have an Acoount?</h3>
							<p>Aliquam sodales faucibus sapien, ut tristique quam imperdiet non. Nullam et felis eros. Cras vehicula convallis nisi.</p>
							<form action="#" class="account-form">
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
				</div>
			</div>
		</main>
		<!-- End account content -->
		<div class="bg-popup"></div>
		<div class="back-top" id="backTop"><p>up!</p></div>
		<!-- Begin footer -->
<?php
	include 'footer.php'
?>
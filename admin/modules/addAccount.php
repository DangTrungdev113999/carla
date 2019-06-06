<?php
	if (isset($_POST['addNew'])) {
		$table = 'account';
		$data = $_POST;
		$sqlInsert = insertData($table, $data);
		// echo "<pre>";
		// print_r($sqlInsert);
		// die;
		mysqli_query($conn, $sqlInsert);
		header("location: index.php?module=accounts");
	}
?>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Account table <a href="index.php?module=accounts" class="badge badge-success">list</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Account Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Account</h5>
			<div class="card-body">
				<form action="" name="product" method="POST" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="name">Account name</label>
						<input id="name" type="text" name="name" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input id="Email" type="email" name="Email" required=""  placeholder="Enter the Email of product"  class="form-control">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input id="phone" type="number" name="phone" required=""  placeholder="Enter the sale proce of product"  class="form-control">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input id="address" type="text" name="address" value="" placeholder="Enter the password"  class="form-control">
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<input id="level" type="number" name="level" value="" placeholder="Enter the password"  class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input id="password" type="password" name="password" value="" placeholder="Enter the password"  class="form-control">
					</div>
					<div class="form-group">
						<label for="created">Created</label>
						<input id="created" type="date" name="created" value=""  class="form-control">
					</div>


					<div class="row">
						<div class="col-sm-12 pl-0">
							<p class="text-right">
								<button type="submit" name="addNew" class="btn btn-outline-primary">Add new</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
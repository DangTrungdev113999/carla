<?php
	if (isset($_GET['module']) && isset($_GET['id'])) {
		$sqlSelect = 'SELECT * FROM account where id = '.$_GET['id'];
		$result = mysqli_query($conn, $sqlSelect);
		$row = mysqli_fetch_assoc($result);
	}

	if (isset($_POST['addNew'])) {
		$table = 'account';
		$data = $_POST;
		$condition = ' WHERE id = '.$_GET['id'];
		$sqlUpdate = updateData($table, $data, $condition);
		mysqli_query($conn, $sqlUpdate) or die("lỗi update attribute ".$sqlUpdate);
		header("location: index.php?module=accounts");
	}
?>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Account table <a href="index.php?module=accounts" class="badge badge-success">exit</a></h2>
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
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Update Account</h5>
			<div class="card-body">
				<form action="" name="product" method="POST" id="basicform" data-parsley-validate="">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="name">Account name</label>
								<input id="name" type="text" name="name" value="<?php echo $row['name'] ?>" required="" placeholder="Enter the Account name"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="Email">Email</label>
								<input id="Email" type="email" name="Email" value="<?php echo $row['email'] ?> "required=""  placeholder="Enter the Email of product"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input id="phone" type="number" name="phone"  value="<?php echo $row['phone'] ?>"required=""  placeholder="Enter the sale proce of product"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="address">Address</label>
								<input id="address" type="text" name="address" value="<?php echo $row['address'] ?>"placeholder="Enter the password"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="level">Level</label>
								<input id="level" type="number" name="level" value="" value="<?php echo $row['level'] ?>" placeholder="Enter the password"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="password">Password</label>
								<input id="password" type="password" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter the password"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="created">Created</label>
								<input id="created" type="date" name="created" value=""  class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 pl-0">
							<p class="text-right">
								<button type="submit" name="addNew" class="btn btn-outline-primary">Update</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
	if (isset($_POST['addNew'])) {
		$table = 'attribute';
		$data = $_POST;
		$sqlInsert = insertData($table, $data);
		mysqli_query($conn, $sqlInsert) or die('lỗi insert dữ liệu '.$sqlInsert);
		header("location: index.php?module=attributes");
	}
 ?>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add Attribute table  <a href="index.php?module=attributes" class="badge badge-success">list</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Attribute Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Attribute</h5>
			<div class="card-body">
				<form action="" name="attribute" method="POST" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="name">Attribute name</label>
						<input id="name" type="text" name="name" required="" placeholder="Enter the attribute name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="value">value</label>
						<input id="value" type="text" name="value" required="" class="form-control" placeholder="Enter the value">
					</div>
					<div class="form-group">
						<label for="ordering">Type</label>
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="type" value="color" class="custom-control-input"><span class="custom-control-label">color</span>
							</label>
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="type" value="size" class="custom-control-input"><span class="custom-control-label">Size</span>
							</label>
					</div>
					<div class="form-group">
						<label for="created">created</label>
						<input id="created" type="date" name="created" value="" placeholder="Enter the created"  class="form-control">
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p class="text-left">
								<button type="submit" name="addNew" class="btn btn-outline-primary">Add new</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
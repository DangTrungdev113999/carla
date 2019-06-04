<?php
if (isset($_POST['addNew'])) {
	$table = 'category';
	$data = '_POST';
	$data['status'] = (isset($data['status'])) ? isset($data['status']) : 0; 

	$sqlInsert = insertData($table, $data);



	mysqli_query($conn, $sqlInsert) or die("lỗi thêm mới danh mục sản phẩm".$sqlInsert);
	header("location: categories.php");

};
?>


<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Category table <a href="index.php?module=categories" class="badge badge-success">list</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Category Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Categories</h5>
			<div class="card-body">
				<form action="" name="" method="post" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="name">Category name</label>
						<input id="name" type="text" name="name" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="created">Created</label>
						<input id="created" type="date" name="created" placeholder="Enter the created"  class="form-control">
					</div>
					<div class="form-group">
						<label for="parent_id">Parent id</label>
						<input id="parent_id" type="number" name="parent_id" placeholder="Enter the Parent id"  class="form-control">
					</div>
					<div class="form-group">
						<label for="ordering">Ordering</label>
						<input id="ordering" type="number" name="ordering"  placeholder="Enter the ordering"  class="form-control">
					</div>

					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="status" value="1" class="custom-control-input"><span class="custom-control-label">status</span>
							</label>
						</div>
						<div class="col-sm-6 pl-0">
							<p class="text-right">
								<button type="submit" name="addNew" class="btn btn-space btn-primary">Add new</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
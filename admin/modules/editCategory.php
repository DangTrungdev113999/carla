<?php
	if(isset($_GET['module']) && $_GET['id']) {
		$id = $_GET['id'];
		$sqlGetId = "SELECT * FROM category WHERE id = ".$id;
		$result = mysqli_query($conn, $sqlGetId);
		$row = mysqli_fetch_row($result);

		$catName = $row[1];
		$parent_id = $row[2];
		$status = $row[3];
		$ordering = $row[4];
		$created = $row[5];
	};


	if(isset($_POST['addNew'])) {
		$catName = $_POST['name'];
		$parent_id = $_POST['parent_id'];
		$ordering = $_POST['ordering'];
		$created = $_POST['created'];
		$status = (isset($_POST['status'])) ? isset($_POST['status']) : 0; 

		$sqlUpdate = "UPDATE category SET name = '$catName', parent_id = '$parent_id', 
		`status` = '$status', ordering = '$ordering', created = '$created' WHERE id=".$_GET['id'];

		mysqli_query($conn, $sqlUpdate) or die("lỗi update danh mục sản phẩm".$sqlUpdate);
		header("location: index.php?module=categories");
	};
?>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Edit Category table <a href="index.php?module=categories" class="badge badge-success">exit</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edit Category Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Edit Category</h5>
			<div class="card-body">
				<form action="" name="" method="post" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="name">Category name</label>
						<input id="name" type="text" name="name" value="<?php echo $catName ?>" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="parent_id">Parent id</label>
						<input id="parent_id" type="number" value="<?php echo $parent_id ?>" name="parent_id" placeholder="Enter the Parent id"  class="form-control">
					</div>
					<div class="form-group">
						<label for="created">Created</label>
						<input id="created" type="date" value="<?php echo $created ?>" name="created" placeholder="Enter the created"  class="form-control">
					</div>
					<div class="form-group">
						<label for="ordering">Ordering</label>
						<input id="ordering" type="number" value="<?php echo $ordering ?>" name="ordering"  placeholder="Enter the ordering"  class="form-control">
					</div>

					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="status" value="1" <?php echo ($status) ? "checked" : "" ?> class="custom-control-input"><span class="custom-control-label">status</span>
							</label>
						</div>
						<div class="col-sm-6 pl-0">
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
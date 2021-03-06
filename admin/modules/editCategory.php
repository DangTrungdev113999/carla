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
	

	// using function to update data
	if(isset($_POST['addNew'])) {
		$table = 'category';
		$data = $_POST;
		$data['status'] = (isset($data['status'])) ? isset($data['status']) : 0; 
		$condition = " WHERE id=".$_GET['id'];

		$sqlUpdate = updateData($table, $data, $condition);

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
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Edit Category</h5>
			<div class="card-body">
				<form action="" name="" method="post" id="basicform" data-parsley-validate="">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="name" class='text-dark'>Category name</label>
								<input id="name" type="text" name="name" value="<?php echo $catName ?>" required="" placeholder="Enter the category name"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="parent_id" class='text-dark'>Parent category</label>
								<select name="parent_id" class="form-control">
									<option value="">--choose the parent category--</option>\
									<?php
										 $sqlSelectParentt_id = "SELECT * FROM category where parent_id = 0 ";
										 $resultParentt_id = mysqli_query($conn, $sqlSelectParentt_id);
										 while ($rowParent_id = mysqli_fetch_assoc($resultParentt_id)) :
										 	$selected = "";
										 	if ($row[2] === $rowParent_id['id']) {
										 		$selected = "selected";
										 	}
									?>
										<option  <?php echo $selected ?> value="<?php echo $rowParent_id['id'] ?>"> <?php echo $rowParent_id['name'] ?></option>
									<?php endwhile ?>
								</select>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="created" class='text-dark'>Created</label>
								<input id="created" type="date" value="<?php echo $created ?>" name="created" placeholder="Enter the created"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="ordering" class='text-dark'>Ordering</label>
								<input id="ordering" type="number" value="<?php echo $ordering ?>" name="ordering"  placeholder="Enter the ordering"  class="form-control">
							</div>
						</div>
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
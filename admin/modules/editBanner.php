<?php
	$imgOld = '';
	if (isset($_GET['module']) && isset($_GET['id'])) {
		$sqlSelect = "SELECT * FROM banner WHERE id = ".$_GET['id'];
		$result = mysqli_query($conn, $sqlSelect);
		$row = mysqli_fetch_assoc($result);
		$imgOld = $row['image'];
	}


	if (isset($_POST['addNew'])) {
		$path = '../public/img';
		$fileName = "";
		$type = [
			'image/jpeg',
			'image/jpg',
			'image/png',
			'image/gif'
		];

		if ($_FILES["image"]["name"]) {
			if (in_array($_FILES['image']['type'], $type)) {
				if ($_FILES['image']['size'] <= 9999999) {
					if ($_FILES['image']['error'] === 0) {
					// pass file to server
						$filename = $_FILES["image"]["tmp_name"];
						$destination = $path.time().'-'.$_FILES['image']['name'];
						move_uploaded_file($filename, $destination);
						$fileName .= $_FILES['image']['name'];

					} else {
						echo 'lỗi file';
					}
				} else {
					echo 'dung lượng ảnh quá lớn';
				}
			} else {
				echo 'không đúng định dạng';
			}
		} else {
			$fileName = $imgOld;
		}


		$table = 'banner';
		$data = $_POST;
		$data['status'] = (isset($data['status'])) ? isset($data['status']) : 0;
		$data['image'] = $fileName;
		$condition = " WHERE id =".$_GET['id'];
		$sqlUpdate = updateData($table, $data, $condition);
		mysqli_query($conn, $sqlUpdate) or die("lỗi update banner");
		header("location: index.php?module=banners");
	}
	
?>
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Update Banner table <a href="index.php?module=banners" class="badge badge-success">exit</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Update Banner Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Banner</h5>
			<div class="card-body">
				<form action="" name="banner" method="POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="name">Banner name</label>
								<input id="name" type="text" name="name" value="<?php echo $row['name'] ?>" required="" placeholder="Enter the Banner name"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="image">Banner image</label>
								<img src="../public/img/<?php echo $row['image'] ?>" width='100' class='img-responsive img-thumbnail' alt=""  id="show_img" width="100">
								<input id="image" type="file" name="image"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="ordering">ordering</label>
								<input id="ordering" type="number" value="<?php echo $row['ordering'] ?>" name="ordering"  required=""  placeholder="Enter the ordering of banner"  class="form-control">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="created">created</label>
								<input id="created" type="date" name="created" value="" placeholder="Enter the created"  class="form-control">
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="content">Content</label>
								<textarea name="content" id="content"  placeholder="Enter the discription" class="form-control" rows="10" cols="50"><?php echo $row['content'] ?></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="status" value="1" class="custom-control-input" <?php echo ($row['status']) ? "checked" : ''?>><span class="custom-control-label">status</span>
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
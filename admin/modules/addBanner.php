<?php

	if (isset($_POST['addNew'])) {

		$type = [
			'image/jpg',
			'image/png',
			'image/gif',
			'image/jpeg'
		];
		$path = '../uploads/';
		$fileName = '';
		if (isset($_FILES['image'])) {
			if (in_array($_FILES['image']['type'], $type)) {
				if ($_FILES['image']['size'] < 99999999) {
					if ($_FILES['image']['error'] === 0) {
						$filename = $_FILES['image']['tmp_name'];
						$destination = $path.$_FILES['image']['name'];
						move_uploaded_file($filename, $destination);
						$fileName .= 'uploads/'.$_FILES['image']['name'];
					} else {
						echo 'lỗi upload';
					}
				} else {
					echo 'ảnh heo à sao mà dung lượng lớn vậy';
				}
			} else {
				echo 'không đúng định dạng ảnh';
			}
		}

		$table = 'banner';
		$data = $_POST;
		$data['status'] = (isset($data['status'])) ? isset($data['status']) : 0;
		$data['image'] = $fileName;
		$sqlInsert = insertData($table, $data);
		mysqli_query($conn, $sqlInsert) or die('lỗi thêm mới banner '.$sqlInsert);
		header("location: index.php?module=banners");
	}
?>
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Banner table  <a href="index.php?module=banners" class="badge badge-success">list</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Banner Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Banner</h5>
			<div class="card-body">
				<form action="" name="banner" method="POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="name">Banner name</label>
						<input id="name" type="text" name="name" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="image">Banner image</label>
						<input id="image" type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label for="ordering">ordering</label>
						<input id="ordering" type="number" name="ordering" required=""  placeholder="Enter the ordering of banner"  class="form-control">
					</div>
					<div class="form-group">
						<label for="created">created</label>
						<input id="created" type="date" name="created" value="" placeholder="Enter the created"  class="form-control">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" id="content" placeholder="Enter the discription" class="form-control" rows="10" cols="50"></textarea>
					</div>

					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="status" value="1" class="custom-control-input"><span class="custom-control-label">status</span>
							</label>
						</div>
						<div class="col-sm-6 pl-0">
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



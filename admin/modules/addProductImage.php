<?php
	if (isset($_POST['addNew'])) {

		$type = [
			'image/jpg',
			'image/jpeg',
			'image/png',
			'image/gif'
		];
		$path = '../uploads/';
		$fileName = '';
		if (isset($_FILES['image'])) {
			if (in_array($_FILES['image']['type'], $type)) {
				if ($_FILES['imge']['size'] < 999999) {
					if ($_FILES['image']['error'] === 0) {

						$filename = $_FILES['image']['tmp_name'];
						$destination = $path.$_FILES['image']['name'];
						move_uploaded_file($filename, $destination);
						$fileName .= "uploads/".$_FILES['image']['name'];
					} else {
						echo 'lỗi file upload';
					}
				} else {
					echo 'dung lượng file quá lớn';
				}
			} else {
				echo 'không đúng định dạng ảnh';
			}
		}

		$table =  'product_image';
		$data = $_POST;
		$data['image'] = $fileName;
		$sqlInsert = insertData($table, $data);
		mysqli_query($conn, $sqlInsert) or die('lỗi thêm mới product_image'.$sqlInsert);
		header("location: index.php?module=productImages");
	}
?>
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Product Image table  <a href="index.php?module=productImages" class="badge badge-success">list</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Product Image Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Product Images</h5>
			<div class="card-body">
				<form action="" name="banner" method="POST" id="basicform" enctype="multipart/form-data" data-parsley-validate="">
					<div class="form-group">
						<label for="product_id">Product's Image</label>
						<select name="product_id" id="product_id" class="form-control">
							<option value="">--Choose category type--</option>
							<?php 
								$sqlSelect = "SELECT * FROM product";
								$result = mysqli_query($conn, $sqlSelect) or die("lỗi truy xuất sản phẩm".$sqlSelect);
								while($row = mysqli_fetch_assoc($result)) {
							?>
								<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>

							<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="image">Image</label>
						<input id="image" type="file" name="image" required=""  class="form-control">
					</div class="form-group">
					<div class="form-group">
						<label for="ordering">Ordering</label>
						<input id="ordering" type="Number" name="ordering" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
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
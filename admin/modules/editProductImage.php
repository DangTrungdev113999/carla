<?php
	$imgOld = '';
	if (isset($_GET['module']) && isset($_GET['id'])) {
		$sqlSelect = "SELECT * FROM product_image WHERE id =".$_GET['id'];
		$result = mysqli_query($conn, $sqlSelect);
		$row = mysqli_fetch_assoc($result);
		$imgOld = $row['image'];
	}

	if (isset($_POST['addNew'])) {

		$path = '../public/img/';
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
						$fileName .= time().'-'.$_FILES['image']['name'];

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

		$table = 'product_image';
		$data = $_POST;
		$data['image'] = $fileName;
		$condition = ' WHERE id = '.$_GET['id'];
		$sqlUpdate =  updateData($table, $data, $condition);
		mysqli_query($conn, $sqlUpdate) or die('lỗi update ảnh sản phẩm '.$sqlUpdate);
		header("location: index.php?module=productImages");
	}

?>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Update Product Image table <a href="index.php?module=productImages" class="badge badge-success">exit</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Update Product Image Table</li>
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
								$sqlSelectPro = "SELECT * FROM product";
								$resultPro = mysqli_query($conn, $sqlSelectPro) or die("lỗi truy xuất sản phẩm".$sqlSelectPro);
								while($rowPro = mysqli_fetch_assoc($resultPro)) {
									$selected = '';
									if ($row['product_id'] === $rowPro['id']) {
										$selected = "selected";
									}
							?>
								<option <?php echo $selected ?> value="<?php echo $rowPro['id'] ?>"><?php echo $rowPro['name'] ?></option>

							<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="image">Image</label>
						<img src="../public/img/<?php echo $row['image'] ?>" width="200" class="img-responsive img-thumbnail" id='show_img'>
						<input id="image" type="file" name="image"  class="form-control">
					</div class="form-group">
					<div class="form-group">
						<label for="ordering">Ordering</label>
						<input id="ordering" type="Number" name="ordering" value="<?php echo $row['ordering'] ?>" placeholder="Enter the ordering"  class="form-control">
					</div>
					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
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
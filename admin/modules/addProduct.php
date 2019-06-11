<?php
	// using function to insert data
	if(isset($_POST['addNew'])) {

		// file upload
		$path = '../public/img/';
		$fileName = '';
		$type = [
		'image/jpeg',
		'image/jpg',
		'image/png',
		'image/gif'
		];

		if (isset($_FILES["image"])) {
			if (in_array($_FILES['image']['type'], $type)) {

				if ($_FILES['image']['size'] <= 9999999) {

					if ($_FILES['image']['error'] === 0) {
						// pass file to server
						$filename = $_FILES["image"]["tmp_name"];
						$destination = $path.$_FILES['image']['name'];
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

		};

		$table = 'product';
		$data = $_POST;
		$data['status'] = (isset($data['status'])) ? (isset($data['status'])) : 0;
		$data['image'] = $fileName;
		unset($data['color']);
		unset($data['size']);
		unset($data['images']);

 		$sqlInsert = insertData($table, $data);
		if (mysqli_query($conn, $sqlInsert)) {
			$product_id = mysqli_insert_id($conn);

			// add attribute of product into product_attribute table
			if (count($_POST['color']) || count($_POST['size'])) {
			 	foreach ($_POST['color'] as $idColor) {
			 		$sqlInsertAttr = "INSERT INTO product_attribute(product_id, attribute_id) VALUES('$product_id', '$idColor');";
			 		mysqli_query($conn, $sqlInsertAttr);
			 	}

			 	foreach ($_POST['size'] as $idSize) {
			 		$sqlInsertAttr = "INSERT INTO product_attribute(product_id, attribute_id) VALUES('$product_id', '$idSize');";
			 		mysqli_query($conn, $sqlInsertAttr);
			 	}

			 }

			 // add images of product into product_image table
			 if (isset($_FILES["images"]) && count($_FILES['images']['name']) > 0) {

			 	$n = count($_FILES['images']['name']);
			 	for ( $i = 0; $i < $n; $i++) {
			 		$fileNames = '';
				 	if (in_array($_FILES['images']['type'][$i], $type)) {

				 		if ($_FILES['images']['size'][$i] <= 9999999) {

				 			if ($_FILES['images']['error'][$i] === 0) {

				 				$filename = $_FILES["images"]["tmp_name"][$i];
				 				$destination = $path.$_FILES['images']['name'][$i];
				 				if (move_uploaded_file($filename, $destination)) {
					 				$fileNames .= $_FILES['images']['name'][$i];
					 				$sqlInsertPro_img = "INSERT INTO product_image(product_id, image) VALUES ('$product_id', '$fileNames')";
					 				mysqli_query($conn, $sqlInsertPro_img) or die('lỗi thêm mới nhiều ảnh sản phẩm '.$sqlInsertPro_img);
				 				}
				 			} else {
				 				echo 'lỗi file';
				 			}
				 		} else {
				 			echo 'dung lượng ảnh quá lớn';
				 		}
				 	} else {
				 		echo 'không đúng định dạng';
				 	}
			 	}
			}; 
			header("location: index.php?module=products");
		} else {
			die('lỗi thêm mới sản phẩm '.$sqlInsert);
		}

	};
?>
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Product table <a href="index.php?module=products" class="badge badge-success">list</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Product Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Products</h5>
			<div class="card-body">
				<form action="" name="product" method="POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="">
					<div class="row">
						<div class="form-group  col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="name" class="text-dark">Product name</label>
							<input id="name" type="text" name="name" required="" placeholder="Enter the category name"  class="form-control">
						</div>
							<div class="form-group  col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="category_id" class="text-dark">Category</label>
							<select name="category_id" id="category_id" class="form-control">
								<option value="">--Choose category type--</option>
								<?php
								$selectData = "SELECT * FROM category WHERE parent_id NOT IN (0) ";
								$resultCat = mysqli_query($conn, $selectData) or die("lỗi truy xuất danh mục sản phẩm".$selectData);
								while($rowCat = mysqli_fetch_assoc($resultCat)) {
									?>

									<option value="<?php echo $rowCat['id'] ?>"><?php echo $rowCat['name'] ?></option>

									<?php 
								} 
								?>
							</select>
						</div>
					</div>



					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="image" class="text-dark">Avatar image</label>
								<input id="image" type="file" name="image" class="form-control">
							</div>
						</div>
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="image" class="text-dark">Product image</label>
								<input id="image" type="file" name="images[]" multiple class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="price" class="text-dark">Price</label>
							<input id="price" type="number" name="price" required=""  placeholder="Enter the price of product"  class="form-control">
						</div>
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="sale_price" class="text-dark">Sale price</label>
							<input id="sale_price" type="number" name="sale_price" required=""  placeholder="Enter the sale proce of product"  class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div>Color</div>
							<?php 
							$sqlSelectAttr = "SELECT * FROM attribute WHERE type = 'color'";
							$resultAttr = mysqli_query($conn, $sqlSelectAttr);
							while($rowAttr = mysqli_fetch_assoc($resultAttr)) :
								?>
								<div class="checkbox d-inline-block ml-3">
									<label class="be-checkbox custom-control custom-checkbox">
										<input type="checkbox" name='color[]' value="<?php echo $rowAttr['id'] ?>" class="custom-control-input">
										<span class="custom-control-label" style="background: <?php echo  $rowAttr['value'] ?>; height: 25px; width: 25px; border-radius: 100%; display: inline-block;box-shadow: 2px 2px 3px gray;"></span>
									</label>
								</div>
							<?php endwhile; ?>
						</div>
						
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div>Size</div>
							<?php 
							$sqlSelectAttr = "SELECT * FROM attribute WHERE type = 'size'";
							$resultAttr = mysqli_query($conn, $sqlSelectAttr);
							while($rowAttr = mysqli_fetch_assoc($resultAttr)) :
								?>
								<div class="checkbox d-inline-block ml-3">
									<label class="be-checkbox custom-control custom-checkbox">
										<input type="checkbox" name='size[]' value="<?php echo $rowAttr['id'] ?>" class="custom-control-input"><span class="custom-control-label"><?php echo  strtoupper($rowAttr['value']) ?></span>
									</label>
								</div>
							<?php endwhile; ?>
						</div>
					</div>

					<div class="form-group">
						<label for="created" class="text-dark">created</label>
						<input id="created" type="date" name="created" value="" placeholder="Enter the created"  class="form-control">
					</div>

					<div class="form-group">
						<label for="content" class="text-dark">Content</label>
						<textarea name="content" id="content" placeholder="Enter the discription" class="form-control" rows="10" cols="50"></textarea>
					</div>

					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" id="status" name="status" value="1" class="custom-control-input"><span class="custom-control-label">Status</span>
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
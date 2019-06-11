<?php

$imgOld = "";

if (isset($_GET['module']) && isset($_GET['id'])) {
	$sqlSelect = "SELECT * FROM product p WHERE p.id = ".$_GET['id'];
	$result = mysqli_query($conn, $sqlSelect) or die('lỗi truy vấn sản phẩm '.$sqlSelect);
	$row = mysqli_fetch_assoc($result);
	$imgOld .= $row['image'];

	$sqlSelectImg = "SELECT * FROM  product_image where product_id=".$_GET['id'];
	$resultImg = mysqli_query($conn, $sqlSelectImg);
	$rowImg = mysqli_fetch_assoc($resultImg);
}

if (isset($_POST['addNew'])) {

			// echo '<pre>';
			// print_r(count($rowImg));
			// echo '</pre>';
			// die;
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
	} else {
		$fileName = $imgOld;
	}


	$table = 'product';
	$data = $_POST;
	$data['status'] = (isset($data['status'])) ? (isset($data['status'])) : 0;
	$data['image'] = $fileName;
	unset($data['color']);
	unset($data['size']);
	unset($data['images']);
	$condition = " WHERE id = ".$_GET['id'];

	$sqlUpdate = updateData($table, $data, $condition);

	if (mysqli_query($conn, $sqlUpdate)) {
		$product_id = $_GET['id'];
		$sqlUpdateAttr = '';
		mysqli_query($conn, 'DELETE FROM `product_attribute` WHERE product_id ='.$_GET['id']);
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

		if (($_FILES["images"]['name']) && count($_FILES['images']['name']) > 0) {
			mysqli_query($conn, "DELETE FROM product_image where product_id = ".$_GET['id']);
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
		} else {
			mysqli_query($conn, "DELETE FROM product_image where product_id = ".$_GET['id']);
		 	$n = count($rowImg);
		 	$defaultImg = ['team-1.jpg' , 'team-2.jpg', 'team-3.jpg'];
		 	for ( $i = 0; $i < $n; $i++) {
 				$fileNames .= $defaultImg[$i];
 				$sqlInsertPro_img = "INSERT INTO product_image(product_id, image) VALUES ('$product_id', '$fileNames')";
 				mysqli_query($conn, $sqlInsertPro_img) or die('lỗi thêm mới nhiều ảnh sản phẩm '.$sqlInsertPro_img);
		 	}
		}

		header("location: index.php?module=products");
	} else {
		die("lỗi update sản phẩm ".$sqlUpdate);
	}
};
?>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Update Product table <a href="index.php?module=products" class="badge badge-success">exit</a></h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Update Product Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Update Products</h5>
			<div class="card-body">
				<form action="" name="product" method="POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="">
					<div class="row">
						<div class="form-group  col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="name" class="text-dark">Product name</label>
							<input id="name" type="text" value="<?php echo $row['name'] ?>" name="name" required="" placeholder="Enter the category name"  class="form-control">
						</div>
							<div class="form-group  col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="category_id" class="text-dark">Category</label>
							<select name="category_id" id="category_id" class="form-control">
								<option value="">--Choose category type--</option>
								<?php
								$selectData = "SELECT * FROM category WHERE parent_id NOT IN (0) ";
								$resultCat = mysqli_query($conn, $selectData) or die("lỗi truy xuất danh mục sản phẩm".$selectData);
								while($rowCat = mysqli_fetch_assoc($resultCat)) {
									$selected = "";
									if ($row['category_id'] === $rowCat['id']) {
										$selected = "selected";
									}
									?>

									<option <?php echo $selected ?> value="<?php echo $rowCat['id'] ?>"><?php echo $rowCat['name'] ?></option>

									<?php 
								} 
								?>
							</select>
						</div>
					</div>



					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<label for="image" class="text-dark">Avatar image</label> <br>
								<img src="../public/img/<?php echo $row['image'] ?>" alt="" width='120' class='mb-2 img-thumbnail img-responsive'>
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
							<input id="price" type="number" value="<?php echo $row['price'] ?>" name="price" required=""  placeholder="Enter the price of product"  class="form-control">
						</div>
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<label for="sale_price" class="text-dark">Sale price</label>
							<input id="sale_price" type="number" value="<?php echo $row['sale_price'] ?>" name="sale_price" required=""  placeholder="Enter the sale proce of product"  class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div>Color</div>
							<?php 
							$sqlSelectAttr = "SELECT a.*, pa.product_id as 'attributeId' FROM attribute a 
							left join product_attribute pa on a.id = pa.product_id
							WHERE a.type = 'color'
							GROUP BY a.id
							";
							$resultAttr = mysqli_query($conn, $sqlSelectAttr);
							while($rowAttr = mysqli_fetch_assoc($resultAttr)) :
								$selectedColor = false;
								if ($rowAttr["id"] === $rowAttr['attributeId']) { //  need fix
									$selectedColor = true;
								}
								?>
								<div class="checkbox d-inline-block ml-3">
									<label class="be-checkbox custom-control custom-checkbox">
										<input type="checkbox" 	<?php echo ($selectedColor) ? 'checked' : '' ?> name='color[]' value="<?php echo $rowAttr['id'] ?>" class="custom-control-input">
										<span class="custom-control-label" style="background: <?php echo  $rowAttr['value'] ?>; height: 25px; width: 25px; border-radius: 100%; display: inline-block;box-shadow: 2px 2px 3px gray;"></span>
									</label>
								</div>
							<?php endwhile; ?>
						</div>
						
						<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div>Size</div>
							<?php 
							$sqlSelectAttr = "SELECT a.*, pa.attribute_id as 'attributeId' FROM attribute a 
								left join product_attribute pa on a.id = pa.attribute_id
								WHERE a.type = 'size'
								GROUP BY a.id ";
							$resultAttr = mysqli_query($conn, $sqlSelectAttr);
							while($rowAttr = mysqli_fetch_assoc($resultAttr)) :
								$selectedSize = false;
								if ($rowAttr["id"] === $rowAttr['attributeId']) { //  need fix
									$selectedSize = true;
								}
								?>
								<div class="checkbox d-inline-block ml-3">
									<label class="be-checkbox custom-control custom-checkbox">
										<input type="checkbox" <?php echo ($selectedSize) ? 'checked' : "" ?> name='size[]' value="<?php echo $rowAttr['id'] ?>" class="custom-control-input"><span class="custom-control-label"><?php echo  strtoupper($rowAttr['value']) ?></span>
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
						<textarea name="content" id="content" placeholder="Enter the discription" class="form-control" rows="10" cols="50"><?php echo $row['content'] ?></textarea>
					</div>

					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" <?php echo ($row['status']) ? "checked" : "" ?> id="status" name="status" value="1" class="custom-control-input"><span class="custom-control-label">Status</span>
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
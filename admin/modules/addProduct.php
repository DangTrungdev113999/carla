<?php
	// if (isset($_POST['addNew'])) {
	// 	$productName = $_POST['productName'];
	// 	$image = $_POST['image'];
	// 	$content = $_POST['content'];
	// 	$category_id = $_POST['category_id'];
	// 	$price = $_POST['price'];
	// 	$sale_price = $_POST['sale_price'];
	// 	$status = (isset($_POST['status'])) ? isset($_POST['status']) : 1;
	// 	$created = ($_POST['created']) ? $_POST['created'] : '12/11/2019';

	// 	$insertDataToPro = "INSERT INTO product(name, image, content, category_id, price, sale_price, status, created)
	// 					VALUES('$productName', '$image', '$content', '$category_id', '$price', '$sale_price', '$status', '$created')";

	// 	mysqli_query($conn, $insertDataToPro) or die("thêm mới sản phẩm thát bại".$insertDataToPro);
	// };



	// using function to insert data
if(isset($_POST['addNew'])) {
	$table = 'product';
	$data = $_POST;

	// file upload
	
	$path = '../uploads/';
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
					$fileName .= 'uploads/'.$_FILES['image']['name'];
				} else {
					echo 'lỗi file';
				}
			} else {
				echo 'dung lượng ảnh quá lớn';
			}
		} else {
			echo 'không đúng định dạng';
		}

		// echo "<pre/>";
		// print_r($_FILES);
		// die;
	};


	$data['status'] = (isset($data['status'])) ? (isset($data['status'])) : 0;
	$data['image'] = $fileName;
	$sqlInsert = insertData($table, $data);
	mysqli_query($conn, $sqlInsert) or die("lỗi thêm mới danh mục sản phẩm ".$sqlInsert);
	header("location: index.php?module=products");

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
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Products</h5>
			<div class="card-body">
				<form action="" name="product" method="POST" enctype="multipart/form-data" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="name">Product name</label>
						<input id="name" type="text" name="name" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="image">Product image</label>
						<input id="image" type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label for="category_id">Category</label>
						<select name="category_id" id="category_id" class="form-control">
							<option value="">--Choose category type--</option>
							<?php
							$selectDataFromCat = "SELECT * FROM category";
							$resultCat = mysqli_query($conn, $selectDataFromCat) or die("lỗi truy xuất danh mục sản phẩm".$selectDataFromCat);
							while($rowCat = mysqli_fetch_assoc($resultCat)) {
								?>

								<option value="<?php echo $rowCat['id'] ?>"><?php echo $rowCat['name'] ?></option>

								<?php 
							} 
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="price">Price</label>
						<input id="price" type="number" name="price" required=""  placeholder="Enter the price of product"  class="form-control">
					</div>
					<div class="form-group">
						<label for="sale_price">Sale price</label>
						<input id="sale_price" type="number" name="sale_price" required=""  placeholder="Enter the sale proce of product"  class="form-control">
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
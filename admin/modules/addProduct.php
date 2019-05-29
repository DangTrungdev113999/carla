<?php
	include '../header.php';

	if (isset($_POST['addNew'])) {
		$productName = $_POST['productName'];
		$image = $_POST['image'];
		$content = $_POST['content'];
		$category_id = $_POST['category_id'];
		$price = $_POST['price'];
		$sale_price = $_POST['sale_price'];
		$status = (isset($_POST['status'])) ? isset($_POST['status']) : 1;
		$created = ($_POST['created']) ? $_POST['created'] : '12/11/2019';

		$insertData = "INSERT INTO product(name, image, content, category_id, price, sale_price, status, created)
						VALUES('$productName', '$image', '$content', '$category_id', '$price', '$sale_price', '$status', '$created')";

		mysqli_query($conn, $insertData);
	};
?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
		    <div class="row">
		        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		            <div class="card">
		                <h5 class="card-header">Add new Products</h5>
		                <div class="card-body">
		                    <form action="" name="product" method="POST" id="basicform" data-parsley-validate="">
		                        <div class="form-group">
		                            <label for="productName">Product name</label>
		                            <input id="productName" type="text" name="productName" required="" placeholder="Enter the category name"  class="form-control">
		                        </div>
		                        <div class="form-group">
		                            <label for="image">Product image</label>
		                            <input id="image" type="text" name="image" required="" placeholder="Enter the link of image"  class="form-control">
		                        </div>
		                        <div class="form-group">
		                            <label for="content">Content</label>
		                            <input id="content" type="text" name="content" required="" placeholder="Enter the content"  class="form-control">
		                        </div>
		                        <div class="form-group">
		                            <label for="category_id">Category</label>
		                            <input id="category_id" type="text" name="category_id" required=""  placeholder="Enter the category"  class="form-control">
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

					            <div class="row">
					                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
					                    <label class="be-checkbox custom-control custom-checkbox">
					                        <input type="checkbox" name="status" value="0" class="custom-control-input"><span class="custom-control-label">status</span>
					                    </label>
					                </div>
					                <div class="col-sm-6 pl-0">
					                    <p class="text-right">
					                        <button type="submit" name="addNew" class="btn btn-space btn-info">Add new</button>
					                    </p>
					                </div>
					            </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
<?php
	include '../footer.php';
?>

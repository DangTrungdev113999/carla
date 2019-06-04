<?php
	include '../header.php';

	if (isset($_POST['addNew'])) {
		$categoryName = $_POST['categoryName'];
		$created = ($_POST['created']) ? $_POST['created'] : '3/11/2019';
		$parentId = ($_POST['parent_id']) ? $_POST['parent_id'] : 0;
		$ordering = ($_POST['ordering']) ? $_POST['ordering'] : 0;
		$status = (isset($_POST['status'])) ? isset($_POST['status']) : 1;  // 1 là hiện, 0 là ẩn

		$insertDataToCat = "INSERT INTO category(name, created, ordering, `status`, parent_id) 
		VALUES('$categoryName','$created', '$ordering', '$status','$parentId' )";

		mysqli_query($conn, $insertDataToCat) or die("lỗi thêm mới danh mục sản phẩm".$insertDataToCat);
		// header("location:");

	};
 ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
				<div class="row">
		            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		                <div class="page-header">
		                    <h2 class="pageheader-title">Add new Product table</h2>
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
			                <h5 class="card-header">Add new Categories</h5>
			                <div class="card-body">
			                    <form action="" name="" method="post" id="basicform" data-parsley-validate="">
			                        <div class="form-group">
			                            <label for="categoryName">Category name</label>
			                            <input id="categoryName" type="text" name="categoryName" required="" placeholder="Enter the category name"  class="form-control">
			                        </div>
			                        <div class="form-group">
			                            <label for="created">Created</label>
			                            <input id="created" type="date" name="created" placeholder="Enter the created"  class="form-control">
			                        </div>
			                        <div class="form-group">
			                            <label for="parent_id">Parent id</label>
			                            <input id="parent_id" type="number" name="parent_id" placeholder="Enter the Parent id"  class="form-control">
			                        </div>
			                        <div class="form-group">
			                            <label for="ordering">Ordering</label>
			                            <input id="ordering" type="number" name="ordering"  placeholder="Enter the ordering"  class="form-control">
			                        </div>

						            <div class="row">
						                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
						                    <label class="be-checkbox custom-control custom-checkbox">
						                        <input type="checkbox" name="status" value="1" class="custom-control-input"><span class="custom-control-label">status</span>
						                    </label>
						                </div>
						                <div class="col-sm-6 pl-0">
						                    <p class="text-right">
						                        <button type="submit" name="addNew" class="btn btn-space btn-primary">Add new</button>
						                    </p>
						                </div>
						            </div>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>

				<div class="footer">
		            <div class="container-fluid">
		                <div class="row">
		                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		                        Copyright © 2019 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
		                    </div>
		                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		                        <div class="text-md-right footer-links d-none d-sm-block">
		                            <a href="javascript: void(0);">About</a>
		                            <a href="javascript: void(0);">Support</a>
		                            <a href="javascript: void(0);">Contact Us</a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
		</div>
<?php
	include '../footer.php';
?>
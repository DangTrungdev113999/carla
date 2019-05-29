<?php
	include '../header.php';

	if (isset($_POST['addNew'])) {
		$categoryName = $_POST['categoryName'];
		$created = ($_POST['created']) ? $_POST['created'] : '3/11/2019';
		$parentId = ($_POST['parent_id']) ? $_POST['parent_id'] : 0;
		$ordering = ($_POST['ordering']) ? $_POST['ordering'] : 0;
		$status = ($_POST['status']) ? $_POST['status'] : 1; // 1 là hiện, 0 là ẩn

		$insertData = "INSERT INTO category(name, created, ordering, `status`, parent_id) 
		VALUES('$categoryName','$created', '$ordering', '$status','$parentId' )";

		mysqli_query($conn, $insertData);

	};
 ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
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
						                        <input type="checkbox" name="status" value="0" class="custom-control-input"><span class="custom-control-label">status</span>
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
			</div>
		</div>
<?php
	include '../pages/footer.php'
?>
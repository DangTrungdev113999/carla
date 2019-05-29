<?php
	include '../header.php';
	if(isset($_POST["addNew"])) {
		$categoryName = $_POST["categoryName"];	
		$status = ($_POST["status"]) ? $_POST['status'] : 0;

		$sqlInsert = "INSERT INTO test(name, `status`) VALUES($categoryName, $status)";
		mysqli_query($con, $sqlInsert);
	};
 ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
			    <div class="row">
			        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			            <div class="card">
			                <h5 class="card-header">Basic Form</h5>
			                <div class="card-body">
			                    <form action="" name="" method="post" id="basicform" data-parsley-validate="">
			                        <div class="form-group">
			                            <label for="categoryName">Tên danh mục</label>
			                            <input id="categoryName" type="text" name="categoryName" required="" placeholder="Nhập tên danh mục"  class="form-control">
			                        </div>

						            <div class="row">
						                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
						                    <label class="be-checkbox custom-control custom-checkbox">
						                        <input type="checkbox" name="status" value="1" class="custom-control-input"><span class="custom-control-label">status</span>
						                    </label>
						                </div>
						                <div class="col-sm-6 pl-0">
						                    <p class="text-right">
						                        <button type="submit" name="addNew" class="btn btn-space btn-primary">Submit</button>
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
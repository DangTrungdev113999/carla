<?php
	include '../header.php';
?>
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Products list table <a href="addProduct.php" class="badge badge-success">Add New</a></h2>
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
                <!-- ============================================================== -->
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header text-center text-capitalize">Products list</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Content </th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sale Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Create</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                		$selectDataFromPro = "SELECT  p.*, c.name as 'cat_name' FROM category c JOIN product p ON c.id = p.category_id";
                                		$result = mysqli_query($conn, $selectDataFromPro) or die("lỗi truy xuất danh sách sản phẩm".$selectDataFromPro);
                                		if(mysqli_num_rows($result) > 0) {
                                			$count = 0;
                                			while($row = mysqli_fetch_assoc($result)) {
                                				$count++;
                                	?>
                                    <tr>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td><?php echo $row["name"] ?></td>
                                        <td><?php echo $row['image'] ?></td>
                                        <td><?php echo $row['content'] ?></td>
                                        <td><?php echo $row['cat_name'] ?></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo $row['sale_price'] ?></td>
                                        <td><?php echo ($row['status']) ? 'shown' : 'hide' ?></td>
                                        <td><?php echo $row['created'] ?></td>
                                        <td class="btn-group-xs">
                                        	<a href="" class="badge badge-primary">
                                        		<i class="fas fa-edit fas-xs"></i>
                                        	</a>
                                        	<a href="" class="badge badge-danger">
                                        		<i class="fas fa-trash-alt fas-xs"></i>
                                        	</a>
                                        </td>
                                    </tr>
			                                <?php }
			                            }?>
                                </tbody>
                            </table>
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
<?php
	include '../footer.php';
?>

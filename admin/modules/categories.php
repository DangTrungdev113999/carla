<?php
	include '../header.php';
?>
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Categorys list table</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Category Table</li>
                                    </ol>
                                </nav>
                            </div>
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
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Parent Category</th>
                                        <th scope="col">Status </th>
                                        <th scope="col">Ordering</th>
                                        <th scope="col">Created</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                		$sqlSelect = "SELECT * FROM category";
                                		$result = mysqli_query($conn, $sqlSelect) or die('lỗi truy xuất danh sách danh mục');
                                		if (mysqli_num_rows($result) > 0) {
                                			$count = 0;
                                			 while($row = mysqli_fetch_assoc($result)) {
                                			 	$count++;
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['parent_id'] ?></td>
                                        <td><?php echo ($row['status']) ? 'Shown' : 'Hide' ?></td>
                                        <td><?php echo $row['ordering'] ?></td>
                                        <td><?php echo $row['created'] ?></td>
                                        <td>
                                        	<a href="editCategory.php" title="">
                                        		<i class="fas fa-edit"></i>
                                        	</a>
                                        	<a href="" title="">
                                        		<i class="fas fa-trash-alt"></i>
                                        	</a>
                                        </td>
                                    </tr>
                                			<?php } // đóng ngoặt của while bên dưới là ngoặc của if
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
	                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
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
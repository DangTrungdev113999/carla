
<div class="row">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Categorys list table  <a href="index.php?module=addCategory" class="badge badge-success">Add new</a></h2>
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
                            <td class="btn-group-xs">
                                <a href="index.php?module=editCategory&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                                    <i class="fas fa-edit fas-xs"></i>
                                </a>
                                <a href="index.php?module=delete&table=category&location=categories&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete it ?')" class="badge badge-danger">
                                    <i class="fas fa-trash-alt fas-xs"></i>
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
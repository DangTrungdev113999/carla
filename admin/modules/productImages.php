<div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Products list table  <a href="index.php?module=addProductImage" class="badge badge-success">Add new</a></h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Table</li>
                                </ol>re
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
                        <h5 class="card-header text-center text-capitalize">Product Image</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Ordering </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sqlSelect = "SELECT pi.*, p.name as 'proName' FROM product_image pi join product p on pi.product_id = p.id";
                                        $result = mysqli_query($conn, $sqlSelect) or die('lỗi truy vấn banner');
                                        if (mysqli_num_rows($result) > 0 ) {
                                            $i = 0;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $i++;
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $i ?></th>
                                        <td><?php echo $row['proName'] ?></td>
                                        <td>
                                            <img src="../<?php echo $row['image'] ?>" class="img-responsive img-thumbnail" width="50" alt="">
                                        </td>
                                        <td><?php echo $row['ordering'] ?></td>
                                        <td class="btn-group-xs">
                                        	<a href="index.php?module=editProductImage&id=<?php echo $row['id'] ?>" title="" class="badge badge-primary">
                                        		<i class="fas fa-edit"></i>
                                        	</a>
                                        	<a href="index.php?module=delete&table=product_image&location=productImages&id=<?php echo $row['id'] ?>" title="" class="badge badge-danger">
                                        		<i class="fas fa-trash-alt"></i>
                                        	</a>
                                        </td>
                                    </tr>
                                    <?php }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>                      

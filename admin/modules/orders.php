<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Orders list table <a href="index.php?module=o" class="badge badge-success">Add New</a></h2>
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
            <h5 class="card-header text-center text-capitalize">Orders list</h5>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">order date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $selectData = "SELECT od.*, ac.name as 'name', ac.phone as 'phone', ac.email as 'email' FROM orders od JOIN account ac ON ac.id = od.account_id ";

                            $result = mysqli_query($conn, $selectData) or die("lỗi truy xuất danh sách sản phẩm".$selectData);
                            if(mysqli_num_rows($result) > 0) {
                                $count = 0;
                                while($row = mysqli_fetch_assoc($result)) {
                                    $count++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $count ?></th>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["phone"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row['created'] ?></td>
                            <td>
                                <?php if($row['status'] == 1) : ?>
                                    <span class="badge badge-secondary">Đã duyệt</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Chờ duyệt</span>
                                <?php endif; ?>
                            </td>
                            <td class="btn-group-xs">
                                <a href="index.php?module=orderDetail&id=<?php echo $row['id'] ?>" class="badge badge-success">
                                    <i class="fas fa-street-view"></i> Detail
                                </a>
                                <a href="index.php?module=editProduct&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                                    <i class="fas fa-edit fas-xs"></i> waitting
                                </a>
                            </td>
                        </tr>
                                <?php }
                            }?>

                       <!--  <?php
                                $selectData1 = "SELECT * FROM orders ";

                                $result1 = mysqli_query($conn, $selectData1) or die("lỗi truy xuất danh sách sản phẩm".$selectData1);
                                if(mysqli_num_rows($result1) > 0) {
                                    $count = 0;
                                    while($row1 = mysqli_fetch_assoc($result1)) {
                                        $count++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row1["id"]?></th>
                            <td><?php echo $row1["name"] ?></td>
                            <td><?php echo $row1["phone"] ?></td>
                            <td><?php echo $row1["email"] ?></td>
                            <td><?php echo $row1['created'] ?></td>
                            <td>
                                <?php if($row1['status'] == 1) : ?>
                                    <span class="badge badge-secondary">Đã duyệt</span>
                                <?php else: ?>
                                    <span class="badge badge-warning">Chờ duyệt</span>
                                <?php endif; ?>
                            </td>
                            <td class="btn-group-xs">
                                <a href="index.php?module=orderDetail&id=<?php echo $row1['id'] ?>" class="badge badge-success">
                                    <i class="fas fa-street-view"></i> Detail
                                </a>
                                <a href="index.php?module=editProduct&id=<?php echo $row1['id'] ?>" class="badge badge-primary">
                                    <i class="fas fa-edit fas-xs"></i> waitting
                                </a>
                            </td>
                        </tr>
                                <?php }
                            }?> --> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>                      
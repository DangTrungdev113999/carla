<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Orders list table</h2>
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
                            $selectData = "SELECT * from orders";

                            $result = mysqli_query($conn, $selectData) or die("lỗi truy xuất danh sách sản phẩm".$selectData);
                            if(mysqli_num_rows($result) > 0) {
                                $count = 0;
                                while($row = mysqli_fetch_assoc($result)) {
                                    $count++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $count ?></th>
                            <td>
                                <?php 
                                    if($row['name']) {
                                         echo $row["name"] ;
                                    } else  {
                                        $selectDataFromAcc = "SELECT od.*, ac.name as 'name', ac.phone as 'phone', ac.email as 'email' FROM orders od JOIN account ac ON ac.id = od.account_id";
                                        $resultAcc = mysqli_query($conn, $selectDataFromAcc) or die("lỗi truy xuất danh sách sản phẩm".$selectData);
                                        $rowAcc = mysqli_fetch_assoc($resultAcc);
                                        echo $rowAcc['name'];
                                    }
                                ?>     
                            </td>
                            <td>
                                <?php 
                                    if($row['phone']) {
                                         echo $row["phone"] ;
                                    } else  {
                                        $selectDataFromAcc = "SELECT od.*, ac.name as 'name', ac.phone as 'phone', ac.email as 'email' FROM orders od JOIN account ac ON ac.id = od.account_id";
                                        $resultAcc = mysqli_query($conn, $selectDataFromAcc) or die("lỗi truy xuất danh sách sản phẩm".$selectData);
                                        $rowAcc = mysqli_fetch_assoc($resultAcc);
                                        echo $rowAcc['phone'];
                                    }
                                ?> 
                                    
                            </td>
                            <td>
                                <?php 
                                    if($row['email']) {
                                         echo $row["email"] ;
                                    } else  {
                                        $selectDataFromAcc = "SELECT od.*, ac.name as 'name', ac.phone as 'phone', ac.email as 'email' FROM orders od JOIN account ac ON ac.id = od.account_id";
                                        $resultAcc = mysqli_query($conn, $selectDataFromAcc) or die("lỗi truy xuất danh sách sản phẩm".$selectData);
                                        $rowAcc = mysqli_fetch_assoc($resultAcc);
                                        echo $rowAcc['email'];
                                    }
                                ?> 
                                    
                            </td>
                            <td><?php echo $row['created'] ?></td>
                            <td>
                                <div class="dropdown">
                                  <span 
                                        <?php if ( $row['status'] == 0 ) :?>
                                         class="btn btn-primary btn-xs dropdown-toggle"
                                        <?php endif; ?>
                                        <?php if ( $row['status'] == 1 ) :?>
                                         class="btn btn-success btn-xs dropdown-toggle"
                                        <?php endif; ?>
                                        <?php if ( $row['status'] == 2 ) :?>
                                         class="btn btn-warning btn-xs dropdown-toggle"
                                        <?php endif; ?>
                                        <?php if ( $row['status'] == 3 ) :?>
                                         class="btn btn-danger btn-xs dropdown-toggle"
                                        <?php endif; ?>
                                      class="btn btn-primary btn-xs dropdown-toggle" 
                                      role="button" 
                                      id="dropdownMenuLink" 
                                      data-toggle="dropdown" 
                                      aria-haspopup="true" 
                                      aria-expanded="false">
                                    <?php 
                                        if ( $row['status'] == 0 ) echo 'chờ duyệt';
                                        if ( $row['status'] == 1 ) echo 'đang dao hàng';
                                        if ( $row['status'] == 2 ) echo 'nhận hàng';
                                        if ( $row['status'] == 3 ) echo 'huỷ';
                                     ?>
                                  </span>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="index.php?module=setStatue&value=1&condition=<?php echo $row['id'] ?>">Đang Giao Hàng</a>
                                    <a class="dropdown-item" href="index.php?module=setStatue&value=2&condition=<?php echo $row['id'] ?>">Nhận hàng</a>
                                    <a class="dropdown-item" href="index.php?module=setStatue&value=3&condition=<?php echo $row['id'] ?>">Huỷ</a>
                                  </div>
                                </div>
                            </td>
                            <td class="btn-group-xs">
                                <a href="index.php?module=orderDetail&id=<?php echo $row['id'] ?>" class="badge badge-success">
                                    <i class="fas fa-street-view"></i> Detail
                                </a>
<!--                                 <a href="index.php?module=editProduct&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                                    <i class="fas fa-edit fas-xs"></i> waitting
                                </a> -->
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
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Orders list table <a href="index.php?module=orders" class="badge badge-success">exit</a></h2>
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
    <div class="container-fluid">
        <div class="page-title">
            <h1>Orders Detial</h1>
        </div>

        <?php 
            $od_id = $_GET['id'];
            $sql = "SELECT dt.*,SUM(dt.price*dt.quantity) total FROM order_detail dt where dt.order_id = $od_id group by dt.order_id ";
            // echo '<pre>';
            // print_r($sql);
            $rel = mysqli_query($conn, $sql);

            $od = mysqli_fetch_assoc($rel);
        ?>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h3>Thông tin đơn hàng</h3>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <td><?php echo $od_id; ?></td>
                    </tr>
                    <tr>
                        <th>Ngày đặt</th>
                        <td>
                            <?php 
                                $sql1 = "SELECT * from orders where id =".$_GET['id'];
                                $rel1 = mysqli_query($conn, $sql1);
                                $od1 = mysqli_fetch_assoc($rel1);
                                echo $od1['created'];
                             ?>
                        </td>
                    </tr>
                     <tr>
                        <th>Tổng tiền</th>
                        <td><?php echo number_format($od['total']) ?></td>
                    </tr>
                     <tr>
                        <th>Trạng thái</th>
                        <td>
                            <?php if($od1['status'] == 0) : ?>
                                <span class="label-primary label">Approve</span>
                            <?php endif; ?>
                            <?php if($od1['status'] == 1) : ?>
                                <span class="label-success label">Delivering</span>
                            <?php endif; ?>
                            <?php if($od1['status'] == 2) : ?>
                                <span class="badge badge-warning">Received</span>
                            <?php endif; ?>
                            <?php if($od1['status'] == 3) : ?>
                                <span class="label-danger label">huỷ</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h3>Thông tin người nhận</h3>

                <?php
                    $selectData = "SELECT od.*, ac.name as 'name', ac.phone as 'phone', ac.email as 'email', ac.address as 'address' FROM orders od JOIN account ac ON ac.id = od.account_id ";
                    $result = mysqli_query($conn, $selectData) or die("lỗi truy xuất danh sách sản phẩm".$selectData);
                    $row = mysqli_fetch_assoc($result)
                ?>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
                     <tr>
                        <th>Phone</th>
                        <td><?php echo $row['phone'] ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $row['address'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <h3>Chi tiết sản phẩm</h3>
        <?php 
            $od_id = $_GET['id'];
            $sql_dt = "SELECT dt.*,p.name,p.image FROM order_detail dt JOIN product p ON p.id = dt.product_id WHERE dt.order_id=$od_id";
            $products = mysqli_query($conn, $sql_dt) or die("lỗi truy xuất danh sách  chi tiết sản phẩm".$sql_dt);
         ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiên</th>
            </thead>
            <tbody>
            <?php foreach($products as $key => $pro) { ?>
                <tr>
                    <td><?php echo $key+1; ?></td>
                    <td>
                        <img src="../public/img/<?php echo $pro['image'] ?>" alt="" width="60">
                    </td>
                    <td><?php echo $pro['name'] ?></td>
                    <td><?php echo $pro['price'] ?></td>
                    <td><?php echo $pro['quantity'] ?></td>
                    <td><?php echo $pro['quantity']*$pro['price'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>                      
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Account list table <a href="index.php?module=addAccount" class="badge badge-success">Add New</a></h2>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account Table</li>
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
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Account Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone </th>
                            <th scope="col">Address</th>
                            <th scope="col">Password</th>
                            <th scope="col">Level</th>
                            <th scope="col">Create</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlSelect = "SELECT * FROM account";
                            $result = mysqli_query($conn, $sqlSelect);
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $i++;
                        ?>
                        <tr>
                            <th scope="row"> <?php echo $i ?> </th>
                            <td> <?php echo $row['name'] ?> </td>
                            <td> <?php echo $row['email'] ?> </td>
                            <td> <?php echo $row['phone'] ?> </td>
                            <td> <?php echo $row['address'] ?> </td>
                            <td> <?php echo $row['password'] ?> </td>
                            <td> <?php echo $row['level'] ?> </td>
                            <td> <?php echo $row['created'] ?> </td>
                            <td class="btn-group-xs">
                            	<a href="index.php?module=editProduct&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                            		<i class="fas fa-edit fas-xs"></i>
                            	</a>
                            	<a href="index.php?module=delete&table=account&location=accounts&id=<?php echo $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure want to delete it ?')">
                            		<i class="fas fa-trash-alt fas-xs"></i>
                            	</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>                      
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Products list table <a href="index.php?module=addBanner" class="badge badge-success">Add New</a></h2>
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
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Banner Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Content</th>
                            <th scope="col">created</th>
                            <th scope="col">status</th>
                            <th scope="col">ordering</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlSelect = "SELECT * FROM banner order by id desc";
                            $result = mysqli_query($conn, $sqlSelect);
                            if (mysqli_num_rows($result) > 0) {
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i++;

                        ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td>
                                <img src="../public/img/<?php echo $row['image'] ?>" width="50" class="img-responsive img-thumbnail" alt="">
                            </td>
                            <td><?php echo $row['content'] ?></td>
                            <td><?php echo $row['created'] ?></td>
                            <td><?php echo ($row['status']) ? 'shown' : 'hide' ?></td>
                            <td><?php echo $row['ordering'] ?></td>
                            <td class="btn-group-xs">
                                <a href="index.php?module=editBanner&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                                    <i class="fas fa-edit fas-xs"></i>
                                </a>
                                <a href="index.php?module=delete&table=banner&location=banners&id=<?php echo $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure want to delete it ?')">
                                    <i class="fas fa-trash-alt fas-xs"></i>
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
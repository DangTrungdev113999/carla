
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Posts list table <a href="index.php?module=addPost" class="badge badge-success">Add new</a></h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Table</li>
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
                        <h5 class="card-header text-center text-capitalize">Posts list</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">created </th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="btn-group-xs">
                                            <a href="index.php?module=editProduct&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                                                <i class="fas fa-edit fas-xs"></i>
                                            </a>
                                            <a href="index.php?module=delProduct&id=<?php echo $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure want to delete it ?')">
                                                <i class="fas fa-trash-alt fas-xs"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>                      
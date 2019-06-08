<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Attribute list table <a href="index.php?module=addAttribute" class="badge badge-success">Add New</a></h2>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Attribute Table</li>
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
            <h5 class="card-header text-center text-capitalize">Attribute list</h5>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Attribute Name</th>
                            <th scope="col">value</th>
                            <th scope="col">Type </th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sqlSelect = "SELECT * FROM attribute  ORDER BY id desc";
                            $result = mysqli_query($conn, $sqlSelect);
                            $i = 0;
                            while($row = mysqli_fetch_assoc($result)) :
                                $i++;
                         ?>
                        <tr>
                            <th scope="row"> <?php echo $i ?> </th>
                            <td> <?php echo $row['name'] ?> </td>
                            <td> 
                                <?php if ($row['type'] === 'color') : ?>
                                    <span style="background: <?php echo $row['value'] ?>; height: 30px; width: 30px; border-radius: 100%;display: inline-block;"  ></span>
                                <?php else :?>
                                    <span> <?php echo strtoupper($row['value']) ?> </span>
                                <?php endif; ?>
                            </td>
                            <td> <?php echo $row['type'] ?> </td>
                            <td class="btn-group-xs">
                            	<a href="index.php?module=editAttribute&id=<?php echo $row['id'] ?>" class="badge badge-primary">
                            		<i class="fas fa-edit fas-xs"></i>
                            	</a>
                            	<a href="index.php?module=delete&table=attribute&location=attributes&id=<?php echo $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure want to delete it ?')">
                            		<i class="fas fa-trash-alt fas-xs"></i>
                            	</a>
                            </td>
                        </tr>
                         <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>                      
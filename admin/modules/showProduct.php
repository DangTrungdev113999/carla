<?php 
    $id  = $_GET['id'];
    if (isset($_GET['module']) && isset($_GET['id'])) {
        $sqlSelect = "SELECT * FROM product p WHERE p.id = ".$_GET['id'];
        $result = mysqli_query($conn, $sqlSelect) or die('lỗi truy vấn sản phẩm '.$sqlSelect);
        $row = mysqli_fetch_assoc($result);
    }

?>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">E-commerce Product Single </h2>
                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Single</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                    <div class="product-slider">
                        <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="../public/img/<?php echo $row['image'] ?>" alt="First slide" width='500'>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="../public/img/<?php echo $row['image'] ?>" alt="Second slide" width='500'>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="../public/img/<?php echo $row['image'] ?>" alt="Third slide" width='500'>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Previous</span>
                                  </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                                     </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                    <div class="product-details">
                        <div class="border-bottom pb-3 mb-3">
                            <h2 class="mb-3">
                                <?php echo $row['name'] ?>
                            </h2>
                            <h3 class="mb-0 text-primary">
                                $<?php echo $row['price'] ?>
                            </h3>
                            <h3 class="mb-0 text-dark">
                                $<?php echo $row['sale_price'] ?>
                            </h3>
                        </div>
                        <div class="product-colors border-bottom">
                            <h4>Color</h4>
                            <?php 
                            $sqlSelectAttr = "SELECT * FROM attribute WHERE type = 'color'";
                            $resultAttr = mysqli_query($conn, $sqlSelectAttr);
                            while($rowAttr = mysqli_fetch_assoc($resultAttr)) :
                                ?>
                                <div class="checkbox d-inline-block ml-3">
                                    <span class="custom-control-label" style="background: <?php echo  $rowAttr['value'] ?>; height: 25px; width: 25px; border-radius: 100%; display: inline-block;box-shadow: 2px 2px 3px gray;"></span>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="product-size border-bottom">
                            <h4>Sizes</h4>
                            <?php 
                            $sqlSelectAttr = "SELECT * FROM attribute WHERE type = 'size'";
                            $resultAttr = mysqli_query($conn, $sqlSelectAttr);
                            while($rowAttr = mysqli_fetch_assoc($resultAttr)) :
                                ?>
                                <button type="button" class="btn btn-outline-light"> <?php echo  $rowAttr['value'] ?></button>
                            <?php endwhile; ?>  
                        </div>
                        <div class="product-description">
                            <h4 class="mb-1">Created</h4>
                            <p>Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60">
                    <div class="simple-card">
                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="product-tab-1" aria-selected="true">Descriptions</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent5">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
                                <p>Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.</p>
                                <p>Nam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.</p>
                                <ul class="list-unstyled arrow">
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Donec ut elit sodales, dignissim elit et, sollicitudin nulla.</li>
                                    <li>Donec at leo sed nisl vestibulum fermentum.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    ob_start();
    session_start();
    if (!$_SESSION['loginAdmin']) {
        header("location: login.php");
    }
    include '../config/connect.php';
    include 'function.php';
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <?php
            include 'modules/header.php';
            include 'modules/leftSidebar.php';
        ?>
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                 <div class="container-fluid dashboard-content ">
                    <?php
                        if (isset($_GET['module'])) {
                            $module = $_GET['module'];
                            include "modules/" .$module.".php";
                        } else {
                            include 'modules/home.php';
                        }
                        include 'modules/footer.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- tiny -->
    <script src="assets/tinymce/tinymce.min.js"></script>
    <script src="assets/tinymce/config.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('input#image').change(function(){
      var _file = $(this).prop('files');

      if (_file && _file[0]) {
        var _r = new FileReader();
        _r.onload = function(e){
          var _img = e.target.result;
          $('img#show_img').attr('src',_img);
        }

        _r.readAsDataURL(_file[0]);
      }
    }) 

    $('input#images').change(function(){
      var _file = $(this).prop('files');
      
      if (_file) {
       
        for (var i = 0; i < _file.length; i++) {
          let _r = new FileReader();

          _r.onload = function(e){

            var _img_src = e.target.result;
            var img = document.createElement("img");
                img.className = "col-md-3 thumbnail";
                img.src = _img_src;
                $('#img_list').append(img);

          }

        _r.readAsDataURL(_file[i]);
        }


      }
    })
  });
</script>
</body>
 
</html>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
  
    <script>
    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
    }).on('hidden.bs.collapse', function() {
        $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
    });

    $('.panel-heading a').click(function() {
        $('.panel-heading').removeClass('active');

        //If the panel was open and would be closed by this click, do not active it
        if (!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
            $(this).parents('.panel-heading').addClass('active');
    });
    </script>
</body>
 
</html>
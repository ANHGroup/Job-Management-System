<?php echo $__env->make('backend.layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php echo $__env->make('backend.layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php echo $__env->make('backend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Left Sidebar End -->

        <?php echo $__env->yieldContent('content'); ?>
        <!-- Footer Start -->
        <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end Footer -->

        <?php echo $__env->make('backend.layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <!-- END wrapper -->

</body>


<?php /**PATH E:\Career\jms\resources\views/backend/layouts/master.blade.php ENDPATH**/ ?>
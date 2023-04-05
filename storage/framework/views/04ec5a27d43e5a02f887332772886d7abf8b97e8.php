<?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content">

        <!-- Start Content-->
       
            
            <!-- start page title -->
                
            <!-- end page title --> 

            
            <!-- end row -->        

           
            <!-- end row -->

            <!-- end row -->


            <!-- end row -->

            <div class="row">
                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="pt-2 pb-2">
                                <img src="assets/images/users/user-3.jpg" class="rounded-circle img-thumbnail avatar-xl"
                                    alt="profile-image">

                                <h4 class="mt-3"><a href="extras-profile.html"
                                        class="text-light"><?php echo e($job->title); ?></a></h4>
                                <p class="text-muted">@website <span> | </span> <span> <a href="#"
                                            class="text-pink">anhgroupbd.com</a> </span></p>
                                <p class="text-muted">Salary:<span class="text-pink"><?php echo e($job->salary_range); ?>BDT</span>
                                </p>
                                <p class="text-muted">Location:<span class="text-pink"><?php echo e($job->location); ?></span></p>
                                <a href="<?php echo e(route('job.show', $job->id)); ?>"
                                    class="btn btn-primary btn-sm waves-effect waves-light">Details</a>
                                
                            </div> <!-- end .padding -->
                        </div> <!-- end card-box-->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- end row -->
            
        </div> <!-- container -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                2015 - 2018 &copy; UBold theme by <a href="">Coderthemes</a> 
            </div>
            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <a href="javascript:void(0);">About Us</a>
                    <a href="javascript:void(0);">Help</a>
                    <a href="javascript:void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
    </div> <!-- content -->

<!-- Footer Start -->

<script src="<?php echo e(asset('assets/js/vendor.min.js')); ?>"></script>

<!-- Plugin js-->
<script src="<?php echo e(asset('assets/libs/parsleyjs/parsley.min.js')); ?>"></script>

<!-- Validation init js-->
<script src="<?php echo e(asset('assets/js/pages/form-validation.init.js')); ?>"></script>

<!-- App js -->
<script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/footable/footable.all.min.js')); ?>"></script>

<!-- Init js -->
<script src="<?php echo e(asset('assets/js/pages/foo-tables.init.js')); ?>"></script>
 <!-- Summernote js -->
 <script src="<?php echo e(asset('assets/libs/summernote/summernote-bs4.min.js')); ?>"></script>

 <!-- Init js -->
 <script src="<?php echo e(asset('assets/js/pages/form-summernote.init.js')); ?>"></script>
 
 <!-- Select2 js-->
 <script src="<?php echo e(asset('assets/libs/select2/select2.min.js')); ?>"></script>
 <!-- Dropzone file uploads-->
 <script src="<?php echo e(asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/pages/add-product.init.js')); ?>"></script>
 <?php /**PATH E:\Career\jms\resources\views/test.blade.php ENDPATH**/ ?>
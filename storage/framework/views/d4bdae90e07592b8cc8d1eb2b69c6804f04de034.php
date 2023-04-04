
<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <a href="#custom-modal" class="btn btn-danger waves-effect waves-light"
                                            data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i
                                                class="mdi mdi-plus-circle mr-1"></i> Add Customers</a>
                                    </div>
                                    
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped" id="products-datatable">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Present Address</th>
                                                <th>Permanent Address</th>
                                               
                                                <th>Gender</th>
                                                <th>resume</th>

                                                
                                                <th style="width: 85px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    

                                                    <td>
                                                        <?php echo e($applicant->name); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($applicant->phone); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($applicant->present_address); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($applicant->permanent_address); ?>

                                                    </td>
                                                   
                                                    <td>
                                                        <?php echo e($applicant->gender); ?>

                                                    </td>
                                                    <td>
                                                        <img src="<?php echo e(asset($applicant->resume)); ?>" alt="" width="100"></td>
                                                    
                                                   
                                                    <td>
                                                        <a href="<?php echo e(route('applicant.show', $applicant->id)); ?>"
                                                            class="btn btn-primary">Details</a>
                                                        <a href="<?php echo e(route('applicant.edit', $applicant->id)); ?>"
                                                            class="btn btn-primary">Edit</a>

                                                        <form action="<?php echo e(route('applicant.destroy', $applicant->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                                class="btn btn-danger mt-1">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->

        <!-- end Footer -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Career\jms\resources\views/pages/applicant/all_applicants.blade.php ENDPATH**/ ?>
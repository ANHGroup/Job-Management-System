
<?php $__env->startSection('content'); ?>
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">

                            </div>
                            <h4 class="page-title">Job Detail</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <!-- end col -->
                                <div class="col-xl-7">
                                    <div class="pl-xl-3 mt-3 mt-xl-0">
                                        <a href="#" class="text-primary">JOB POST</a>
                                        <h4 class="mb-3"></h4>
                                        <label>Job Deadline :</label>
                                        <h6 class="text-danger text-uppercase"><?php echo e($job->job_deadline); ?></h6>
                                        <h4 class="mb-4">Job Title : <span class="text-muted mr-2"></span>
                                            <b><?php echo e($job->title); ?></b>
                                        </h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div>
                                                    <label>Job Description:</label><?php echo $job->description; ?></p>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Gender:</label>
                                                <?php echo e($job->gender); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label>Job Category:</label>
                                                <?php echo e($job->job_category); ?>

                                            </div>

                                            <div class="col-md-6">
                                                <label>Job Qualifications:</label>
                                                <?php echo e($job->job_qualification); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label>Job Location:</label>
                                                <?php echo e($job->location); ?>

                                            </div>
                                            <div class="col-md-6">
                                                <label>Salary Range:</label>
                                                <?php echo e($job->salary_range); ?> BDT
                                            </div>
                                            <div class="col-md-12">
                                                <?php if(auth()->check()): ?>
                                                    <h3>Your Expected Salary*</h3>

                                                    <form action="<?php echo e(route('appliedjob.store')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="row">
                                                            <input type="hidden" name="job_id"
                                                                value="<?php echo e(old('job_id', $job->id)); ?>">
                                                            <div class="pl-xl-3 mt-3 mt-xl-0"><input type="number"
                                                                    placeholder="e.g.20000" name="salary">
                                                            </div>

                                                            <button type="submit"
                                                                class="btn w-sm btn-danger waves-effect waves-light">Apply</button>
                                                        </div>
                                                    </form>
                                                <?php else: ?>
                                                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Log
                                                        in</a>
                                                <?php endif; ?>



                                            </div>

                                        </div>

                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Career\jms\resources\views/backend/pages/job/job_details.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
    <div class="content-page" style="justify-content: center;">
        <div class="content">
            <div class="container-fluid">

                <body>
                    <h3 style="color: green">Name :<?php echo e($applicant->user_id ? $user->name : ''); ?></h3>
                       <table border="1" style="width:100%" class="table align-middle mb-0 bg-red">
                        <tr>
                            <th>Present Address:</th>
                            <td> <?php echo e($applicant->present_address); ?></td>
                        </tr>

                        <tr>
                            <th>permanent_address:</th>
                            <td><?php echo e($applicant->permanent_address); ?></td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td><?php echo e($applicant->phone); ?></td>
                        </tr>
                        <tr>
                            <th>Dob :</th>
                            <td><?php echo e($applicant->dob); ?></td>
                        </tr>
                        <tr>
                            <th>Expected Salary:</th>
                            <td><?php echo e($applicant->expected_salary); ?></td>
                        </tr>
                        <tr>
                            <th>Present Salary:</th>
                            <td><?php echo e($applicant->present_salary); ?></td>
                        </tr>
                        <tr>
                            <th> Gender :</th>
                            <td><?php echo e($applicant->gender); ?></td>
                        </tr>
                        <tr>
                            <th> Job Experience :</th>
                            <td><?php echo e($applicant->job_experience); ?></td>
                        </tr>
                    </table>
                    <h3 style="color: rgb(95, 160, 95)">Educations</h3>

                    <table border="1" width="100%" class="table align-middle mb-0 bg-green">
                        <thead style="font-weight: bold;">
                            <tr>
                                <td>Exam</td>
                                <td>Result</td>
                                <td>Instituations </td>
                                <td>Passing year </td>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <td colspan="4">All of my educations</td>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->exam); ?></td>
                                    <td><?php echo e($item->result); ?></td>
                                    <td><?php echo e($item->instituations); ?></td>
                                    <td><?php echo e($item->passing_year); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>

                    <h3 style="color: rgb(95, 160, 95)">Experiences</h3>

                    <table border="1" width="100%" class="table align-middle mb-0 bg-green">
                        <thead style="font-weight: bold;">
                            <tr>
                                <td>Designation</td>
                                <td>Start Date</td>
                                <td>End Date </td>
                                <td>Company </td>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <td colspan="4">All of my experience</td>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php $__currentLoopData = $experience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->title); ?></td>
                                <td><?php echo e($item->start_date); ?></td>
                                <td><?php echo e($item->end_date); ?></td>
                                <td><?php echo e($item->company); ?></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                </body>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Career\jms\resources\views/pages/applicant/details_list.blade.php ENDPATH**/ ?>
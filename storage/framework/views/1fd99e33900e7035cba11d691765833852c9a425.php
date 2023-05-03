<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="<?php echo e(route('job.index')); ?>">
                        <i class="fe-airplay"></i>

                        <span> Dashboard </span>
                    </a>

                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-file-text"></i>
                        <span> Job Post </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <?php if(Gate::allows('job.create')): ?>
                        <li>
                            <a href="<?php echo e(route('job.create')); ?>">Add Job</a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo e(route('job.index')); ?>">Job List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-file-text"></i>
                        <span> Candidate</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                       
                        
                        <li>
                            <a href="<?php echo e(route('allapplicants')); ?>">List</a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            <?php echo e(__('Logout')); ?>

                        </p>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>



                <li class="menu-title mt-2">Components</li>




        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div><?php /**PATH E:\Career\jms\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-airplay"></i>
                        <span class="badge badge-success badge-pill float-right">4</span>
                        <span> Dashboards </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                       
                    </ul>
                </li>

                

               

    
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-mail"></i>
                        <span> Applicant </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{route('applicant.create') }}">Create</a>
                        </li>
                       
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-file-text"></i>
                        <span> Job Post </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('job.create') }}">Create</a>
                        </li>
                        <li>
                            <a href="{{ route('job.index') }}">List</a>
                        </li>
                        <li>
                            <a href="">Show</a>
                        </li>
                       
                    </ul>
                </li>


                <li class="menu-title mt-2">Components</li>

                
                   

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('job.index') }}">
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
                        @if (Gate::allows('job.create'))
                        <li>
                            <a href="{{ route('job.create') }}">Add Job</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('job.index') }}">Job List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-file-text"></i>
                        <span>Shortlist</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        
                        <li>
                            <a href="">List</a>
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
                       
                        {{-- <li>
                            <a href="{{ route('job.create') }}">Create</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('allapplicants') }}">List</a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>



                <li class="menu-title mt-2">Components</li>




        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
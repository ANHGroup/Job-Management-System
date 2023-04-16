<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                href="" role="button" aria-haspopup="false" aria-expanded="false">
                @if (auth()->check())
                    <img src="{{ asset('assets/images/logo/ANH_Group_logo_white.jpg') }}" alt=""
                        class="rounded-circle">{{ Auth::user()->name }}
                @endif
                <span class="pro-user-name ml-1">
                    {{-- {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>  --}}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">
                        @if (auth()->check())
                            <span>
                                <a href="{{ route('applicant.edit', auth()->user()->id) }}" class="">Edit
                                    Profile</a></span>
                            </span>
                        @endif


                    </h6>
                </div>
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">
                        @if (auth()->check())
                            <span>
                                <a href="{{ route('applicant.show', auth()->user()->id) }}" class="">My
                                    Profile</a></span>
                            </span>
                        @endif

                    </h6>
                </div>
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">
                        @if (auth()->check())
                            <span>
                                <a href="{{ route('appliedjob.index')}}" class="">My
                                    Applied jobs</a></span>
                            </span>
                        @endif

                    </h6>
                </div>
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                {{ __('Logout') }}
                            </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0);" class="dropdown-item notify-item">


                </a>

            </div>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo/ANH_Group_logo_white.jpg') }}" alt="" height="60">
                <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">U</span> -->
                <img src="{{ asset('assets/images/logo/ANH_Group_logo_white.jpg') }}" alt="" height="24">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
        <li class="">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block topnav">
                        @auth
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                        @else
                            <a href="{{ route('login') }}" class="container-fluid">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="navbar-header">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </a>

        </li>
    </ul>
</div>

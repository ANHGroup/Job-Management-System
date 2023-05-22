<!-- Navigation Bar-->
<header id="topnav">

  <!-- Topbar Start -->
  <div class="navbar-custom">
    <div class="container-fluid">
      <ul class="list-unstyled topnav-menu float-right mb-0">

        @if(auth()->check())
        <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
            <span class="pro-user-name ml-1">
              {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <a href="{{ url('profile') }}" class="dropdown-item notify-item">
              <i class="fe-user"></i>
              <span>My Account</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="fe-settings"></i>
              <span>Settings</span>
            </a>
            <div class="dropdown-divider"></div>
            <!-- item-->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button style="cursor: pointer;" type="submit" class="dropdown-item notify-item">
                <i class="fe-log-out"></i>
                <span>Logout</span>
              </button>
            </form>

          </div>
        </li>
        @else
        <li class="dropdown d-none d-lg-block">
          <a class="nav-link waves-effect" href="{{ route('login') }}" role="button" aria-haspopup="false"
            aria-expanded="false">
            Login
          </a>
        </li>
        <li class="dropdown d-none d-lg-block">
          <a class="nav-link waves-effect" href="{{ route('register') }}" role="button" aria-haspopup="false"
            aria-expanded="false">
            Register
          </a>
        </li>
        @endif
      </ul>

      <!-- LOGO -->
      <div class="logo-box">
        <a href="/" class="logo text-center">
          <span class="logo-lg">
            <img src="{{ asset('assets/images/ANH-Group-Logo.png')}}" alt="" height="40">
            <!-- <span class="logo-lg-text-light">UBold</span> -->
          </span>
        </a>
      </div>
    </div> <!-- end container-fluid-->
  </div>
  <!-- end navbar-custom -->

</header>
<!-- End Navigation Bar-->
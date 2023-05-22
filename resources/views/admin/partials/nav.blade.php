<div class="navbar-custom">
  <ul class="list-unstyled topnav-menu float-right mb-0">

    <li class="dropdown notification-list">
      <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
        <span class="pro-user-name ml-1">
          Geneva <i class="mdi mdi-chevron-down"></i>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="fe-user"></i>
          <span>My Account</span>
        </a>

        <div class="dropdown-divider"></div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
          <i class="fe-log-out"></i>
          <span>Logout</span>
        </a>

      </div>
    </li>
  </ul>

  <!-- LOGO -->
  <div class="logo-box">
    <a href="{{ url('admin/dashboard') }}" class="logo text-center">
      <span class="logo-lg">
        <img src="{{ asset('assets/images/ANH-Group-Logo.png')}}" alt="" height="40">
      </span>
      <span class="logo-sm">
        <!-- <span class="logo-sm-text-dark">U</span> -->
        <img src="{{ asset('assets/images/ANH-Group-Logo.png')}}" alt="" height="40">
      </span>
    </a>
  </div>

</div>
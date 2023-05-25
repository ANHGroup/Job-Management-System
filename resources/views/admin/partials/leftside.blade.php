<div class="left-side-menu">

  <div class="slimscroll-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
          <a href="javascript: void(0);">
            <span> Jobs </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="nav-second-level" aria-expanded="false">
            <li>
              <a href="{{ route('job-postings.create') }}">Add Job</a>
            </li>
            <li>
              <a href="{{ route('job-postings.index') }}">All Job</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript: void(0);">
            <span> Companies </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="nav-second-level" aria-expanded="false">
            <li>
              <a href="{{ route('companies.create') }}">Add Company</a>
            </li>
            <li>
              <a href="{{ route('companies.index') }}">All Company</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->

</div>
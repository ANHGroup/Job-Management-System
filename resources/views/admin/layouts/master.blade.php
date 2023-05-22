<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('admin.partials.header')

<body>

  <!-- Begin page -->
  <div id="wrapper">

    <!-- Nav -->
    @include('admin.partials.nav')

    <!-- Left Sidebar Start -->
    @include('admin.partials.leftside')

    <!-- Start Page Content here -->
    @yield('content')

    <!-- Footer -->
    @include('admin.partials.footer')
  </div>
  <!-- END wrapper -->

  <!-- Scripts -->
  @include('admin.partials.scripts')

</body>

</html>
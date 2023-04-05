@include('backend.layouts.css')

<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('backend.layouts.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layouts.sidebar')
        <!-- Left Sidebar End -->

        @yield('content')
        <!-- Footer Start -->
        @include('backend.layouts.footer')
        <!-- end Footer -->

        @include('backend.layouts.js')

    </div>
    <!-- END wrapper -->

</body>



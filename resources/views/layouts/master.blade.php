@include('layouts.css')

<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('layouts.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.sidebar')
        <!-- Left Sidebar End -->

        @yield('content')
        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- end Footer -->

        @include('layouts.js')

    </div>
    <!-- END wrapper -->

</body>



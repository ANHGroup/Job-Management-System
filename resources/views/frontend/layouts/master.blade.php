@include('frontend.layouts.css')

<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('frontend.layouts.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('frontend.layouts.sidebar')
        <!-- Left Sidebar End -->

        @yield('content')
        <!-- Footer Start -->
        @include('frontend.layouts.footer')
        <!-- end Footer -->

        @include('frontend.layouts.js')

    </div>
    <!-- END wrapper -->

</body>



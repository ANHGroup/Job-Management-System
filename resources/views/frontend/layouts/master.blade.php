@include('frontend.layouts.css')
<style>
    .container-fluid {
        width: 85%;
        line-height: 2.5;
    }
    
</style>

<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('frontend.layouts.topbar')
        <!-- end Topbar -->
        @yield('content')
       
   
    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- end Footer -->

    @include('frontend.layouts.js')

</div>
</body>

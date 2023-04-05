<!-- Main Header-->
<header style="background: white" class="main-header header-style-two ">
    <div class="auto-container">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="{{ asset('assets/images/logo-2.png') }}" alt="" title=""></a></div>
                </div>

                <nav class="nav main-menu">
                    <ul class="navigation" id="navbar">
                        <li class="{{ request()->is('/') ? 'current' : '' }}">
                            <a href="/">Home</a>
                        </li>

                        <li class="{{ request()->is('job') ? 'current' : '' }}" id="has-mega-menu">
                            <a href="{{ url('job') }}">Find Jobs</a>
                        </li>

                        <li class="{{ request()->is('employer') ? 'current' : '' }}">
                            <a href="{{ url('employer') }}">Employers</a>
                        </li>
                        <li class="{{ request()->is('candidate') ? 'current' : '' }}">
                            <a href="{{ url('candidate') }}">Candidates</a>
                        </li>

                        <li class="{{ request()->is('blog') ? 'current' : '' }}">
                            <a href="blog">Blog</a>
                        </li>

                        <li class="{{ request()->is('login') ? 'current' : '' }}">
                            <a href="login">Log In</a>
                        </li>
                        <li class="{{ request()->is('register') ? 'current' : '' }}">
                            <a href="register">Sign Up</a>
                        </li>


                        <!-- Only for Mobile View -->
                        @if (Auth::check())
                            <li class="mm-add-listing">
                                <a href="dashboard" class="theme-btn btn-style-one">Dashboard</a>
                                <span>
                                    <span class="contact-info">
                                        <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456 7890</a></span>
                                        <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051, Australia.</span>
                                        <a href="mailto:support@superio.com" class="email">support@superio.com</a>
                                    </span>
                                    <span class="social-links">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                    </span>
                                </span>
                            </li>
                        @endif
                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="btn-box">
                    <a href="dashboard" class="theme-btn btn-style-five"><span class="btn-title">Dashboard</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="/"><img src="{{ asset('assets/images/logo-2.png') }}" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                </div>

                <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->

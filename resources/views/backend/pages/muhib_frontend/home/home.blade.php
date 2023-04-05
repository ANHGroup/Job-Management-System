@extends('layouts.master')
@section('bodySection')
  <!-- Main Header-->
{{-- <header class="main-header header-style-two">
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

                        <li class="dropdown has-mega-menu" id="has-mega-menu">
                            <a href="job">Find Jobs</a>
                        </li>

                        <li class="dropdown">
                            <a href="employers">Employers</a>
                        </li>
                        <li class="dropdown">
                            <a href="candidates">Candidates</a>
                        </li>
                        <li class="dropdown">
                            <a href="blog">Blog</a>
                        </li>
                        @if (!Auth::check())
                            <li class="dropdown">
                                <a href="userLogin">Log In</a>
                            </li>
                            <li class="dropdown">
                                <a href="userRegister">Sign Up</a>
                            </li>
                        @endif


                        <!-- Only for Mobile View -->
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
</header> --}}
<!--End Main Header -->

<!-- Banner Section-->
<section class="banner-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInUp">
                    <div class="title-box">
                        <h3>Find Your Perfect Job <br>Match</h3>
                        <div class="text">Find Jobs, Employment & Career Opportunities</div>
                    </div>

                    <!-- Job Search Form -->
                    <div class="job-search-form">
                        <form method="post" action="https://creativelayers.net/themes/superio/job-list-v10.html">
                            <div class="row">
                                <div class="form-group col-lg-5 col-md-12 col-sm-12">
                                    <span class="icon flaticon-search-1"></span>
                                    <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                                    <span class="icon flaticon-map-locator"></span>
                                    <input type="text" name="field_name" placeholder="City or postcode">
                                </div>
                                <!-- Form Group -->
                                <div class="form-group col-lg-3 col-md-12 col-sm-12 text-right">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find Jobs</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Job Search Form -->

                    <!-- Popular Search -->
                    <div class="popular-searches">
                        <span class="title">Popular Searches : </span>
                        <a href="#">Designer</a>,
                        <a href="#">Developer</a>,
                        <a href="#">Web</a>,
                        <a href="#">IOS</a>,
                        <a href="#">PHP</a>,
                        <a href="#">Senior</a>,
                        <a href="#">Engineer</a>,
                    </div>
                    <!-- End Popular Search -->

                    <div class="bottom-box">
                        <div class="count-employers">
                            <span class="title">10k+ Candidates</span>
                            <img src="{{ asset('assets/images/resource/multi-peoples.png') }}" alt="">
                        </div>
                        <a href="addCv" class="upload-cv"><span class="icon flaticon-file"></span> Upload your CV</a>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-5 col-md-12">
                <div class="image-box">
                    <figure class="main-image anm"  data-wow-delay="1000ms" data-speed-x="2" data-speed-y="2"><img src="{{ asset('assets/images/resource/banner-img-2.png') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Section-->

<!-- Work Section -->
<section class="work-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>How It Works?</h2>
            <div class="text">Job for anyone, anywhere</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{ asset('assets/images/resource/work-1.png') }}" alt=""></figure>
                    <h5>Free Resume Assessments</h5>
                    <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{ asset('assets/images/resource/work-2.png') }}" alt=""></figure>
                    <h5>Job Fit Scoring</h5>
                    <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
                </div>
            </div>

            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{ asset('assets/images/resource/work-3.png') }}" alt=""></figure>
                    <h5>Help Every Step of the Way</h5>
                    <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Work Section -->

<!-- Job Section -->
<section class="job-section-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Featured Jobs</h2>
            <div class="text">Know your worth and find the job that qualify your life</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- Job Block-two -->
            <div class="job-block-two col-lg-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img src="{{ asset('assets/images/resource/company-logo/1-1.png') }}" alt=""></span>
                        <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                    </div>
                    <ul class="job-other-info">
                        <li class="privacy">Private</li>
                        <li class="required">Urgent</li>
                        <li class="time">Full Time</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block-two col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img src="{{ asset('assets/images/resource/company-logo/1-2.png') }}" alt=""></span>
                        <h4><a href="#">Recruiting Coordinator</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                    </div>
                    <ul class="job-other-info">
                        <li class="privacy">Private</li>
                        <li class="time">Full Time</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block-two col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img src="{{ asset('assets/images/resource/company-logo/1-3.png') }}" alt=""></span>
                        <h4><a href="#">Product Manager, Studio</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                    </div>
                    <ul class="job-other-info">
                        <li class="required">Urgent</li>
                        <li class="time">Full Time</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block-two col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img src="{{ asset('assets/images/resource/company-logo/1-6.png') }}" alt=""></span>
                        <h4><a href="#">)Web Developer</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                    </div>
                    <ul class="job-other-info">
                        <li class="time">Full Time</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                </div>
            </div>

            <!-- Job Block -->
            <div class="job-block-two col-lg-12 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img src="{{ asset('assets/images/resource/company-logo/1-4.png') }}" alt=""></span>
                        <h4><a href="#">Senior Product Designer</a></h4>
                        <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span> Segment</li>
                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                            <li><span class="icon flaticon-clock-3"></span> 11 hours ago</li>
                            <li><span class="icon flaticon-money"></span> $35k - $45k</li>
                        </ul>
                    </div>
                    <ul class="job-other-info">
                        <li class="time">Full Time</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                </div>
            </div>

        </div>

        <div class="btn-box">
            <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Load More Listing</span></a>
        </div>
    </div>
</section>
<!-- End Job Section -->

<!-- Features Section -->
<section class="features-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Featured Cities</h2>
            <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
        </div>

        <div class="row wow fadeInUp">
            <div class="column col-lg-4 col-md-6 col-sm-12">
                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/featured-1.png') }}" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>New York</h5>
                                <span class="total-jobs">12 Jobs</span>
                                <a href="job-list-v1.html" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column col-lg-4 col-md-6 col-sm-12">
                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/featured-2.png') }}" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>Paris</h5>
                                <span class="total-jobs">12 Jobs</span>
                                <a href="job-list-v1.html" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/featured-4.png') }}" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>Miami</h5>
                                <span class="total-jobs">12 Jobs</span>
                                <a href="job-list-v1.html" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="feature-block col-lg-4 col-md-6 col-sm-12">

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/featured-3.png') }}" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>London</h5>
                                <span class="total-jobs">12 Jobs</span>
                                <a href="job-list-v1.html" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/featured-5.png') }}" alt=""></figure>
                        <div class="overlay-box">
                            <div class="content">
                                <h5>Los Angeles</h5>
                                <span class="total-jobs">12 Jobs</span>
                                <a href="job-list-v1.html" class="overlay-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section -->

<!-- Call To Action Two -->
<section class="call-to-action-two" style="background-image: url({{ asset('assets/images/background/1.jpg') }});">
    <div class="auto-container wow fadeInUp">
        <div class="sec-title light text-center">
            <h2>Your Dream Jobs Are Waiting</h2>
            <div class="text">Over 1 million interactions, 50,000 success stories Make yours now.</div>
        </div>

        <div class="btn-box">
            <a href="#" class="theme-btn btn-style-three">Search Job</a>
            <a href="#" class="theme-btn btn-style-two">Apply Job Now</a>
        </div>
    </div>
</section>
<!-- End Call To Action -->

<!-- Candidates Section -->
<section class="candidates-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Featured Candidates</h2>
            <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
        </div>

        <div class="carousel-outer wow fadeInUp">
            <div class="candidates-carousel owl-carousel owl-theme default-dots">
                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-1.png') }}" alt=""></figure>
                        <h4 class="name">Darlene Robertson</h4>
                        <span class="designation">UI Designer</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-2.png') }}" alt=""></figure>
                        <h4 class="name">Wade Warren</h4>
                        <span class="designation">Developer</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-3.png') }}" alt=""></figure>
                        <h4 class="name">Leslie Alexander</h4>
                        <span class="designation">Marketing Expert</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt=""></figure>
                        <h4 class="name">Floyd Miles</h4>
                        <span class="designation">Charted Accountant</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-1.png') }}" alt=""></figure>
                        <h4 class="name">Darlene Robertson</h4>
                        <span class="designation">UI Designer</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-2.png') }}" alt=""></figure>
                        <h4 class="name">Wade Warren</h4>
                        <span class="designation">Developer</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-3.png') }}" alt=""></figure>
                        <h4 class="name">Leslie Alexander</h4>
                        <span class="designation">Marketing Expert</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt=""></figure>
                        <h4 class="name">Floyd Miles</h4>
                        <span class="designation">Charted Accountant</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-1.png') }}" alt=""></figure>
                        <h4 class="name">Darlene Robertson</h4>
                        <span class="designation">UI Designer</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-2.png') }}" alt=""></figure>
                        <h4 class="name">Wade Warren</h4>
                        <span class="designation">Developer</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-3.png') }}" alt=""></figure>
                        <h4 class="name">Leslie Alexander</h4>
                        <span class="designation">Marketing Expert</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>

                <!-- Candidate Block -->
                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt=""></figure>
                        <h4 class="name">Floyd Miles</h4>
                        <span class="designation">Charted Accountant</span>
                        <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">View Profile</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Candidates Section -->

<!-- News Section Two -->
<section class="news-section-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Recent News Articles</h2>
            <div class="text">Fresh job related news content posted each day.</div>
        </div>

        <div class="row wow fadeInUp">
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt="" /></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">August 31, 2021</a></li>
                            <li><a href="#">12 Comment</a></li>
                        </ul>
                        <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" /></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">August 31, 2021</a></li>
                            <li><a href="#">12 Comment</a></li>
                        </ul>
                        <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt="" /></figure>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">August 31, 2021</a></li>
                            <li><a href="#">12 Comment</a></li>
                        </ul>
                        <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Section -->

<!-- Call To Action Three -->
<section class="call-to-action-three">
    <div class="auto-container">
        <div class="outer-box">
            <div class="sec-title">
                <h2>Let employers find you</h2>
                <div class="text">Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.</div>
            </div>

            <div class="btn-box">
                <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Search Job</span></a>
            </div>
        </div>
    </div>
</section>
<!-- End Call To Action -->
@endsection

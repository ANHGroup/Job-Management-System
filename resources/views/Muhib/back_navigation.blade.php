
<!-- Main Header-->
 <header class="main-header header-shaddow">
     <div class="container-fluid">
         <!-- Main box -->
         <div class="main-box">
             <!--Nav Outer -->
             <div class="nav-outer">
                 <nav class="nav main-menu">
                     <ul class="navigation" id="navbar">
                         <li class="current dropdown">
                             <a href="/"><img src="{{ asset('assets/images/logo-2.png') }}" /></a>
                         </li>
                         <li class="current dropdown">
                             <a href="/">Home</a>
                         </li>

                         <li class="dropdown has-mega-menu" id="has-mega-menu">
                             <a href="job">Find Jobs</a>
                         </li>

                         <li class="dropdown">
                             <a href="employers">Employers</a>
                         </li>
                         <li class="dropdown">
                             <a href="candidates">Cnadidates</a>
                         </li>
                         <li class="dropdown">
                             <a href="blog">Blog</a>
                         </li>

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

                 <button class="menu-btn">
                     <span class="count">1</span>
                     <span class="icon la la-heart-o"></span>
                 </button>

                 <button class="menu-btn">
                     <span class="icon la la-bell"></span>
                 </button>

                 <!-- Dashboard Option -->
                 <div class="dropdown dashboard-option">
                     <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                         <img src="{{ asset('assets/images/resource/company-6.png') }}" alt="avatar" class="thumb">
                         <span class="name">My Account</span>
                     </a>
                     <ul class="dropdown-menu">
                         <li class="active"><a href="dashboard.html"> <i class="la la-home"></i> Dashboard</a></li>
                         <li><a href="dashboard-company-profile.html"><i class="la la-user-tie"></i>Company Profile</a></li>
                         <li><a href="dashboard-post-job.html"><i class="la la-paper-plane"></i>Post a New Job</a></li>
                         <li><a href="dashboard-manage-job.html"><i class="la la-briefcase"></i> Manage Jobs </a></li>
                         <li><a href="dashboard-applicants.html"><i class="la la-file-invoice"></i> All Applicants</a></li>
                         <li><a href="dashboard-resumes.html"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>
                         <li><a href="dashboard-packages.html"><i class="la la-box"></i>Packages</a></li>
                         <li><a href="dashboard-messages.html"><i class="la la-comment-o"></i>Messages</a></li>
                         <li><a href="dashboard-resume-alerts.html"><i class="la la-bell"></i>Resume Alerts</a></li>
                         <li><a href="dashboard-change-password.html"><i class="la la-lock"></i>Change Password</a></li>
                         <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i>View Profile</a></li>
                         <li><a href="#"><i class="la la-sign-out"></i>Logout</a></li>
                         <li><a href="index.html"><i class="la la-trash"></i>Delete Profile</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <!-- Mobile Header -->
     <div class="mobile-header">
         <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="" title=""></a></div>

         <!--Nav Box-->
         <div class="nav-outer clearfix">

             <div class="outer-box">
                 <!-- Login/Register -->
                 <div class="login-box">
                     <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                 </div>

                 <button id="toggle-user-sidebar"><img src="images/resource/company-6.png" alt="avatar" class="thumb"></button>
                 <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
             </div>
 <div class="py-12">
    

     <!-- Mobile Nav -->
     <div id="nav-mobile"></div>
 </header>
 <!--End Main Header -->

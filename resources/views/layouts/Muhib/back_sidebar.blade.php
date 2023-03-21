 <!-- Sidebar Backdrop -->
 <div class="sidebar-backdrop"></div>
<!-- User Sidebar -->
<div class="user-sidebar">
    <div class="sidebar-inner">
        <ul class="navigation">
            <li class="{{ request()->is('backDashboard') ? 'active' : '' }}"><a href="{{ url('backDashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>
            <li class="{{ request()->is('company_profile') ? 'active' : '' }}"><a href="{{ url('company_profile') }}"><i class="la la-user-tie"></i>Company Profile</a></li>
            <li class="{{ request()->is('job_post') ? 'active' : '' }}"><a href="{{ url('job_post') }}"><i class="la la-paper-plane"></i>Post a New Job</a></li>
            <li class="{{ request()->is('job_manage') ? 'active' : '' }}"><a href="{{ url('job_manage') }}"><i class="la la-briefcase"></i> Manage Jobs </a></li>
            <li class="{{ request()->is('all_aplicants') ? 'active' : '' }}"><a href="{{ url('all_aplicants') }}"><i class="la la-file-invoice"></i> All Applicants</a></li>
            <li class="{{ request()->is('shortlisted_resumes') ? 'active' : '' }}"><a href="{{ url('shortlisted_resumes') }}"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>
            <li class="{{ request()->is('package') ? 'active' : '' }}"><a href="{{ url('package') }}"><i class="la la-box"></i>Packages</a></li>
            <li class="{{ request()->is('message') ? 'active' : '' }}"><a href="{{ url('message') }}"><i class="la la-comment-o"></i>Messages</a></li>
            <li class="{{ request()->is('resumes_alert') ? 'active' : '' }}"><a href="{{ url('resumes_alert') }}"><i class="la la-bell"></i>Resume Alerts</a></li>
            <li class="{{ request()->is('update_password') ? 'active' : '' }}"><a href="{{ url('update_password') }}"><i class="la la-lock"></i>Change Password</a></li>
            <li><a href="dashboard-company-profile.html"><i class="la la-user-alt"></i>View Profile</a></li>
            <li><a href="#"><i class="la la-sign-out"></i>Logout</a></li>
            <li><a href="index.html"><i class="la la-trash"></i>Delete Profile</a></li>
        </ul>
    </div>
</div>
    <!-- End User Sidebar -->

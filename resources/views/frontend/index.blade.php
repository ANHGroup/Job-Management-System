
@include('frontend.layouts.css')
<style>
    .container-fluid {
  width: 80%;
    }
</style>
<body>
    <!-- wrapper  -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('frontend.layouts.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
       
        <!-- Left Sidebar End -->

        <div class="">
            <div class="content">
    
                <!-- Start Content-->
                <div class="container-fluid">
    
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
    
                                <h4 class="page-title">Contacts1</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
    
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="inputPassword2" class="sr-only">Search</label>
                                                <input type="search" class="form-control" id="inputPassword2"
                                                    placeholder="Search...">
                                            </div>
                                            <div class="form-group mx-sm-3">
                                                <label for="status-select" class="mr-2">Sort By</label>
                                                <select class="custom-select" id="status-select">
                                                    <option selected="">All</option>
                                                    <option value="1">Name</option>
                                                    <option value="2">Post</option>
                                                    <option value="3">Followers</option>
                                                    <option value="4">Followings</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end col-->
                                </div> <!-- end row -->
                            </div> <!-- end card-box -->
                        </div><!-- end col-->
                    </div>
                    
                    <!-- end row -->
    
                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="col-sm-6">
                                <div class="card-box">
                                    <div class="card-body shadow-lg p-3 mb-3 rounded">
                                        {{-- <img src="assets/images/users/user-3.jpg" class="rounded-circle img-thumbnail avatar-xl"
                                            alt="profile-image"> --}}
    
                                        <h4 class="mt-3"><a href="extras-profile.html"
                                                class="">{{ $job->title }}</a></h4>
                                       <p class="text-muted">Location:<span class="text-pink">{{ $job->location }}</span></p>
                                        <a href="{{ route('job.show', $job->id) }}"
                                            class="btn btn-primary btn-sm waves-effect waves-light">Details</a>
                                        <a href="{{ route('job.destroy', $job->id) }}"
                                            class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                    </div> <!-- end .padding -->
                                </div> <!-- end card-box-->
                            </div>
                        @endforeach
                  </div>
                    <div class="row">
                        <div class="d-flex justify-content-center">
                           
                        </div>
                            <div class="text-right">
                                <ul class="pagination pagination-rounded justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                   
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        <!-- Footer Start -->
        @include('frontend.layouts.footer')
        <!-- end Footer -->

        @include('frontend.layouts.js')

    </div>
    <!-- END wrapper -->

</body>



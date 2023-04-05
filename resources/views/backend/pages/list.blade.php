@extends('pages.master')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Contacts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-8">
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
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets/images/users/user-3.jpg" class="rounded-circle img-thumbnail avatar-xl"
                                        alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html"
                                            class="text-light">{{ $job->title }}</a></h4>
                                    <p class="text-muted">@website <span> | </span> <span> <a href="#"
                                                class="text-pink">anhgroupbd.com</a> </span></p>
                                    <p class="text-muted">Salary:<span class="text-pink">{{ $job->salary_range }}BDT</span>
                                    </p>
                                    <p class="text-muted">Location:<span class="text-pink">{{ $job->location }}</span></p>
                                    <a href="{{ route('job.show', $job->id) }}"
                                        class="btn btn-primary btn-sm waves-effect waves-light">Details</a>
                                    <form action="{{ route('job.destroy', $job->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-1">Delete</button>
                                    </form>
                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="text-right">
                            <ul class="pagination pagination-rounded justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
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
@endsection

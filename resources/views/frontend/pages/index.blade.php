@extends('frontend.layouts.master')

@section('content')
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
                        <div class="scam-banner" style="text-align: center; ">
                            <div class="col-lg-12">
                                <h1 style="color: #005eef">Recruitment scams & fraud warning</h1>
                            </div>
                            <div class="col-lg-12 ">
                                <p class="">We will never ask for the exchange of money or credit card details in
                                    the Recruitment process. Please be aware of any suspicious email activity from
                                    people who could be pretending to be recruiters or senior individuals at Unilever.
                                    If in doubt, please ignore the message.</p>
                            </div>
                            <!-- end col-->
                        </div> <!-- end row -->
                    </div> <!-- end card-box -->
                </div><!-- end col-->
            </div>
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
            <div class="row">
                <div class="col-12">
                    <h3 style="color:#005eef">There are {{ $recentJobs }} recent jobs in last 30days.</h3>
                </div><!-- end col-->
            </div>

            <!-- end row -->
            <div class="row">
                @foreach ($jobs as $job)
                <div class="col-sm-4">
                    <div class="card-box jobShow">
                        <div class="card-body">
                            <a href="{{ route('jobdetails', $job->id) }}">
                                <h3 class="mt-3">{{ $job->title }}</h3>
                                <h4 class="text-muted">Location: <span class="text-pink">{{ $job->location }}</span>
                                </h4>
                            </a>
                        </div>
                    </div> <!-- end card-box-->
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $jobs->links() }}
            </div>

        </div>
    </div> <!-- container -->
</div>
@endsection
@extends('frontend.layouts.master')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                           @elseif (Session::has('error'))
                                <div class="alert alert-warning" role="alert">
                                    {{Session::get('error')}}
                                </div>
                           @endif
                            </div>
                            <h4 class="page-title">Job Details given, Please apply from below.</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <!-- end col -->
                                <div class="col-xl-8">
                                    <div class="pl-xl-3 mt-3 mt-xl-0">
                                        <a href="#" class="text-primary">JOB POST</a>
                                        @if (count($errors) > 0)
                                        <div class = "alert alert-danger">
                                           <ul>
                                              @foreach ($errors->all() as $error)
                                                 <li>{{ $error }}</li>
                                              @endforeach
                                           </ul>
                                        </div>
                                     @endif
                                        <h4 class="mb-3"></h4>
                                        <label>Job Deadline :</label>
                                        <h6 class="text-danger text-uppercase">{{ $job->job_deadline }}</h6>
                                        <h4 class="mb-4">Job Title : <span class="text-muted mr-2"></span>
                                            <b>{{ $job->title }}</b>
                                        </h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div>
                                                    <label>Job Description:</label>{!! $job->description !!}</p>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Gender:</label>
                                                {{ $job->gender }}
                                            </div>
                                            <div class="col-md-6">
                                                <label>Job Category:</label>
                                                {{ $job->job_category }}
                                            </div>

                                            <div class="col-md-6">
                                                <label>Job Qualifications:</label>
                                                {{ $job->job_qualification }}
                                            </div>
                                            <div class="col-md-6">
                                                <label>Job Location:</label>
                                                {{ $job->location }}
                                            </div>
                                            <div class="col-md-6">
                                                <label>Salary Range:</label>
                                                {{ $job->salary_range }} BDT
                                            </div>
                                            <div class="col-md-12">
                                                @if (auth()->check())
                                                    <h3>Your Expected Salary*</h3>

                                                    <form action="{{ route('appliedjob.store') }}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <input type="hidden" name="job_id"
                                                                value="{{ old('job_id', $job->id) }}">
                                                            <div class="pl-xl-3 mt-3 mt-xl-0"><input type="number"
                                                                    placeholder="e.g.20000" name="salary">
                                                            </div>
                                                            <div class="pl-xl-3 mt-3 mt-xl-0"><input type="hidden"
                                                                value="" name="email">
                                                            </div>
                                                            

                                                            <button type="submit"
                                                                class="btn w-sm btn-danger waves-effect waves-light">Apply</button>
                                                        </div>
                                                    </form>
                                                @else
                                                    <a href="{{ route('login') }}" class="btn btn-primary">Apply
                                                        </a>
                                                @endif



                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div>
                                <div class="form-group">
                                    <div class="pl-xl-3 mt-3 mt-xl-0">
                                        <h3>Website:<span><a href="https://www.anhgroupbd.com/">anhgroup.com</span></h3>
                                       
                                </div>
                                </div>    
                                <div class="form-group">
                                   
                                </div>    
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->


    </div>
@endsection

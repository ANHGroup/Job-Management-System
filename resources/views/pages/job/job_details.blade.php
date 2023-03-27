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
                        <div class="page-title-right">
                        
                        </div>
                        <h4 class="page-title">Job Detail</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                             <!-- end col -->
                            <div class="col-xl-7">
                                <div class="pl-xl-3 mt-3 mt-xl-0">
                                    <a href="#" class="text-primary">JOB POST</a>
                                    <h4 class="mb-3"></h4>
                                    <h6 class="text-danger text-uppercase"><label>Job Deadline :</label>{{ $job->job_deadline }}</h6>
                                    <h4 class="mb-4">Job Title : <span class="text-muted mr-2"></span> <b>{{ $job->title }}</b></h4>
                                      <div class="row mb-3">
                                        <div class="col-md-12">
                                        <div>
                                            <label>Job Description:</label>{{$job->description}}</p>
                                              
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
                                            
                                            <a href="{{ route('job.destroy',$job->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Apply</a>
                                        </div>
                                        
                                    </div>
                                   
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
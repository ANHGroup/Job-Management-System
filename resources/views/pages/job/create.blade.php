@extends('pages.master')
@section('content')
    <div class="content-page" style="justify-content: center;">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                   
                                    <li class="breadcrumb-item active">Job Post Create</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Job Post</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 


                <div class="row" class="mx-auto col-10 col-md-8 col-lg-6">
                    <div class="col-lg-12" >
                        <div class="card-box">
                            <h5 class="text-uppercase mt-0 ">Job Post</h5>
                            <form method="post" action="{{ route('job.store') }}" enctype='multipart/form-data'>
                                @csrf
                            <div class="form-group mb-7">
                                <label for="product-name">Job Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="product-name" class="form-control" placeholder="e.g : Job Title">
                            </div>

                            <div class=" col-lg-6 form-group ">
                                <label for="product-reference">Salary Range <span class="text-danger">*</span></label>
                                <input type="text" name="salary_range" id="product-reference" class="form-control" placeholder="Salary Range">
                            </div>

                            <div class="form-group ">
                                <label for="product-description">Job Description <span class="text-danger">*</span></label>
                                <input  type="text" name="description" id="product-description"  placeholder="Please enter description">
                            </div>

                            <div class="col-lg-6 form-group mb-3">
                                <label for="product-summary">Job Category</label>
                                <input  type="text" name="job_category" id="product-summary" class="form-control"  placeholder="Please enter Job Category">
                            </div>
                            <div class="col-lg-6 form-group ">
                                <label for="product-summary">Job Experience</label>
                                <input  type="text" name="job_experience" class="form-control" id="product-summary"  placeholder="Please enter Experience">
                            </div>
                            <div class="col-lg-6 form-group mb-3">
                                <label for="product-summary">Job Qualifications</label>
                                <input  type="text" name="job_qualification" id="product-summary" class="form-control" placeholder="Please enter summary">
                            </div>
                            
                            <div class="col-lg-6 form-group mb-3">
                                <label for="product-summary">Job Deadline</label>
                                <input type="date" class="form-control" name="job_deadline" id="product-summary"  placeholder="Please enter summary">
                            </div>

                            <div class="col-lg-4 form-group mb-3">
                                <label for="product-category">Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-control select2" id="product-category">
                                    <option>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Both">Both</option>
                                    

                                </select>
                            </div>

                            <div class="col-lg-6 form-group mb-3">
                                <label for="product-price">Location <span class="text-danger">*</span></label>
                                <input type="text" name="location" class="form-control" class="form-control" id="product-price" placeholder="Enter Location">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-center mb-3">
                                      
                                        <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                        
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </form>
                        </div> 
                    <!-- end card-box -->
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                
                <!-- end row -->

                
            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection

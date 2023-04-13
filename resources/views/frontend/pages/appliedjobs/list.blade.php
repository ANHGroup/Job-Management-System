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

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                     <h1> {{ Auth::user()->name }}</h1>  
                                    </div>
                                    {{-- <div class="col-sm-8">
                                    <div class="text-sm-right">
                                        <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-settings"></i></button>
                                        <button type="button" class="btn btn-secondary mb-2 mr-1">Import</button>
                                        <button type="button" class="btn btn-secondary mb-2">Export</button>
                                    </div>
                                </div><!-- end col--> --}}
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped" id="products-datatable">
                                        <thead>
                                            <tr>
                                                {{-- <th style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th> --}}
                                               
                                                <th>Phone</th>
                                                <th>Job Title</th>
                                                <th>Expected Salary</th>
                                                <th>Job Category</th>
                                                <th>Gender</th>
                                                <th>Experience</th>
                                                
                                                <th>Present Address</th>
                                                <th>Permanent Address</th>
                                              

                                                {{-- <th>Status</th> --}}
                                                {{-- <th style="width: 85px;">Resume</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs as $applicant)
                                                <tr>
                                                    {{-- <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td> --}}

                                                    
                                                    <td>
                                                        {{ $applicant->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->title }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->expected_salary }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->job_category }}
                                                    </td>
                                                   
                                                    <td>
                                                        {{ $applicant->gender }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->job_experience }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->present_address }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->permanent_address }}
                                                    </td>
                                                    {{-- <td> <img src="{{ Storage::url($applicant->resume) }}" alt="" width="100"></td> --}}
                                                    {{-- <td>
                                                        <span class="badge bg-soft-success text-success">Active</span>
                                                    </td> --}}
                                                   
                                                    {{-- <td>
                                                        <a href=""
                                                            class="btn btn-primary">Details</a>

                                                        <form action=""
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger mt-1">Delete</button>
                                                        </form>
                                                    </td> --}}
                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end mb-0">
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

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->

        <!-- end Footer -->

    </div>
@endsection

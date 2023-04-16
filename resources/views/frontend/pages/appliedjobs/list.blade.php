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
                
                                   View All Applied jobs: {{ Auth::user()->name }}
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

                                           
                                                <th>Phone</th>

                                                <th>Job Title</th>
                                                <th>Expected Salary</th>
                                                <th>Job Category</th>
                                                <th>Experience</th>

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
                                                        {{ $applicant->job_experience }}
                                                    </td>
</tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
 </div>
@endsection

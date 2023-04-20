@extends('frontend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="content">

            <!-- Start Content-->
            <div class="">
             <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    View All Applied jobs: {{ Auth::user()->name }}
                                   
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


                                                {{-- <th>Status</th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs as $applicant)
                                                <tr>
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
                                                        {{ $applicant->skill }}
                                                    </td>

                                                    <td>
                                                        {{ $applicant->gender }}
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

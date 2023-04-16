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
                                                <th>Skill</th>
                                                <th>Gender</th>
                                                <th>Experience</th>


                                                {{-- <th>Status</th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($candidate as $applicant)
                                                <tr>
                                                    <td>
                                                        {{ $applicant->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->title }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->salary }}
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
    </div>
@endsection

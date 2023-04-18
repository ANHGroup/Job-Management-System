@extends('frontend.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="content">

            <!-- Start Content-->
<<<<<<< HEAD
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
=======
            <div class="">
             <div class="row">
>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
<<<<<<< HEAD

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

=======
                                    View All Applied jobs: {{ Auth::user()->name }}
                                   
>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped" id="products-datatable">
                                        <thead>
                                            <tr>

<<<<<<< HEAD
                                           
=======

>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
                                                <th>Phone</th>

                                                <th>Job Title</th>
                                                <th>Expected Salary</th>
                                                <th>Job Category</th>
                                                <th>Experience</th>
<<<<<<< HEAD

=======


                                                {{-- <th>Status</th> --}}

>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs as $applicant)
                                                <tr>
<<<<<<< HEAD
                                                    {{-- <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td> --}}


                                                   
=======
>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
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
<<<<<<< HEAD
                                                        {{ $applicant->job_category }}
=======
                                                        {{ $applicant->skill }}
                                                    </td>

                                                    <td>
                                                        {{ $applicant->gender }}
>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
                                                    </td>
                                                    <td>
                                                        {{ $applicant->job_experience }}
                                                    </td>
<<<<<<< HEAD
</tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
=======

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                              
>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
<<<<<<< HEAD
 </div>
=======
    </div>
>>>>>>> 5e7c71537b7c1cbe87a95a401ae73691aa614c64
@endsection

@extends('backend.layouts.master')
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
                                        <a href="#custom-modal" class="btn btn-danger waves-effect waves-light"
                                            data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i
                                                class="mdi mdi-plus-circle mr-1"></i> Add Customers</a>
                                                {{-- <a href="{{ route('applicant.edit',$applicants->edit) }}">Edit Profile</a> --}}
                                    </div>
                                 </div>
<div class="table-responsive">
                                    <table class="table table-centered table-striped" id="products-datatable">
                                        <thead>
                                            <tr>
                                               <th>Name</th>
                                                <th>Phone</th>
                                                <th>Present Address</th>
                                                <th>Permanent Address</th>
                                               <th>Gender</th>
                                                <th>Resume</th>

                                                {{-- <th>Status</th> --}}
                                                <th style="width: 85px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($applicants as $applicant)
                                                <tr>
                                                    {{-- <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td> --}}

                                                    <td>
                                                        {{ $applicant->name }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->present_address }}
                                                    </td>
                                                    <td>
                                                        {{ $applicant->permanent_address }}
                                                    </td>
                                                   
                                                    <td>
                                                        {{ $applicant->gender }}
                                                    </td>
                                                    {{-- <td>
                                                        <a href="{{($applicant->resume) }}" class="eye-" alt="" width="100"></a>
                                                        </td> --}}
                                                        <td><a href="{{ asset($applicant->resume) }}" class="fa fa-eye btn btn-primary" style="width:70px;">open</a></td>
                                                    {{-- <td>
                                                        <span class="badge bg-soft-success text-success">Active</span>
                                                    </td> --}}
                                                   
                                                    <td>
                                                        <a href="{{ route('applicant.show', $applicant->id) }}"
                                                            class="btn btn-primary">Details</a>
                                                        <a href="{{ route('applicant.edit', $applicant->id) }}"
                                                            class="btn btn-primary">Edit</a>

                                                        <form action="{{ route('applicant.destroy', $applicant->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger mt-1">Delete</button>
                                                        </form>
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

        <!-- Footer Start -->

        <!-- end Footer -->

    </div>
@endsection

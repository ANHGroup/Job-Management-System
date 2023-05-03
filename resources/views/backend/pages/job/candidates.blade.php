@extends('backend.layouts.master')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
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

                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Skill</th>
                                                <th>Gender</th>
                                                <th>Experience</th>
                                                <th>DOB</th>
                                                <th>Resume</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jobs as $item)
                                                <tr>
                                                    {{-- <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td> --}}
                                                    <td>
                                                        {{ $item->users->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $item->skill }}
                                                    </td>
                                                    <td>
                                                        {{ $item->gender }}
                                                    </td>
                                                    <td>
                                                        {{ $item->experience }}
                                                    </td>
                                                    <td>
                                                        {{ $item->dob }}
                                                    </td>
                                                    <td><a href="{{ asset($item->resume) }}" class="fa fa-eye btn btn-primary" style="width:70px;">open</a></td>

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

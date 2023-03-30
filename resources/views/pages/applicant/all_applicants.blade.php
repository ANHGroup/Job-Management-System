@extends('layouts.master')
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
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item active">Customers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customers   </h4>
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
                                    <a href="#custom-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Customers</a>
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
                                            <th>Present Address</th>
                                            <th>Permanent Address</th>
                                            <th>User ID</th>
                                            <th>Gender</th>
                                         
                                            <th>Status</th>
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $applicant  )
                                        <tr>
                                            {{-- <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td> --}}
                                            
                                            <td>
                                               {{ $applicant->present_address }}
                                            </td>
                                            <td>
                                                {{ $applicant->permanent_address}}
                                            </td>
                                            <td>
                                                {{ $applicant->user_id }}
                                            </td>
                                            <td>
                                                {{ $applicant->gender}}
                                            </td>
                                            <td>
                                                <span class="badge bg-soft-success text-success">Active</span>
                                            </td>
        
                                            <td>
                                                <a href="{{ route('applicant.show', $applicant->id) }}" class="btn btn-primary"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                
                                                <form action="{{ route('applicant.destroy', $applicant->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mt-1">Delete</button>
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
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    2015 - 2018 &copy; UBold theme by <a href="">Coderthemes</a> 
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
@endsection

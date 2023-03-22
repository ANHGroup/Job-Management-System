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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                    <li class="breadcrumb-item active">Product Edit</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add / Edit Product</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 


                <div class="row" class="mx-auto col-10 col-md-8 col-lg-6">
                    <div class="col-lg-12" >
                        <div class="card-box">
                            <h5 class="text-uppercase mt-0 mb-3">General</h5>

                            <div class="form-group mb-7">
                                <label for="product-name">Product Name <span class="text-danger">*</span></label>
                                <input type="text" id="product-name" class="form-control" placeholder="e.g : Apple iMac">
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-reference">Reference <span class="text-danger">*</span></label>
                                <input type="text" id="product-reference" class="form-control" placeholder="e.g : Apple iMac">
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-description">Product Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="product-description" rows="5" placeholder="Please enter description"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-summary">Product Summary</label>
                                <textarea class="form-control" id="product-summary" rows="3" placeholder="Please enter summary"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-category">Categories <span class="text-danger">*</span></label>
                                <select class="form-control select2" id="product-category">
                                    <option>Select</option>
                                    <optgroup label="Shopping">
                                        <option value="SH1">Shopping 1</option>
                                        <option value="SH2">Shopping 2</option>
                                        <option value="SH3">Shopping 3</option>
                                        <option value="SH4">Shopping 4</option>
                                    </optgroup>
                                    <optgroup label="CRM">
                                        <option value="CRM1">Crm 1</option>
                                        <option value="CRM2">Crm 2</option>
                                        <option value="CRM3">Crm 3</option>
                                        <option value="CRM4">Crm 4</option>
                                    </optgroup>
                                    <optgroup label="eCommerce">
                                        <option value="E1">eCommerce 1</option>
                                        <option value="E2">eCommerce 2</option>
                                        <option value="E3">eCommerce 3</option>
                                        <option value="E4">eCommerce 4</option>
                                    </optgroup>

                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="product-price">Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="product-price" placeholder="Enter amount">
                            </div>

                            <div class="form-group mb-3">
                                <label class="mb-2">Status <span class="text-danger">*</span></label>
                                <br/>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                    <label for="inlineRadio1"> Online </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                    <label for="inlineRadio2"> Offline </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                                    <label for="inlineRadio3"> Draft </label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label>Comment</label>
                                <textarea class="form-control" rows="3" placeholder="Please enter comment"></textarea>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="text-center mb-3">
                            <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                            <button type="button" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                            <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                
            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection

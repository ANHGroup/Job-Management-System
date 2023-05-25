@extends('admin.layouts.master')
@section('content')
<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid" style="margin-top: 10px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-box">
            <h4 class="header-title m-t-0">Update Company</h4>
            <form action="{{ route('companies.update', $company->id) }}" method="POST" id="myForm">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $company->email }}" required>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $company->address }}"
                  required>
              </div>
              <button type="submit" class="btn btn-primary">update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
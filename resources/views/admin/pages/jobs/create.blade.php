@extends('admin.layouts.master')
@section('content')
<div class="content-page">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid" style="margin-top: 10px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-box">
            <h4 class="header-title m-t-0">Create Job Posting</h4>
            <form action="{{ route('job-postings.store') }}" method="POST" id="myForm">
              @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="default-editor">Description</label>
                <textarea name="description" id="default-editor"></textarea>
              </div>
              <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" id="company_id" class="form-control" required>
                  <option value="1">ANH Group</option>
                  <option value="1">ANH Enterprise</option>
                  <option value="1">ANH Limited</option>
                  <option value="1">RAY Consumer Limited</option>
                  <option value="1">SRD Limited</option>
                </select>
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="default-editor">Requirements</label>
                <textarea name="requirements" id="default-editor"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
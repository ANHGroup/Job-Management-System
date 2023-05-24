@extends('admin.layouts.master')
@section('content')
<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-box">
            <h4 class="header-title m-t-0">Create Job Posting</h4>
            <form action="#" class="parsley-examples" novalidate="">
              <div class="form-group">
                <label for="title">Title<span class="text-danger">*</span></label>
                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Title"
                  class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="description">Description<span class="text-danger">*</span></label>
                <textarea type="description" name="description" parsley-trigger="change" required=""
                  placeholder="Enter description" class="form-control" id="description"></textarea>
              </div>
              <div class="form-group">
                <label for="company_id">Company<span class="text-danger">*</span></label>
                <select name="company_id" id="company_id" class="form-control" required="">
                  <option value="">Choose..</option>
                  <option value="press">Press</option>
                  <option value="net">Internet</option>
                  <option value="mouth">Word of mouth</option>
                  <option value="other">Other..</option>
                </select>
              </div>
              <div class="form-group">
                <label for="location">Location<span class="text-danger">*</span></label>
                <input name="location" type="text" required placeholder="Password" class="form-control" id="location">
              </div>
              <div class="form-group">
                <label for="salary">Salary<span class="text-danger">*</span></label>
                <input name="salary" type="number" required placeholder="Password" class="form-control" id="salary">
              </div>
              <div class="form-group">
                <label for="requirements">Requirements<span class="text-danger">*</span></label>
                <textarea name="requirements" type="number" required placeholder="Password" class="form-control"
                  id="requirements"></textarea>
              </div>
              <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                  Submit
                </button>
                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                  Cancel
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- container -->

  </div> <!-- content -->

</div>
@endsection
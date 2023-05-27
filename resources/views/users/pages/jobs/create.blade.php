@extends('users.layouts.master')
@section('content')
<div class="wrapper">
  <div class="container-fluid">
    <!-- <h2></h2>
      <p></p> -->
    <!-- Display other job details -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card-box">
          @if (Auth::check())
          <form action="{{ route('job_aplication.create') }}" method="POST" enctype="multipart/form-data" id="myForm">
            @csrf
            <div class="form-group">
              <label for="cover_letter">Name</label>
              <input type="text" name="user_name" value="{{ Auth::user()->name }}" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label for="cover_letter">Email</label>
              <input type="email" name="user_email" class="form-control" value="{{ Auth::user()->email }}" disabled>
            </div>
            <div class="form-group">
              <label for="cover_letter">Phone</label>
              <input type="number" name="user_email" class="form-control" value="{{ Auth::user()->email }}">
            </div>

            <div class="form-group">
              <label for="cover_letter">Cover Letter</label>
              <textarea class="form-control" id="cover_letter" class="form-control" name="cover_letter"
                rows="5"></textarea>
            </div>

            <div class="form-group">
              <label for="resume">Resume (PDF only)</label>
              <input type="file" class="form-control-file" class="form-control" id="resume" name="resume">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          @else
          <p>Please <a href="{{ route('login') }}">log in</a> to apply for this job.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
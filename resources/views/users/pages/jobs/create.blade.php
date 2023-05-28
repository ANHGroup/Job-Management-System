@extends('users.layouts.master')
@section('content')
<div class="wrapper">
  <div class="container-fluid">
    <!-- Display other job details -->
    <div class="row">
      <div class="col-lg-8">
        <div class="card-box">
          <h4>Job Title: {{ $jobPosting->title }}</h4>
          @if (Auth::check())
          @if (session('flash_notification.message'))
          <div class="alert alert-{{ session('flash_notification.level') }}">
            {{ session('flash_notification.message') }}
          </div>
          @endif
          <form action="{{ route('job_aplication.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="job_id" value="{{ $jobPosting->id }}">
            <input type="hidden" name="company_id" value="{{ $jobPosting->company_id }}">
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
              <input type="number" name="phone" class="form-control" value="{{ Auth::user()->email }}">
            </div>

            <div class="form-group">
              <label for="year_of_experience">Year of Experience</label>
              <input type="number" class="form-control" id="year_of_experience" name="year_of_experience" rows="5">
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
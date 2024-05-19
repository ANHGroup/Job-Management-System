@extends('users.layouts.master')
@section('content')
<div class="wrapper">
  <div class="container-fluid">
    <div class="content-page mt-10">
      <div class="content">
        <!-- Start Content-->
        <div class="container-fluid" style="margin-top: 10px;">
          <div class="card-box">
            <h1>Position: {{ $job->title }}</h1>
            <p><strong>Company:</strong> {{ $job->company_id }}</p>
            <p><strong>Location:</strong> {{ $job->location }}</p>
            <p><strong>Salary:</strong> {{ $job->salary }}</p>
            <p><strong>Description:</strong></p>
            <div>{!! $job->description !!}</div>
            <strong>Requirements:</strong>
            <div>{!! $job->requirements !!}</div>
            @auth
            <!-- Display apply button or form -->
            <a class="btn btn-success waves-effect" href="{{ url('/apply', ['jobPostingId' => $job->id]) }}">Apply Now
            </a>
            @else
            <!-- Display message or prompt to log in -->
            <a class="btn btn-primary" href="{{ route('login') }}">Please log in to Apply</a>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
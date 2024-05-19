@extends('admin.layouts.master')
@section('content')
<div class="content-page mt-10">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid" style="margin-top: 10px;">
      <div class="card-box">
        <h1>Position: {{ $jobPosting->title }}</h1>
        <p><strong>Company:</strong> {{ $jobPosting->company_id }}</p>
        <p><strong>Location:</strong> {{ $jobPosting->location }}</p>
        <p><strong>Salary:</strong> {{ $jobPosting->salary }}</p>
        <p><strong>Description:</strong></p>
        <div>{!! $jobPosting->description !!}</div>
        <strong>Requirements:</strong>
        <div>{!! $jobPosting->requirements !!}</div>
        <a href="{{ route('job-postings.edit', $jobPosting->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('job-postings.destroy', $jobPosting->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"
            onclick="return confirm('Are you sure you want to delete this job posting?')">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
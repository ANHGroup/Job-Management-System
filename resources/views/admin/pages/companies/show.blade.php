@extends('admin.layouts.master')
@section('content')
<div class="content-page mt-10">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid" style="margin-top: 10px;">
      <div class="card-box">
        <h1>Company Name: {{ $company->name }}</h1>
        <p><strong>Company Email:</strong> {{ $company->email }}</p>
        <p><strong>Company Address:</strong> {{ $company->address }}</p>
        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline">
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
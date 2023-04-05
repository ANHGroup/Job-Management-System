@extends('layouts.back_master')
@section('backBodySection')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Change Password</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

             <!-- Ls widget -->
            <div class="ls-widget">
                <div class="widget-title">
                    <h4>Change Password</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>
                            {{ session('status') }}
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                 @endif
                <div class="widget-content">
                     <form method="POST" action="{{ url('update_password') }}" class="default-form">
                        @csrf

                        <div class="row">
                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <label for="current_password">Old Password </label>
                                <input  id="current_password" type="password" name="oldpassword" value="{{ __('Current Password') }}" autocomplete="current-password"  placeholder="Current Password">
                                @error('oldpassword')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <label for="password">New Password</label>
                                <input id="password" autocomplete="new-password" type="password" name="password" placeholder="New Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-7 col-md-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" autocomplete="new-password" type="password" name="password_confirmation" placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <button class="theme-btn btn-style-one">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard -->
@endsection

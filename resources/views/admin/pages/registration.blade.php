<!DOCTYPE html>
<html lang="en">
<!-- Header -->
@include('admin.partials.header')

<body>
  <!-- Begin page -->
  <div id="wrapper">
    <div class="content-page">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-pattern">

              <div class="card-body p-4">

                <div class="text-center w-75 m-auto">
                  <a href="{{ route('admin.registration.index') }}">
                    <span><img src="{{ asset('assets/images/ANH-Group-Logo.png')}}" alt="" height="60"></span>
                  </a>
                </div>

                <form action="{{ route('admin.registration.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input name="name" class="form-control" type="text" id="fullname" placeholder="Enter your name"
                      required>
                  </div>
                  <div class="form-group">
                    <label for="emailaddress">Email address</label>
                    <input name="email" class="form-control" type="email" id="emailaddress" required
                      placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" class="form-control" type="password" required id="password"
                      placeholder="Enter your password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                      <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);"
                          class="text-dark">Terms and Conditions</a></label>
                    </div>
                  </div>
                  <div class="form-group mb-0 text-center">
                    <button class="btn btn-success btn-block" type="submit"> Sign Up </button>
                  </div>
                </form>
                <!-- <div class="text-center">
                  <h5 class="mt-3 text-muted">Sign up using</h5>
                  <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                          class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                          class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                          class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                          class="mdi mdi-github-circle"></i></a>
                    </li>
                  </ul>
                </div> -->
                <div class="row mt-3">
                  <div class="col-12 text-center">
                    <p class="text-black-50">Already have account? <a href="{{ route('admin.login.index') }}"
                        class="text-black ml-1"><b>Sign
                          In</b></a></p>
                  </div> <!-- end col -->
                </div>
              </div> <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- END wrapper -->
  <!-- Scripts -->
  @include('admin.partials.scripts')
</body>

</html>
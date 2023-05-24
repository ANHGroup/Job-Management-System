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
                  <a href="index.html">
                    <span><img src="{{ asset('assets/images/ANH-Group-Logo.png')}}" alt="" height="60"></span>
                  </a>
                </div>

                <form action="#">

                  <div class="form-group mb-3">
                    <label for="emailaddress">Email address</label>
                    <input class="form-control" type="email" id="emailaddress" required=""
                      placeholder="Enter your email">
                  </div>

                  <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" required="" id="password"
                      placeholder="Enter your password">
                  </div>

                  <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                      <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                    </div>
                  </div>

                  <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                  </div>

                </form>

                <!-- <div class="text-center">
                  <h5 class="mt-3 text-muted">Sign in with</h5>
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
                    <p> <a href="pages-recoverpw.html" class="text-decoration-none">Forgot your
                        password?</a></p>
                    <p class="text-black-50">Don't have an account? <a href="pages-register.html"
                        class="text-black ml-1"><b>Sign
                          Up</b></a></p>
                  </div> <!-- end col -->
                </div>
              </div> <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
        </div>
        <!-- end row -->
      </div>

    </div>
  </div>
  <!-- END wrapper -->
  <!-- Scripts -->
  @include('admin.partials.scripts')
</body>

</html>
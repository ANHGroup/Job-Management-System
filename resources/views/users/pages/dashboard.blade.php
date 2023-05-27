@extends('users.layouts.master')
@section('content')
<div class="wrapper">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right">
            <form class="form-inline">
              <div class="form-group">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control shadow border-white" id="dash-daterange">
                  <div class="input-group-append">
                    <span class="input-group-text bg-primary border-primary text-white">
                      <i class="mdi mdi-calendar-range font-13"></i>
                    </span>
                  </div>
                </div>
              </div>
              <a href="javascript: void(0);" class="btn btn-primary btn-sm ml-2 font-14">
                <i class="mdi mdi-autorenew"></i>
              </a>
              <a href="javascript: void(0);" class="btn btn-primary btn-sm ml-1 font-14">
                <i class="mdi mdi-filter-variant"></i>
              </a>
            </form>
          </div>
          <h4 class="page-title">Welcome, {{ $user ? $user->name : 'Please login to apply jobs!!' }}</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
          <div class="row">
            <div class="col-6">
              <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                <i class="fe-heart font-22 avatar-title text-info"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-right">
                <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                <p class="text-muted mb-1 text-truncate">Total Revenue</p>
              </div>
            </div>
          </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
      </div> <!-- end col-->

      <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
          <div class="row">
            <div class="col-6">
              <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                <i class="fe-shopping-cart font-22 avatar-title text-primary"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-right">
                <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                <p class="text-muted mb-1 text-truncate">Today's Sales</p>
              </div>
            </div>
          </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
      </div> <!-- end col-->

      <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
          <div class="row">
            <div class="col-6">
              <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-right">
                <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                <p class="text-muted mb-1 text-truncate">Conversion</p>
              </div>
            </div>
          </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
      </div> <!-- end col-->

      <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
          <div class="row">
            <div class="col-6">
              <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                <i class="fe-eye font-22 avatar-title text-primary"></i>
              </div>
            </div>
            <div class="col-6">
              <div class="text-right">
                <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                <p class="text-muted mb-1 text-truncate">Today's Visits</p>
              </div>
            </div>
          </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
      </div> <!-- end col-->
    </div>
    <!-- end row-->
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box">
          <div class="bootstrap-table">
            <div class="fixed-table-toolbar"></div>
            <div class="fixed-table-container" style="padding-bottom: 0px;">
              <div class="fixed-table-header" style="display: none;">
                <table></table>
              </div>
              <div class="fixed-table-body">
                <table data-toggle="table" data-show-columns="false" data-page-list="[5, 10, 20]" data-page-size="5"
                  data-buttons-class="xs btn-light" data-pagination="true" class="table-borderless table table-hover"
                  style="display: table;">

                  <tbody>
                    @foreach($jobs as $job)
                    <tr>
                      <td class="align-middle">
                        <h5 class="m-0">
                          <i class="fe-fast-forward mr-1 text-primary"></i>
                          {{ $job->title }}
                        </h5>
                      </td>
                      <td class="align-middle" style="text-align:right;">
                        <a class="btn btn-link waves-effect" href="{{ route('job_aplication.show', $job->id )}}"
                          target="_blank">Apply
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- <div class="fixed-table-footer" style="display: none;">
                                    <table>
                                        <tbody>
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div> -->
            </div>
            <!-- <div class="fixed-table-pagination">
                                <div class="float-left pagination-detail"><span class="pagination-info">Showing 1 to 5
                                        of 30
                                        rows</span><span class="page-list"><span class="btn-group dropup"><button
                                                type="button" class="btn btn-xs btn-light dropdown-toggle"
                                                data-toggle="dropdown"><span class="page-size">5</span> <span
                                                    class="caret"></span></button>
                                            <div class="dropdown-menu"><a class="dropdown-item active" href="#">5</a><a
                                                    class="dropdown-item " href="#">10</a><a class="dropdown-item "
                                                    href="#">20</a>
                                            </div>
                                        </span> rows per page</span></div>
                                <div class="float-right pagination">
                                    <ul class="pagination">
                                        <li class="page-item page-pre"><a class="page-link" href="#">‹</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item page-last"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item page-next"><a class="page-link" href="#">›</a></li>
                                    </ul>
                                </div>
                            </div> -->
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</div>
@endsection
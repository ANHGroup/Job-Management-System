@extends('admin.layouts.master')
@section('content')
<div class="content-page mt-10">
  <div class="content">
    <!-- Start Content-->
    <div class="container-fluid" style="margin-top: 10px;">
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box">
            @if (session('flash_notification.message'))
            <div class="alert alert-{{ session('flash_notification.level') }}">
              {{ session('flash_notification.message') }}
            </div>
            @endif
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
                      @foreach ($jobPostings as $jobPosting)
                      <tr>
                        <td class="align-middle">
                          <h5 class="m-0">
                            <i class="fe-fast-forward mr-1 text-primary"></i>
                            {{ $jobPosting->title }}
                          </h5>
                        </td>
                        <td class="align-middle" style="text-align:right;">
                          <a class="btn btn-success waves-effect"
                            href="{{ route('job-postings.edit', $jobPosting->id) }}" target="_blank">Edit
                          </a>
                          <a class="btn btn-info waves-effect" href="{{ route('job-postings.show', $jobPosting->id) }}"
                            target="_blank">Show
                          </a>
                          <form action="{{ route('job-postings.destroy', $jobPosting->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger waves-effect">Delete
                            </button>
                          </form>
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
    </div>
  </div>
</div>
@endsection
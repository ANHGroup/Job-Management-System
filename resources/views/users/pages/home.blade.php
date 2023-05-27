@extends('users.layouts.master')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="container">
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
                        <h5 class="page-title">
                            Welcome to ANH Group job board, {{ $user ? $user->name : 'login to apply jobs' }}
                        </h5>
                    </div>
                </div>
            </div>
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
                                    <table data-toggle="table" data-show-columns="false" data-page-list="[5, 10, 20]"
                                        data-page-size="5" data-buttons-class="xs btn-light" data-pagination="true"
                                        class="table-borderless table table-hover" style="display: table;">

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
                                                    <a class="btn btn-link waves-effect"
                                                        href="{{ route('job_aplication.show', $job->id )}}"
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
        </div>

        <!-- <div class="row">
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
                    </div> 
                </div> 
            </div>

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
                    </div> 
                </div> 
            </div> 

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
                    </div> 
                </div> 
            </div> 

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
                    </div> 
                </div> 
            </div>
        </div> -->
        <!-- end row-->
        <!-- <div class="row">
            <div class="col-xl-12">
                <div id="accordion" class="mb-3">
                    <div class="card mb-1">
                        <div class="card-header" id="headingFour">
                            <h5 class="m-0">
                                <a class="text-dark" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                    <i class="fe-fast-forward mr-1 text-primary"></i>
                                    Senior Software Engineer at ANH Group
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="job-details">
                                    <h3>Job Details</h3>
                                    <p><strong>Company:</strong> ACME Corporation</p>
                                    <p><strong>Location:</strong> New York, NY</p>
                                    <p><strong>Job Type:</strong> Full-time</p>
                                    <p><strong>Salary:</strong> $60,000 - $80,000 per year</p>
                                </div>

                                <div class="job-requirements">
                                    <h3>Job Requirements</h3>
                                    <ul>
                                        <li>Proven experience as a web developer</li>
                                        <li>Proficient in HTML, CSS, and JavaScript</li>
                                        <li>Experience with front-end frameworks such as React or Angular</li>
                                        <li>Knowledge of back-end technologies like Node.js or PHP</li>
                                        <li>Familiarity with database systems such as MySQL or MongoDB</li>
                                        <li>Good understanding of responsive web design principles</li>
                                        <li>Strong problem-solving skills</li>
                                        <li>Excellent communication and teamwork abilities</li>
                                    </ul>
                                </div>

                                <div class="how-to-apply">
                                    <h3>How to Apply</h3>
                                    <p>To apply for this position, please send your resume and cover letter to
                                        <a href="mailto:jobs@acmecorp.com">info@anhenterprise.com</a>.
                                    </p>
                                    <div class="apply-button btn btn-primary">
                                        <a class="text-white" href="https://example.com/apply" target="_blank">Apply
                                            Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1">
                        <div class="card-header" id="headingFour">
                            <h5 class="m-0">
                                <a class="text-dark" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                    <i class="fe-fast-forward mr-1 text-primary"></i>
                                    Senior Software Engineer at ANH Group
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="job-details">
                                    <h3>Job Details</h3>
                                    <p><strong>Company:</strong> ACME Corporation</p>
                                    <p><strong>Location:</strong> New York, NY</p>
                                    <p><strong>Job Type:</strong> Full-time</p>
                                    <p><strong>Salary:</strong> $60,000 - $80,000 per year</p>
                                </div>

                                <div class="job-requirements">
                                    <h3>Job Requirements</h3>
                                    <ul>
                                        <li>Proven experience as a web developer</li>
                                        <li>Proficient in HTML, CSS, and JavaScript</li>
                                        <li>Experience with front-end frameworks such as React or Angular</li>
                                        <li>Knowledge of back-end technologies like Node.js or PHP</li>
                                        <li>Familiarity with database systems such as MySQL or MongoDB</li>
                                        <li>Good understanding of responsive web design principles</li>
                                        <li>Strong problem-solving skills</li>
                                        <li>Excellent communication and teamwork abilities</li>
                                    </ul>
                                </div>

                                <div class="how-to-apply">
                                    <h3>How to Apply</h3>
                                    <p>To apply for this position, please send your resume and cover letter to
                                        <a href="mailto:jobs@acmecorp.com">info@anhenterprise.com</a>.
                                    </p>
                                    <div class="apply-button btn btn-primary">
                                        <a class="text-white" href="https://example.com/apply" target="_blank">Apply
                                            Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="card card-body">
                    <div class="job-details">
                        <h3>Job Details</h3>
                        <p><strong>Company:</strong> ACME Corporation</p>
                        <p><strong>Location:</strong> New York, NY</p>
                        <p><strong>Job Type:</strong> Full-time</p>
                        <p><strong>Salary:</strong> $60,000 - $80,000 per year</p>
                    </div>

                    <div class="job-requirements">
                        <h3>Job Requirements</h3>
                        <ul>
                            <li>Proven experience as a web developer</li>
                            <li>Proficient in HTML, CSS, and JavaScript</li>
                            <li>Experience with front-end frameworks such as React or Angular</li>
                            <li>Knowledge of back-end technologies like Node.js or PHP</li>
                            <li>Familiarity with database systems such as MySQL or MongoDB</li>
                            <li>Good understanding of responsive web design principles</li>
                            <li>Strong problem-solving skills</li>
                            <li>Excellent communication and teamwork abilities</li>
                        </ul>
                    </div>

                    <div class="how-to-apply">
                        <h3>How to Apply</h3>
                        <p>To apply for this position, please send your resume and cover letter to
                            <a href="mailto:jobs@acmecorp.com">info@anhenterprise.com</a>.
                        </p>
                        <div class="apply-button btn btn-primary">
                            <a class="text-white" href="https://example.com/apply" target="_blank">Apply
                                Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div> <!-- end container -->
</div>
@endsection
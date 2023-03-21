@extends('layouts.back_master')
@section('backBodySection')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Resume Alerts</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>My Alerts</h4>

                            </div>

                            <div class="widget-content">
                                <div class="table-outer">
                                    <table class="default-table manage-job-table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Alert Query</th>
                                                <th>Number Jobs</th>
                                                <th>Times</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Education</td>
                                                <td>Category: Education Training,   Posted Date: All,   Salary: $1000 – $3000</td>
                                                <td>Jobs found 5</td>
                                                <td>Weekly</td>
                                                <td><button><i class="la la-trash colored"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>Accounting and Finance</td>
                                                <td>Category: Education Training,   Posted Date: All,   Salary: $1000 – $3000</td>
                                                <td>Jobs found 5</td>
                                                <td>Weekly</td>
                                                <td><button><i class="la la-trash colored"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>Education</td>
                                                <td>Category: Education Training,   Posted Date: All,   Salary: $1000 – $3000</td>
                                                <td>Jobs found 5</td>
                                                <td>Weekly</td>
                                                <td><button><i class="la la-trash colored"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>Accounting and Finance</td>
                                                <td>Category: Education Training,   Posted Date: All,   Salary: $1000 – $3000</td>
                                                <td>Jobs found 5</td>
                                                <td>Weekly</td>
                                                <td><button><i class="la la-trash colored"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>Education</td>
                                                <td>Category: Education Training,   Posted Date: All,   Salary: $1000 – $3000</td>
                                                <td>Jobs found 5</td>
                                                <td>Weekly</td>
                                                <td><button><i class="la la-trash colored"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>Accounting and Finance</td>
                                                <td>Category: Education Training,   Posted Date: All,   Salary: $1000 – $3000</td>
                                                <td>Jobs found 5</td>
                                                <td>Weekly</td>
                                                <td><button><i class="la la-trash colored"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->
@endsection

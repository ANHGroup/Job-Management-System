@extends('layouts.back_master')
@section('backBodySection')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Packages</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>My Packages</h4>

                            </div>

                            <div class="widget-content">
                                <div class="table-outer">
                                    <table class="default-table manage-job-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Transaction id</th>
                                                <th>Package</th>
                                                <th>Expiry</th>
                                                <th>Total Jobs/CVs</th>
                                                <th>Used</th>
                                                <th>Remaining</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="trans-id">#593677663</td>
                                                <td class="package"><a href="#">Super CV Pack</a></td>
                                                <td class="expiry">Jan 11, 2021</td>
                                                <td class="total-jobs">50</td>
                                                <td class="used">8</td>
                                                <td class="remaining">42</td>
                                                <td class="status">Active</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="trans-id">#593677663</td>
                                                <td class="package"><a href="#">Gold Jobs package</a></td>
                                                <td class="expiry">Jan 11, 2021</td>
                                                <td class="total-jobs">50</td>
                                                <td class="used">8</td>
                                                <td class="remaining">42</td>
                                                <td class="status">Active</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="trans-id">#593677663</td>
                                                <td class="package"><a href="#">Silver Jobs package</a></td>
                                                <td class="expiry">Jan 11, 2021</td>
                                                <td class="total-jobs">50</td>
                                                <td class="used">8</td>
                                                <td class="remaining">42</td>
                                                <td class="status">Active</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="trans-id">#593677663</td>
                                                <td class="package"><a href="#">Super CV Pack</a></td>
                                                <td class="expiry">Jan 11, 2021</td>
                                                <td class="total-jobs">50</td>
                                                <td class="used">8</td>
                                                <td class="remaining">42</td>
                                                <td class="status">Active</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td class="trans-id">#593677663</td>
                                                <td class="package"><a href="#">Gold Jobs package</a></td>
                                                <td class="expiry">Jan 11, 2021</td>
                                                <td class="total-jobs">50</td>
                                                <td class="used">8</td>
                                                <td class="remaining">42</td>
                                                <td class="status">Active</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td class="trans-id">#593677663</td>
                                                <td class="package"><a href="#">Silver Jobs package</a></td>
                                                <td class="expiry">Jan 11, 2021</td>
                                                <td class="total-jobs">50</td>
                                                <td class="used">8</td>
                                                <td class="remaining">42</td>
                                                <td class="status">Active</td>
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

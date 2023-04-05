@extends('layouts.back_master')
@section('backBodySection')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Shorlisted Resumes!</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <!-- applicants Widget -->
                    <div class="applicants-widget ls-widget">
                        <div class="widget-title">
                            <h4>Shorlist Resumes</h4>

                            <div class="chosen-outer">
                                 <!--search box-->
                                <div class="search-box-one">
                                    <form method="post" action="https://creativelayers.net/themes/superio/blog.html">
                                        <div class="form-group">
                                            <span class="icon flaticon-search-1"></span>
                                            <input type="search" name="search-field" value="" placeholder="Search" required="">
                                        </div>
                                    </form>
                                </div>

                                <!--Tabs Box-->
                                 <select class="chosen-select">
                                    <option>Newest</option>
                                    <option>Last 12 Months</option>
                                    <option>Last 16 Months</option>
                                    <option>Last 24 Months</option>
                                    <option>Last 5 year</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget-content">
                            <!-- Candidate block three -->
                            <div class="candidate-block-three">
                                <div class="inner-box">
                                    <div class="content">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-1.png') }}" alt=""></figure>
                                        <h4 class="name"><a href="#">Darlene Robertson</a></h4>
                                        <ul class="candidate-info">
                                            <li class="designation">UI Designer</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                        </ul>
                                        <ul class="post-tags">
                                            <li><a href="#">App</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Digital</a></li>
                                        </ul>
                                    </div>
                                    <div class="option-box">
                                        <!-- Dashboard Option -->
                                        <div class="dropdown resume-action">
                                            <button class="dropdown-toggle theme-btn btn-style-three" role="button" data-toggle="dropdown" aria-expanded="false">Action <i class="fa fa-angle-down"></i></button>

                                            <ul class="dropdown-menu">
                                                <li><button data-text="View Aplication"><span class="la la-eye"></span> View Aplication</button></li>
                                                <li><button data-text="Approve Aplication"><span class="la la-check"></span> Approve Aplication</button></li>
                                                <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span> Reject Aplication</button></li>
                                            </ul>
                                        </div>

                                        <button class="delete-btn" data-text="Delete Aplication"><span class="la la-trash"></span></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate block three -->
                            <div class="candidate-block-three">
                                <div class="inner-box">
                                    <div class="content">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-2.png') }}" alt=""></figure>
                                        <h4 class="name"><a href="#">Wade Warren</a></h4>
                                        <ul class="candidate-info">
                                            <li class="designation">UI Designer</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                        </ul>
                                        <ul class="post-tags">
                                            <li><a href="#">App</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Digital</a></li>
                                        </ul>
                                    </div>
                                    <div class="option-box">
                                        <!-- Dashboard Option -->
                                        <div class="dropdown resume-action">
                                            <button class="dropdown-toggle theme-btn btn-style-three" role="button" data-toggle="dropdown" aria-expanded="false">Action <i class="fa fa-angle-down"></i></button>

                                            <ul class="dropdown-menu">
                                                <li><button data-text="View Aplication"><span class="la la-eye"></span> View Aplication</button></li>
                                                <li><button data-text="Approve Aplication"><span class="la la-check"></span> Approve Aplication</button></li>
                                                <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span> Reject Aplication</button></li>
                                            </ul>
                                        </div>

                                        <button class="delete-btn" data-text="Delete Aplication"><span class="la la-trash"></span></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate block three -->
                            <div class="candidate-block-three">
                                <div class="inner-box">
                                    <div class="content">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-3.png') }}" alt=""></figure>
                                        <h4 class="name"><a href="#">Leslie Alexander</a></h4>
                                        <ul class="candidate-info">
                                            <li class="designation">UI Designer</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                        </ul>
                                        <ul class="post-tags">
                                            <li><a href="#">App</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Digital</a></li>
                                        </ul>
                                    </div>
                                    <div class="option-box">
                                        <!-- Dashboard Option -->
                                        <div class="dropdown resume-action">
                                            <button class="dropdown-toggle theme-btn btn-style-three" role="button" data-toggle="dropdown" aria-expanded="false">Action <i class="fa fa-angle-down"></i></button>

                                            <ul class="dropdown-menu">
                                                <li><button data-text="View Aplication"><span class="la la-eye"></span> View Aplication</button></li>
                                                <li><button data-text="Approve Aplication"><span class="la la-check"></span> Approve Aplication</button></li>
                                                <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span> Reject Aplication</button></li>
                                            </ul>
                                        </div>

                                        <button class="delete-btn" data-text="Delete Aplication"><span class="la la-trash"></span></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Candidate block three -->
                            <div class="candidate-block-three">
                                <div class="inner-box">
                                    <div class="content">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt=""></figure>
                                        <h4 class="name"><a href="#">Floyd Miles</a></h4>
                                        <ul class="candidate-info">
                                            <li class="designation">UI Designer</li>
                                            <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                            <li><span class="icon flaticon-money"></span> $99 / hour</li>
                                        </ul>
                                        <ul class="post-tags">
                                            <li><a href="#">App</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Digital</a></li>
                                        </ul>
                                    </div>
                                    <div class="option-box">
                                        <!-- Dashboard Option -->
                                        <div class="dropdown resume-action">
                                            <button class="dropdown-toggle theme-btn btn-style-three" role="button" data-toggle="dropdown" aria-expanded="false">Action <i class="fa fa-angle-down"></i></button>

                                            <ul class="dropdown-menu">
                                                <li><button data-text="View Aplication"><span class="la la-eye"></span> View Aplication</button></li>
                                                <li><button data-text="Approve Aplication"><span class="la la-check"></span> Approve Aplication</button></li>
                                                <li><button data-text="Reject Aplication"><span class="la la-times-circle"></span> Reject Aplication</button></li>
                                            </ul>
                                        </div>

                                        <button class="delete-btn" data-text="Delete Aplication"><span class="la la-trash"></span></button>
                                    </div>
                                </div>
                            </div>


                            <!-- Pagination -->
                            <nav class="ls-pagination mb-5">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="current-page">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard -->
@endsection

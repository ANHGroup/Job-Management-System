@extends('layouts.master')

@section('bodySection')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-grid">
                        <div class="row">
                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt="" /></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><a href="#">August 31, 2021</a></li>
                                            <li><a href="#">12 Comment</a></li>
                                        </ul>
                                        <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" /></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><a href="#">August 31, 2021</a></li>
                                            <li><a href="#">12 Comment</a></li>
                                        </ul>
                                        <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt="" /></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><a href="#">August 31, 2021</a></li>
                                            <li><a href="#">12 Comment</a></li>
                                        </ul>
                                        <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/news-4.jpg') }}" alt="" /></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><a href="#">August 31, 2021</a></li>
                                            <li><a href="#">12 Comment</a></li>
                                        </ul>
                                        <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/news-5.jpg') }}" alt="" /></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><a href="#">August 31, 2021</a></li>
                                            <li><a href="#">12 Comment</a></li>
                                        </ul>
                                        <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/resource/news-6.jpg') }}" alt="" /></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><a href="#">August 31, 2021</a></li>
                                            <li><a href="#">12 Comment</a></li>
                                        </ul>
                                        <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                                        <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                                        <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination -->
                        <nav class="ls-pagination">
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

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar blog-sidebar">

                        <!-- Recent Post -->
                        <div class="sidebar-widget search-widget">
                            <div class="sidebar-title"><h4>Search by Keywords</h4></div>

                            <!--search box-->
                            <div class="search-box">
                                <form method="post" action="https://creativelayers.net/themes/superio/blog.html">
                                    <div class="form-group">
                                        <span class="icon flaticon-search-1"></span>
                                        <input type="search" name="search-field" value="" placeholder="keywords" required="">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Shop Widget -->
                        <div class="sidebar-widget catagory-widget">
                            <div class="sidebar-title"><h4>Categories</h4></div>
                            <ul class="catagory-list">
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Interview</a></li>
                                <li><a href="#">Job Seeking</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Learn</a></li>
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                        </div>

                        <!-- Recent Post -->
                        <div class="sidebar-widget recent-post">
                            <div class="sidebar-title"><h4>Recent Posts</h4></div>

                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="{{ asset('assets/images/resource/post-thumb-1.png') }}" alt=""></a></div>
                                    <h6><a href="blog-single.html">Attract Sales And Profits</a></h6>
                                    <div class="post-info">August 9, 2021</div>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="{{ asset('assets/images/resource/post-thumb-2.png') }}" alt=""></a></div>
                                    <h6><a href="blog-single.html">5 Tips For Your Job Interviews</a></h6>
                                    <div class="post-info">August 9, 2021</div>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="{{ asset('assets/images/resource/post-thumb-3.png') }}" alt=""></a></div>
                                    <h6><a href="blog-single.html">The Best Account Providers</a></h6>
                                    <div class="post-info">August 9, 2021</div>
                                </article>
                            </div>
                        </div>

                        <!-- Shop Widget -->
                        <div class="sidebar-widget">
                            <div class="sidebar-title"><h4>Tags</h4></div>
                            <ul class="tag-list">
                                <li><a href="#">app</a></li>
                                <li><a href="#">administrative</a></li>
                                <li><a href="#">android</a></li>
                                <li><a href="#">wordpress</a></li>
                                <li><a href="#">design</a></li>
                                <li><a href="#">react</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
@endsection

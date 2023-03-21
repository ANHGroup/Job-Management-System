@extends('layouts.back_master')
@section('backBodySection')
    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Messages</h3>
                <div class="text">Ready to jump back in?</div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Chat Widget -->
                    <div class="chat-widget">
                        <div class="widget-content">
                            <div class="row">
                                <div class="contacts_column col-xl-4 col-lg-5 col-md-12 col-sm-12 chat" id="chat_contacts">
                                    <div class="card contacts_card">
                                        <div class="card-header">
                                            <div class="search-box-one">
                                                <form method="post" action="#">
                                                    <div class="form-group">
                                                        <span class="icon flaticon-search-1"></span>
                                                        <input type="search" name="search-field" value="" placeholder="Search" required="">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-body contacts_body">
                                            <ul class="contacts">
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-1.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Darlene Robertson</span>
                                                                <p> Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-2.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Jane Cooper</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins <span class="count">2</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-3.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Arlene McCoy</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins <span class="count bg-success">2</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-4.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Albert Flores</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-5.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Williamson</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins <span class="count bg-warning">2</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-6.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Kristin Watson</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-7.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Annette Black</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <img src="{{ asset('assets/images/resource/candidate-8.png') }}" class="rounded-circle user_img" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <span>Jacob Jones</span>
                                                                <p>Head of Development</p>
                                                            </div>
                                                            <span class="info">35 mins</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-8 col-lg-7 col-md-12 col-sm-12 chat">
                                    <div class="card message-card">
                                        <div class="card-header msg_head">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="{{ asset('assets/images/resource/candidate-8.png') }}" alt="" class="rounded-circle user_img">
                                                </div>
                                                <div class="user_info">
                                                    <span>Arlene McCoy</span>
                                                    <p>Active</p>
                                                </div>
                                            </div>

                                            <div class="btn-box">
                                                <button class="dlt-chat">Delete Conversation</button>
                                                <button class="toggle-contact"><span class="fa fa-bars"></span></button>
                                            </div>
                                        </div>

                                        <div class="card-body msg_card_body">
                                            <div class="d-flex justify-content-start mb-2">
                                                <div class="img_cont_msg">
                                                    <img src="{{ asset('assets/images/resource/candidate-3.png') }}" alt="" class="rounded-circle user_img_msg">
                                                    <div class="name">Albert Flores <span class="msg_time">35 mins</span></div>
                                                </div>
                                                <div class="msg_cotainer">
                                                     How likely are you to recommend our company to your friends and family?
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mb-2 reply">
                                                <div class="img_cont_msg">
                                                    <img src="{{ asset('assets/images/resource/candidate-6.png') }}" alt="" class="rounded-circle user_img_msg">
                                                    <div class="name">You <span class="msg_time">35 mins</span></div>
                                                </div>
                                                <div class="msg_cotainer">
                                                     Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-start">
                                                <div class="img_cont_msg">
                                                    <img src="{{ asset('assets/images/resource/candidate-3.png') }}" alt="" class="rounded-circle user_img_msg">
                                                    <div class="name">Cameron Williamson <span class="msg_time">35 mins</span></div>
                                                </div>
                                                <div class="msg_cotainer">
                                                     Ok, Understood!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="form-group mb-0">
                                                <textarea class="form-control type_msg" placeholder="Type a message..."></textarea>
                                                <button type="button" class="theme-btn btn-style-one submit-btn">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
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

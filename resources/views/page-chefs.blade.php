@extends('layouts.header')

@section('content')

    <!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/6.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Ready To Serve</div>
                        <div class="title--heading">
                            <h1>Our Talented Team</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li><a href="{{'/'}}">about</a></li>
                        <li class="active">Our Team Members</li>
                    </ol>
                    <div class="divider--shape-1down"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Team #1
============================================= -->
    <section id="team1" class="team team-2">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Ready to serve</p>
                        <h2 class="heading--title mb-0">Our Team</h2>
                        <div class="divider--shape-4"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Member #1 -->
                @foreach($team as $member)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{$member->image}}" alt="member">
                                <div class="member-overlay">
                                    <div class="member-hover">
                                        <div class="pos-vertical-center">
                                            <div class="member-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>
                                            <!-- .memebr-social end -->
                                        </div>
                                        <!-- .pos-vertical-center end -->
                                    </div>
                                    <!-- .memebr-hover end -->
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>{{$member->name}}</h5>
                                <h6>{{$member->role}}</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>@endforeach

            </div>
        </div>
    </section>
<!-- #team1 end  -->

<!-- Testimonial #5
============================================= -->
<section id="testimonial5" class="testimonial testimonial-5 bg-overlay bg-parallax bg-overlay-dark text-center">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/2.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div id="testimonial-wide" class="carousel carousel-white" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-panel">
                            <div class="testimonial--quote">
                                <img src="{{asset('assets/images/menu/menu-board/chef-hat.png')}}" alt="hat">
                            </div>
                            <div class="testimonial--body">
                                <p class="color-white">{{str_limit($testimonial->description, 50)}}</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--author">
                                    <h4>{{$testimonial->name}}</h4>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                @endforeach

                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- .testimonial5 end -->

<!-- Skills #2
============================================= -->
<section id="skills1" class="skills skills-2 bg-white">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Top skills</p>
                    <h2 class="heading--title">Creative Chefs</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Chicken Village is one of the restaurants which provide quality food in Harare, it was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.</p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <!-- progress 1 -->
                <div class="progressbar">
                    <div class="progress-title">
                        <span class="title">Thai Food</span>
                        <span class="value">95%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- .progressbar end -->

                <!-- progress 3 -->
                <div class="progressbar">
                    <div class="progress-title">
                        <span class="title">Arabic Food</span>
                        <span class="value">80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- .progressbar end -->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <!-- progress 2 -->
                <div class="progressbar">
                    <div class="progress-title">
                        <span class="title">Chinese Food</span>
                        <span class="value">90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- .progressbar end -->

                <!-- progress 4 -->
                <div class="progressbar">
                    <div class="progress-title">
                        <span class="title">Fast Food</span>
                        <span class="value">75%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- .progressbar end -->
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #skills2 end -->
<!-- footer#1
============================================= -->
@endsection
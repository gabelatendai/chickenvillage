
@extends('layouts.header')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text-center">
                        <div class="title--content">
                            <div class="title--subtitle">Testimonials</div>
                            <div class="title--heading">
                                <h1>Happy Customers</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{'/'}}">Home</a></li>
                            <li><a href="{{'/'}}">about</a></li>
                            <li class="active">Testimonials</li>
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

    <!-- banner#5
    ============================================= -->
    <section id="banner5" class="banner banner-2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="heading heading-1 text--center">
                        <p class="heading--subtitle">Hello dear</p>
                        @foreach($abouts as $about)
                        <h2 class="heading--title">Welcome To {{$about->name}}</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">{{$about->description}}</p>
                    </div>
                    @endforeach
                    <!-- .heading end -->
                    <a class="btn btn--secondary btn--bordered btn--rounded mt-30" href="#">Book A Table</a>
                </div>
                <!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    @foreach($dishes as $dish)
                        <div class="banner-img mt-20">



                            <img src="{{$dish->image}}" alt="image">

                        </div>
                    @endforeach
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #banner5 end -->

    <!-- Testimonial #4
    ============================================= -->
    <section id="testimonial4" class="testimonial testimonial-4 bg-overlay bg-parallax bg-overlay-dark text-center">
        <div class="bg-section">
            <img src="{{asset('assets/images/background/1.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="divider--shape-1up"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div id="testimonial-wide" class="carousel carousel-dots carousel-white" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                    @foreach($testimonials as $testimonial)
                        <!-- Testimonial #1 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <!-- .testimonial-rating end -->
                            <div class="testimonial--body">
                                <p class="color-white">{{$testimonial->description}}</p>   </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--img">
                                    <img src="{{$testimonial->image}}" alt="Testimonial Author">
                                </div>
                                <div class="testimonial--author">
                                    <h4>{{$testimonial->name}}</h4>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->
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
  <br> <br> <br>


@endsection



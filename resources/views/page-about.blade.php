@extends('layouts.header')

@section('content')


    <!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/2.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Our Story</div>
                        <div class="title--heading">
                            <h1>We Are Chicken Village!</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li class="active">Our Story</li>
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

<!-- banner#7
============================================= -->
<section id="banner7" class="banner banner-1 text-center pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 text--center mb-50">
                    @foreach($abouts as $about)
                    <p class="heading--subtitle">Hello dear</p>
                    <h2 class="heading--title">We Are  {{$about->name}}Chicken Village!</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc"> {{$about->about}}</p>
                        <p class="heading--desc"> {{$about->description}}</p>

                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <div class="row">
            @foreach($images as $banner)
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="banner-panel">
                    <div class="banner--img">

                        <img src="{{$banner->image}}" alt="banner img" class="img-responsive">
                    </div>
                </div>
                <!-- .banner-panel end -->
            </div>
            @endforeach
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <div class="mt-20">
                    Master Chef
                </div>
                <div class="signiture--img mt-10">
                    <img src="{{asset('assets/images/menu/menu-board/Signiture.png')}}" alt="Signiture img">
                </div>
            </div>
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #banner7 end -->

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
                    <!-- Testimonial #1 --> @foreach($testimonials as $testimonial)
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

<!-- Banner#6
============================================= -->
<section id="banner6" class="banner banner-6 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <h3 class="panel--heading">Since our grand opening , Chicken Village has won great awards from food critics and organizations all over the world.</h3>

            </div>
            <!-- .col-md-10 end -->
        </div>
        <!-- .row end -->

        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #banner6 end -->

<!-- Testimonial #1
============================================= -->
<section id="testimonial1" class="testimonial testimonial-1 bg-overlay bg-parallax bg-overlay-dark">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/1.jpg')}}" alt="Background" />
    </div>

    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Testimonials</p>
                    <h2 class="heading--title color-white">Happy Customers</h2>
                    <div class="divider--shape-13"></div>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-container">

                            <div class="testimonial-panel">
                                <div class="testimonial-bordered">
                                    <div class="testimonial--rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- .testimonial-rating end -->
                                    <div class="testimonial--body">
                                        <p>“{{str_limit($testimonial->description,100)}} </p>    </div>
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
                            </div>
                            <!-- .testimonial-panel end -->
                            <div class="divider--shape-1up"></div>
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
<!-- #testimonial1 end -->

<!-- Blog Carousel
============================================= -->
    <section id="blog" class="blog blog-carousel pb-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Don’t miss</p>
                        <h2 class="heading--title mb-0">Our News & Events</h2>
                        <div class="divider--shape-4"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">


                    @foreach($news as $new)   <!-- Blog Entry #1 -->
                        <div class="blog-entry">

                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date">{{$new->created_at->toFormattedDateString()}}</span> / <span> <a href="#">{{$new->category}}</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="{{route('page-news',['slug'=>$new->slug])}}">{{$new->title}}</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="{{$new->image}}" alt="entry image"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    {{str_limit( $new->msg, 20)}}........ </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->
                        @endforeach

                    </div>
                    <!-- .carousel end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
<!-- #blog end -->


</div>
<!-- #wrapper end -->
    @endforeach
@endsection
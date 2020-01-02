@extends('layouts.header')

@section('content')
<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{ asset('assets/images/menu/menu-board/7.jpg') }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Don't miss</div>
                        <div class="title--heading">
                            <h1>Our News & Events</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a>
                        </li>
                        <li><a href="">blog</a>
                        </li>
                        <li class="active">blog carousel</li>
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

<div class="clearfix pt-150 bg-gray"></div>

<!-- Blog Carousel
============================================= -->
<section id="blog2" class="blog blog-carousel pb-100">
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
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">

@foreach($news as $new)
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">{{$new->created_at}}</span> / <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
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
                                {{str_limit($new->msg, 40)}}     </div>
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

<div class="clearfix pt-150 bg-gray"></div>

<!-- Blog Carousel
============================================= -->
<section id="blog" class="blog blog-carousel pb-100">
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
                <div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                    <!-- Blog Entry #1 -->
                    @foreach($nes as $ne)
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">{{$ne->created_at}}</span> / <span><a href="#">Fall</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">{{$ne->title}}</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="{{$ne->image}}" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                {{str_limit($new->msg, 100)}}  </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    @endforeach
                    <!-- .blog-entry end -->
                    <!-- .blog-entry end -->
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

<div class="clearfix pt-150 bg-gray"></div>
<!-- footer#1
============================================= -->@endsection
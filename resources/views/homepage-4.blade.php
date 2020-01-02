
@extends('layouts.header')

@section('content')

    @include('recent-post')

    <!-- banner#7
    ============================================= -->
    <section id="banner7" class="banner banner-1 text-center pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 text--center mb-50">
                        <p class="heading--subtitle">Hello dear</p>
                        <h2 class="heading--title">We Are Chicken Village!</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">Chicken Village has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.</p>
                    </div>
                    <!-- .heading end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <div class="row">
                @foreach($dishes as $dishy)
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="banner-panel">
                        <div class="banner--img">
                            <img src="{{$dishy->image}}" alt="banner img" class="img-responsive">
                        </div>
                    </div>
                    <!-- .banner-panel end -->
                </div>
                @endforeach
                <!-- .col-md-4 end -->
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

    <!-- Testimonial #4
    ============================================= -->
    <section id="testimonial4" class="testimonial testimonial-4 bg-overlay bg-parallax bg-overlay-dark text-center">
        <div class="bg-section">
            <img src="{{asset('assets/images/menu/menu-board/1.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="divider--shape-1up"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div id="testimonial-wide" class="carousel carousel-dots carousel-white" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
                        @foreach($testimonials as $testimonial)
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
                                    <p class="color-white">{{str_limit($testimonial->description,40)}}.</p>
                                </div>
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
    <!-- .testimonial4 end -->

    <!-- Menu #classic
    ============================================= -->
    <section id="menu1" class="menu menu-classic pb-90">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Fresh, Tasty Meals</p>
                        <h2 class="heading--title mb-0">Discover Our Menu</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">Good food is a global thing, there is always something new and amazing to learn about it. You will enjoy delicious meals, awesome desserts and a great coffee here.</p>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                @foreach($meals as $meal)
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- Dish #1 -->

                    <div class="dish-panel">
                        <h3 class="dish--title">{{$meal->food_name}}</h3>
                        <div class="dish--price">${{$meal->price}}</div>
                        <p class="dish--desc">{{str_limit($meal->description, 30)}}</p>
                    </div>


                <!-- .col-md-4 end -->

            <!-- .row end -->
        </div>
            @endforeach
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #menu1 end -->

    <!-- Portfolio 5 Column
    ============================================= -->
    <section id="portfolio" class="portfolio portfolio-gallery portfolio-5col pt-0 pb-0 bg-white">
        <div class="container-fluid pr-0 pl-0">
            <div class="row-no-padding">
                <!-- Portfolio #1 -->
                @foreach($dish as $dishy)
                <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item filter-chefs filter-people">
                    <div class="portfolio--img">
                        <img src="{{$dishy->image}}" alt="Dish Image">
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="{{$dishy->image}}" title="Dish Image"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                @endforeach
                <!-- . portfolio-item end -->

            </div>
            <!-- .row end -->
            <!-- .row end -->
        </div>
        <!-- .container-fluid end -->
    </section>
    <!-- #portfolio end -->

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
@endsection



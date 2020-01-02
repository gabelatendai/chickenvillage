
@extends('layouts.header')

@section('content')

    @include('recent-post')

    <!-- Menu Grid
    ============================================= -->
    <section id="menuGrid">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Hello Dear</p>
                        <h2 class="heading--title mb-0">We Are Chicken Village!</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">Chicken Village has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.</p>
                    </div>
                    <div class="signiture-img mb-100 mb-x50">
                        <img class="center-block" src="assets/images/menu/menu-board/signiture.png" alt="signiture">
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
        <div class="container-fluid pr-0 pl-0 tabs">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <!-- Menu #6
    ============================================= -->
                    <div  class="menu menu-grid text-center">
                        <div class="dishes-bg">
                            <div class="bg-section">
                                <img src="assets/images/menu/menu-board/9.jpg" alt="bg">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="dishes-wrapper">
                                        <div class="row">
                                            <!-- Dish #1 -->
                                            @foreach($meals as $breakf)
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <div class="row dish-panel">
                                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                                            <div class=" dish--content">
                                                                <span class="dish--price">${{$breakf->price}}</span>
                                                                <h3 class="dish--title">{{$breakf->food_name}}</h3>
                                                                <div class="divider--shape-4"></div>
                                                                <p class="dish--desc">{{$breakf->description}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-6 ">
                                                            <div class="dish--img">
                                                                <div class="divider--shape-left"></div>
                                                                <img src="{{$breakf->image}}" alt="dish img">
                                                                <div class="dish--overlay">
                                                                    <a class="dish-popup" data-toggle="modal" data-target="#dishPopup9"><i class="fa fa-search-plus"></i></a>
                                                                    <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup9">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                    <div class="row reservation">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                            <div class="popup--img">
                                                                                                <img src="{{$breakf->image}}" alt="dish popup">
                                                                                                <div class="img-popup-overlay">
                                                                                                    <div class="popup--price">${{$breakf->price}}</div>
                                                                                                    <h3 class="popup--title">{{$breakf->food_name}}</h3>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- .col-md-12 end -->
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                            <div class="content-popup">
                                                                                                <p> {{$breakf->description}}</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .row end -->

                                                                                </div>
                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>
                                                                    <!-- /.modal -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            <!-- .col-md-3 end -->
                                            @endforeach
                                            <!-- .col-md-3 end -->
                                        </div>
                                        <!-- .dishes-wrapper end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .container end -->
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #menuGrid end -->

    <!-- Testimonial #3
    ============================================= -->
    <section id="testimonial3" class="testimonial testimonial-3 text-center pb-90  pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div id="testimonial-wide" class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
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
                                <p>{{str_limit($testimonial->description, 50)}}</p>
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
        </div>
        <!-- .container end -->
    </section>
    <!-- #testimonial3 end -->

    <!-- Reservation #1
    ============================================= -->
    <section id="reservation1" class="reservation reservation-1 bg-overlay bg-parallax bg-overlay-dark pb-70">
        <div class="bg-section">
            <img src="{{asset('assets/images/menu/menu-board/7.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="divider--shape-1up"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div class="reservation-form mb-30 text-center">
                        <div class="reservation-bordered">
                            <div class="heading heading-1 text-center">
                                <p class="heading--subtitle">Book a table</p>
                                <h2 class="heading--title">Make A Reservation</h2>
                                <div class="divider--shape-4"></div>
                            </div>
                            <div class="reservation--dec">
                                You can Book a table online easily in just a couple of minutes. We take reservations for lunch and dinner, just check the availability of your table & book it now!
                            </div>
                            <form method="post" action="assets/php/reservation.php" class="reservationForm mb-0">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-select">
                                            <i class="fa fa-angle-down"></i>
                                            <select class="form-control" name="people" id="num">
                                                <option value="">Number of people</option>
                                                <option value="2">2 People</option>
                                                <option value="3">3 People</option>
                                                <option value="4">4 People</option>
                                                <option value="5">5 People</option>
                                                <option value="6">6 People</option>
                                                <option value="8">8 People</option>
                                                <option value="10">10 People</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-select">
                                            <i class="fa fa-angle-down"></i>
                                            <select class="form-control" name="day" id="day">
                                                <option value="">Date</option>
                                                <option value="november 23">November 23, 2018</option>
                                                <option value="november 24">November 24, 2018</option>
                                                <option value="november 25">November 25, 2018</option>
                                                <option value="november 26">November 26, 2018</option>
                                                <option value="november 27">November 27, 2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-select">
                                            <i class="fa fa-angle-down"></i>
                                            <select class="form-control" name="time" id="time">
                                                <option value="">Time</option>
                                                <option value="8:00">8:00 PM</option>
                                                <option value="9:00">9:00 PM</option>
                                                <option value="10:00">10:00 PM</option>
                                                <option value="11:00">11:00 PM</option>
                                                <option value="12:00">12:00 AM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" id="submit-message" class="btn btn--secondary btn--block">Find Table</button>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <!--Alert Message-->
                                        <div class="reservation-result"></div>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </form>
                            <!-- form end -->
                        </div>
                    </div>
                    <!-- .contact-form end -->
                </div>
                <!-- .col-md-8 end -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="text-uppercase text-center">
                        <strong><span class="text-white">Reservation Powered by</span> <a href="#">Opentable</a></strong>
                    </div>
                </div>
            </div>
            <!-- .row end -->
            <div class="divider--shape-1down"></div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #reservation1 end -->

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
                    <div class="carousel" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">

                    @foreach($news as $new)   <!-- Blog Entry #1 -->
                        <div class="blog-entry">

                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date">{{$new->created_at->diffForHumans()}}</span> / <span> <a href="#">{{$new->category}}</a></span>
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
@endsection



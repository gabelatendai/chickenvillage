
@extends('layouts.header')

@section('content')

    @include('recent-post')

    <!-- Banner#6
    ============================================= -->
    <section id="banner6" class="banner banner-1 text-center pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 text--center mb-50">
                        <p class="heading--subtitle">Hello dear</p>
                        <h2 class="heading--title">Welcome To Chicken Village</h2>
                        <div class="divider--shape-4"></div>  @foreach($abouts as $about)
                        <p class="heading--desc">{{$about->description}}</p>
                    </div>@endforeach
                    <!-- .heading end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                @foreach($news as $new)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="banner-panel">
                        <div class="banner--img">
                            <img src="{{$new->image}}" alt="banner img" class="img-responsive">
                        </div>
                        <div class="banner--content">
                            <h4>{{$new->category}}</h4>
                            <a href="{{route('page-news',['slug'=>$new->slug])}}"> <p>{{str_limit($new->msg, 20)}}</p></a>
                        </div>
                    </div>
                    <!-- .banner-panel end -->
                </div>
                @endforeach
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #banner6 end -->

    <!-- Testimonial #5
    ============================================= -->
    <section id="testimonial5" class="testimonial testimonial-5 bg-overlay bg-parallax bg-overlay-dark text-center">
        <div class="bg-section">
            <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
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

    <!-- Menu Mixed Grid
    ============================================= -->
    <section id="menuBoard" class="pb-90">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Taste life</p>
                        <h2 class="heading--title mb-0">Daily New Fresh Meals</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">Chicken Village has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.</p>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
        <div class="container-fluid tabs">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                        <li class="active"><a href="#lunch" data-toggle="tab">Lunch</a></li>
                        <li><a href="#dinner" data-toggle="tab">Dinner</a></li>
                        <li><a href="#dessert" data-toggle="tab">Dessert</a></li>
                        <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade" id="breakfast">
                            <!-- Menu #7
    ============================================= -->
                            <div class="menu menu-board text-center">
                                <div class="row">
                                    <div class="dishes-wrapper">
                                        @foreach($breakfast as $breakf)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="row dish-panel">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class=" dish--content">
                                                            <div class="dish--tag">Chef Selection</div>
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
                                        @endforeach
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .row end -->
                            </div>
                        </div>
                        <!-- .tab-pane end -->
                        <div class="tab-pane fade in active" id="lunch">
                            <!-- Menu #7
    ============================================= -->
                            <div class="menu menu-board text-center">
                                <div class="row">
                                    <div class="dishes-wrapper">
                                        @foreach($lunch as $lunchy)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="row dish-panel">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class=" dish--content">
                                                            <div class="dish--tag">Chef Selection</div>
                                                            <span class="dish--price">${{$lunchy->price}}</span>
                                                            <h3 class="dish--title">{{$lunchy->food_name}}</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">{{$lunchy->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="{{$lunchy->image}}" alt="dish img">
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
                                                                                            <img src="{{$lunchy->image}}" alt="dish popup">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">${{$lunchy->price}}</div>
                                                                                                <h3 class="popup--title">{{$lunchy->food_name}}</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p> {{$lunchy->description}}</p>
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
                                        @endforeach
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .row end -->
                            </div>
                        </div>
                        <!-- .tab-pane end -->
                        <div class="tab-pane fade" id="dinner">
                            <!-- Menu #7
    ============================================= -->

                            <div class="menu menu-board text-center">

                                <div class="row">

                                    <div class="dishes-wrapper">
                                        <!-- Dish #1 --> @foreach($supper as $dinner)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="row dish-panel">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class=" dish--content">
                                                            <div class="dish--tag">Chef Selection</div>
                                                            <span class="dish--price">${{$dinner->price}}</span>
                                                            <h3 class="dish--title">{{$dinner->food_name}}</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">{{$dinner->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="{{$dinner->image}}" alt="dish img">
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
                                                                                            <img src="{{$dinner->image}}" alt="dish popup">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">${{$dinner->price}}</div>
                                                                                                <h3 class="popup--title">{{$dinner->food_name}}</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p> {{$dinner->description}}</p>
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
                                        @endforeach
                                    </div>
                                    <!-- .row end -->
                                </div>

                                <!-- .row end -->
                            </div>

                        </div>
                        <!-- .tab-pane end -->
                        <div class="tab-pane fade" id="dessert">
                            <!-- Menu #7
    ============================================= -->
                            <div class="menu menu-board text-center">
                                <div class="row">
                                    <div class="dishes-wrapper">
                                        <!-- Dish #1 -->
                                        <!-- Dish #1 --> @foreach($desert as $deserty)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="row dish-panel">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class=" dish--content">
                                                            <div class="dish--tag">Chef Selection</div>
                                                            <span class="dish--price">${{$deserty->price}}</span>
                                                            <h3 class="dish--title">{{$deserty->food_name}}</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">{{$deserty->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="{{$deserty->image}}" alt="dish img">
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
                                                                                            <img src="{{$deserty->image}}" alt="dish popup">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">${{$deserty->price}}</div>
                                                                                                <h3 class="popup--title">{{$deserty->food_name}}</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p> {{$deserty->description}}</p>
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
                                        @endforeach
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .row end -->
                            </div>
                        </div>
                        <!-- .tab-pane end -->
                        <div class="tab-pane fade" id="drinks">
                            <!-- Menu #7
    ============================================= -->
                            <div class="menu menu-board text-center">
                                <div class="row">
                                    <div class="dishes-wrapper">
                                        <!-- Dish #1 --> @foreach($drinks as $drink)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="row dish-panel">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class=" dish--content">
                                                            <div class="dish--tag">Chef Selection</div>
                                                            <span class="dish--price">${{$drink->price}}</span>
                                                            <h3 class="dish--title">{{$drink->food_name}}</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">{{$drink->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="{{$drink->image}}" alt="dish img">
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
                                                                                            <img src="{{$drink->image}}" alt="dish popup">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">${{$drink->price}}</div>
                                                                                                <h3 class="popup--title">{{$drink->food_name}}</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p> {{$drink->description}}</p>
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
                                        @endforeach
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .row end -->
                            </div>
                        </div>
                        <!-- .tab-pane end -->
                    </div>
                    <!-- .tabs-content end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text--center">
                    <a class="btn btn--primary btn--bordered btn--rounded btn--lg mt-50" href="#">Discover Full Menu</a>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #menuMixedGrid end -->
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

    <!-- Reservation #2
    ============================================= -->
    <section id="reservation2" class="reservation reservation-2 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="reservation-form p-0 text-center">
                        <div class="heading heading-1 text-center">
                            <p class="heading--subtitle">Reservation</p>
                            <h2 class="heading--title">Book Your Table</h2>
                            <div class="divider--shape-4"></div>
                        </div>
                        <div class="reservation--dec">
                            You can Book a table online easily in just a couple of minutes. We take reservations for lunch and dinner, just check the availability of your table & book it now!
                        </div>
                        <form method="post" action="assets/php/reservation.php" class="reservationForm mb-30">
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
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="text-uppercase text-center">
                                <strong><span>Reservation Powered by</span> <a class="reservation-link" href="#">Opentable</a></strong>
                            </div>
                        </div>
                    </div>
                    <!-- .contact-form end -->
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
@endsection



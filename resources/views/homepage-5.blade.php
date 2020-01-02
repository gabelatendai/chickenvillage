
@extends('layouts.header')

@section('content')

    @include('recent-post')
    <!-- banner#1
============================================= -->
    <section id="banner1" class="banner banner-2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 text--center">
                        @foreach($abouts as $about)
                        <p class="heading--subtitle">Hello dear</p>
                        <h2 class="heading--title">Welcome To {{$about->name}}</h2>
                        <div class="divider--shape-4"></div>
                        <p class="heading--desc">{{$about->about}}</p>
                        <div class="signiture--img mt-30">
                            <img src="{{asset('assets/images/menu/menu-board/Signiture.png')}}" alt="Signiture img">
                        </div>
                    </div>
                    @endforeach
                    <!-- .heading end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #banner1 end -->

    <!-- Divider #1
    ============================================= -->
    <section id="divider1" class="section-divider3 bg-overlay bg-parallax bg-overlay-dark4">
        <div class="bg-section">
            <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
        </div>
        <div class="container">
            <div class="divider--shape-1up"></div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-3 text--center">
                        <p class="heading--subtitle">Fresh, Tasty Meals</p>
                        <h2 class="heading--title mb-0 text-white">Discover Our Menu</h2>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="divider--shape-1down"></div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #divider1 end -->

    <!-- Menu Simple
    ============================================= -->

    <section id="menuBoard" class="pb-90">
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
    <!-- #menuSimple end -->

    <!-- Testimonial #1
    ============================================= -->
    <section id="testimonial1" class="testimonial testimonial-1 bg-overlay bg-parallax bg-overlay-dark">
        <div class="bg-section">
            <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
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
                                            <p>“ {{str_limit($testimonial->description,100)}} ”</p>
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

    <!-- Team #1
    ============================================= -->

    <!-- #team1 end  -->

    <!-- Portfolio 5 Column
    ============================================= -->

@endsection



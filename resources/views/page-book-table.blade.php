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
                        <div class="title--subtitle">Reservation</div>
                        <div class="title--heading">
                            <h1>Book Your Table</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li class="active">Book A Table</li>
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

<!-- Reservation #1
============================================= -->
<section id="reservation1" class="reservation bg-white pb-80 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="reservation-form mt-10 mb-10 text-center">
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
                                <button type="submit" id="submit-reservation" class="btn btn--secondary btn--block">Find Table</button>
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
                            <strong><span>Reservation Powered by</span> <a href="#">Opentable</a></strong>
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
<!-- #reservation1 end -->

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

<!-- Banner#6
============================================= -->
<section id="banner6" class="banner banner-1 text-center pb-90">
    <div class="container">
        <div class="row">
            @foreach($news as $new)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="banner-panel">
                    <div class="banner--img">
                        <img src="{{$new->image}}" alt="banner img" class="img-responsive">
                    </div>
                    <div class="banner--content">
                        <a href="{{route('page-news',['slug'=>$new->slug])}}">  <h4>{{$new->title}}</h4></a>
                        <p>{{str_limit($new->msg, 20)}}</p>
                    </div>
                </div>
                <!-- .banner-panel end -->
            </div>
            @endforeach

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #banner6 end -->

<!-- footer#1
============================================= -->@endsection
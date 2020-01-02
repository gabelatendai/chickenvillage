@extends('layouts.header')

@section('content')

    <!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/5.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">You ask, we answer</div>
                        <div class="title--heading">
                            <h1>Frequently Asked Questions</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li class="active">FAQs</li>
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

<!-- Accordion #1
============================================= -->
<section id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="accordion accordion-1" id="accordion01">
                    <!-- Panel 01 -->
                    @foreach($faqs as $faq)
                    <div class="panel">
                        <div class="panel--heading">

                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">
                              {{$faq->faq}}</a>

                        </div>

                        <div id="collapse01-1" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.      </div>

                    </div>
                @endforeach

                    <!-- Panel 02 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">
                                When did Chicken Village restaurant established?</a>
                        </div>
                        <div id="collapse01-2" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>

                    <!-- Panel 03 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3">
                                How many tables in the resturant?</a>
                        </div>
                        <div id="collapse01-3" class="panel--body panel-collapse collapse in">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining
                            room, combined with an open
                            kitchen, coffee take out bar and on site coffee roastery.

                        </div>
                    </div>

                    <!-- Panel 04 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-4">
                                How many chefs and workers on Chicken Village restaurant?</a>
                        </div>
                        <div id="collapse01-4" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have
                            created a soft industrial dining room, combined with an
                            open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>

                    <!-- Panel 05 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-5">
                                Can i have a reservation on Chicken Village?</a>
                        </div>
                        <div id="collapse01-5" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have
                            created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>

                    <!-- Panel 06 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion06" href="#collapse01-6">
                                Who is the owner of Chicken Village restaurant?</a>
                        </div>
                        <div id="collapse01-6" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>

                    <!-- Panel 07 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-7">
                                When did Chicken Village restaurant established?</a>
                        </div>
                        <div id="collapse01-7" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>

                    <!-- Panel 08 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-8">
                                How many chefs and workers on Chicken Village restaurant?</a>
                        </div>
                        <div id="collapse01-8" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>

                    <!-- Panel 09 -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-9">
                                Can i have a reservation on Chicken Village?</a>
                        </div>
                        <div id="collapse01-9" class="panel--body panel-collapse collapse">
                            Chicken Village is one of the restaurants which provide quality food in Harare,
                            it was designed with the history in mind we have created a soft industrial dining room,
                            combined with an open kitchen, coffee take out bar and on site coffee roastery.
                        </div>
                    </div>
                </div>
                <!-- End .Accordion-->
            </div>

            <!-- .col-md-9 end -->
            <div class="col-xs-12 col-sm-12 col-md-3">
                <!-- Search
============================================= -->
<div class="widget widget-search">
    <div class="widget--content">
        <form class="form-search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type Your Search Words">
                <span class="input-group-btn">
					<button class="btn" type="button"><i class="fa fa-search"></i></button>
				</span>
            </div>
            <!-- /input-group -->
        </form>
    </div>
</div>
<!-- .widget-search end -->


<!-- Info
============================================= -->
<div class="widget widget-info">
    <div class="divider--shape-10up"></div>
    <div class="widget--content">

        <div class="info--title">
            Need Help!
        </div>
        <div class="info--content">
            If you have any questions or have any thing to say to us don’t hesitate to write to us, we are here to help!
        </div>
        <a class="btn btn--primary btn--inverse btn--rounded" href="#">Contact US</a>
    </div>
    <div class="divider--shape-10down"></div>
</div>
<!-- .widget-info end -->
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<!-- footer#1
============================================= -->@endsection
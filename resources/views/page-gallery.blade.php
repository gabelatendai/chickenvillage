@extends('layouts.header')

@section('content')

    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/15.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Our Passion</div>
                        <div class="title--heading">
                            <h1>Our Gallery</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li><a href="{{'/'}}">about</a></li>
                        <li class="active">Gallery</li>
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

<!-- Portfolio 5 Column
============================================= -->
<section id="portfolio" class="portfolio portfolio-gallery portfolio-5col pt-80 bg-white">
    <div class="container-fluid pr-0 pl-0">
        <div class="row">
            <!-- Portfolio Filter
			============================================= -->
            <div class="col-xs-12 col-sm-12 col-md-12 portfolio-filter">
                <ul class="list-inline mb-0">
                    <li><a class="active-filter" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".filter-people">People</a></li>
                    <li><a href="#" data-filter=".filter-restaurant">Restaurant</a></li>
                    <li><a href="#" data-filter=".filter-chefs">Chefs</a></li>
                </ul>
            </div>
            <!-- .Portfolio-filter end -->
        </div>
        <div id="portfolio-all" class="row-no-padding">
            <!-- Portfolio #1 -->
            @foreach($people as $ppl)
            <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item  filter-people">
                <div class="portfolio--img">
                    <img src="{{$ppl->image}}" alt="Dish Image">
                    <div class="portfolio--hover">
                        <div class="portfolio--action">
                            <div class="pos-vertical-center">
                                <div class="portfolio--zoom">
                                    <a class="img-gallery-item" href="{{$ppl->image}}" title="Dish Image"></a>
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
            @foreach($chefs as $chef)
                <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item filter-chefs ">
                    <div class="portfolio--img">
                        <img src="{{$chef->image}}" alt="Dish Image">
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="{{$chef->image}}" title="Dish Image"></a>
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
            @foreach($restaurant as $resta)
                <div class="col-xs-12 col-sm-6 col-md-3 portfolio-item  filter-restaurant">
                    <div class="portfolio--img">
                        <img src="{{$resta->image}}" alt="Dish Image">
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="{{$resta->image}}" title="Dish Image"></a>
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
            
        </div>
        <!-- .row end -->
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-50">
                <a class="btn btn--secondary btn--bordered btn--rounded" href="#"><span></span>Load More</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container-fluid end -->
</section>
<!-- #portfolio end -->
<!-- footer#1
============================================= -->@endsection
@extends('layouts.header')

@section('content')

    <!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="assets/images/menu/menu-board/16.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Fresh, Tasty Meals</div>
                        <div class="title--heading">
                            <h1>Discover Our Menu</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a>
                        </li>
                        <li><a href="{{'/'}}">menu</a>
                        </li>
                        <li class="active">simple</li>
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

<!-- Menu Simple
============================================= -->
    <section id="menuBoard" class="pb-90">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">Start Eating Better</p>
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
                            <!-- Menu============================================= -->
                            <div class="menu-simple">
                                <div class="container">
                                    <div class="row">
                                        @foreach($breakfast as $breakf)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="dish-panel">
                                                    <div class="dish--img">
                                                        <img src="{{$breakf->image}}" alt="dish">
                                                    </div>
                                                    <div class="dish--content">
                                                        <div class="dish--content-bio">
                                                            <h3 class="dish--title">{{$breakf->food_name}}</h3>
                                                            <div class="dish--price">${{$breakf->price}}</div>
                                                        </div>
                                                        <p class="dish--desc">{{$breakf->description}}</p>
                                                    </div>
                                                </div><!-- .dish end -->
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
                                <!-- Menu============================================= -->
                                <div class="menu-simple">
                                    <div class="container">
                                        <div class="row">
                                        @foreach($lunch as $lunchy)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="dish-panel">
                                                    <div class="dish--img">
                                                        <img src="{{$lunchy->image}}" alt="dish">
                                                    </div>
                                                    <div class="dish--content">
                                                        <div class="dish--content-bio">
                                                            <h3 class="dish--title">{{$lunchy->food_name}}</h3>
                                                            <div class="dish--price">${{$lunchy->price}}</div>
                                                        </div>
                                                        <p class="dish--desc">{{$lunchy->description}}</p>
                                                    </div>
                                                </div><!-- .dish end -->
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
                            <div class="menu-simple">
                                <div class="container">
                                    <div class="row">
                                        <!-- Dish #1 --> @foreach($supper as $dinner)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="dish-panel">
                                                    <div class="dish--img">
                                                        <img src="{{$dinner->image}}" alt="dish">
                                                    </div>
                                                    <div class="dish--content">
                                                        <div class="dish--content-bio">
                                                            <h3 class="dish--title">{{$dinner->food_name}}</h3>
                                                            <div class="dish--price">${{$dinner->price}}</div>
                                                        </div>
                                                        <p class="dish--desc">{{$dinner->description}}</p>
                                                    </div>
                                                </div><!-- .dish end -->
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
                                <!-- Menu============================================= -->
                                <div class="menu-simple">
                                    <div class="container">
                                        <div class="row">
                                        <!-- Dish #1 --> @foreach($desert as $deserty)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="dish-panel">
                                                    <div class="dish--img">
                                                        <img src="{{$deserty->image}}" alt="dish">
                                                    </div>
                                                    <div class="dish--content">
                                                        <div class="dish--content-bio">
                                                            <h3 class="dish--title">{{$deserty->food_name}}</h3>
                                                            <div class="dish--price">${{$deserty->price}}</div>
                                                        </div>
                                                        <p class="dish--desc">{{$deserty->description}}</p>
                                                    </div>
                                                </div><!-- .dish end -->
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
                            <div class="menu-simple">
                                <div class="container">
                                    <div class="row">
                                        <!-- Dish #1 --> @foreach($drinks as $drink)
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="dish-panel">
                                                    <div class="dish--img">
                                                        <img src="{{$drink->image}}" alt="dish">
                                                    </div>
                                                    <div class="dish--content">
                                                        <div class="dish--content-bio">
                                                            <h3 class="dish--title">{{$drink->food_name}}</h3>
                                                            <div class="dish--price">${{$drink->price}}</div>
                                                        </div>
                                                        <p class="dish--desc">{{$drink->description}}</p>
                                                    </div>
                                                </div><!-- .dish end -->
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

<!-- footer#1
============================================= -->@endsection

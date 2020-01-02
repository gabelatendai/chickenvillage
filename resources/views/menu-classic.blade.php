@extends('layouts.header')

@section('content')
<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/16.jpg')}}" alt="Background" />
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
                        <li class="active">Classic</li>
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

<!-- Heading #1
============================================= -->
<section id="heading1" class="heading heading-1">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="text--center">
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
</section>
<!-- #heading1 end -->

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
                    <p class="heading--subtitle">Starts at 09:00 am</p>
                    <h2 class="heading--title mb-0 text-white">Breakfast Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-4down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

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
            <div class="col-xs-12 col-sm-12 col-md-4">
                @foreach($breakfast as $break)
                <!-- Dish #1 -->
                <div class="dish-panel">
                    <h3 class="dish--title">{{$break->food_name}}</h3>
                    <div class="dish--price">${{$break->price}}</div>
                    <p class="dish--desc">{{str_limit($break->description, 50)}}</p>
                </div>
                @endforeach
                <!-- .dish-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-70">
                <a class="btn btn--primary btn--bordered btn--rounded btn--lg" href="#">Discover Full Menu</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu1 end -->

<!-- Divider #1
============================================= -->
<section id="divider2" class="section-divider3 bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Starts at 12:00 pm</p>
                    <h2 class="heading--title mb-0 text-white">Lunch Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-4down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

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
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- Dish #1 -->
            @foreach($lunch as $lunchy)
                <!-- Dish #1 -->
                    <div class="dish-panel">
                        <h3 class="dish--title">{{$lunchy->food_name}}</h3>
                        <div class="dish--price">${{$lunchy->price}}</div>
                        <p class="dish--desc">{{str_limit($lunchy->description, 50)}}</p>
                    </div>
            @endforeach

                <!-- .dish-panel end -->
            </div>
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-70">
                <a class="btn btn--primary btn--bordered btn--rounded btn--lg" href="#">Discover Full Menu</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu1 end -->

<!-- Divider #1
============================================= -->
<section id="divider3" class="section-divider3 bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Starts at 17:00 pm</p>
                    <h2 class="heading--title mb-0 text-white">Dinner Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-4down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

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
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- Dish #1 -->
            @foreach($supper as $supp)
                <!-- Dish #1 -->
                    <div class="dish-panel">
                        <h3 class="dish--title">{{$supp->food_name}}</h3>
                        <div class="dish--price">${{$supp->price}}</div>
                        <p class="dish--desc">{{str_limit($supp->description, 50)}}</p>
                    </div>
            @endforeach
            </div>
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-70">
                <a class="btn btn--primary btn--bordered btn--rounded btn--lg" href="#">Discover Full Menu</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu1 end -->

<!-- Divider #1
============================================= -->
<section id="divider4" class="section-divider3 bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Enjoy</p>
                    <h2 class="heading--title mb-0 text-white">Dessert Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-4down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

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
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- Dish #1 -->
            @foreach($desert as $deserty)
                <!-- Dish #1 -->
                    <div class="dish-panel">
                        <h3 class="dish--title">{{$deserty->food_name}}</h3>
                        <div class="dish--price">${{$deserty->price}}</div>
                        <p class="dish--desc">{{str_limit($deserty->description, 50)}}</p>
                    </div>
            @endforeach
                <!-- .dish-panel end -->
            </div>
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-70">
                <a class="btn btn--primary btn--bordered btn--rounded btn--lg" href="#">Discover Full Menu</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu1 end -->

<!-- Divider #1
============================================= -->
<section id="divider5" class="section-divider3 bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/18.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Enjoy</p>
                    <h2 class="heading--title mb-0 text-white">Drinks Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="divider--shape-4down"></div>
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- Dish #1 -->
                @foreach($drinks as $drink)
                <div class="dish-panel">
                    <h3 class="dish--title">{{$drink->food_name}}</h3>
                    <div class="dish--price">${{$drink->price}}</div>
                    <p class="dish--desc">{{str_limit($drink->description, 20)}}</p>
                </div>
                    @endforeach
            </div>
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-70">
                <a class="btn btn--primary btn--bordered btn--rounded btn--lg" href="#">Discover Full Menu</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
@endsection

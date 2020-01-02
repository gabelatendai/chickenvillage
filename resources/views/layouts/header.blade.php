


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@foreach($abouts as $about)
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Elegant Restaurant & Cafe Html5 Template by zytheme">
    <link href="{{$about->image}}" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,700,900%7CRuthie%7CAbril+Fatface' rel='stylesheet' type='text/css'>

	<link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('assets/css/external.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <!-- RS5.0 Main Stylesheet -->
    <link href="{{ asset('assets/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/revolution/css/navigation.css') }}" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>Chicken Village</title>
</head>

<body>
    <div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
                <a class="logo" href="{{'/'}}">
					<img class="logo-light" src="{{$about->image}}" alt="Steakin Logo" draggable="false" style="height: 80px" >
					<img class="logo-dark" src="{{asset('assets/images/menu/menu-board/logo.png')}}" alt="Steakin Logo" draggable="false" style="height: 80px">
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-right navbar-left">
                    <!-- Home Menu -->
<li class="has-dropdown mega-dropdown ">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">home</a>
    <ul class="dropdown-menu mega-dropdown-menu">
        <li>
            <div class="container">
                <div class="row">
                    <!-- Column #1 -->
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="{{'/'}}">home main</a>
                            </li>
                            <li>
                                <a href="{{ url('/homepage-2') }}">homepage 2</a>
                            </li>
                            <li>
                                <a href="{{ url('/homepage-3') }}">homepage 3</a>
                            </li>
                            <li>
                                <a href="{{ url('/homepage-4') }}">homepage 4</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-3 end -->

                    <!-- Column #2 -->
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <a href="{{ url('/homepage-5') }}">homepage 5</a>
                            </li>
                            <li>
                                <a href="{{ url('/homepage-6') }}">homepage 6</a>
                            </li>
                            <li>
                                <a href="{{ url('/homepage-9-boxed') }}">homepage 7 (boxed)</a>
                            </li>
                            <li>
                                <a href="{{ url('/homepage-10-wide') }}">homepage 8 (wide)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-2 end -->

                    <!-- Column #3 -->
                    <div class="col-md-3">
                        <ul>

                                <a href="{{ url('/homepage-11-dark') }}">homepage 9 (dark)</a>
                            </li>

                        </ul>
                    </div>
                    <!-- .col-md-3 end -->
                    <!-- .col-md-3 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- container end -->
        </li>
    </ul>
    <!-- .mega-dropdown-menu end -->
</li>
<!-- li end -->

<!-- About Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">About</a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ url('/page-about') }}">our story</a>
        </li>
        <li>
            <a href="{{ url('/page-chefs') }}">Our Team</a>
        </li>
        <li>
            <a href="{{ url('/page-contacts') }}">contact us</a>
        </li>
        <li>
            <a href="{{ url('/page-faqs') }}">FAQs</a>
        </li>

        <li>
            <a href="{{ url('/page-gallery') }}">gallery</a>
        </li>
        <li>
            <a href="{{ url('/page-testimonials') }}">Testimonials</a>
        </li>

    </ul>
</li>
<!-- li end -->

<!-- About Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle  menu-item" data-hover="pages">Menu</a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ url('/menu-board') }}">menu board</a>
        </li>
        <li>
            <a href="{{ url('/menu-classic') }}">menu classic</a>
        </li>
        <li>
            <a href="{{ url('/menu-gallery') }}">menu gallery</a>
        </li>
        <li>
            <a href="{{ url('/menu-simple') }}">menu simple</a>
        </li>
    </ul>
</li>
<!-- li end -->

<li>
    <a class="menu-item" href="{{ url('/page-book-table') }}">book a table</a>
</li>


<!-- Blog Menu-->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ url('/blog-carousel') }}">blog carousel</a>
        </li>
    </ul>
</li>
<!-- li end -->

<!-- shop Menu -->
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="shop">shop</a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ url('/shop-4cols') }}">shop 4 columns</a>
        </li>
      <!--
            <a href="shop-products.html">shop products</a>
        </li>
        <li>
            <a href="shop-single.html">shop single</a>
        </li>-->
    </ul>
</li>
<!-- li end -->
                <!-- Module Reservation-->
<div class="module module-reservation pull-left">
    <a class="btn-popup btn-popup-theme" data-toggle="modal" data-target="#reservationModule">Book A Table</a>
    <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationModule">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <div class="row reservation reservation-1">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="reservation-form mb-30 text-center">
                                <div class="reservation-bordered">
                                    <div class="heading heading-1 text-center">
                                        <p class="heading--subtitle">Reservation</p>
                                        <h2 class="heading--title">Book Your Table</h2>
                                        <div class="divider--shape-4"></div>
                                    </div>
                                    <div class="reservation--dec">
                                        You can Book a table online easily in just a couple of minutes. We take reservations for lunch and dinner, just check the availability of your table & book it now!
                                    </div>
                                    <form method="post" action="assets/php/reservationpopup.php" class="reservationPopupForm mb-0">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <div class="form-select">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select class="form-control" name="people" id="numPopup" required>
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
                                                    <select class="form-control" name="day" id="dayPopup" required>
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
                                                    <select class="form-control" name="time" id="timePopup" required>
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
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
                <!-- Module Search -->
<div class="module module-search pull-left">
    <div class="module-icon search-icon">
        <i class="fa fa-search"></i>
        <span class="title">search</span>
    </div>
    <div class="module-content module-fullscreen module--search-box">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <form  method="GET" action="{{url('/results')}}" class="form-search">
                            <input type="text" name="query" class="form-control" placeholder="Type Search Words Then Enter">
                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- .form-search end -->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
    </div>
</div>
<!-- .module-search end -->
                <!-- Module Side NAV -->
                <div class="module module-side-nav pull-left">
                    <div class="module-icon side-nav-icon">
                        <i class="fa fa-bars"></i>
                        <span class="title">Side Navigation</span>
                    </div>
                    <div class="module-content module-hamburger">
                        <div class="hamburger-panel module-widgets">

    <!-- Recent Posts
============================================= -->
    <div class="widget widget-recent-posts">
        <div class="widget--title">
            <h5>recent posts</h5>
        </div>
        <div class="widget--content">
            @foreach($posts as $new)
                <div class="entry">
                    <img src="{{$new->image}}" alt="title" />
                    <div class="entry-desc">
                        <div class="entry-meta">
                            <a href="#">{{$new->created_at->diffForHumans()}}</a>
                        </div>
                        <div class="entry-title">
                            <a href="{{route('page-news',['slug'=>$new->slug])}}">{{$new->title}}</a>
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- .recent-entry end -->
        </div>
    </div>
    <!-- .widget-recent end -->

    <!-- Instagram Feed
============================================= -->
    <div class="widget widget-instagram">
        <div class="widget--title">
            <h5>Instagram</h5>
        </div>
        <div class="widget--content">
            <div id="instafeedModule" class="instafeed" data-insta-number="8"></div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- .widget-instagram end -->

    <!-- Tag Clouds
============================================= -->
    <!-- .widget-tags end -->
    <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
</div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
<!-- Hero Section
====================================== -->
@yield('content')

        <footer id="footer" class="footer footer-1 text-center">
            <div class="divider--shape-dark"></div>
            <!-- Widget Section
            ============================================= -->
            <div class="footer--widget text--center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="footer--widget-content">
                                <h3>Follow Us</h3>
                                <div class="footer--social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                </div>
                                <!-- .social-icons end -->
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="footer--widget-content">
                                <h2 style="color: white">{{$about->name}}</h2>
                                <p>{{$about->about}}</p>
                            </div>
                        </div>
                        <!-- .col-md-3 end -->

                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="footer--widget-content">
                                <h3>Neswletter</h3>
                                <div class="widget--newsletter">
                                    <form class="footer--social-newsletter mailchimp">
                                        <input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
                                        <button type="submit">join</button>
                                    </form>
                                    <div class="subscribe-alert"></div>
                                </div>
                                <!-- .widget end -->
                            </div>
                        </div>
                        <!-- .col-md-3 end -->
                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-widget end -->
            <!-- Copyrights
            ============================================= -->
            <div class="footer--copyright text-center">
                <div class="divider--shape-dark2"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="contact-info">
                                <address></address>
                                <span>{{$about->address}}</span> -
                                <span>{{$about->pnumber}}</span> -
                                <span>Call or Whatsapp</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <span>&copy; 2018 Chicken Village, With Love by </span> <a href="{{'/'}}">Chicken Village</a>
                        </div>
                    </div>
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-copyright end -->
        </footer>
    </div>
    @endforeach
    <!-- #wrapper end -->

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- RS5.0 Core JS Files -->
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

    <script src="{{ asset('assets/js/rsconfig.js') }}"></script>

@extends('layouts.header')

@section('content')


    <!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('assets/images/menu/menu-board/4.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Contact Us</div>
                        <div class="title--heading">
                            <h1>Get In Toutch</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="{{'/'}}">Home</a></li>
                        <li><a href="{{'/'}}">about</a></li>
                        <li class="active">contact</li>
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

<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact--desc">
                                @foreach($abouts as $about)
                                <p>
                                    {{$about->about}}</p>
                            </div>
                            <div class="row mb-30">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3>Our Address</h3><p>{{$about->address}}</p>
                                        <a class="link--styled" href="#">Get Directions</a>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3>Our Phone</h3>
                                        <p>Office Telephone : {{$about->pnumber}}</p>
                                        <p>Mobile :+263 784 552 768</p>
                                        <a class="link--styled" href="#">Call Us</a>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                            </div>
                            <!-- .row end -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3>Our Email</h3>
                                        <p>{{$about->email}}</p>
                                        <a class="link--styled" href="#">Send a Message</a>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="contact--info">
                                        <h3>Follow Us</h3>
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-6 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .col-md-3 end -->
@endforeach
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-form">
                                <form method="post" action="assets/php/contact.php" class="contactForm mb-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="contact-name" id="firstName" placeholder="First Name:" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="contact-last" id="lastName" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="contact-email" id="email" placeholder="Email:" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="contact-phone" id="phone" placeholder="Phone:" required>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="contact-message" id="message" rows="2" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" value="Send Message" name="submit" class="btn btn--secondary btn--block mt-10">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="contact-result"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- .col-md-6 end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #contact1 end -->

<!-- Google maps
============================================= -->
<section class="google-maps pb-0 pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12 pr-0 pl-0">
                <div id="googleMap" style="width:100%;height:350px;">
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="{{asset('assets/js/plugins/jquery.gmap.min.js')}}"></script>

    <script>
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 15,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/menu/menu-board/maker.png",
                    iconsize: [76, 61],
                    iconanchor: [17, 35]
                }
            }]
        });

    </script>
</section>
<!-- footer#1
============================================= -->@endsection

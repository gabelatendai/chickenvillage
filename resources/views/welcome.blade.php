
@extends('layouts.header')

@section('content')

    <section id="slider" class="slider slide-overlay-dark">
        <!-- START REVOLUTION SLIDER 5.0 -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider"  data-version="5.0">
                <ul>
                    <!-- slide 1 -->
                    <li data-transition="zoomout"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/menu/menu-board/2.jpg" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-130"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">Chicken Village Offers You</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                        >
                            <div class="slide--headline extend">Fresh & Tasty Meals</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="20"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio text--center">Chicken Village has the perfect place to enjoy fine food and great cocktails with <br>excellent service, in comfortable atmospheric surroundings. </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":2250,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--primary btn--inverse btn--rounded mr-30" href="#">View Menu</a>
                                <a class="btn btn--white btn--bordered btn--rounded" href="#">Book A Table</a>
                            </div>
                        </div>
                    </li>

                    <!-- slide 2 -->
                    <li data-transition="incube-horizontal"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/menu/menu-board/7.jpg" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">Unique Food</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline extend">For Unique Occasions</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--white btn--bordered btn--rounded btn--lg" href="#">Book Your Table Now</a>
                            </div>
                        </div>
                    </li>

                    <!-- slide 3 -->
                    <li data-transition="cube-horizontal"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/menu/menu-board/3.jpg" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-130"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">Made With Love</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline">We Serve Quality Food</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="20"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--bio text--center">Chicken Village has the perfect place to enjoy fine food and great cocktails with <br>excellent service, in comfortable atmospheric surroundings. </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-frames='[{"delay":2250,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--secondary btn--white btn--rounded" href="#">View Menu</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- END OF SLIDER WRAPPER -->
    </section>
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
                                            <div class="col-xs-12 col-sm-6 col-md-6 pr-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$30.50</span>
                                                            <h3 class="dish--title">Chicken Wrap</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">Chicken , ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="assets/images/menu/menu-board/25.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/25.jpg" alt="dish popup">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$3.50</div>
                                                                                                <h3 class="popup--title">Chicken Wrap</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
                                            <!-- Dish #2 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pl-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$1.50</span>
                                                            <h3 class="dish--title">Green Salad</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">Green Salad, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="assets/images/menu/menu-board/26.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup2"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup2">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/26.jpg" alt="dish popup">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$1.50</div>
                                                                                                <h3 class="popup--title">Green Salad</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>Green Salad, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
                                            <!-- Dish #3 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pr-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-right"></div>
                                                            <img src="assets/images/menu/menu-board/27.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup3"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup3">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/27.jpg" alt="dish img">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$2.00</div>
                                                                                                <h3 class="popup--title">Original Beef Burger</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>Original Beef Burger, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
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
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$2.00</span>
                                                            <h3 class="dish--title">Original Beef Burger</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">Original Beef Burger, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-3 end -->
                                            <!-- Dish #4 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pl-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="dish--tag">Recommended</div>
                                                            <div class="divider--shape-right"></div>
                                                            <img src="assets/images/menu/menu-board/28.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup4"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup4">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/28.jpg" alt="dish img">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$2.50</div>
                                                                                                <h3 class="popup--title">Original Chicken Burger</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>Original Chicken Burger, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
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
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$2.50</span>
                                                            <h3 class="dish--title">Original Chicken Burger</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">Original Chicken Burger, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-3 end -->
                                            <!-- Dish #5 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pr-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$3.00</span>
                                                            <h3 class="dish--title">Original Village Shawarma</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">Original Village Shawarma, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="dish--tag">Chef Selection</div>
                                                            <div class="divider--shape-left"></div>
                                                            <img src="assets/images/menu/menu-board/29.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup5"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup5">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/29.jpg" alt="dish img">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$3.50</div>
                                                                                                <h3 class="popup--title">Original Village Shawarma</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>Original Village Shawarma, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
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
                                            <!-- Dish #6 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pl-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$6.00</span>
                                                            <h3 class="dish--title">T-Bone Steak & Chips</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc"> T-Bone Steak & Chips</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-left"></div>
                                                            <img src="assets/images/menu/menu-board/30.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup6"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup6">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/30.jpg" alt="dish img">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$6.00</div>
                                                                                                <h3 class="popup--title">T-Bone Steak & Chips</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>T-Bone Steak & Chips </p>
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
                                            <!-- Dish #7 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pr-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-right"></div>
                                                            <img src="assets/images/menu/menu-board/31.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup7"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup7">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/31.jpg" alt="dish img">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$5.00</div>
                                                                                                <h3 class="popup--title">T-Bone Steak</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>T-Bone Steak, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$5.00</span>
                                                            <h3 class="dish--title">T-Bone Steak</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">T-Bone Steak , English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-3 end -->
                                            <!-- Dish #8 -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 pl-0">
                                                <div class="dish-panel">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--img">
                                                            <div class="divider--shape-right"></div>
                                                            <img src="assets/images/menu/menu-board/24.jpg" alt="dish img">
                                                            <div class="dish--overlay">
                                                                <a class="dish-popup" data-toggle="modal" data-target="#dishPopup8"><i class="fa fa-search-plus"></i></a>
                                                                <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup8">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                                                <div class="row reservation">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="popup--img">
                                                                                            <img src="assets/images/menu/menu-board/24.jpg" alt="dish img">
                                                                                            <div class="img-popup-overlay">
                                                                                                <div class="popup--price">$4.00</div>
                                                                                                <h3 class="popup--title">Chicken Stir Fry</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .col-md-12 end -->
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                                                        <div class="content-popup">
                                                                                            <p>Chicken Stir Fry, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
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
                                                    <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                                        <div class="dish--content">
                                                            <span class="dish--price">$4.00</span>
                                                            <h3 class="dish--title">Chicken Stir Fry</h3>
                                                            <div class="divider--shape-4"></div>
                                                            <p class="dish--desc">Chicken Stir Fry, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <p>We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--img">
                                    <img src="assets/images/menu/menu-board/1.png" alt="Testimonial Author">
                                </div>
                                <div class="testimonial--author">
                                    <h4>Michael Luke</h4>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #2 -->
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
                                <p>We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--img">
                                    <img src="assets/images/menu/menu-board/2.png" alt="Testimonial Author">
                                </div>
                                <div class="testimonial--author">
                                    <h4>Henry Gabriel</h4>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->
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
            <img src="assets/images/menu/menu-board/7.jpg" alt="Background" />
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

                        <!-- Blog Entry #1 -->
                        <div class="blog-entry">

                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date"></span> / <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Simple Recipes for Spring</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="assets/images/menu/menu-board/1.jpg" alt="entry image"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    My favorite form of cold-weather exercise is snow-shoeing, but by chance I haven’t been able to go this year. Too busy working at the computer
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #2 -->
                        <div class="blog-entry">
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date"></span> / <span><a href="#">Apple</a> , <a href="#">Stuffing And Dressing</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Dinner Party for a Chef!</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="assets/images/menu/menu-board/2.jpg" alt="entry image"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    I began my career as a recipe tester for cookbooks, and I did that work for two years. I loved cookbooks and loved browsing for them...
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #3 -->
                        <div class="blog-entry">
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date"></span> / <span><a href="#">Food</a> , <a href="#">Cheese</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Cake with Cream Cheese</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="assets/images/menu/menu-board/3.jpg" alt="entry image"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #4 -->
                        <div class="blog-entry">

                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date"></span> / <span><a href="#">Green</a> , <a href="#">Casserole</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">The Best Side Dishes</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="assets/images/menu/menu-board/4.jpg" alt="entry image"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    From green bean casserole to mashed potatoes and cranberry sauce, find standout Thanksgiving sides from Food Network chefs find standout.
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #5 -->
                        <div class="blog-entry">

                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span class="entry--date"></span> / <span><a href="#">Casserole</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="#">Cornbread Stuffing Apples</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="assets/images/menu/menu-board/5.jpg" alt="entry image"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    Cook sausage for 5 to 7 minutes until browned. Add onions and celery and saute until softened. Add salt and pepper, to taste. Mix in apples, thyme
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

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



<section id="slider" class="slider slide-overlay-dark">
    <!-- START REVOLUTION SLIDER 5.0 -->

    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
            @foreach($banners as $banner)
                <!-- slide 1 -->
                    <li data-transition="zoomin"
                        data-slotamount="default"
                        data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut"
                        data-masterspeed="2000">
                        <!-- MAIN IMAGE -->
                        <img src="{{$banner->image}}" alt="Slide Background Image"  width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-130"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--subheadline">{{$banner->sub_headline}}</div>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-65"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="slide--headline">{{$banner->headline}}!</div>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="20"
                             data-width="none"
                             data-height="none"
                             data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                        >
                            <div class="slide--bio text--center">{{str_limit($banner->description,100)}}</div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="100"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1250"
                             data-splitin="none"
                             data-splitout="none"
                             data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'						data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--white btn--bordered btn--rounded btn--lg" href="#">Book Your Table Now</a>
                            </div>
                        </div>
                    </li>
            @endforeach
            <!-- slide 2 -->

                <!-- slide 3 -->


            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>
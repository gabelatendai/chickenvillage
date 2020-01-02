
@extends('layouts.header')

@section('content')

    @include('recent-post')

    <!-- Shop #4
    ============================================= -->
    <section id="shop" class="shop shop-4 bg-white pb-70">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-3 mb-30 text--center">
                        <p class="heading--subtitle">Discover</p>
                        <h2 class="heading--title mb-0">Latest Dishes</h2>
                        <div class="divider--shape-4"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Projects Filter
                ============================================= -->
                <div class="col-xs-12 col-sm-12  col-md-12 shop-filter">
                    <ul class="list-inline">
                        <li><a class="active-filter" href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".filter-salads">Salads</a></li>
                        <li><a href="#" data-filter=".filter-soup">Soup</a></li>
                        <li><a href="#" data-filter=".filter-main">Main</a></li>
                        <li><a href="#" data-filter=".filter-desserts">desserts</a></li>
                        <li><a href="#" data-filter=".filter-drinks">drinks</a></li>
                    </ul>
                </div>
                <!-- .projects-filter end -->
            </div>
            <!-- .row end -->
            <div id="shop-all" class="row">
                <!-- Product #1 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts filter-soup">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/1.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">Mighty Mondays</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>Buy One & Get One For Free</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #2 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-drinks">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/2.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">Ruby Tuesdays</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>Buy One & Get One Drink For Free</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #3 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-desserts">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/3.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">Wings Wednesday</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>Buy One & Get Free Piece</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #4 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-main">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/4.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">Thunder Thursday</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>Buy One & Get Free Piece</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #5 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-salads">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/5.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">Flame Fridays</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>Buy Compo and get 1/4 Chicken Free</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #6-->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/6.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">Village Mini Bucket</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$7.00</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #7 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-drinks">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/7.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">1 Piece & Chips + 4 Winglets </a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$5.00</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #8 -->
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter filter-main">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/8.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">1 Piece + Medium Chips</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$3.00</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #shop end -->

    <!-- Testimonial #4
    ============================================= -->
    <section id="testimonial4" class="testimonial testimonial-4 bg-overlay bg-parallax bg-overlay-dark text-center">
        <div class="bg-section">
            <img src="assets/images/menu/menu-board/1.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="divider--shape-1up"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div id="testimonial-wide" class="carousel carousel-dots carousel-white" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
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
                                <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
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
                                <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
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

                        <!-- Testimonial #3 -->
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
                                <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--img">
                                    <img src="assets/images/menu/menu-board/3.png" alt="Testimonial Author">
                                </div>
                                <div class="testimonial--author">
                                    <h4>Leo Jaxon</h4>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #4 -->
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
                                <p class="color-white">We're all moving at such a high rate that we have to grab the frozen dinners, we can't make it a way of life. We have to get back to real, simple, clean good foods.</p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--img">
                                    <img src="assets/images/menu/menu-board/4.png" alt="Testimonial Author">
                                </div>
                                <div class="testimonial--author">
                                    <h4>Anthony Hunter</h4>
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
            <div class="divider--shape-1down"></div>
        </div>
        <!-- .container end -->
    </section>
    <!-- .testimonial4 end -->
    <!-- Shop #4
    ============================================= -->
    <section id="shop2" class="shop shop-4 pb-60">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-3 mb-50 text--center">
                        <p class="heading--subtitle">Enjoy</p>
                        <h2 class="heading--title mb-0">Popular Dishes</h2>
                        <div class="divider--shape-4"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Product #7 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/7.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">1 Piece & Chips + 4 Winglets</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$5.00</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #8 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/8.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">1 Piece & Medium Chips</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$3.00</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #9 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/9.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">2 Pieces & Medium Chips</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$4.00</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->

                <!-- Product #10 -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="assets/images/menu/menu-board/10.jpg" alt="Product" />
                            <div class="product--hover">
                                <div class="product--action">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                            <!-- .product-overlay end -->
                        </div>
                        <!-- .product-img end -->
                        <div class="product--content">
                            <div class="product--title">
                                <h3><a href="#">3 Pieces & Medium Chips + Coleslaw</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>$5.50</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
                <!-- .productFilter end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #shop end -->

@endsection



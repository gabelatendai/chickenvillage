@extends('layouts.header')

@section('content')

    <!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="assets/images/menu/menu-board/9.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Products</div>
                        <div class="title--heading">
                            <h1>Our Shop</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">shop</a></li>
                        <li class="active">Shop 4 columns</li>
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

<!-- Shop #4
============================================= -->
<section id="shop" class="shop shop-4 bg-white">
    <div class="container">
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
            @foreach($soup as $soupu)
            <div class="col-xs-12 col-sm-6 col-md-3 productFilter  filter-soup">
                <div class="product-item">
                    <div class="product--img">
                        <img src="{{$soupu->image}}" alt="Product" />
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
                            <h3><a href="#">{{$soupu->name}}</a></h3>
                        </div>
                        <!-- .product-title end -->
                        <div class="product--price">
                            <span>${{$soupu->price}}</span>
                        </div>
                        <!-- .product-price end -->
                    </div>
                    <!-- .product-bio end -->
                </div>
            </div>
            @endforeach
            @foreach($drink as $drinks)
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter  filter-drinks">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="{{$drinks->image}}" alt="Product" />
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
                                <h3><a href="#">{{$drinks->name}}</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>${{$drinks->price}}</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
        @endforeach
            <!-- .productFilter end -->
            @foreach($desert as $deserty)
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter  filter-desserts">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="{{$deserty->image}}" alt="Product" />
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
                                <h3><a href="#">{{$deserty->name}}</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>${{$deserty->price}}</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
        @endforeach
            @foreach($salad as $salads)
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter  filter-salads">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="{{$salads->image}}" alt="Product" />
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
                                <h3><a href="#">{{$salads->name}}</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>${{$salads->price}}</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
        @endforeach
            @foreach($main as $mainy)
                <div class="col-xs-12 col-sm-6 col-md-3 productFilter  filter-main">
                    <div class="product-item">
                        <div class="product--img">
                            <img src="{{$mainy->image}}" alt="Product" />
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
                                <h3><a href="#">{{$mainy->name}}</a></h3>
                            </div>
                            <!-- .product-title end -->
                            <div class="product--price">
                                <span>${{$mainy->price}}</span>
                            </div>
                            <!-- .product-price end -->
                        </div>
                        <!-- .product-bio end -->
                    </div>
                </div>
        @endforeach
            <!-- Product #3 -->

            <!-- .productFilter end -->

        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12  col-md-12 clearfix  text--center">
                <ul class="pagination mt-20">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#" aria-label="Next">
					  <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
				  </a>
                    </li>
                </ul>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #shop end -->

<!-- footer#1
============================================= -->@endsection

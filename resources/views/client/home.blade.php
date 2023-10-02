@extends('layouts.client')

<!-- index body start -->
@section('content')
    <!-- home section start -->
    <section class="home-section-2 home-section-small section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-6 col-md-8">
                    <div class="home-contain h-100">
                        <img src="assets_client/images/veg-3/home/1.png" class="img-fluid bg-img blur-up lazyload"
                            alt="">
                        <div class="home-detail home-width p-center-left position-relative">
                            <div>
                                <h6 class="ls-expanded theme-color">ORGANIC</h6>
                                <h1 class="fw-bold w-100">100% Fresh</h1>
                                <h3 class="text-content fw-light">Fruit & Vegetables</h3>
                                <p class="d-sm-block d-none">Free shipping on all your order. we deliver you enjoy</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn mt-sm-4 btn-2 theme-bg-color text-white mend-auto btn-2-animation">Shop
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-4 ratio_medium d-md-block d-none">
                    <div class="home-contain home-small h-100">
                        <div class="h-100">
                            <img src="assets_client/images/veg-3/home/2.png" class="img-fluid bg-img blur-up lazyload"
                                alt="">
                        </div>
                        <div class="home-detail text-center p-top-center w-100 text-white">
                            <div>
                                <h4 class="fw-bold">Fresh & 100% Organic</h4>
                                <h5 class="text-center">famer's market</h5>
                                <button class="btn bg-white theme-color mt-3 home-button mx-auto btn-2"
                                    onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 ratio_65 d-xxl-block d-none">
                    <div class="row g-3">
                        <div class="col-xxl-12 col-sm-6">
                            <div class="home-contain">
                                <a href="shop-left-sidebar.html">
                                    <img src="assets_client/images/veg-3/home/3.png"
                                        class="img-fluid bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="home-detail text-white p-center text-center">
                                    <div>
                                        <h4 class="text-center">Organic Lifestyle</h4>
                                        <h5 class="text-center">Best Weekend Sales</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-12 col-sm-6">
                            <div class="home-contain">
                                <a href="shop-left-sidebar.html">
                                    <img src="assets_client/images/veg-3/home/4.png"
                                        class="img-fluid bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="home-detail text-white w-50 p-center-left home-p-sm">
                                    <div>
                                        <h4 class="fw-bold">Safe food saves lives</h4>
                                        <h5>Discount Offer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Category Section Start -->
    <section class="category-section-2">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Shop By Categories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider arrow-slider">
                        <div>
                            <div class="shop-category-box border-0 wow fadeIn">
                                <a href="shop-left-sidebar.html" class="circle-1">
                                    <img src="assets_client/images/veg-3/category/1.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Oils, Rofined & Ghee</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.05s">
                                <a href="shop-left-sidebar.html" class="circle-2">
                                    <img src="assets_client/images/veg-3/category/2.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Rice, Flour & Grains</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.1s">
                                <a href="shop-left-sidebar.html" class="circle-3">
                                    <img src="assets_client/images/veg-3/category/3.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Food Cupboard</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.15s">
                                <a href="shop-left-sidebar.html" class="circle-4">
                                    <img src="assets_client/images/veg-3/category/4.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Dals & Pulses</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.2s">
                                <a href="shop-left-sidebar.html" class="circle-4">
                                    <img src="assets_client/images/veg-3/category/5.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Drinks & Beverages</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.25s">
                                <a href="shop-left-sidebar.html" class="circle-1">
                                    <img src="assets_client/images/veg-3/category/6.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Fresh Fruits & Vegetables</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.3s">
                                <a href="shop-left-sidebar.html" class="circle-2">
                                    <img src="assets_client/images/veg-3/category/7.png"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Ready to eat Meals</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.35s">
                                <a href="shop-left-sidebar.html" class="circle-3">
                                    <img src="assets_client/images/veg-3/category/8.png"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Instant Mixes</h6>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box border-0 wow fadeIn" data-wow-delay="0.4s">
                                <a href="shop-left-sidebar.html" class="circle-4">
                                    <img src="assets_client/images/veg-3/category/2.png"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="category-name">
                                    <h6>Rice, Flour & Grains</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Value Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Best Value</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="three-slider arrow-slider ratio_65">
                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets_client/images/veg-3/value/1.png"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Buy more, Save more</h5>
                                    <h6>Fresh Vegetable</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn-category btn theme-bg-color text-white">View Offer</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets_client/images/veg-3/value/2.png"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Save More!</h5>
                                    <h6>Organic Vegetable</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn-category btn theme-bg-color text-white">View Offer</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets_client/images/veg-3/value/3.png"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Hot Deals!</h5>
                                    <h6>Fruita & Vagerables</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn-category btn theme-bg-color text-white">View Offer</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets_client/images/veg-3/value/1.png"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Buy more, Save more</h5>
                                    <h6>Fruita & Vagerables</h6>
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn-category btn theme-bg-color text-white">View
                                        Offer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Value Section End -->

    <!-- Deal Section Start -->
    <section class="deal-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Deal Of The Day</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="three-slider-1 arrow-slider">
                        <div>
                            <div class="deal-box wow fadeInUp">
                                <a href="shop-left-sidebar.html" class="category-image order-sm-2">
                                    <img src="assets_client/images/veg-3/cate1/1.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="deal-detail order-sm-1">
                                    <button class="buy-box btn theme-bg-color text-white btn-cart">
                                        <i class="iconly-Buy icli m-0"></i>
                                    </button>
                                    <div class="hot-deal">
                                        <span>Hot Deals</span>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="shop-left-sidebar.html" class="text-title">
                                        <h5>Bell pepper</h5>
                                    </a>
                                    <h5 class="price">$70.21 <span>$65.00</span></h5>
                                    <div class="progress custom-progressbar">
                                        <div class="progress-bar" style="width: 50%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="item">Sold: <span>30 Items</span></h4>
                                    <h4 class="offer">Hurry up offer end in</h4>
                                    <div class="timer" id="clockdiv-4" data-hours="1" data-minutes="2"
                                        data-seconds="3">
                                        <ul>
                                            <li>
                                                <div class="counter">
                                                    <div class="days">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="hours">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="minutes">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="seconds">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="deal-box wow fadeInUp" data-wow-delay="0.05s">
                                <a href="shop-left-sidebar.html" class="category-image order-sm-2">
                                    <img src="assets_client/images/veg-3/cate1/2.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="deal-detail order-sm-1">
                                    <button class="buy-box btn theme-bg-color text-white btn-cart">
                                        <i class="iconly-Buy icli m-0"></i>
                                    </button>
                                    <div class="hot-deal">
                                        <span>Hot Deals</span>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="shop-left-sidebar.html" class="text-title">
                                        <h5>Eggplant</h5>
                                    </a>
                                    <h5 class="price">$70.21 <span>$65.00</span></h5>
                                    <div class="progress custom-progressbar">
                                        <div class="progress-bar" style="width: 50%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="item">Sold: <span>30 Items</span></h4>
                                    <h4 class="offer">Hurry up offer end in</h4>
                                    <div class="timer" id="clockdiv-1" data-hours="1" data-minutes="2"
                                        data-seconds="3">
                                        <ul>
                                            <li>
                                                <div class="counter">
                                                    <div class="days">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="hours">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="minutes">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="seconds">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="deal-box wow fadeInUp" data-wow-delay="0.1s">
                                <a href="shop-left-sidebar.html" class="category-image order-sm-2">
                                    <img src="assets_client/images/veg-3/cate1/3.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="deal-detail order-sm-1">
                                    <button class="buy-box btn theme-bg-color text-white btn-cart">
                                        <i class="iconly-Buy icli m-0"></i>
                                    </button>
                                    <div class="hot-deal">
                                        <span>Hot Deals</span>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="shop-left-sidebar.html" class="text-title">
                                        <h5>Onion</h5>
                                    </a>
                                    <h5 class="price">$70.21 <span>$65.00</span></h5>
                                    <div class="progress custom-progressbar">
                                        <div class="progress-bar" style="width: 50%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="item">Sold: <span>30 Items</span></h4>
                                    <h4 class="offer">Hurry up offer end in</h4>
                                    <div class="timer" id="clockdiv-2" data-hours="1" data-minutes="2"
                                        data-seconds="3">
                                        <ul>
                                            <li>
                                                <div class="counter">
                                                    <div class="days">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="hours">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="minutes">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="seconds">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="deal-box wow fadeInUp" data-wow-delay="0.15s">
                                <div class="category-image order-sm-2">
                                    <img src="assets_client/images/veg-3/cate1/1.png" class="img-fluid" alt="">
                                </div>

                                <div class="deal-detail order-sm-1">
                                    <button class="buy-box btn theme-bg-color text-white btn-cart">
                                        <i class="iconly-Buy icli m-0"></i>
                                    </button>
                                    <div class="hot-deal">
                                        <span>Hot Deals</span>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="shop-left-sidebar.html" class="text-title">
                                        <h5>Bell pepper</h5>
                                    </a>
                                    <h5 class="price">$70.21 <span>$65.00</span></h5>
                                    <div class="progress custom-progressbar">
                                        <div class="progress-bar" style="width: 50%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="item">Sold: <span>30 Items</span></h4>
                                    <h4 class="offer">Hurry up offer end in</h4>
                                    <div class="timer" id="clockdiv-3" data-hours="1" data-minutes="2"
                                        data-seconds="3">
                                        <ul>
                                            <li>
                                                <div class="counter">
                                                    <div class="days">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="hours">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="minutes">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="seconds">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    <!-- Product Sction Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title title-flex-2">
                <h2>Our Products</h2>
                <ul class="nav nav-tabs tab-style-color-2 tab-style-color" id="myTab">
                    <li class="nav-item">
                        <button class="nav-link btn active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                            type="button">All</button>
                    </li>
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <button class="nav-link btn" id="tab-{{ $category->id }}" data-bs-toggle="tab"
                                data-bs-target="#tab{{ $category->id }}1" type="button">
                                {{ $category->name }}</button>
                        </li>
                    @endforeach




                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row g-8">
                        @foreach ($products as $index => $product)
                            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp">
                                <div class="product-box-4">
                                    <div class="product-image">
                                        <div class="label-flex">

                                            <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </button>
                                        </div>

                                        <a href="{{ url('product/' . $product->id . '', []) }}">
                                            <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
                                        </a>

                                        <ul class="option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i class="iconly-Show icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i class="iconly-Swap icli"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-detail">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">{{ $product->name }}</h5>
                                        </a>

                                        <h5 class="price theme-color">
                                            ${{ $product->price }}.00</del>
                                        </h5>


                                        {{-- <h5 class="price theme-color">$70.21<del>$65.25</del></h5> --}}
                                        <div class="price-qty">
                                            <div class="counter-number">
                                                <div class="counter">
                                                    <div class="qty-left-minus" data-type="minus" data-field="">
                                                        <i class="fa-solid fa-minus"></i>
                                                    </div>
                                                    <input class="form-control input-number qty-input" type="number"
                                                        name="quantity" value="1">
                                                    <div class="qty-right-plus" data-type="plus" data-field="">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="buy-button buy-button-2 btn btn-cart">
                                                <i class="iconly-Buy icli text-white m-0"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                @foreach ($categories as $category)
                    <div class="tab-pane fade" id="tab{{ $category->id }}1" role="tabpanel"
                        aria-labelledby="tab-{{ $category->id }}">
                        <div class="row g-8">
                            {{-- {{ $category->id }} --}}
                            @foreach ($category->getProductsByCategory as $index => $product)
                                <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp">
                                    <div class="product-box-4">
                                        <div class="product-image">

                                            <div class="label-flex">



                                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                                    <i class="iconly-Heart icli"></i>
                                                </button>
                                            </div>

                                            <a href="{{ url('product/' . $product->id . '', []) }}">
                                                <img src="{{ asset($product->image) }}" class="img-fluid"
                                                    alt="">
                                            </a>

                                            <ul class="option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="iconly-Show icli"></i>
                                                    </a>
                                                </li>
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html">
                                                        <i class="iconly-Swap icli"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="product-detail">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <a href="product-left-thumbnail.html">
                                                <h5 class="name">{{ $product->name }}</h5>
                                            </a>
                                            <h5 class="price theme-color">
                                                ${{ $product->price }}.00</del>
                                            </h5>
                                            {{-- <h5 class="price theme-color">$70.21<del>$65.25</del></h5> --}}
                                            <div class="price-qty">
                                                <div class="counter-number">
                                                    <div class="counter">
                                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                                            <i class="fa-solid fa-minus"></i>
                                                        </div>
                                                        <input class="form-control input-number qty-input" type="number"
                                                            name="quantity" value="1">
                                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="buy-button buy-button-2 btn btn-cart">
                                                    <i class="iconly-Buy icli text-white m-0"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Product Sction End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-xl-0 gy-3">
                <div class="col-xl-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="assets_client/images/veg-3/banner/1.png" class="bg-img img-fluid" alt="">
                        <div
                            class="banner-detail banner-details-dark text-white p-center-left w-50 position-relative mend-auto">
                            <div>
                                <h6 class="ls-expanded text-uppercase">Premium</h6>
                                <h3 class="mb-sm-3 mb-1">Fresh Vegetable & Daily Eating</h3>
                                <h4>Get Extra 50% Off</h4>
                                <button class="btn theme-color bg-white btn-md fw-bold mt-sm-3 mt-1 mend-auto"
                                    onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="assets_client/images/veg-3/banner/2.png" class="bg-img img-fluid" alt="">
                        <div class="banner-detail text-dark p-center-left w-50 position-relative mend-auto">
                            <div>
                                <h6 class=" ls-expanded text-uppercase">available</h6>
                                <h3 class="mb-sm-3 mb-1">100% Natural & Healthy Fruits</h3>
                                <h4 class="text-content">Weekend Special</h4>
                                <button class="btn theme-bg-color text-white btn-md fw-bold mt-sm-3 mt-1 mend-auto"
                                    onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <section class="product-section-2">
        <div class="container-fluid-lg">
            <div class="row gy-sm-5 gy-4">
                <div class="col-xxl-3 col-md-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title title-border d-block">
                                <h3>NEW PRODUCTS</h3>
                            </div>

                            <div class="product-category-1 arrow-slider-2">
                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/1.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Tomato</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/2.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Red onion</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/3.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Carrot</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/4.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Potato</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/5.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Broccoli</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/6.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Carrot</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title title-border d-block">
                                <h3>FEATURE PRODUCT</h3>
                            </div>

                            <div class="product-category-1 arrow-slider-2">
                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/7.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Garlic</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/8.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Beetroot</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 pb-1 wow fadeInUp" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/9.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Eggplant</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/10.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Bell pepper</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/11.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Pea</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/12.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Avacado</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title title-border d-block">
                                <h3>BEST SELLER</h3>
                            </div>

                            <div class="product-category-1 arrow-slider-2">
                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/1.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Tomato</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/2.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Red onion</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/3.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Carrot</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/4.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Potato</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/5.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Broccoli</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/6.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Carrot</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title title-border d-block">
                                <h3>ON SELL</h3>
                            </div>

                            <div class="product-category-1 arrow-slider-2">
                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/7.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Garlic</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/8.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Beetroot</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/9.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Eggplant</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="row gy-sm-4 gy-3">
                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/10.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Bell pepper</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/11.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Pea</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="product-box-4 wow fadeInUp pb-1" data-wow-delay="0.1s">
                                                <a href="shop-left-sidebar.html" class="product-image">
                                                    <img src="assets_client/images/veg-3/pro1/12.png" class="img-fluid"
                                                        alt="">
                                                </a>
                                                <div class="product-details">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <a href="product-left-thumbnail.html">
                                                        <h4 class="name">Avacado</h4>
                                                    </a>
                                                    <h5 class="price">$75.20<del>$65.21</del></h5>
                                                    <ul class="option">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to Cart">
                                                            <a href="cart.html">
                                                                <i class="iconly-Buy icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Quick View">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="iconly-Show icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Wishlist">
                                                            <a href="wishlist.html">
                                                                <i class="iconly-Heart icli"></i>
                                                            </a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Compare">
                                                            <a href="compare.html">
                                                                <i class="iconly-Swap icli"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="banner-contain-3 section-b-space section-t-space hover-effect">
                        <img src="assets_client/images/veg-3/banner/3.png" class="img-fluid bg-img" alt="">
                        <div class="banner-detail p-center text-dark position-relative text-center p-0">
                            <div>
                                <h4 class="ls-expanded text-uppercase theme-color">Try Our New</h4>
                                <h2 class="my-3">100% Organic Best Quality Best Price</h2>
                                <h4 class="text-content fw-300">Best Fastkart Food Quality</h4>
                                <button class="btn theme-bg-color mt-sm-4 btn-md mx-auto text-white fw-bold"
                                    onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Sction Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Products</h2>
            </div>

            <div class="slider-6 img-slider slick-slider-1 arrow-slider">
                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/1.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Eggplant</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <div class="discount">
                                    <label>-25%</label>
                                </div>

                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/18.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Ginger</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/2.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Eggplant</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/4.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Potato</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/3.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Onion</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/6.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Broccoli</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/10.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Pea</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <div class="discount">
                                    <label>50%</label>
                                </div>

                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/17.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Cabbage</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <div class="discount">
                                    <label>-25%</label>
                                </div>

                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/13.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Strawberry</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <div class="discount">
                                    <label>50%</label>
                                </div>

                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/11.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Cucumber</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/8.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Apple</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/16.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Blackberry</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/9.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Apple</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/12.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Bell pepper</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/2.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Eggplant</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/4.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Potato</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/6.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Broccoli</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-left-thumbnail.html">
                                <img src="assets_client/images/veg-3/cate1/11.png" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                    <a href="compare.html">
                                        <i class="iconly-Swap icli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                            </ul>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Cucumber</h5>
                            </a>
                            <h5 class="price theme-color">$70.21<del>$65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Sction End -->

    <!-- Blog Section Start -->
    <section class="blog-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Blog</h2>
            </div>

            <div class="slider-3 arrow-slider">
                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="{{ url('blog', []) }}">
                                <img src="assets_client/images/veg-3/blog/1.jpg" class="img-fluid bg-img"
                                    alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="{{ url('blog', []) }}">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="{{ url('blog', []) }}">
                                <img src="assets_client/images/veg-3/blog/2.jpg" class="img-fluid bg-img"
                                    alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Email Marketing</label>
                            <a href="{{ url('blog', []) }}">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="{{ url('blog', []) }}">
                                <img src="assets_client/images/veg-3/blog/3.jpg" class="img-fluid bg-img"
                                    alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="{{ url('blog', []) }}">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="{{ url('blog', []) }}">
                                <img src="assets_client/images/veg-3/blog/1.jpg" class="img-fluid bg-img"
                                    alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="{{ url('blog', []) }}">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-box hover-effect">
                        <img src="assets_client/images/veg-3/shape/background.png" class="img-fluid bg-img"
                            alt="">

                        <div class="row">
                            <div class="col-xxl-8 col-xl-7">
                                <div class="newsletter-detail p-center-left text-white">
                                    <div>
                                        <h2>Subscribe to the newsletter</h2>
                                        <h4>Join our subscribers list to get the latest news, updates and special offers
                                            delivered directly in your inbox.</h4>
                                        <form class="row g-2">
                                            <div class="col-sm-10 col-12">
                                                <div class="newsletter-form">
                                                    <input type="email" class="form-control" id="email"
                                                        placeholder="Enter your email">
                                                    <button type="submit"
                                                        class="btn bg-white theme-color btn-md fw-500
                                                        submit-button">Subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-5 d-xl-block d-none">
                                <div class="shape-box">
                                    <img src="assets_client/images/veg-3/shape/basket.png" alt=""
                                        class="img-fluid image-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: "{{ session('success') }}",
            });
        </script>
    @endif

    <!-- Footer Start -->
@endsection
<!-- index body end -->

<!-- Page Body End -->

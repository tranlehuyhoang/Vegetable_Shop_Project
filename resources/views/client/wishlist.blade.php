@extends('layouts.client')

<!-- index body start -->
@section('content')

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Wishlist</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Wishlist Section Start -->
<section class="wishlist-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-3 g-2">
            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/2.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <h6 class="unit mt-1">250 ml</h6>
                            <h5 class="price">
                                <span class="theme-color">$08.02</span>
                                <del>$15.15</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/3.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                            </a>
                            <h6 class="unit mt-1">350 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$04.33</span>
                                <del>$10.36</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/4.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Snacks</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h5>
                            </a>
                            <h6 class="unit mt-1">570 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$12.52</span>
                                <del>$13.62</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/5.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Snacks</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g</h5>
                            </a>
                            <h6 class="unit mt-1">100 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$10.25</span>
                                <del>$12.36</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/6.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                            </a>
                            <h6 class="unit mt-1">550 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$14.25</span>
                                <del>$16.57</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/7.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <h6 class="unit mt-1">1 Kg</h6>
                            <h5 class="price">
                                <span class="theme-color">$12.68</span>
                                <del>$14.69</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/2.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <h6 class="unit mt-1">250 ml</h6>
                            <h5 class="price">
                                <span class="theme-color">$08.02</span>
                                <del>$15.15</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/3.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                            </a>
                            <h6 class="unit mt-1">350 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$04.33</span>
                                <del>$10.36</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/4.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Snacks</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h5>
                            </a>
                            <h6 class="unit mt-1">570 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$12.52</span>
                                <del>$13.62</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/5.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Snacks</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g</h5>
                            </a>
                            <h6 class="unit mt-1">100 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$10.25</span>
                                <del>$12.36</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                <div class="product-box-3 h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="product-left-thumbnail.html">
                                <img src="assets_client//images/cake/product/6.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="product-header-top">
                                <button class="btn wishlist-button close_button">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product-footer">
                        <div class="product-detail">
                            <span class="span-name">Vegetable</span>
                            <a href="product-left-thumbnail.html">
                                <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                            </a>
                            <h6 class="unit mt-1">550 G</h6>
                            <h5 class="price">
                                <span class="theme-color">$14.25</span>
                                <del>$16.57</del>
                            </h5>

                            <div class="add-to-cart-box bg-white mt-2">
                                <button class="btn btn-add-cart addcart-button">Add
                                    <span class="add-icon bg-light-gray">
                                        <i class="fa-solid fa-plus"></i>
                                    </span>
                                </button>
                                <div class="cart_qty qty-box">
                                    <div class="input-group bg-white">
                                        <button type="button" class="qty-left-minus bg-gray" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <button type="button" class="qty-right-plus bg-gray" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
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
<!-- Wishlist Section End -->
@endsection

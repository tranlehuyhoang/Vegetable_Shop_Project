@extends('layouts.client')

<!-- index body start -->
@section('content')
<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>User Dashboard</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- User Dashboard Section Start -->
<section class="user-dashboard-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-3 col-lg-4">
                <div class="dashboard-left-sidebar">
                    <div class="close-button d-flex d-lg-none">
                        <button class="close-sidebar">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="profile-box">
                        <div class="cover-image">
                            <img src="assets_client/images/inner-page/cover-img.jpg" class="img-fluid blur-up lazyload" alt="">
                        </div>

                        <div class="profile-contain">
                            <div class="profile-image">
                                <div class="position-relative">
                                    <img src="assets_client/images/vendor-page/logo.png" class="blur-up lazyload update_img"
                                        alt="">
                                </div>
                            </div>

                            <div class="profile-name">
                                <h3>Joshua D. Bass</h3>
                                <h6 class="text-content">joshuadbass@rhyta.com</h6>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#pills-tabContent" class="nav-link active" id="pills-dashboard-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-dashboard" role="tab"
                                aria-controls="pills-dashboard" aria-selected="true"><i data-feather="home"></i>
                                DashBoard</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-product-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-product" type="button" role="tab" aria-controls="pills-product"
                                aria-selected="false"><i data-feather="shopping-bag"></i>Products</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order"
                                aria-selected="false"><i data-feather="shopping-bag"></i>Order</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false"><i data-feather="user"></i>
                                Profile</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security"
                                aria-selected="false"><i data-feather="settings"></i>
                                Setting</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-out-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-out" type="button" role="tab" aria-selected="false"><i
                                    data-feather="log-out"></i>
                                Log Out</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xxl-9 col-lg-8">
                <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                    Menu</button>
                <div class="dashboard-right-sidebar">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                            aria-labelledby="pills-dashboard-tab">
                            <div class="dashboard-home">
                                <div class="title">
                                    <h2>My Dashboard</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets_client/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="dashboard-user-name">
                                    <h6 class="text-content">Hello, <b class="text-title">Vicki E. Pope</b></h6>
                                    <p class="text-content">From your My Account Dashboard you have the ability to
                                        view a snapshot of your recent account activity and update your account
                                        information. Select a link below to view or edit information.</p>
                                </div>

                                <div class="total-box">
                                    <div class="row g-sm-4 g-3">
                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="assets_client/images/svg/order.svg" class="img-1 blur-up lazyload"
                                                    alt="">
                                                <img src="assets_client/images/svg/order.svg" class="blur-up lazyload" alt="">
                                                <div class="totle-detail">
                                                    <h5>Total Products</h5>
                                                    <h3>25</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="assets_client/images/svg/pending.svg" class="img-1 blur-up lazyload"
                                                    alt="">
                                                <img src="assets_client/images/svg/pending.svg" class="blur-up lazyload"
                                                    alt="">
                                                <div class="totle-detail">
                                                    <h5>Total Sales</h5>
                                                    <h3>12550</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="assets_client/images/svg/wishlist.svg" class="img-1 blur-up lazyload"
                                                    alt="">
                                                <img src="assets_client/images/svg/wishlist.svg" class="blur-up lazyload"
                                                    alt="">
                                                <div class="totle-detail">
                                                    <h5>Order Pending</h5>
                                                    <h3>36</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-4">
                                    <div class="col-xxl-6">
                                        <div class="dashboard-bg-box">
                                            <div id="chart"></div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="dashboard-bg-box">
                                            <div id="sale"></div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="table-responsive dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Trending Products</h3>
                                            </div>

                                            <table class="table product-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Images</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Sales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="assets_client/images/vegetable/product/1.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Fantasy Crunchy Choco Chip Cookies</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$25.69</h6>
                                                        </td>
                                                        <td>
                                                            <h6>152</h6>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="assets_client/images/vegetable/product/2.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Peanut Butter Bite Premium Butter Cookies 600 g</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$35.36</h6>
                                                        </td>
                                                        <td>
                                                            <h6>34</h6>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="assets_client/images/vegetable/product/3.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Yumitos Chilli Sprinkled Potato Chips 100 g</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$78.55</h6>
                                                        </td>
                                                        <td>
                                                            <h6>78</h6>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="assets_client/images/vegetable/product/4.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>healthy Long Life Toned Milk 1 L</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$32.98</h6>
                                                        </td>
                                                        <td>
                                                            <h6>135</h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="order-tab dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Recent Order</h3>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table order-table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="product-image">#254834</td>
                                                            <td>
                                                                <h6>Choco Chip Cookies</h6>
                                                            </td>
                                                            <td>
                                                                <label class="success">Shipped</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#355678</td>
                                                            <td>
                                                                <h6>Premium Butter Cookies</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#647536</td>
                                                            <td>
                                                                <h6>Sprinkled Potato Chips</h6>
                                                            </td>
                                                            <td>
                                                                <label class="success">Shipped</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#125689</td>
                                                            <td>
                                                                <h6>Milk 1 L</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#215487</td>
                                                            <td>
                                                                <h6>Raw Mutton Leg</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#365474</td>
                                                            <td>
                                                                <h6>Instant Coffee</h6>
                                                            </td>
                                                            <td>
                                                                <label class="success">Shipped</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#368415</td>
                                                            <td>
                                                                <h6>Jowar Stick and Jowar Chips</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-product" role="tabpanel"
                            aria-labelledby="pills-product-tab">
                            <div class="product-tab">
                                <div class="title">
                                    <h2>All Product</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets_client/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="table-responsive dashboard-bg-box">
                                    <table class="table product-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Images</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Sales</th>
                                                <th scope="col">Edit / Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>Fantasy Crunchy Choco Chip Cookies</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$25.69</h6>
                                                </td>
                                                <td>
                                                    <h6>63</h6>
                                                </td>
                                                <td>
                                                    <h6>152</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/2.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>Peanut Butter Bite Premium Butter Cookies 600 g</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$35.36</h6>
                                                </td>
                                                <td>
                                                    <h6>14</h6>
                                                </td>
                                                <td>
                                                    <h6>34</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>Yumitos Chilli Sprinkled Potato Chips 100 g</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$78.55</h6>
                                                </td>
                                                <td>
                                                    <h6>55</h6>
                                                </td>
                                                <td>
                                                    <h6>78</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/4.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>healthy Long Life Toned Milk 1 L</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$32.98</h6>
                                                </td>
                                                <td>
                                                    <h6>69</h6>
                                                </td>
                                                <td>
                                                    <h6>135</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/5.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>Raw Mutton Leg, Packaging 5 Kg</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$36.98</h6>
                                                </td>
                                                <td>
                                                    <h6>35</h6>
                                                </td>
                                                <td>
                                                    <h6>154</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>Cold Brew Coffee Instant Coffee 50 g</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$36.58</h6>
                                                </td>
                                                <td>
                                                    <h6>69</h6>
                                                </td>
                                                <td>
                                                    <h6>168</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="assets_client/images/vegetable/product/7.png" class="img-fluid"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <h6>SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$25.69</h6>
                                                </td>
                                                <td>
                                                    <h6>63</h6>
                                                </td>
                                                <td>
                                                    <h6>152</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <nav class="custome-pagination">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                    <i class="fa-solid fa-angles-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                            <div class="dashboard-order">
                                <div class="title">
                                    <h2>All Order</h2>
                                    <span class="title-leaf title-leaf-gray">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets_client/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="order-tab dashboard-bg-box">
                                    <div class="table-responsive">
                                        <table class="table order-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">#254834</td>
                                                    <td>
                                                        <h6>Fantasy Crunchy Choco Chip Cookies</h6>
                                                    </td>
                                                    <td>
                                                        <label class="success">Shipped</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">#355678</td>
                                                    <td>
                                                        <h6>Peanut Butter Bite Premium Butter Cookies 600 g</h6>
                                                    </td>
                                                    <td>
                                                        <label class="danger">Pending</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">#647536</td>
                                                    <td>
                                                        <h6>Yumitos Chilli Sprinkled Potato Chips 100 g</h6>
                                                    </td>
                                                    <td>
                                                        <label class="success">Shipped</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">#125689</td>
                                                    <td>
                                                        <h6>healthy Long Life Toned Milk 1 L</h6>
                                                    </td>
                                                    <td>
                                                        <label class="danger">Pending</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">#215487</td>
                                                    <td>
                                                        <h6>Raw Mutton Leg, Packaging 5 Kg</h6>
                                                    </td>
                                                    <td>
                                                        <label class="danger">Pending</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">#365474</td>
                                                    <td>
                                                        <h6>Cold Brew Coffee Instant Coffee 50 g</h6>
                                                    </td>
                                                    <td>
                                                        <label class="success">Shipped</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">#368415</td>
                                                    <td>
                                                        <h6>SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h6>
                                                    </td>
                                                    <td>
                                                        <label class="danger">Pending</label>
                                                    </td>
                                                    <td>
                                                        <h6>$25.69</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav class="custome-pagination">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                    <i class="fa-solid fa-angles-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="dashboard-profile">
                                <div class="title">
                                    <h2>My Profile</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets_client/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="profile-tab dashboard-bg-box">
                                    <div class="dashboard-title dashboard-flex">
                                        <h3>Profile Name</h3>
                                        <button class="btn btn-sm theme-bg-color text-white" data-bs-toggle="modal"
                                            data-bs-target="#edit-profile">Edit Profile</button>
                                    </div>

                                    <ul>
                                        <li>
                                            <h5>Company Name :</h5>
                                            <h5>Grocery Store</h5>
                                        </li>
                                        <li>
                                            <h5>Email Address :</h5>
                                            <h5>joshuadbass@rhyta.com</h5>
                                        </li>
                                        <li>
                                            <h5>Country / Region :</h5>
                                            <h5>107 Veltri Drive</h5>
                                        </li>

                                        <li>
                                            <h5>Year Established :</h5>
                                            <h5>2022</h5>
                                        </li>

                                        <li>
                                            <h5>Total Employees :</h5>
                                            <h5>154 - 360 People</h5>
                                        </li>
                                        <li>
                                            <h5>Category :</h5>
                                            <h5>Grocery</h5>
                                        </li>

                                        <li>
                                            <h5>Street Address :</h5>
                                            <h5>234 High St</h5>
                                        </li>

                                        <li>
                                            <h5>City / State :</h5>
                                            <h5>107 Veltri Drive</h5>
                                        </li>

                                        <li>
                                            <h5>Zip :</h5>
                                            <h5>B23 6SN</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-security" role="tabpanel"
                            aria-labelledby="pills-security-tab">
                            <div class="dashboard-privacy">
                                <div class="title">
                                    <h2>My Setting</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="assets_client/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Notifications</h3>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="desktop" name="desktop"
                                                checked>
                                            <label class="form-check-label ms-2" for="desktop">Show
                                                Desktop Notifications</label>
                                        </div>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="enable" name="desktop">
                                            <label class="form-check-label ms-2" for="enable">Enable
                                                Notifications</label>
                                        </div>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="activity" name="desktop">
                                            <label class="form-check-label ms-2" for="activity">Get
                                                notification for my own activity</label>
                                        </div>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="dnd" name="desktop">
                                            <label class="form-check-label ms-2" for="dnd">DND</label>
                                        </div>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Save
                                        Changes</button>
                                </div>

                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Deactivate Account</h3>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="concern" name="concern">
                                            <label class="form-check-label ms-2" for="concern">I have a privacy
                                                concern</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="temporary" name="concern">
                                            <label class="form-check-label ms-2" for="temporary">This is
                                                temporary</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="other" name="concern">
                                            <label class="form-check-label ms-2" for="other">other</label>
                                        </div>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Deactivate
                                        Account</button>
                                </div>

                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Delete Account</h3>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="usable" name="usable">
                                            <label class="form-check-label ms-2" for="usable">No longer
                                                usable</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="account" name="usable">
                                            <label class="form-check-label ms-2" for="account">Want to switch on
                                                other
                                                account</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="other-2" name="usable">
                                            <label class="form-check-label ms-2" for="other-2">Other</label>
                                        </div>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Delete My
                                        Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- User Dashboard Section End -->
@endsection

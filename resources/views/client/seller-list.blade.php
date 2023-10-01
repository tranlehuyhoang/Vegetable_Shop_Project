@extends('layouts.client')

<!-- index body start -->
@section('content')

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Seller Grid</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Seller Grid</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Grid Section Start -->
<section class="seller-grid-section">
    <div class="container-fluid-lg">
        <div class="row g-4">
            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/1.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Nature Food</h3>
                            </div>
                            <label class="product-label">380 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 20 Tomoka Oaks Blvd</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (386) 677-5931</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/2.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Combine Food</h3>
                            </div>
                            <label class="product-label">50 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 4838 N Smalley Ave</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (816) 453-6955</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/3.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Amara</h3>
                            </div>
                            <label class="product-label">312 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 3625 Metro Pkwy</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (210) 260-2517</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/4.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Denovo Meats</h3>
                            </div>
                            <label class="product-label">126 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 6185 S Saginaw St</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (866) 413-2382</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/5.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Meating Place</h3>
                            </div>
                            <label class="product-label">258 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 2400 4th St SW</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (641) 424-2605</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/6.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Aven</h3>
                            </div>
                            <label class="product-label">69 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 32 Childwall Abbey Road</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (414) 352-3920</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/7.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Organic Corn</h3>
                            </div>
                            <label class="product-label">360 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 8267 S South Chicago Avenue</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (773) 731-2500</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/1.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Nature Food</h3>
                            </div>
                            <label class="product-label">380 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 20 Tomoka Oaks Blvd</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (386) 677-5931</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="seller-grid-box seller-grid-box-1">
                    <div class="grid-image">
                        <div class="image">
                            <img src="assets_client/images/vendor-page/logo/2.png" class="img-fluid" alt="">
                        </div>

                        <div class="contain-name">
                            <div>
                                <div class="since-number">
                                    <h6>Since 2022</h6>
                                    <div class="product-rating">
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

                                        <h6 class="theme-color ms-2">(26)</h6>
                                    </div>
                                </div>
                                <h3>Combine Food</h3>
                            </div>
                            <label class="product-label">75 Products</label>
                        </div>
                    </div>

                    <div class="grid-contain">
                        <div class="seller-contact-details">
                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-map-pin"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Address: <span> 9950 Woodlands Pkwy #400</span></h5>
                                </div>
                            </div>

                            <div class="saller-contact">
                                <div class="seller-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>

                                <div class="contact-detail">
                                    <h5>Conact Us: <span> (281) 298-9684</span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="seller-category">
                            <button onclick="location.href = 'seller-detail';"
                                class="btn btn-sm theme-bg-color text-white fw-bold">Visit Store <i
                                    class="fa-solid fa-arrow-right-long ms-2"></i></button>
                            <ul class="product-image">
                                <li>
                                    <img src="assets_client/images/vegetable/product/6.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/3.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/9.png" class="img-fluid" alt="">
                                </li>
                                <li>
                                    <img src="assets_client/images/vegetable/product/1.png" class="img-fluid" alt="">
                                </li>
                                <li>+63</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
</section>
<!-- Grid Section End -->

<!-- Newsletter Section Start -->
<section class="newsletter-section section-b-space">
    <div class="container-fluid-lg">
        <div class="newsletter-box newsletter-box-2" style="background-image: url(assets_client/images/newsletter/1.jpg);">
            <div class="newsletter-contain py-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                            <div class="newsletter-detail">
                                <h2>Join our newsletter and get...</h2>
                                <h5>$20 discount for your first order</h5>
                                <div class="input-box">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Your Email">
                                    <i class="fa-solid fa-envelope arrow"></i>
                                    <button class="sub-btn  btn-animation">
                                        <span class="d-sm-block d-none">Subscribe</span>
                                        <i class="fa-solid fa-arrow-right icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
 
@extends('layouts.client')

<!-- index body start -->
@section('content')

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>404 Page</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">404</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- 404 Section Start -->
<section class="section-404 section-lg-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="image-404">
                    <img src="assets_client/images/inner-page/404.png" class="img-fluid blur-up lazyload" alt="">
                </div>
            </div>

            <div class="col-12">
                <div class="contain-404">
                    <h3 class="text-content">The page you are looking for could not be found. The link to this
                        address may be outdated or we may have moved the since you last bookmarked it.</h3>
                    <button onclick="location.href = '/';"
                        class="btn btn-md text-white theme-bg-color mt-4 mx-auto">Back To Home Screen</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 Section End -->

<!-- Footer Section Start -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
 
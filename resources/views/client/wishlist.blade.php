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
                @foreach ($wishlists as $wishlist)
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain">
                        <div class="product-box-3 h-100">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="{{ url('product/' . $wishlist->product . '', []) }}">
                                        <img src="{{ url($wishlist->products->image, []) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <div class="product-header-top">
                                        <button value="{{ $wishlist->id }}" class="btn wishlist-button close_button">
                                            <i data-feather="x"></i>
                                        </button>
                                        <!-- jQuery -->
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                                        <!-- Feather Icons -->
                                        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                // Sử dụng sự kiện click để bắt sự kiện khi nút được bấm
                                                $('.wishlist-button').click(function() {
                                                    var wishlistId = $(this).val(); // Lấy giá trị từ thuộc tính value của nút

                                                    // Gửi yêu cầu AJAX GET
                                                    $.ajax({
                                                        url: '/wishlist/' + wishlistId + '/delete',
                                                        type: 'GET',
                                                        success: function(response) {
                                                            // Xử lý phản hồi thành công (nếu cần)
                                                            console.log(response);
                                                        },
                                                        error: function(xhr) {
                                                            // Xử lý lỗi (nếu có)
                                                            console.log(xhr.responseText);
                                                        }
                                                    });
                                                });

                                                // Feather Icons - Render icons
                                                feather.replace();
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div class="product-detail">
                                    <span class="span-name">{{ $wishlist->products->categorys->name }}</span>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">{{ $wishlist->products->name }}</h5>
                                    </a>
                                    <h6 class="unit mt-1">250 ml</h6>
                                    <h5 class="price">
                                        <span class="theme-color">${{ $wishlist->products->price }}.00</span>

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
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
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
                @endforeach

            </div>
        </div>
    </section>
    <!-- Wishlist Section End -->
@endsection

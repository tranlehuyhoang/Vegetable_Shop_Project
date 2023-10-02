<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\InvoiceController;
use App\Http\Controllers\client\OrderController;
use App\Http\Controllers\client\ProductDetailController;
use App\Http\Controllers\client\RegistrationController;
use App\Http\Controllers\client\ReviewController;
use App\Http\Controllers\client\SendMailController;
use App\Http\Controllers\client\SessionsController;
use App\Http\Controllers\client\UserDashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('login', 'store');
    Route::get('logout', 'destroy');
});

Route::controller(ProductDetailController::class)->group(function () {
    Route::get('/product/{product} ', 'detail');
});

Route::controller(CartController::class)->middleware('auth')->group(function () {
    Route::get('/cart', 'index');
    Route::post('/cart/create', 'add');
    Route::get('/cart/{cart}/delete', 'delete');
});

Route::controller(OrderController::class)->middleware('auth')->group(function () {
    Route::get('/checkout', 'index');
    Route::post('/checkout/create', 'create');
    Route::post('/checkout/re_payment', 're_payment');
});
Route::controller(UserDashboardController::class)->middleware('auth')->group(function () {
    Route::get('/user', 'index');
});
Route::controller(InvoiceController::class)->middleware('auth')->group(function () {
    Route::get('/invoice/{cart_id}', 'index');
    Route::get('/order-success/{cart_id}', 'order');
});
Route::controller(ReviewController::class)->middleware('auth')->group(function () {
    Route::post('/review/create', 'create');
});
Route::controller(SendMailController::class)->middleware('auth')->group(function () {
    Route::get('/send', 'index');
});

Route::get('/404', function () {
    return view('client.404');
});

Route::get('/blog', function () {
    return view('client.blog');
});




Route::get('/compare', function () {
    return view('client.compare');
});
Route::get('/forgot', function () {
    return view('client.forgot');
});


Route::get('/order-success', function () {
    return view('client.order-success');
});

Route::get('/shop', function () {
    return view('client.shop');
});

Route::get('/seller-become', function () {
    return view('client.seller-become');
});
Route::get('/seller-dashboard', function () {
    return view('client.seller-dashboard');
});
Route::get('/seller-detail', function () {
    return view('client.seller-detail');
});
Route::get('/seller-list', function () {
    return view('client.seller-list');
});
Route::get('/wishlist', function () {
    return view('client.wishlist');
});
Route::controller(RegistrationController::class)->middleware('guest')->group(function () {
    Route::get('register', 'create');
    Route::post('register', 'store');
});
Route::controller(SessionsController::class)->group(function () {
    Route::get('login', 'create')->middleware('guest');
    Route::post('login', 'store');
    Route::get('logout', 'destroy');
});

Route::controller(AdminLoginController::class)->group(function () {
    Route::get('admin/login', 'index')->middleware('guest')->name('admin.login');
    Route::post('admin/login', 'login');
    Route::get('admin/logout', 'destroy');
});




Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/', function () {
        return view('admin.home');
    });

    Route::get('/category', function () {
        return view('admin.category');
    });
    Route::get('/category/create', function () {
        return view('admin.category-create');
    });
    Route::get('/attribute', function () {
        return view('admin.attribute');
    });
    Route::get('/attribute/create', function () {
        return view('admin.attribute-create');
    });
    Route::get('/user', function () {
        return view('admin.all-users');
    });
    Route::get('/user/create', function () {
        return view('admin.user-create');
    });
    Route::get('/attribute/create', function () {
        return view('admin.attribute-create');
    });
    Route::get('/role', function () {
        return view('admin.role');
    });
    Route::get('/role/create', function () {
        return view('admin.role-create');
    });

    Route::get('/order-list', function () {
        return view('admin.order-list');
    });
    Route::get('/coupon-list', function () {
        return view('admin.coupon-list');
    });
    Route::get('/coupon/create', function () {
        return view('admin.coupon-create');
    });
    Route::get('/product-review', function () {
        return view('admin.product-review');
    });
    Route::controller(MediaController::class)->group(function () {
        Route::get('/media', 'index');
        Route::post('/media', 'store');
        Route::post('/medias', 'deleteMultiple');
        Route::get('media/{media}/delete', 'destroy');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::post('/category', 'store');
        Route::get('/category/create', 'create');
        Route::get('media/{media}/delete', 'destroy');
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index');
        Route::post('/product', 'store');
        Route::get('/product/create', 'create');
        Route::get('product/{product}/delete', 'destroy');
    });
});

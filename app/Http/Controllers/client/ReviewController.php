<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        // dd($request);
        // Lấy dữ liệu từ request
        $user = auth()->user()->id;

        $rate = $request->input('rating');
        $product = $request->input('product');
        $description = $request->input('description');


        // Kiểm tra sự tồn tại của mục trong giỏ hàng
        $existingCart = Cart::where('user', $user)
            ->where('product', $product)
            ->where('status', '!=', 0)
            ->first();

        if ($existingCart) {
            $review = new Review();
            $review->user = $user;
            $review->rate = $rate;
            $review->product = $product;
            $review->description = $description;

            // Lưu đối tượng Review vào cơ sở dữ liệu
            $review->save();
            return redirect()->back()->with('success', 'Review added successfully');
        } else {
            return redirect()->back()->with('success', 'Review not successfully');
        }


        // Tạo đối tượng Review


        // Trả về kết quả thành công hoặc thông báo lỗi
    }
}

<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Lấy người dùng đã xác thực
        $user = auth()->user();

        // Kiểm tra người dùng đã đăng nhập hay chưa
        if ($user) {
            // Lấy giỏ hàng của người dùng hiện tại có trường "order" bằng 0
            $carts = Cart::where('user', $user->id)
                ->where('status', 0)
                ->orderByDesc('id')
                ->get();

            // Tính tổng giá trị của từng sản phẩm trong giỏ hàng
            foreach ($carts as $cart) {
                $totalPrice = $cart->totalPrice + ($cart->products->price * $cart->quantity);
                $cart->totalPrice = $totalPrice;
            }
        } else {
            // Người dùng chưa đăng nhập, không có giỏ hàng
            $carts = collect();
        }

        return view('client.cart', compact('carts'));
    }
    public function add(Request $request)
    {
        // Lấy dữ liệu từ request
        // dd($request);
        // Kiểm tra sự tồn tại của mục trong giỏ hàng
        $cart = new Cart();
        $cart->user =    auth()->user()->id;;
        $cart->quantity = $request->input('quantity_cart');
        $cart->product = $request->input('product');


        // Lưu hình ảnh vào thư mục public/images (cần tạo thư mục nếu chưa có)
        $cart->save();


        // Trả về kết quả thành công hoặc thông báo lỗi
        return redirect('cart');
    }
}
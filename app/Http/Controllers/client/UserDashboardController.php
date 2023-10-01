<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Unauthorized');
        }

        $carts = Cart::where('user', $user->id)
            ->where('status', '!=', 0)
            ->orderByDesc('id')
            ->get();
        $queryParams = $request->input('vnp_ResponseCode');

        if ($request->filled('vnp_TxnRef')) {
            // Giá trị của 'vnp_TxnRef' tồn tại trong request
            $vnp_TxnRef = $request->input('vnp_TxnRef');
            if ($queryParams == '00') {
                $order = Order::where('user', $user->id)
                    ->where('payment', 0)
                    ->where('code', $vnp_TxnRef)
                    ->orderByDesc('id')
                    ->update(['payment' => 1]);
                return redirect('invoice/' . $vnp_TxnRef . '');
            } else {
                return redirect('checkout');
            }

            // Tiếp tục xử lý với giá trị 'vnp_TxnRef' ở đây
        } else {
            $orders = Order::getAllOrders();
            // Giá trị của 'vnp_TxnRef' không tồn tại trong request
            // Xử lý khi 'vnp_TxnRef' không tồn tại ở đây
            return view('client.user-dashboard', compact('orders'));
        }

        // dd($request);
    }
}

<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\InvoiOrderMailable;
use Illuminate\Support\Facades\Mail; // Import the Mail class
class InvoiceController extends Controller
{
    public function index(int $code_order)
    {

        $user = Auth::user();

        if (!$user) {
            abort(403, 'Unauthorized');
        }

        $order = Order::where('code', $code_order)
            ->where('payment', 1)
            ->first();
        $carts = Cart::where('status', $order->id)
            ->orderByDesc('id')
            ->get();

        $code_order;
        Mail::to($user->email)->send(new InvoiOrderMailable($code_order, $order, $carts, $user->email));


        return view('client.invoice', compact('user', 'carts', 'order'));
    }
    public function order(int $code_order)
    {
        $order = Order::where('code', $code_order)
            ->where('payment', 0)
            ->first();
        $carts = Cart::where('status', $order->id)
            ->orderByDesc('id')
            ->get();

        return view('client.order-success', compact('carts', 'order'));
    }
}

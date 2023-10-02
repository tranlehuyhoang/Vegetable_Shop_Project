<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Mail\InvoiOrderMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail; // Import the Mail class

class SendMailController extends Controller
{
    public function index(int $code_order)
    {

        $order = 'faewfaefaef';
        Mail::to('trangiangzxc@gmail.com')->send(new InvoiOrderMailable($order));

        return view('client.order-success', compact('carts', 'order'));
    }
}

<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::orderByDesc('id')->get();
        return view('client.wishlist', compact('wishlists'));
        // return view('client.wishlist');
    }

    public function store(Request $request)
    {
        // Kiểm tra dữ liệu được gửi lên từ form
        $validatedData = $request->validate([
            'product' => 'required',
        ]);

        // Kiểm tra xem đã tồn tại wishlist với cùng user và product chưa
        $wishlist = Wishlist::firstOrCreate([
            'user' => auth()->user()->id,
            'product' => $validatedData['product'],
        ]);

        if ($wishlist->wasRecentlyCreated) {
            return redirect()->back()->with('success', 'Thêm Wishlist thành công !');
        } else {
            return redirect()->back()->with('error', 'Wishlist đã tồn tại!');
        }
    }
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return  redirect()->back();
        // return view('client.wishlist');
    }
}

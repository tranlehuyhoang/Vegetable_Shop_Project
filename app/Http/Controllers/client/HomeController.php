<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        $products = Product::orderByDesc('id')->get();
        return view('client.home', compact('categories', 'products'));
    }
}

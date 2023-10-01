<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('id')->get();
        return view('admin.product.product', compact('products'));
    }
    public function create()
    {
        $categories = Category::orderByDesc('id')->get();

        return view('admin.product.product-create', compact('categories'));
    }
    public function store(Request $request)
    {
        // dd($request);
        // Kiểm tra dữ liệu được gửi lên từ form
        $validatedData = $request->validate([
            'name' => 'required|string',
            'category' => 'required',
            'image' => 'required|image',
            'price' => 'required',
        ]);

        // Lưu category vào cơ sở dữ liệu
        $category = new Product();
        $category->name = $validatedData['name'];
        $category->category = $validatedData['category'];
        $category->price = $validatedData['price'];

        // Lưu hình ảnh vào thư mục public/images (cần tạo thư mục nếu chưa có)


        // Lấy tên file từ đường dẫn lưu trữ
        if ($request->hasFile('image')) {
            $productImage = $request->file('image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move(public_path('images'), $productImageName);
            $category->image = 'images/' . $productImageName;
        }


        $category->save();

        return  redirect('admin/product');
    }
}

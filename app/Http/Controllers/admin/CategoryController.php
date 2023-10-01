<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('admin.category.category', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.category-create');
    }
    public function store(Request $request)
    {
        // Kiểm tra dữ liệu được gửi lên từ form
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
        ]);

        // Lưu category vào cơ sở dữ liệu
        $category = new Category();
        $category->name = $validatedData['name'];

        // Lưu hình ảnh vào thư mục public/images (cần tạo thư mục nếu chưa có)


        // Lấy tên file từ đường dẫn lưu trữ
        if ($request->hasFile('image')) {
            $productImage = $request->file('image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move(public_path('images'), $productImageName);
            $category->image = 'images/' . $productImageName;
        }


        $category->save();

        return view('admin.category.category');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::all();

        return view('admin.media', compact('medias'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $i = 1;
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i . '.' . $extension;
                $uploadPath = 'media';
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . '/' . $filename;

                // Lưu đường dẫn ảnh vào cơ sở dữ liệu
                Media::create([
                    'image' => $finalImagePathName,
                ]);

                $i++;
            }
            return redirect('admin/media')->with('message', 'brand Deleted Successfully');
        }
        return redirect('admin/media')->with('message', 'brand Deleted Successfully');
    }

    public function destroy($id)
    {
        // Tìm media theo ID
        $media = Media::findOrFail($id);

        // Xóa tệp ảnh từ thư mục public/media
        $filePath = public_path($media->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Xóa media từ cơ sở dữ liệu
        $media->delete();

        return redirect('admin/media')->with('message', 'brand Deleted Successfully');
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids');

        // Xóa các media có ID trong mảng
        $mediaList = Media::whereIn('id', $ids)->get();

        // Lặp qua danh sách media và xóa từng media cùng với tệp liên quan
        foreach ($mediaList as $media) {
            $filePath = public_path($media->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $media->delete();
        }

        // Trả về phản hồi thành công
        return redirect('admin/media')->with('message', 'Brand Deleted Successfully');
    }
}

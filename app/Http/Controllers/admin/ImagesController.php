<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Images;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
{
    $gallery_id = null;
    $images = Images::orderByDesc('created_at')->get();
    return view('admin.images.index', ['images' => $images, 'gallery_id' => $gallery_id]);
}
    public function list($gallery_id)
{
    $gallery = Gallery::findOrFail($gallery_id);
    $images = json_decode($gallery->multipleimages, true);
    return view('admin.images.index', ['images' => $images]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{

    return view('admin.images.create');
}


    public function store(Request $request)
{
    $request->validate([
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
    ]);

    foreach ($request->file('images') as $image) {

        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/images/', $imageName);
        $imageModel = new Images();
        $imageModel->title = $imageName;

        if ($request->filled('gallery_id')) {
            $imageModel->gallery_id = $request->input('gallery_id');
        }

        if ($imageModel->save()) {
            dd($imageModel);
            Toastr::success('Image uploaded successfully', 'Inserted');
        } else {
            Toastr::error('Failed to save image');
        }

    }

    // Redirect back to the previous page
    return redirect()->route('images.index');
}

    public function destroy(string $id)
    {
        $images=Images::findOrFail($id);
        $imagePath = $images->news_img;
        $fullPath = public_path('storage/images/'.$imagePath);
        if (file_exists($fullPath)) {
            if (is_file($fullPath)) {
                unlink($fullPath);
            }
        }
        $images->delete();
        toastr::success('Deleted Successfully');
        return redirect(route('images.index'));
    }
}

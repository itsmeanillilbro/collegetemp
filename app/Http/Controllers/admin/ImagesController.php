<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Images;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
{
    $galleryId = $request->input('gallery_id');

    if ($galleryId) {
        $images = Images::where('gallery_id', $galleryId)->paginate(15);
    } else {
        $images = Images::paginate(15);
    }

    return view('admin.images.index', ['images' => $images]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('images')){
            $images = $request->file('images');
            $imageName = time() . '.' . $images->getClientOriginalExtension();

            $images->storeAs('public/images/', $imageName);
            $data['images'] = $imageName;
            }

            $images = new Images();

            if ($images->create($data)) {
                Toastr::success('Images inserted successfully','Inserted');
                return redirect()->route('images.index');
            } else {
                Toastr::error('Error');
                return redirect()->back();
            }
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

<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::orderByDesc('created_at')->paginate(10);
        return view('admin.gallery.index', ['gallery'=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['author'] = Auth::user()->name;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/images/', $imageName);
            $data['image'] = $imageName;
        }

        $gallery = new Gallery();
        $gallery->status = 'draft';

        if ($gallery->create($data)) {
            if ($request->hasFile('multipleimages')) {
                $images = $request->file('multipleimages');
                $imageNames = [];

                foreach ($images as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/images/', $imageName);
                    $imageNames[] = $imageName; // Store only image names
                }

                // Convert array of image names to string
                $data['multipleimages'] = implode(',', $imageNames);
            }

            Toastr::success('Images inserted successfully', 'Inserted');
            return redirect()->route('gallery.index');
        } else {
            Toastr::error('Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        return view('admin.gallery.edit',['gallery'=>$gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery $gallery)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/', $imageName);
            $data['image'] = $imageName;
        }

        $gallery->update($data);
        toastr::success('Updated Successfully');
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery=Gallery::findOrFail($id);
        $imagePath = $gallery->news_img;
        $fullPath = public_path('storage/images/'.$imagePath);
        if (file_exists($fullPath)) {
            if (is_file($fullPath)) {
                unlink($fullPath);
            }
        }
        $gallery->delete();
        toastr::success('Deleted Successfully');
        return redirect(route('gallery.index'));
    }

    public function publish($id){
        $gallery = Gallery::find($id);
        $gallery->status='published';
        $gallery->save();
        return redirect()->route('gallery.index');
    }
}

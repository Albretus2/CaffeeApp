<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Gallery $gallery, Request $request)
    {
        $gallery = Gallery::latest();
        $data = $request->searcing;

        if ($request->searcing) {
            $gallery->where('title', 'like', '%' . $data . '%');
        }

        return view('dashboard.admin.gallery.index', [
            'gallery' => $gallery->get(),
            'image' => $gallery,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:20',
            'image' => 'image|file|max:5000|required'
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('galleryImages');
        }

        $validateData['user_id'] = auth()->user()->id;

        Gallery::create($validateData);

        return redirect('/dashboard/gallery')->with('toast_success', 'new image has added');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'file|max:5000|image|required'
        ]);

        if ($request->file('image')) {
            if ($gallery->image != null) {
                Storage::delete($gallery->image);
            }

            $validateData['image'] = $request->file('image')->store('galleryImages');
        }
        $validateData['user_id'] = auth()->user()->id;

        Gallery::where('id', $gallery->id)->update($validateData);

        return redirect('/dashboard/gallery')->with('toast_success', 'image has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }

        Gallery::destroy($gallery->id);
        return redirect('/dashboard/gallery')->with('toast_success', 'Image has been delete');
    }
}

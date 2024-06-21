<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Property;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Property::all();
        return view('admin.gallery.create', compact(['properties']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $gallery = Gallery::create([
            'title' => $request->title,
            'property_id' => $request->property_id,
            'gallery_image' => 'gallery_image.webp',
            'gallery_thumbnail_image' => 'gallery_thumbnail_image.webp',
            'is_mix' => $request->has('is_mix') ? 1 : 0,
            'is_ext' => $request->has('is_ext') ? 1 : 0,
            'is_int' => $request->has('is_int') ? 1 : 0,
            'is_amenity' => $request->has('is_amenity') ? 1 : 0,
            
        ]);

        if($request->hasFile('gallery_image')){
            $gallery_image = $request->gallery_image;
            $gallery_image_new_name = time() . '.' . $gallery_image->getClientOriginalExtension();
            $gallery_image->move(public_path('images/gallery_images/'), $gallery_image_new_name);
            $gallery->gallery_image = $gallery_image_new_name;
            $gallery->save();
        }

        if($request->hasFile('gallery_thumbnail_image')){
            $gallery_thumbnail_image = $request->gallery_thumbnail_image;
            $gallery_thumbnail_image_new_name = time() . '.' . $gallery_thumbnail_image->getClientOriginalExtension();
            $gallery_thumbnail_image->move(public_path('images/gallery_thumbnail_images/'), $gallery_thumbnail_image_new_name);
            $gallery->gallery_thumbnail_image = $gallery_thumbnail_image_new_name;
            $gallery->save();
        }

        

        Session::flash('success', 'Gallery created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $properties = Property::all();
        return view('admin.gallery.edit', compact('gallery','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {

        $gallery->property_id = $request->property_id;

        if($request->hasFile('gallery_image')){
            $gallery_image = $request->gallery_image;
            $gallery_image_new_name = time() . '.' . $gallery_image->getClientOriginalExtension();
            if(!empty($gallery->gallery_image)){
                unlink(public_path('images/gallery_images/'.$gallery->gallery_image));
            }
            
            $gallery_image->move(public_path('images/gallery_images/'), $gallery_image_new_name);
            $gallery->gallery_image = $gallery_image_new_name;
        }

        if($request->hasFile('gallery_thumbnail_image')){
            $gallery_thumbnail_image = $request->gallery_thumbnail_image;
            $gallery_thumbnail_image_new_name = time() . '.' . $gallery_thumbnail_image->getClientOriginalExtension();
            if(!empty($gallery->gallery_thumbnail_image)){
                unlink(public_path('images/gallery_thumbnail_images/'.$gallery->gallery_thumbnail_image));
            }
            $gallery_thumbnail_image->move(public_path('images/gallery_thumbnail_images/'), $gallery_thumbnail_image_new_name);
            $gallery->gallery_thumbnail_image = $gallery_thumbnail_image_new_name;
        }


        $gallery->is_mix = $request->has('is_mix') ? 1 : 0;
        $gallery->is_ext = $request->has('is_ext') ? 1 : 0;
        $gallery->is_int = $request->has('is_int') ? 1 : 0;
        $gallery->is_amenity = $request->has('is_amenity') ? 1 : 0;


        $gallery->save();

        Session::flash('success', 'Gallery updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if($gallery){
            if(!empty($gallery->gallery_image)){
                unlink(public_path('images/gallery_images/'.$gallery->gallery_image));
            }
            if(!empty($gallery->gallery_thumbnail_image)){
                unlink(public_path('images/gallery_thumbnail_images/'.$gallery->gallery_thumbnail_image));
            }

            $gallery->delete();

            Session::flash('success', 'Gallery deleted successfully');
        }

        return redirect()->back();
    }
}

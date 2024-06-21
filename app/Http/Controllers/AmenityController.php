<?php

namespace App\Http\Controllers;

use App\Amenity;
use App\Property;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenities = Amenity::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.amenity.index', compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $properties = Property::all();
        return view('admin.amenity.create', compact(['properties']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $amenity = Amenity::create([
            
            'property_id' => $request->property_id,
            'amenity_image' => 'amenity_image.webp',
            'heading_text' => $request->heading_text,
            'sub_heading_text' => $request->sub_heading_text,

            
            
        ]);

        if($request->hasFile('amenity_image')){
            $amenity_image = $request->amenity_image;
            $amenity_image_new_name = time() . '.' . $amenity_image->getClientOriginalExtension();
            $amenity_image->move(public_path('images/amenity_images/'), $amenity_image_new_name);
            $amenity->amenity_image = $amenity_image_new_name;
            $amenity->save();
        }

        

        Session::flash('success', 'Amenity created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function show(Amenity $amenity)
    {
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenity $amenity)
    {
        $properties = Property::all();
        return view('admin.amenity.edit', compact('amenity','properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amenity $amenity)
    {

        $amenity->property_id = $request->property_id;

        if($request->hasFile('amenity_image')){
            $amenity_image = $request->amenity_image;
            $amenity_image_new_name = time() . '.' . $amenity_image->getClientOriginalExtension();
            if(!empty($amenity->amenity_image)){
                unlink(public_path('images/amenity_images/'.$amenity->amenity_image));
            }
            
            $amenity_image->move(public_path('images/amenity_images/'), $amenity_image_new_name);
            $amenity->amenity_image = $amenity_image_new_name;
        }

        


        $amenity->heading_text = $request->heading_text;
        $amenity->sub_heading_text = $request->sub_heading_text;


        $amenity->save();

        Session::flash('success', 'Amenity updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amenity $amenity)
    {
        if($amenity){
            if(!empty($amenity->amenity_image)){
                unlink(public_path('images/amenity_images/'.$amenity->amenity_image));
            }
            

            $amenity->delete();

            Session::flash('success', 'Amenity deleted successfully');
        }

        return redirect()->back();
    }
}

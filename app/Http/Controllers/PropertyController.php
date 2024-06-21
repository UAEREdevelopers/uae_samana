<?php

namespace App\Http\Controllers;

use Session;
use App\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
           
        ]);

        $property = Property::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'no_of_beds' => $request->no_of_beds,
            'price' => $request->price,
            'payment_construction' => $request->payment_construction,
            'payment_handover' => $request->payment_handover,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'is_show' => $request->has('is_show') ? 1 : 0,
            
        ]);

        

        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->thumbnail_image;
            $thumbnail_image_new_name = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('images/thumbnail_images/'), $thumbnail_image_new_name);
            $property->thumbnail_image = $thumbnail_image_new_name;
            $property->save();
        }

        if($request->hasFile('carousel_image')){
            $carousel_image = $request->carousel_image;
            $carousel_image_new_name = time() . '.' . $carousel_image->getClientOriginalExtension();
            $carousel_image->move(public_path('images/carousel_images/'), $carousel_image_new_name);
            $property->carousel_image = $carousel_image_new_name;
            $property->save();
        }

        if($request->hasFile('carousel_image_mobile')){
            $carousel_image_mobile = $request->carousel_image_mobile;
            $carousel_image_mobile_new_name = time() . '.' . $carousel_image_mobile->getClientOriginalExtension();
            $carousel_image_mobile->move(public_path('images/carousel_image_mobiles/'), $carousel_image_mobile_new_name);
            $property->carousel_image_mobile = $carousel_image_mobile_new_name;
            $property->save();
        }

        if($request->hasFile('preview_image')){
            $preview_image = $request->preview_image;
            $preview_image_new_name = time() . '.' . $preview_image->getClientOriginalExtension();
            $preview_image->move(public_path('images/preview_images/'), $preview_image_new_name);
            $property->preview_image = $preview_image_new_name;
            $property->save();
        }

        if($request->hasFile('property_video')){
            $property_video = $request->property_video;
            $property_video_new_name = time() . '.' . $property_video->getClientOriginalExtension();
            $property_video->move(public_path('images/property_videos/'), $property_video_new_name);
            $property->property_video =$property_video_new_name;
            $property->save();
        }

        if($request->hasFile('brochure_pdf')){
            $brochure_pdf = $request->brochure_pdf;
            $brochure_pdf_new_name = time() . '.' . $brochure_pdf->getClientOriginalExtension();
            $brochure_pdf->move(public_path('images/brochure_pdfs/'), $brochure_pdf_new_name);
            $property->brochure_pdf =$brochure_pdf_new_name;
            $property->save();
        }

        if($request->hasFile('floorplan_pdf')){
            $floorplan_pdf = $request->floorplan_pdf;
            $floorplan_pdf_new_name = time() . '.' . $floorplan_pdf->getClientOriginalExtension();
            $floorplan_pdf->move(public_path('images/floorplan_pdfs/'), $floorplan_pdf_new_name);
            $property->floorplan_pdf =$floorplan_pdf_new_name;
            $property->save();
        }

        

        Session::flash('success', 'Property created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        
        $this->validate($request, [
            'title' => "required",
        ]);
        
        $property->title = $request->title;
        $property->slug = Str::slug($request->title);
        $property->no_of_beds = $request->no_of_beds;
        $property->price = $request->price;
        $property->payment_construction = $request->payment_construction;
        $property->payment_handover = $request->payment_handover;
        $property->is_show = $request->has('is_show') ? 1 : 0;
        
        
        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->thumbnail_image;
            $thumbnail_image_new_name = time() . '.' . $thumbnail_image->getClientOriginalExtension();
            if(!empty($property->thumbnail_image)){
                unlink(public_path('images/thumbnail_images/'.$property->thumbnail_image));
            }
            
            $thumbnail_image->move(public_path('images/thumbnail_images/'), $thumbnail_image_new_name);
            $property->thumbnail_image = $thumbnail_image_new_name;
        }

        if($request->hasFile('carousel_image')){
            $carousel_image = $request->carousel_image;
            $carousel_image_new_name = time() . '.' . $carousel_image->getClientOriginalExtension();
            if(!empty($property->carousel_image)){
                unlink(public_path('images/carousel_images/'.$property->carousel_image));
            }
            $carousel_image->move(public_path('images/carousel_images/'), $carousel_image_new_name);
            $property->carousel_image = $carousel_image_new_name;
        }

        if($request->hasFile('carousel_image_mobile')){
            $carousel_image_mobile = $request->carousel_image_mobile;
            $carousel_image_mobile_new_name = time() . '.' . $carousel_image_mobile->getClientOriginalExtension();
            if(!empty($property->carousel_image_mobile)){
                unlink(public_path('images/carousel_image_mobiles/'.$property->carousel_image_mobile));
            }
            $carousel_image_mobile->move(public_path('images/carousel_image_mobiles/'), $carousel_image_mobile_new_name);
            $property->carousel_image_mobile = $carousel_image_mobile_new_name;
        }

        if($request->hasFile('preview_image')){
            $preview_image = $request->preview_image;
            $preview_image_new_name = time() . '.' . $preview_image->getClientOriginalExtension();
            if(!empty($property->preview_image)){
                unlink(public_path('images/preview_images/'.$property->preview_image));
            }
            $preview_image->move(public_path('images/preview_images/'), $preview_image_new_name);
            $property->preview_image = $preview_image_new_name;
        }

        if($request->hasFile('property_video')){
            $property_video = $request->property_video;
            $property_video_new_name = time() . '.' . $property_video->getClientOriginalExtension();
            if(!empty($property->property_video)){
                unlink(public_path('images/property_videos/'.$property->property_video));
            }
            $property_video->move(public_path('images/property_videos/'), $property_video_new_name);
            $property->property_video = $property_video_new_name;
        }
    
    
        if($request->hasFile('brochure_pdf')){
            
            $brochure_pdf = $request->brochure_pdf;
            $brochure_pdf_new_name = time() . '.' . $brochure_pdf->getClientOriginalExtension();
            if(!empty($property->brochure_pdf)){
                unlink(public_path('images/brochure_pdfs/'.$property->brochure_pdf));
            }
            $brochure_pdf->move(public_path('images/brochure_pdfs/'), $brochure_pdf_new_name);
            $property->brochure_pdf = $brochure_pdf_new_name;
        }
        
        

        if($request->hasFile('floorplan_pdf')){
            $floorplan_pdf = $request->floorplan_pdf;
            $floorplan_pdf_new_name = time() . '.' . $floorplan_pdf->getClientOriginalExtension();
            if(!empty($property->floorplan_pdf)){
                unlink(public_path('images/floorplan_pdfs/'.$property->floorplan_pdf));
            }
            $floorplan_pdf->move(public_path('images/floorplan_pdfs/'), $floorplan_pdf_new_name);
            $property->floorplan_pdf = $floorplan_pdf_new_name;
        }


        $property->description = $request->description;
        $property->short_description = $request->short_description;
        $property->meta_title = $request->meta_title;
        $property->meta_description = $request->meta_description;


        $property->save();


        Session::flash('success', 'Property updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        if($property){

            if(!empty($property->thumbnail_image)){unlink(public_path('images/thumbnail_images/'.$property->thumbnail_image));}
            if(!empty($property->carousel_image)){unlink(public_path('images/carousel_images/'.$property->carousel_image));}
            if(!empty($property->carousel_image_mobile)){unlink(public_path('images/carousel_image_mobiles/'.$property->carousel_image_mobile));}
            if(!empty($property->preview_image)){unlink(public_path('images/preview_images/'.$property->preview_image));}
            if(!empty($property->property_video)){unlink(public_path('images/property_videos/'.$property->property_video));}
            if(!empty($property->brochure_pdf)){unlink(public_path('images/brochure_pdfs/'.$property->brochure_pdf));}
            if(!empty($property->floorplan_pdf)){unlink(public_path('images/floorplan_pdfs/'.$property->floorplan_pdf));}

            $property->delete();

            Session::flash('success', 'Property deleted successfully');
            return redirect()->route('property.index');
        }
    }
}

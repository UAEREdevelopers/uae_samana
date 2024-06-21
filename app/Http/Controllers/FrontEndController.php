<?php

namespace App\Http\Controllers;

use Session;
use App\Property;
use App\Gallery;
use App\Amenity;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        $allProperties = Property::HomeProperty()->get();

        return view('website.home', compact([ 'allProperties']));
    }

    public function property($slug){

        $property = Property::where('slug', $slug)->first();
        
        $galleries = Gallery::where('property_id',$property->id)->get();
        
        $amenities = Amenity::where('property_id',$property->id)->get();

        return view('website.property', compact([ 'property', 'galleries', 'amenities']));
    }

    
   
    
   
    
    

   
}

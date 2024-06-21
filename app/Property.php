<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $guarded = ['id'];

    
    public function scopeHomeProperty($query)
    {
        $query->select(['id','title','slug','no_of_beds', 'price', 'short_description', 'thumbnail_image', 'is_show'])
        ->orderBy('created_at', 'asc')->take(6);
    } 


}

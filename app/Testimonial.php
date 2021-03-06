<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name','position', 'description', 'image',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

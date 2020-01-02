<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'price','category',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

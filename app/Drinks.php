<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
{
    protected $fillable = [
        'name','price', 'description', 'image',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

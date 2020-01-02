<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    protected $fillable = [
        'food_name','meal', 'description', 'image', 'price',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

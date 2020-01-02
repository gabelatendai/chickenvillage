<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    protected $fillable = [
        'name','about', 'description', 'address','pnumber', 'email','image',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

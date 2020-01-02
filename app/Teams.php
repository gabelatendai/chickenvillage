<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = [
        'name','role', 'pnumber', 'image',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
}

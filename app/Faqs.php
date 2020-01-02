<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    protected $fillable = [
       'faq',
    ];
    public function getImageAttribute($image)
    {
        return asset($image);
    }
    public function responds(){
        return $this->hasMany('App\Respond');
    }
}

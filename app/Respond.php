<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respond extends Model
{
    protected $fillable = [
        'faq_id','respond',
    ];
    public function faq(){
        return $this->belongsTo('App\Faqs');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    public function product(){
    	return $this->hasMany('App\Product', 'brand_id', 'id');
    }

    public function image(){
    	return $this->morphMany('App\Image', 'imageable');
    }
}

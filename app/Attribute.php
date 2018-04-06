<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    public function attribute_set(){
    	return $this->belongsTo('App\Attribute', 'attribute_set_id', 'id');
    }

    public function product(){
    	return $this->belongsToMany('App\Product', 'attribute_values', 'attribute_id', 'product_id');
    }

    public function image(){
    	return $this->hasMany('App\Image');
    }
}

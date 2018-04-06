<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_values';

    public function attribute(){
    	return $this->belongsTo('App\Attribute', 'attribute_id', 'id');
    }

    public function product(){
    	return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function image(){
        return $this->morphMany('App\Image', 'imageable');
    }
}

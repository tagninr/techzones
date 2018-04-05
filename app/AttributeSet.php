<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeSet extends Model
{
    protected $table = 'attribute_sets';

    public function category(){
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function attribute(){
    	return $this->hasMany('App\Attribute');
    }
}

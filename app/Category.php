<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function product(){
        return $this->hasMany('App\Product', 'category_id', 'id');
    }

    public function image(){
        return $this->morphMany('App\Image', 'imageable');
    }  
    
    public function category(){
    	return $this->hasOne('App\Category', 'parent_id', 'id');
    }  
}

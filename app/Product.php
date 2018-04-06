<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function brand(){
    	return $this->belongsTo('App\Brand', 'brand_id', 'id');
    }

    public function category(){
    	return $this->belongsTo('App\Category', 'category_id' 'id');
    }

    public function employees(){
    	return $this->belongsTo('App\Employees', 'employees_id' 'id');
    }

    // public function billdetail(){
    //     return $this->belongsTo('App\BillDetail', 'bill_details', 'product_id', 'bill_id');
    // }

    public function bill(){
        return $this->belongsToMany('App\Bill', 'bill_details', 'product_id', 'bill_id', );
    }
    
    public function image(){
        return $this->morphMany('App\Image', 'imageable');
    }

    public function attribute(){
    	return $this->belongsToMany('App\Attribute', 'attribute_values', 'attribute_id', 'product_id');
    }
}

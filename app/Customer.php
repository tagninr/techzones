<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function city(){
    	return $this->belongsTo('App\City', 'city_id', 'id');
    }

    public function bill(){
    	return $this->hasMany('App\Bill', 'customer_id', 'id');
    }
}

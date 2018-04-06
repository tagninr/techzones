<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    // public function customer(){
    // 	return $this->hasManyThrough('App\Customer', 'city_id', 'id');
    // }

    // //slide
    // public function bill(){
    // 	return $this->hasManyThrough('App\Customer');
    // }

    //document
    public function bill(){
    	return $this->hasManyThrough('App\Bill', 'App\Customer');
    }
}

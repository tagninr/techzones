<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';

    public function product(){
    	return $this->hasMany('App\Product', 'employees_id', 'id');
    }

    public function bill(){
    	return $this->hasMany('App\Bill', 'employees_id', 'id');
    }
}

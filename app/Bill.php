<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    public function customer(){
        return $this->belongsTo('App\Customer', 'customers_id', 'id');
    }

    public function employees(){
    	return $this->belongsTo('App\Employees', 'employees_id', 'id');
    }

    public function product(){
    	// return $this->hasMany('App\BillDetail', 'bill_id', 'id');
        return $this->belongsToMany('App\Product', 'bill_details', 'bill_id', 'product_id');
    }
}

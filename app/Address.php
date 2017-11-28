<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Address extends Model
{
    protected $fillable = [
    	'address1',
    	'address2',
    	'city',
    	'postal_code'
    ];

    public function order() {
    	return $this->hasMany(Order::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'cart_id',
        'address_id',
        'billing_address_id',
        'total',
        'payment_type'
    ];
}

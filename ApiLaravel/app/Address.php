<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    protected $fillable = [
        'address',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country',
        'zipcode'
    ];

}

<?php

namespace App\Models;

use
class Customer extends Model
{
    protected $table = "customers"

    public function data(){
        return $this->hasMany(CustomerData::class);
    }
}

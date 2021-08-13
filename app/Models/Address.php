<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table="address";
    public $timestamps = false;



    function Customer()
    {
        return $this->belongsTo(Customer::class,"customer_id","id");
    }
}

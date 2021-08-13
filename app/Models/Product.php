<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="product";

    public $timestamps = false;


    function Customer()
    {
        return $this->belongsToMany(Customer::class,"customer_product","product_id","customer_id");
    }
}

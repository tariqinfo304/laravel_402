<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";


    function getImage()
    {
        return $this->hasOne(Image::class,"customer_id","id");
    }


    function Address()
    {
        return $this->hasMany(Address::class,"customer_id","id");
    }


    function Product()
    {
        return $this->belongsToMany(Product::class,"customer_product","customer_id","product_id");
    }

}

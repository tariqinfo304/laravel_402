<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table="image";
    public $timestamps = false;


    function getCustomer()
    {
        return $this->belongsTo(Customer::class,"customer_id","id");
    }
}

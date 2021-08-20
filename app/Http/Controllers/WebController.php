<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        return view("website.home");
    }

    function shop()
    {
        return view("website.shop");
    }

    function product_detail()
    {
        return view("website.product_detail");
    }
}

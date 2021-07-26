<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get_name()
    {
        echo "Abc";
    }

    function name($nam=NULL)
    {
        echo $nam;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function first()
    {
        $name_value="First Lecture Related to View Content";

        $arr = [1,2,3,4,5];

        $show = true;

        $value = 10;

        $std = [
            [
                "name" => "Ali",
                "age" => 12,
                "class" => "9th"
            ],
            [
                "name" => "ramza",
                "age" => 12,
                "class" => "9th"
            ],
            [
                "name" => "imran",
                "age" => 112,
                "class" => "12th"
            ],
            [
                "name" => "Abc",
                "age" => 122,
                "class" => "9th"
            ]

        ];
        
        return view("first",[
                    
                    "name"=>$name_value,
                    "list" => $arr,
                    "is_show" => $show,
                    "value" =>$value,
                    "student" => $std

                    ]);
        //$res = view("first");
        //echo $res;
        //return view("web.index");
       // return view("web/index");
    }
}

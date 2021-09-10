<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    function version()
    {
        echo "v-1.0";
    }


    function call_api()
    {
        /*
        $response = Http::get('http://localhost/laravel_402/public/api/product');
        //dd($response->status());
        //dd($response->body());
       // dd($response->json());
       */


        /*
        $response = Http::post('http://localhost/laravel_402/public/api/create_product', [
            'name' => 'Steve',
            'price' => 23,
        ]);


        dd($response->json());
        */


    }


    function send_api_response($status,$data)
    {
        return response()->json(
            [
                "status"   => $status,
                "data"     => $data
            ]
        );
    }

    function product_listing($id=NULL)
    {
        $list = [];
        if(!empty($id))
        {
            $list  = Product::where("id",$id)->get();
        }
        else
        {
            $list  = Product::all();
        }

        
        return $this->send_api_response(200,$list);
    }


    function create_product(Request $req)
    {
        $error = [];

        if(empty($req->name))
        {
            $error["name"] = "Product name is required";
        }
        if(empty($req->price))
        {
            $error["price"] = "Product price is required";
        }


        if(empty($error))
        {
            $product = new Product();
            $product->name = $req->name;
            $product->price = $req->price;

            $is_save = $product->save();

            if($is_save)
            {
                return $this->send_api_response(200,$product);
            } 
            else
            {
                return $this->send_api_response(400,["message" => "Error on data saving"]);
            }
        }
        else
        {
            return $this->send_api_response(400,$error);
        }

    }
}

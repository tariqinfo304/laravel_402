<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryBuilderController extends Controller
{
    
    function crud()
    {
       // $list = DB::table("customer")->get();

        //$list = DB::table("customer")->select("name","id")->get();

        //$list = DB::table("customer")->select("name")->where("id","2")->get();

        //$list = DB::table("customer")->where("id",">","2")->get();

        //$list = DB::table("customer")->whereIn("name",["tariq","ali"])->get();

        //$list = DB::table("customer")->where("name","like","%a%")->get();

        //$list = DB::table("customer")->orderBy("name","ASC")->get();

        //$list = DB::table("customer")->limit(2)->skip(1)->get();




        //dd($list);


        //insert//

        /*DB::table("customer")->insert([
            "name" => "test",
            "salary" => 23234
        ]);
        */


        /*
        //update
        DB::table("customer")->where("id","5")->update([
            "name" => "test updated"
        ]);
        */

        /*

        //delete
        DB::table("customer")->where("id","5")->delete();
        */


        /*

        $list = DB::table("customer as c")
            ->join("address as ad","ad.customer_id","=","c.id")
            ->select("c.*","ad.address")
            ->get();

        dd($list);
        */

        $list = DB::table("customer as c")
                ->join("customer_product as cp","cp.customer_id","=","c.id")
                ->join("product as p","p.id","=","cp.product_id")
                ->select("c.name as customer_name","p.name as product_name","p.price")
                ->get();

        dd($list);



    }
}

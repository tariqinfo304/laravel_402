<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Product::all();
        return view("website/product_listing")->with("listing",$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("website/add_product");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            "name" => "required|min:5",
            "price" => "required|integer"
        ]);

        $p = new Product();
        $p->name = $request->input("name");
        $p->price = $request->input("price");
        $p->save();

        return redirect("web/products");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $is_view = "view";
        if(isset($request->delete))
        {
            $is_view = "delete";
        }

        $obj = Product::where("id",$id)->first();
        return view("website/add_product")->with("obj",$obj)
            ->with($is_view,1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::where("id",$id)->first();
        return view("website/add_product")->with("obj",$obj)
            ->with("edit",1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            "name" => "required|min:5",
            "price" => "required|integer"
        ]);
        
        $p = Product::where("id",$id)->first();
        $p->name = $request->input("name");
        $p->price = $request->input("price");
        $p->save();

        return redirect("web/products");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Product::where("id",$id)->first();
        $p->delete();
        return redirect("web/products");
    }
}

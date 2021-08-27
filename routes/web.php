<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/' , function () 
                            {
                                echo "Laravel First Lecture about Route";
                            } 
);

Route::get("test",function(){ echo "Test Route";});


//One Route Parameters
Route::get("student/{student_id}",function($std_id){ 

    echo "Delete Student Record # " . $std_id;

});

//Two Route Parameters
Route::get("student/{student_id}/{name}",function($std_id,$name){ 

    echo "Delete Student Record # " . $std_id . " Name : " . $name;

});


//Optional Route Parameters
//when you will put parameter as optional then you have to give default value to that // functional parametee

Route::get("get_book/{id?}",function($id=NULL){ 

    echo "Book Record " . $id;

});


Route::get("emp/{id}/dept/{name}/working",function($id,$name){
    echo "$id :: $name";
});


//Route Parameters Validation

Route::get("std/{id}",function($id){

    echo "$id";

})->where(["id" => "[0-9]{4}"]);

Route::get("std_name/{name}",function($name){

    echo "$name";

})->where(["name" => "[a-zA-Z]{4}"]);


Route::get("name/{name}",function($name){

    echo "$name";

})->where(["name" => "[a-zA-Z]+"]);

//Assignements
//Phone number validation e.g 0303-3445235
//CNIC validation e.g 35202-0340607-8
//Email validation e.g asdsa@gmail.com
//IP validation e.g 255.255.255.255




//////////Controller //

use App\Http\Controllers\TestController;

Route::get("name",[TestController::class,"get_name"]);
Route::get("name_param/{name?}",[TestController::class,"name"]);

use App\Http\Controllers\SingleController;

Route::get("single",SingleController::class);



//Model//
//Eloquent ORM => object relation mapper //

use App\Http\Controllers\ORMController;
Route::get("orm",[ORMController::class,"orm"]);
Route::get("orm_create",[ORMController::class,"create"]);

Route::get("orm_relation",[ORMController::class,"relation"]);


use App\Http\Controllers\ViewController;
Route::get("view",[ViewController::class,"first"]);


Route::get("layout",[ViewController::class,"layout"]);


use App\Http\Controllers\WebController;

Route::get("web",[WebController::class,"index"]);

Route::get("web/product",[WebController::class,"product_detail"]);


use App\Http\Controllers\ProductController;

//Route::resource("web/products",ProductController::class);
Route::get("web/shop",[WebController::class,"shop"]);


Route::middleware(['test'])->group(function () {
    
    Route::resource("web/products",ProductController::class);

});


// Route::get("web/products",[WebController::class,"shop"])
//     ->middleware("test");


Route::get("web/login",[WebController::class,"login"]);
Route::post("web/login",[WebController::class,"do_login"]);
Route::get("web/logout",[WebController::class,"logout"]);
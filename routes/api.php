<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


use App\Http\Controllers\APIController;

Route::get("version",[APIController::class,"version"]);

Route::get("product/{id?}",[APIController::class,"product_listing"]);

Route::post("create_product",[APIController::class,"create_product"]);


Route::get("api_call",[APIController::class,"call_api"]);



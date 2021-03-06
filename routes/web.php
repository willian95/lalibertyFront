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

/*Route::get('/', function () {
    return view('coming');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/fetch-content/{page}/{isMob}", "HomeController@fetchContent");

Route::get("/shop", "ShopController@index");

Route::get("/products/fetch", "ProductController@fetch");
Route::get("/products/color/size/{product_color_size}", "ProductController@checkColorSize");

Route::get("works", "WorkController@index");
Route::get("work/{slug}", "WorkController@show");

Route::get("fashion-merch", "FashionMerchController@index");
Route::get("fashion-merch/{slug}", "FashionMerchController@show");

Route::get("about", "AboutController@index");

Route::get("blog", "BlogController@index");
Route::get("blog/{slug}", "BlogController@show");

Route::get("payment", "PaymentController@payment");
Route::post("payment/confirmation", "PaymentController@confirmation");
Route::get("payment/response", "PaymentController@response");
Route::post("/payment/status", "PaymentController@status");
Route::post("/getSignature", "PaymentController@getSign");
Route::post("/payment/store","PaymentController@store");
Route::post("/payment/check", "PaymentController@paymenntCheckAndProcess");

Route::post("checkout", "PaymentController@checkout");

Route::get("/departments", "DepartmentController@fetch");
Route::get("/municipalities/{department_id}", "MunicipalityController@fetch");



Route::get('/offline', function () {    
    return view('offline');
});

//Route::get("/ping", "PaymentController@ping");

//Route::get("/ping", "")

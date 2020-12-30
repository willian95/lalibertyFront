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

Route::get('/', function () {
    return view('coming');
});

Route::get('/front-test', function () {
    return view('welcome');
});

Route::get("/shop", "ShopController@index");

Route::get("/products/fetch", "ProductController@fetch");

Route::get("works", "WorkController@index");

Route::get("about", "AboutController@index");

Route::get("blog", "BlogController@index");

Route::get("fashion-merch", "FashionMerchController@index");

//Route::get("/ping", "PaymentController@ping");

//Route::get("/ping", "")

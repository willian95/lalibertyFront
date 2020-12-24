<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function fetch(){

        return response()->json(["products" => Product::all()]);

    }

}

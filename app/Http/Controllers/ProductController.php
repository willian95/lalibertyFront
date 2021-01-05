<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductColorSize;

class ProductController extends Controller
{
    function fetch(){

        return response()->json(["products" => Product::all()]);

    }

    function checkColorSize($product_color_size){

        $product = ProductColorSize::find($product_color_size);
        if($product != null){
            return response()->json(["success" => true, "product" => $product]);
        }else{
            return response()->json(["success" => false]);
        }
        

    }

}

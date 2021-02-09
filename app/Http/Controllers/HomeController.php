<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeOrder;

class HomeController extends Controller
{
    function fetchContent($page){

        $dataAmount = 4;
        $skip = ($page-1) * $dataAmount; 

        $content = HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "productImage.product", "blog")->orderBy("order")->skip($skip)->take($dataAmount)->get();

        return response()->json(["content" => $content]);

    }
}

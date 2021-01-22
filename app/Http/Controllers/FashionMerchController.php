<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class FashionMerchController extends Controller
{
    function index(){
        $fashionMerch = Work::where("is_fashion_merch", 1)->paginate(10);
        return view("fashionMerchList", ["fashionMerch" => $fashionMerch]);
    }

    function show($slug){

        $fashionMerch = Work::where("slug", $slug)->first();
        return view("fashionMerch", ["fashionMerch" => $fashionMerch]);

    }
}

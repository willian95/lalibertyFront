<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionMerchController extends Controller
{
    function index(){
        return view("fashionMerch");
    }
}

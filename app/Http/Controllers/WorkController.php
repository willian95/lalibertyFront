<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{

    function index(){
        $works = Work::where("is_fashion_merch", 0)->paginate(5);
        return view("worksList", ["works" => $works]);
    }

    function show($slug){

        $work = Work::where("slug", $slug)->first();
        return view("work", ["work" => $work]);

    }

}

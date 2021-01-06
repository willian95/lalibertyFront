<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    function index(){

        return view("blog");

    }

    function show($slug){

        try{

            $blog = Blog::where("slug", $slug)->firstOrFail();
            return view("single", ["blog" => $blog]);

        }catch(\Exception $e){
            abort(404);
        }


    }
}

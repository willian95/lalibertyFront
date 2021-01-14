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
            $metas = "<meta property='og:title' content='".$blog->title."' />
            <meta property='og:type' content='article' />
            <meta property='og:url' content='".url()->current()."' />
            <meta property='og:image' content='".$blog->image."' />
            <meta property='og:description' content='".substr($blog->description, 0, 60)."' />";

            return view("single", ["blog" => $blog, "metas" => $metas]);

        }catch(\Exception $e){
            abort(404);
        }


    }
}

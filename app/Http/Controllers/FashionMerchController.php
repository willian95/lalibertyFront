<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class FashionMerchController extends Controller
{
    function index(Request $request){

        if($request->has("work")){
            
            $workId = Work::where("slug", $request->work)->first();
            $works = Work::where("is_fashion_merch", 1)->get();
            $index = 0;
            $workIndex = 0;
            foreach($works as $work){

                if($workId->id == $work->id){
                    $workIndex = $index;
                }
                $index++;
            }


            return view("fashionMerch", ["workIndex" => $workIndex]);
            

        }else{
            return view("fashionMerch");
        }

    }
}
